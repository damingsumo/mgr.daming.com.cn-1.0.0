<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends MY_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('brand_model');
        $this->load->model('brand/goods_model');
        $this->load->model('brand/size_model');
        $this->load->library('pager');
        $this->checkLogin();
    }
    
    
    public function goAdd() {
        $params = array();
        $params['_SESSION'] =$_SESSION;
        return $this->display('brand/add', $params);
    }
    
    
    public function brandList() {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $pageSize = isset($_GET['pageSize']) ? $_GET['PageSize'] : 20;
        $value = isset($_GET['value']) ? trim($_GET['value']) : '';
        $params = array();
        if($value != '') {
            $params['value'] = $value;
        }
        $total = $this->brand_model->getBrandsCountByParams($params);
        $brands = array();
        if($total > 0) {
            $brands = $this->brand_model->getBrandsByParams($params, $page, $pageSize);
        }
        foreach ($brands as &$brand) {
            $goodsTotal = $this->goods_model->getGoodsCountByParams(array('brand_id'=>$brand['brand_id']));
            $brand['goodsTotal'] = $goodsTotal;
        }
        $params['brands'] = $brands;
        $params['total'] = $total;
        $params['page'] = $page;
        $params['pageSize'] = $pageSize;
        $params['_SESSION'] =$_SESSION;
        $params['pager'] = new pager($total, $page,$pageSize);
        return $this->display('brand/list', $params);
    }
    
    public function add() {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        if($name == '') {
            return $this->error('请输入品牌名');
        }
        $region = isset($_POST['region']) ? $_POST['region'] : 0;
        if($region == 0) {
            return $this->error('请输入品牌地区');
        }
        
        $data = $this->sendPicture(array('file_name'=>date('Y-m-d-H-i-s'), 'name'=>'picture_url', 'upload_path'=>'./imgs/brand/'));
        if(empty($data)) {
            return $this->error('添加图片失败');
        }
        $params = array();
        $params['name'] = $name;
        $params['region'] = $region;
        $params['note'] = isset($_POST['note']) ? $_POST['note'] : '';
        $params['status'] = isset($_POST['status']) ? $_POST['status'] : 1;
        $params['picture_url'] = 'http://dev.mgr.daming.com.cn/imgs/brand/'.$data['file_name'];
        $params['path'] = $data['full_path'];
        $params['create_time'] = date('Y-m-d H:i:s');
        $params['update_time'] = date('Y-m-d H:i:s');
        $brandId = $this->brand_model->add($params);
        if($brandId === false) {
            return $this->error('添加失败');
        }
        return $this->success('添加成功', '/brand/detail?brand_id='.$brandId);
    }
    
    
    public function edit() {
        $brandId = isset($_REQUEST['brand_id']) ? $_REQUEST['brand_id'] : 0;
        if($brandId <= 0) {
            return $this->error('该品牌不存在');
        }
        $brand = $this->brand_model->row('*', $brandId);
        if(empty($brand)) {
            return $this->error('未找到品牌的信息');
        }
        if(empty($_POST)) {
            $params = array();
            $params['brand'] = $brand;
            $params['_SESSION'] =$_SESSION;
            return $this->display('brand/edit', $params);
        }
        if(isset($brand['path']) && $brand['path'] != "") {
            unlink($brand['path']);
        }
        $data = $this->sendPicture(array('file_name'=>date('Y-m-d-H-i-s'), 'name'=>'picture_url', 'upload_path'=>'./imgs/brand/'));
        if(empty($data)) {
            return $this->error('添加图片失败');
        }
        $params['region'] = isset($_POST['region']) ? $_POST['region'] : 2;
        $params['note'] = isset($_POST['note']) ? $_POST['note'] : '';
        $params['picture_url'] = '/imgs/brand/'.$data['file_name'];
        $params['path'] = $data['full_path'];
        $params['update_time'] = date('Y-m-d H:i:s');
        $res = $this->brand_model->edit($params, $brandId);
        if($res === false) {
            return $this->error('修改失败');
        }
        return $this->success('修改成功','/brand/detail?brand_id='.$brandId);
    }
    
    
    public function detail() {
        $brandId = isset($_GET['brand_id']) ? $_GET['brand_id'] : 0;
        if($brandId <= 0) {
            return $this->error('改品牌不存在');
        }
        $brand = $this->brand_model->row('*',$brandId);
        if(empty($brand)) {
            return $this->error('未找到品牌');
        }
        $params =array();
        $params['_SESSION'] =$_SESSION;
        $params['brand'] = $brand;
        return $this->display('brand/detail',$params);
    }
    
    public function enabled() {
        
        $brandIds = isset($_POST['brandIds']) ? trim($_POST['brandIds'], ',') : '';
        if($brandIds == '') {
            return $this->ajaxError('品牌ID错误');
        }
        
        $brandIds = explode(',', $brandIds);
        foreach($brandIds as $brandId) {
            if($brandId <= 0) {
                return $this->ajaxError('卡种ID错误');
            }
            	
            $res = $this->brand_model->edit(array('status'=>1), $brandId);
            if($res === false) {
                return $this->ajaxError('启用品牌失败');
            }
        }
        
        return $this->ajaxSuccess('启用品牌成功');
    }
    
    
    public function disable() {
    
        $brandIds = isset($_POST['brandIds']) ? trim($_POST['brandIds'], ',') : '';
        if($brandIds == '') {
            return $this->ajaxError('品牌ID错误');
        }
    
        $brandIds = explode(',', $brandIds);
        foreach($brandIds as $brandId) {
            if($brandId <= 0) {
                return $this->ajaxError('卡种ID错误');
            }
             
            $res = $this->brand_model->edit(array('status'=>2), $brandId);
            if($res === false) {
                return $this->ajaxError('禁用品牌失败');
            }
        }
    
        return $this->ajaxSuccess('禁用品牌成功');
    }
    
    
    public function brandSizeAdd() {
        $brandId = isset($_REQUEST['brand_id']) ? $_REQUEST['brand_id'] : 8;
        if($brandId <= 0) {
            return $this->error('品牌ID错误');
        }
        if(empty($_POST)) {
            $brandSizes = array();
            $brandSizes = $this->size_model->getSizeByParams(array('brand_id'=>$brandId, 'size_type'=>1));
            $params = array();
            $params['brandSizes'] = $brandSizes;
            $params['_SESSION'] =$_SESSION;
            return $this->display('brand/size', $params);
        }
        $height = isset($_POST['height']) ? $_POST['height'] : array();
        $weight = isset($_POST['weight']) ? $_POST['weight'] : array();
        $size = isset($_POST['size']) ? $_POST['size'] : array();
        $startBust = isset($_POST['start_bust']) ? $_POST['start_bust'] : array();
        $endBust = isset($_POST['end_bust']) ? $_POST['end_bust'] : array();
        $startKummerbund = isset($_POST['start_kummerbund']) ? $_POST['start_kummerbund'] : array();
        $endKummerbund = isset($_POST['end_kummerbund']) ? $_POST['end_kummerbund'] : array();
        $startHeight = isset($_POST['start_height']) ? $_POST['start_height'] : array();
        $endHeight = isset($_POST['end_height']) ? $_POST['end_height'] : array();
        $startWeight = isset($_POST['start_weight']) ? $_POST['start_weight'] : array();
        $endWeight = isset($_POST['end_weight']) ? $_POST['end_weight'] : array();
        $startSWidth = isset($_POST['start_s_width']) ? $_POST['start_s_width'] : array();
        $endSWidth = isset($_POST['end_s_width']) ? $_POST['end_s_width'] : array();
        $startLength = isset($_POST['start_length']) ? $_POST['start_length'] : array();
        $endLength = isset($_POST['end_length']) ? $_POST['end_length'] : array();
        $res = $this->size_model->delete(array('brand_id'=>$brandId,'size_type'=>1));
        if($res === false) {
            return $this->error('删除品牌对照表失败');
        }
        
        foreach($height as $k=>$val) {
            if($val == '' || $val <= 0 || $weight[$k] <= 0 || $weight[$k]='' ) {
                continue;
            }
            $data = array();
            $data['brand_id'] = $brandId;
            $data['size_type'] = isset($_POST['size_type']) ? $_POST['size_type'] : 1;
            $data['height'] = $val;
            $data['weight'] = $weight[$k];
            $data['size'] = $size[$k];
            $data['start_bust'] = $startBust[$k];
            $data['end_bust'] = $endBust[$k];
            $data['start_kummerbund'] = $startKummerbund[$k];
            $data['end_kummerbund'] = $endKummerbund[$k];
            $data['start_height'] = $startHeight[$k];
            $data['end_height'] = $endHeight[$k];
            $data['start_weight'] = $startWeight[$k];
            $data['end_weight'] = $endWeight[$k];
            $data['start_s_width'] = $startSWidth[$k];
            $data['end_s_width'] = $endSWidth[$k];
            $data['start_length'] = $startLength[$k];
            $data['end_length'] = $endLength[$k];
            $data['create_time'] = date('Y-m-d H:i:s');
            $data['update_time'] = date('Y-m-d H:i:s');
            $brandsizeId = $this->size_model->add($data);
            if(!$brandsizeId) {
                return $this->error('添加失败');
            }
        }
        return $this->success('修改成功','/brand/brandSizeAdd');
    }
    
    public function brandNumSizeAdd() {
        $brandId = isset($_REQUEST['brand_id']) ? $_REQUEST['brand_id'] : 8;
        if($brandId <= 0) {
            return $this->error('品牌ID错误');
        }
        if(empty($_POST)) {
            $brandSizes = array();
            $brandSizes = $this->size_model->getSizeByParams(array('brand_id'=>$brandId, 'size_type'=>2));
            $params = array();
            $params['brandSizes'] = $brandSizes;
            $params['_SESSION'] =$_SESSION;
            return $this->display('brand/numsize', $params);
        }
        $height = isset($_POST['height']) ? $_POST['height'] : array();
        $weight = isset($_POST['weight']) ? $_POST['weight'] : array();
        $size = isset($_POST['size']) ? $_POST['size'] : array();
        $startBust = isset($_POST['start_bust']) ? $_POST['start_bust'] : array();
        $endBust = isset($_POST['end_bust']) ? $_POST['end_bust'] : array();
        $startKummerbund = isset($_POST['start_kummerbund']) ? $_POST['start_kummerbund'] : array();
        $endKummerbund = isset($_POST['end_kummerbund']) ? $_POST['end_kummerbund'] : array();
        $startHeight = isset($_POST['start_height']) ? $_POST['start_height'] : array();
        $endHeight = isset($_POST['end_height']) ? $_POST['end_height'] : array();
        $startWeight = isset($_POST['start_weight']) ? $_POST['start_weight'] : array();
        $endWeight = isset($_POST['end_weight']) ? $_POST['end_weight'] : array();
        $startSWidth = isset($_POST['start_s_width']) ? $_POST['start_s_width'] : array();
        $endSWidth = isset($_POST['end_s_width']) ? $_POST['end_s_width'] : array();
        $startLength = isset($_POST['start_length']) ? $_POST['start_length'] : array();
        $endLength = isset($_POST['end_length']) ? $_POST['end_length'] : array();
        $res = $this->size_model->delete(array('brand_id'=>$brandId,'size_type'=>1));
        if($res === false) {
            return $this->error('删除品牌对照表失败');
        }
    
        foreach($height as $k=>$val) {
            if($val == '' || $val <= 0 || $weight[$k] <= 0 || $weight[$k]='' ) {
                continue;
            }
            $data = array();
            $data['brand_id'] = $brandId;
            $data['size_type'] = isset($_POST['size_type']) ? $_POST['size_type'] : 2;
            $data['height'] = $val;
            $data['weight'] = $weight[$k];
            $data['size'] = $size[$k];
            $data['start_bust'] = $startBust[$k];
            $data['end_bust'] = $endBust[$k];
            $data['start_kummerbund'] = $startKummerbund[$k];
            $data['end_kummerbund'] = $endKummerbund[$k];
            $data['start_height'] = $startHeight[$k];
            $data['end_height'] = $endHeight[$k];
            $data['start_weight'] = $startWeight[$k];
            $data['end_weight'] = $endWeight[$k];
            $data['start_s_width'] = $startSWidth[$k];
            $data['end_s_width'] = $endSWidth[$k];
            $data['start_length'] = $startLength[$k];
            $data['end_length'] = $endLength[$k];
            $data['create_time'] = date('Y-m-d H:i:s');
            $data['update_time'] = date('Y-m-d H:i:s');
            $brandsizeId = $this->size_model->add($data);
            if(!$brandsizeId) {
                return $this->error('添加失败');
            }
        }
        return $this->success('修改成功','/brand/brandNumSizeAdd');
    }
    
    
}