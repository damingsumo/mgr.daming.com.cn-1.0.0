<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shoes extends MY_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('shoes_model');
        $this->load->library('pager');
        $this->checkLogin();
    }
    
    public function goAdd() {
        $params['_SESSION'] =$_SESSION;
        return $this->display('shoes/add', $params);
    }
    
    
    public function shoesList() {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $pageSize = isset($_GET['pageSize']) ? $_GET['pageSize'] : 20;
        $value = isset($_GET['value']) ? trim($_GET['value']) : '';
        $params = array();
        if($value != '') {
            $params['value'] = $value;
        }
        $shoes = array();
        $total = $this->shoes_model->getShoesCountByParams($params);
        if($total > 0) {
            $shoes = $this->shoes_model->getShoesByParams($params, $page, $pageSize);
        }
        $params['shoes'] = $shoes;
        $params['total'] = $total;
        $params['page'] = $page;
        $params['pageSize'] = $pageSize;
        $params['_SESSION'] =$_SESSION;
        $params['pager'] = new pager($total, $page,$pageSize);
        return $this->display('shoes/list', $params);
    }
    
    
    public function add() {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $category = isset($_POST['category']) ? $_POST['category'] : 0;
        $color = isset($_POST['color']) ? $_POST['color'] : '';
        if($name == '') {
            return $this->error('请输入鞋子名称');
        }
        if($category == 0) {
            return $this->error('请选择呢鞋子类别');
        }
        if($color == '') {
            return $this->error('请输入鞋子颜色');
        }
        $datap = $this->sendPicture(array('file_name'=>date('Y-m-d-H-i-s').'-1', 'name'=>'picture_url', 'upload_path'=>'./imgs/shoes/'));
        if(empty($datap)) {
            return $this->error('添加图片失败');
        }
        $datac = $this->sendPicture(array('file_name'=>date('Y-m-d-H-i-s').'-2', 'name'=>'compose_url', 'upload_path'=>'./imgs/shoes/'));
        if(empty($datac)) {
            return $this->error('添加图片失败');
        }
        $params = array();
        $params['name'] = $name;
        $params['category'] = $category;
        $params['color'] = $color;
        $params['status'] = isset($_POST['status']) ? $_POST['status'] : 1;
        $params['picture_url'] = '/imgs/shoes/'.$datap['file_name'];
        $params['compose_url'] = '/imgs/shoes/'.$datac['file_name'];
        $params['create_time'] = date('Y-m-d H:i:s');
        $params['update_time'] = date('Y-m-d H:i:s');
        $shoesId = $this->shoes_model->add($params);
        if($shoesId === false) {
            return $this->error('添加失败');
        }
        return $this->success('添加成功', '/shoes/detail?shoes_id='.$shoesId);
    }
    
    
    
    public function edit() {
        if(empty($_POST)) {
            $shoesId = isset($_GET['shoes_id']) ? $_GET['shoes_id'] : 0;
            if($shoesId <= 0) {
                return $this->error('鞋子ID错误');
            }
            $shoes = $this->shoes_model->row('*', $shoesId);
            if(empty($shoes)) {
                return $this->error('未找到该鞋子的信息');
            }
            $params['shoes'] = $shoes;
            $params['_SESSION'] =$_SESSION;
            return $this->display('shoes/edit', $params);
        }
        $shoesId = isset($_POST['shoes_id']) ? $_POST['shoes_id'] : 0;
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $category = isset($_POST['category']) ? $_POST['category'] : 0;
        $color = isset($_POST['color']) ? $_POST['color'] : '';
        if($shoesId <= 0) {
            return $this->error('鞋子ID错误');
        }
        if($name == '') {
            return $this->error('请输入鞋子名称');
        }
        if($category == 0) {
            return $this->error('请选择呢鞋子类别');
        }
        if($color == '') {
            return $this->error('请输入鞋子颜色');
        }
        $shoes = $this->shoes_model->row('*', $shoesId);
        if(empty($shoes)) {
            return $this->error('未找到该鞋子的信息');
        }
        unlink($shoes['picture_url']);
        unlink($shoes['compose_url']);
        $datap = $this->sendPicture(array('file_name'=>date('Y-m-d-H-i-s').'-1', 'name'=>'picture_url', 'upload_path'=>'./imgs/shoes/'));
        if(empty($datap)) {
            return $this->error('添加图片失败');
        }
        $datac = $this->sendPicture(array('file_name'=>date('Y-m-d-H-i-s').'-2', 'name'=>'compose_url', 'upload_path'=>'./imgs/shoes/'));
        if(empty($datac)) {
            return $this->error('添加图片失败');
        }
        $params = array();
        $params['name'] = $name;
        $params['category'] = $category;
        $params['color'] = $color;
        $params['status'] = isset($_POST['status']) ? $_POST['status'] : 1;
        $params['picture_url'] = '/imgs/shoes/'.$datap['file_name'];
        $params['compose_url'] = '/imgs/shoes/'.$datac['file_name'];
        $params['update_time'] = date('Y-m-d H:i:s');
        $shoesId = $this->shoes_model->edit($params, $shoesId);
        if($shoesId === false) {
            return $this->error('添加失败');
        }
        return $this->success('添加成功', '/shoes/detail?shoes_id='.$shoesId);
        
    }
    
    public function detail() {
        $shoesId = isset($_GET['shoes_id']) ? $_GET['shoes_id'] : 0;
        if($shoesId <= 0) {
            return $this->error('鞋子ID错误');
        }
        $shoes = $this->shoes_model->row('*', $shoesId);
        if(empty($shoes)) {
            return $this->error('未找到该鞋子的信息');
        }
        $params['shoes'] = $shoes;
        $params['_SESSION'] =$_SESSION;
        return $this->display('shoes/detail', $params);
    }
    
    public function enabled() {
    
        $shoesIds = isset($_POST['shoesIds']) ? trim($_POST['shoesIds'], ',') : '';
        if($shoesIds == '') {
            return $this->ajaxError('品牌ID错误');
        }
    
        $shoesIds = explode(',', $shoesIds);
        foreach($shoesIds as $shoesId) {
            if($shoesId <= 0) {
                return $this->ajaxError('卡种ID错误');
            }
             
            $res = $this->shoes_model->edit(array('status'=>1), $shoesId);
            if($res === false) {
                return $this->ajaxError('启用品牌失败');
            }
        }
    
        return $this->ajaxSuccess('启用品牌成功');
    }
    
    
    public function disable() {
    
        $shoesIds = isset($_POST['shoesIds']) ? trim($_POST['shoesIds'], ',') : '';
        if($shoesIds == '') {
            return $this->ajaxError('品牌ID错误');
        }
    
        $shoesIds = explode(',', $shoesIds);
        foreach($shoesIds as $shoesId) {
            if($shoesId <= 0) {
                return $this->ajaxError('卡种ID错误');
            }
             
            $res = $this->shoes_model->edit(array('status'=>2), $shoesId);
            if($res === false) {
                return $this->ajaxError('禁用品牌失败');
            }
        }
    
        return $this->ajaxSuccess('禁用品牌成功');
    }
    
}