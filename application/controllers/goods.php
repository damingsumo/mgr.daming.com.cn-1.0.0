<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goods extends MY_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('brand/goods_model');
        $this->load->model('brand_model');
        $this->load->model('brand/goods/size_model');
        $this->load->model('brand/goods/model_model');
        $this->load->model('genre_model');
        $this->load->model('brand/relevance_model');
        $this->load->model('brand/goods_model');
        $this->load->library('pager');
        $this->checkLogin();
    }
    public function goAdd() {
        $brandId = isset($_GET['brand_id']) ? $_GET['brand_id'] : 0;
        if($brandId <= 0 ) {
            return $this->error('品牌ID错误');
        }
        return $this->display('brand/goods/add', array('brandId'=>$brandId,'_SESSION'=>$_SESSION));
    }
    
    
    public function goodsList() {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $pageSize = isset($_GET['pageSize']) ? $_GET['pageSize'] : 20;
        $brandId = isset($_GET['brand_id']) ? $_GET['brand_id'] : 0;
        $value = isset($_GET['value']) ? trim($_GET['value']) : '';
        if($brandId <= 0) {
            return $this->error('品牌错误');
        }
        
        $params = array();
        $params['brand_id'] = $brandId;
        if($value != '') {
            $params['value'] = $value;
        }
        $goodss = array();
        $total = $this->goods_model->getGoodsCountByParams($params);
        if($total > 0) {
            $goodss = $this->goods_model->getGoodsByParams($params, $page, $pageSize);
        }
        foreach ($goodss as &$goods) {
            $goods['genre'] = $this->genre_model->row('*', $goods['genre_id']);
        }
        $params['total'] = $total;
        $params['goodss'] = $goodss;
        $params['page'] = $page;
        $params['pageSize'] = $pageSize;
        $params['_SESSION'] =$_SESSION;
        $params['pager'] = new pager($total, $page,$pageSize);
        return $this->display('brand/goods/list', $params);
    }
    
    
    public function add() {
        $brandId = isset($_POST['brand_id']) ? $_POST['brand_id'] : 0;
        $goodsName = isset($_POST['name']) ? $_POST['name'] : '';
        $category = isset($_POST['category']) ? $_POST['category'] : 0;
        $genre = isset($_POST['genre']) ? $_POST['genre'] : 0;
        $styleNumber = isset($_POST['style_number']) ? $_POST['style_number'] : '';
        $price = isset($_POST['price']) ? $_POST['price'] : 0;
        $oldPrice = isset($_POST['old_price']) ? $_POST['old_price'] : 0;
        $sizes = isset($_POST['size']) ? $_POST['size'] : array();
        $kummerbund = isset($_POST['kummerbund']) ? $_POST['kummerbund'] : array();
        $bust = isset($_POST['bust']) ? $_POST['bust'] : array();
        $hipline = isset($_POST['hipline']) ? $_POST['hipline'] : array();
        $thighGirth = isset($_POST['thigh_girth']) ? $_POST['thigh_girth'] : array();
        $kneeCircumference = isset($_POST['knee_circumference']) ? $_POST['knee_circumference'] : array();
        $outseam = isset($_POST['outseam']) ? $_POST['outseam'] : array();
        $sWidth = isset($_POST['s_width']) ? $_POST['s_width'] : array();
        $length = isset($_POST['length']) ? $_POST['length'] : array();
        $sleeveWidth = isset($_POST['sleeve_width']) ? $_POST['sleeve_width'] : array();
        if($brandId <= 0) {
            return $this->error('品牌ID错误');
        }
        $brand = $this->brand_model->row('*', $brandId);
        if(empty($brand)) {
            return $this->error('未找到该品牌信息');
        }
        
        if($goodsName == '') {
            return $this->error('请输入商品名');
        }
        if($category <= 0) {
            return $this->error('商品 类别错误');
        }
        if($genre <= 0) {
            return $this->error('商品款式错误');
        }
        if($styleNumber == '') {
            return $this->error('商品 型号错误');
        }
        if($price <= 0) {
            return $this->error('商品 价格错误');
        }
        if($oldPrice <= 0) {
            return $this->error('商品原价错误');
        }
        
        $config['file_name'] = date('Y-m-d-H-i-s');
        $config['upload_path'] = './imgs/brand/goods/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = "2000";
        $this->load->library('upload', $config);
        $this->upload->do_upload('picture_url');
        if($this->upload->display_errors()) {
            return $this->error('添加图片失败');
        }
        $datac = $this->upload->data();
        
        //添加品牌的分类
        $reles = array();
        $reles = $this->relevance_model->getRelesByParams(array('statusArray'=>array(1,2), 'brand_id'=>$brand['brand_id'], 'genre_id'=>$genre));
        if(empty($reles)) {
            $data = array();
            $data['genre_id'] = $genre;
            $data['brand_id'] = $brand['brand_id'];
            $data['brand_name'] = $brand['name'];
            $data['status'] = 1;
            $data['create_time'] = date('Y-m-d H:i:s');
            $data['update_time'] = date('Y-m-d H:i:s');
            $relevanceId = $this->relevance_model->add($data);
            if(!$relevanceId) {
                return $this->error('关联品牌失败');
            }
        }else {
            $reles = current($reles);
            $relevanceId = $reles['brand_genre_relevance_id'];
        }
        //添加商品
        $params = array();
        $params['brand_id'] = $brandId;
        $params['brand_name'] = $brand['name'];
        $params['goods_name'] = $goodsName;
        $params['genre_id'] = $genre;
        $params['style_number'] = $styleNumber;
        $params['material'] = isset($_POST['material']) ? $_POST['material'] : '';
        $params['price'] = $price*100;
        $params['old_price'] = $oldPrice*100;
        $params['reduce_money'] = $oldPrice*100 - $oldPrice*100;
        $params['status'] = isset($_POST['status']) ? $_POST['status'] : 1;
        $params['sales'] = isset($_POST['sales']) ? $_POST['sales'] : 0;
        $params['picture_url'] = '/imgs/brand/goods/'.$datac['file_name'];;
        $params['picture_source'] = isset($_POST['picture_source']) ? $_POST['picture_source'] : '';
        $params['create_time'] = date('Y-m-d H:i:s');
        $params['update_time'] = date('Y-m-d H:i:s');
        $gid = $this->goods_model->add($params);
        if($gid === false) {
            return $this->error('商品添加失败');
        }
        
        //添加尺寸
        foreach ($sizes as $k=>$v) {
            if($v == ''||$v <= 0 ) {
                continue;
            }
            $params = array();
            $params['gid'] =$gid;
            $params['size'] = isset($sizes[$k]) ? $sizes[$k] : 1;
            $params['kummerbund'] = isset($kummerbund[$k]) ? $kummerbund[$k] : 0;
            $params['bust'] = isset($bust[$k]) ? $bust[$k] : 0;
            $params['hipline'] = isset($hipline[$k]) ? $hipline[$k] : 0;
            $params['thigh_girth'] = isset($thighGirth[$k]) ? $thighGirth[$k] : 0;
            $params['knee_circumference'] = isset($kneeCircumference[$k]) ? $kneeCircumference[$k] : 0;
            $params['outseam'] = isset($outseam[$k]) ? $outseam[$k] : 0;
            $params['s_width'] = isset($sWidth[$k]) ? $sWidth[$k] : 0;
            $params['length'] = isset($length[$k]) ? $length[$k] : 0;
            $params['sleeve_width'] = isset($sleeveWidth[$k]) ? $sleeveWidth[$k] : 0;
            $params['create_time'] = date('Y-m-d H:i:s');
            $params['update_time'] = date('Y-m-d H:i:s');
            $res = $this->size_model->add($params);
            if($res === false) {
                return $this->error('添加失败');
            }
        }
        
        return $this->success('添加成功', '/goods/detail?gid='.$gid);
    }
    
    public function edit() {
        if(empty($_POST)) {
            $gid = isset($_GET['gid']) ? $_GET['gid'] : 0;
            if($gid <= 0) {
                $this->error('商品  ID错误');
            }
            $goods = array();
            $sizes = array();
            $goods = $this->goods_model->row('*', $gid);
            $sizes = $this->size_model->getSizesByParams(array('gid'=>$gid));
            $relevance = $this->relevance_model->row('*', $goods['brand_genre_relevance_id']);
            $checkGenre = $this->genre_model->row('*', $relevance['genre_id']);
            
            $genres = array();
            $genres = $this->genre_model->getGenresByParams(array('category'=>$checkGenre['category']));
            $genresStr = '';
            foreach($genres as $genre) {
                if($genre['genre_id'] == $checkGenre['genre_id']) {
                    $genresStr .= "<option value=" . $genre['genre_id'] . " selected>"  . $genre['name'] . "</option>";
                }else{
                    $genresStr .= "<option value=" . $genre['genre_id'] . " >" . $genre['name'] . "</option>";
                }
            }
            
            $params = array();
            $params['goods'] = $goods;
            $params['sizes'] = $sizes;
            $params['genresStr'] = $genresStr;
            $params['genre'] = $checkGenre;
            $params['_SESSION'] =$_SESSION;
            return $this->display('brand/goods/edit', $params);
        }
        $brandId = isset($_POST['brand_id']) ? $_POST['brand_id'] : 0;
        $goodsName = isset($_POST['name']) ? $_POST['name'] : '';
        $gid = isset($_POST['gid']) ? $_POST['gid'] : 0;
        $category = isset($_POST['category']) ? $_POST['category'] : 0;
        $genre = isset($_POST['genre']) ? $_POST['genre'] : 0;
        $styleNumber = isset($_POST['style_number']) ? $_POST['style_number'] : '';
        $price = isset($_POST['price']) ? $_POST['price'] : 0;
        $oldPrice = isset($_POST['old_price']) ? $_POST['old_price'] : 0;
        $sizes = isset($_POST['size']) ? $_POST['size'] : array();
        $kummerbund = isset($_POST['kummerbund']) ? $_POST['kummerbund'] : array();
        $bust = isset($_POST['bust']) ? $_POST['bust'] : array();
        $hipline = isset($_POST['hipline']) ? $_POST['hipline'] : array();
        $thighGirth = isset($_POST['thigh_girth']) ? $_POST['thigh_girth'] : array();
        $kneeCircumference = isset($_POST['knee_circumference']) ? $_POST['knee_circumference'] : array();
        $outseam = isset($_POST['outseam']) ? $_POST['outseam'] : array();
        $sWidth = isset($_POST['s_width']) ? $_POST['s_width'] : array();
        $length = isset($_POST['length']) ? $_POST['length'] : array();
        $sleeveWidth = isset($_POST['sleeve_width']) ? $_POST['sleeve_width'] : array();
        if($gid <= 0) {
            $this->error('商品  ID错误');
        }
        if($goodsName == '') {
            return $this->error('请输入商品名');
        }
        if($category <= 0) {
            return $this->error('商品 类别错误');
        }
        if($genre <= 0) {
            return $this->error('商品款式错误');
        }
        if($styleNumber == '') {
            return $this->error('商品 型号错误');
        }
        if($price <= 0) {
            return $this->error('商品 价格错误');
        }
        if($oldPrice <= 0) {
            return $this->error('商品原价错误');
        }
        $res = $this->size_model->delete(array('gid'=>$gid));
        if($res === false) {
            return $this->error('删除失败');
        }
        $brand = $this->brand_model->row('*', $brandId);
        if(empty($brand)) {
            return $this->error('未找到该品牌信息');
        }
        //添加品牌的分类
        $reles = array();
        $reles = $this->relevance_model->getRelesByParams(array('statusArray'=>array(1,2), 'brand_id'=>$brand['brand_id'], 'genre_id'=>$genre));
        if(empty($reles)) {
            $data = array();
            $data['genre_id'] = $genre;
            $data['brand_id'] = $brand['brand_id'];
            $data['brand_name'] = $brand['name'];
            $data['status'] = 1;
            $data['create_time'] = date('Y-m-d H:i:s');
            $data['update_time'] = date('Y-m-d H:i:s');
            $relevanceId = $this->relevance_model->add($data);
            if(!$relevanceId) {
                return $this->error('关联品牌失败');
            }
        }else {
            $reles = current($reles);
            $relevanceId = $reles['brand_genre_relevance_id'];
        }
        
        //添加商品
        $params = array();
        $params['goods_name'] = $goodsName;
        $params['genre_id'] = $genre;
        $params['style_number'] = $styleNumber;
        $params['material'] = isset($_POST['material']) ? $_POST['material'] : '';
        $params['price'] = $price*100;
        $params['old_price'] = $oldPrice*100;
        $params['reduce_money'] = $oldPrice*100 - $oldPrice*100;
        $params['update_time'] = date('Y-m-d H:i:s');
        $gid = $this->goods_model->add($params);
        if($gid === false) {
            return $this->error('商品添加失败');
        }
        foreach ($sizes as $k=>$v) {
            if($v == ''||$v <= 0 ) {
                continue;
            }
            $params = array();
            $params['gid'] =$gid;
            $params['size'] = isset($sizes[$k]) ? $sizes[$k] : 1;
            $params['kummerbund'] = isset($kummerbund[$k]) ? $kummerbund[$k] : 0;
            $params['bust'] = isset($bust[$k]) ? $bust[$k] : 0;
            $params['hipline'] = isset($hipline[$k]) ? $hipline[$k] : 0;
            $params['thigh_girth'] = isset($thighGirth[$k]) ? $thighGirth[$k] : 0;
            $params['knee_circumference'] = isset($kneeCircumference[$k]) ? $kneeCircumference[$k] : 0;
            $params['outseam'] = isset($outseam[$k]) ? $outseam[$k] : 0;
            $params['s_width'] = isset($sWidth[$k]) ? $sWidth[$k] : 0;
            $params['length'] = isset($length[$k]) ? $length[$k] : 0;
            $params['sleeve_width'] = isset($sleeveWidth[$k]) ? $sleeveWidth[$k] : 0;
            $params['create_time'] = date('Y-m-d H:i:s');
            $params['update_time'] = date('Y-m-d H:i:s');
            $res = $this->size_model->add($params);
            if($res === false) {
                return $this->error('添加失败');
            }
        }
        
        return $this->success('修改成功', '/goods/detail?gid='.$gid);
        
    }
    
    public function detail() {
        $gid = isset($_GET['gid']) ? $_GET['gid'] : 0;
        if($gid <= 0) {
            return $this->error('商品ID错误');
        }
        $goods = array();
        $sizes = array();
        $goods = $this->goods_model->row('*', $gid);
        $sizes = $this->size_model->getSizesByParams(array('gid'=>$gid));
        $params = array();
        $params['genre'] = $this->genre_model->row('*', $goods['genre_id']);
        $params['goods'] = $goods;
        $params['sizes'] = $sizes;
        $params['_SESSION'] =$_SESSION;
        return $this->display('brand/goods/detail', $params);
    }
    
    
    
    public function enabled() {
    
        $gids = isset($_POST['gids']) ? trim($_POST['gids'], ',') : '';
        if($gids == '') {
            return $this->ajaxError('商品ID错误');
        }
    
        $gids = explode(',', $gids);
        foreach($gids as $gid) {
            if($gid <= 0) {
                return $this->ajaxError('商品ID错误');
            }
             
            $res = $this->goods_model->edit(array('status'=>1), $gid);
            if($res === false) {
                return $this->ajaxError('商品上架失败');
            }
        }
    
        return $this->ajaxSuccess('商品上架成功');
    }
    
    
    public function disable() {
    
        $gids = isset($_POST['gids']) ? trim($_POST['gids'], ',') : '';
        if($gids == '') {
            return $this->ajaxError('商品ID错误');
        }
    
        $gids = explode(',', $gids);
        foreach($gids as $gid) {
            if($gid <= 0) {
                return $this->ajaxError('商品ID错误');
            }
             
            $res = $this->goods_model->edit(array('status'=>2), $gid);
            if($res === false) {
                return $this->ajaxError('商品下架失败');
            }
        }
    
        return $this->ajaxSuccess('商品下架成功');
    }
    
    public function goodsModelAdd() {
        $gid = isset($_REQUEST['gid']) ? $_REQUEST['gid'] : 0;
        if(empty($_POST)) {
            $modelSizes = $this->model_model->getSizeByParams(array('gid'=>$gid, 'size_type'=>1));
            $params = array();
            $params['modelSizes'] = $modelSizes;
            $params['_SESSION'] =$_SESSION;
            return $this->display('brand/goods/modelsize', $params);
        }
        print_r($_POST);exit;
        $height = isset($_POST['height']) ? $_POST['height'] : array();
        $weight = isset($_POST['weight']) ? $_POST['weight'] : array();
        $thighGirth = isset($_POST['thigh_girth']) ? $_POST['thigh_girth'] : array();
        $sWidth = isset($_POST['s_width']) ? $_POST['s_width'] : array();
        $armCircumference = isset($_POST['arm_circumference']) ? $_POST['arm_circumference'] : array();
        $armLength = isset($_POST['arm_length']) ? $_POST['arm_length'] : array();
        $longLegs = isset($_POST['long_legs']) ? $_POST['long_legs'] : array();
        $bodyLength = isset($_POST['body_length']) ? $_POST['body_length'] : array();
        $calfGirth = isset($_POST['calf_girth']) ? $_POST['calf_girth'] : array();
        $kummerbund = isset($_POST['kummerbund']) ? $_POST['kummerbund'] : array();
        $hipline = isset($_POST['hipline']) ? $_POST['hipline'] : array();
        $size = isset($_POST['size']) ? $_POST['size'] : array();
        $sizeType = isset($_POST['size_type']) ? $_POST['size_type'] : 1;
        $res = $this->model_model->delete(array('gid'=>$gid, 'size_type'=>1));
        if(!$res) {
            return $this->error('删除模特数据失败');
        }
        foreach($height as $k=>$val) {
            if($val == '' || $val <= 0 || $weight[$k] <= 0 || $weight[$k]='' ) {
                continue;
            }
            $data = array();
            $data['gid'] = $gid[$k];
            $data['height'] = $height[$k];
            $data['weight'] = $weight[$k];
            $data['thigh_girth'] = $thighGirth[$k];
            $data['s_width'] = $sWidth[$k];
            $data['arm_circumference'] = $armCircumference[$k];
            $data['arm_length'] = $armLength[$k];
            $data['long_legs'] = $longLegs[$k];
            $data['body_length'] = $bodyLength[$k];
            $data['calf_girth'] = $calfGirth[$k];
            $data['kummerbund'] = $kummerbund[$k];
            $data['hipline'] = $hipline[$k];
            $data['size'] = $size[$k];
            $data['size_type'] = $sizeType;
            $data['create_time'] = date('Y-m-d H:i:s');
            $data['update_time'] = date('Y-m-d H:i:s');
            $modelSizeId = $this->model_model->add($data);
            if(!$modelSizeId) {
                return $this->error('添加模特数据失败');
            }
        }
        return $this->success('添加模特数据成功','/goods/goodsModelAdd');
    }
    
    
    
}