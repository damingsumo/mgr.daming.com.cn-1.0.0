<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goods extends MY_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('brand/goods/collocation_model');
        $this->load->model('brand/goods_model');
        $this->load->model('shoes_model');
        $this->load->model('brand_model');
        $this->load->library('pager');
        $this->checkLogin();
    }
    
    public function goAdd() {
        return $this->display('brand/collocation/add');
    }
    
    
    public function add() {
        $goodsId = isset($_GET['gid']) ? $_GET['gid'] : 0;
        if($goodsId <= 0) {
            return $this->error('商品ID错误');
        }
        $data = $this->sendPicture(array('file_name'=>date('Y-m-d-H-i-s'), 'name'=>'picture_url', 'upload_path'=>'./imgs/collocation/'));
        if(empty($datap)) {
            return $this->error('添加图片失败');
        }
        $params = array();
        $params['gid'] = $goodsId;
        $params['shoes_id'] = isset($_POST['shoes_id']) ? $_POST['shoes_id'] : 0;
        $params['status'] = isset($_POST['status']) ? $_POST['status'] : 1;
        $params['first_collocation_id'] = isset($_POST['first_collocation_id']) ? $_POST['first_collocation_id'] : 0;
        $params['second_collocation_id'] = isset($_POST['second_collocation_id']) ? $_POST['second_collocation_id'] : 0;
        $params['picture_url'] = '/imgs/collocation/'.$data['file_name'];
        $params['create_time'] = date('Y-m-d H:i:s');
        $params['update_time'] = date('Y-m-d H:i:s');
        $collocationId = $this->collocation_model->add($params);
        if($collocationId === false) {
            return $this->error('商品添加失败');
        }
        return $this->success('添加成功', '/collocation/collocationList?gid='.$goodsId);
    }
    
    public function collocationList() {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $pageSize = isset($_GET['pageSize']) ? $_GET['pageSize'] : 20;
        $goodsId = isset($_GET['gid']) ? $_GET['gid'] : 0;
        if($goodsId <= 0) {
            return $this->error('商品ID错误');
        }
        $params = array();
        $params['gid'] = $goodsId;
        $collocations = array();
        $total = $this->collocation_model->getCollocationCountByParams($params);
        if($total > 0) {
            $collocations = $this->collocation_model->getCollocationsByParams($params, $page, $pageSize);
        }
        foreach ($collocations as &$collocation) {
            $collocation['goodsinfo'] = $this->goods_model->row('*', $goodsId);
            $collocation['firstinfo'] = $this->goods_model->row('*', $collocation['gid']);
            $collocation['secondinfo'] = $this->goods_model->row('*', $collocation['gid']);
            $collocation['shoesinfo'] = $this->shoes_model->row('*', $collocation['shoes_id']);
        }
        $params['total'] = $total;
        $params['collocations'] = $collocations;
        $params['page'] = $page;
        $params['pageSize'] = $pageSize;
        $params['pager'] = new pager($total, $page,$pageSize);
        return $this->display('brand/collocation/list', $params);
    }
    
}