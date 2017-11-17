<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller extends MY_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Seller_model');
        $this->load->library('Pager');
        $this->checkLogin();
    }
    
    /**
     * 跳转新增界面
     * 
     */
    public function goAdd() {
        $params = array();
        $params['_SESSION'] =$_SESSION;
        $this->display('seller/add', $params);
    }
    

    /***
     * 商家列表
     * 
     */
    public function sellerList() {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $pageSize = isset($_GET['pageSize']) ? $_GET['pageSize'] : 20;
        $value = isset($_GET['value']) ? trim($_GET['value']) : '';
        $params = array();
        if($value != '') {
            $params['value'] = $value;
        }
        $total = $this->seller_model->getSellerCountByParams($params);
        $sellers = array();
        if($total > 0 ) {
            $sellers = $this->seller_model->getSellerByParams($params, $page, $pageSize);
        }
        $params['pager'] = new pager($total, $page,$pageSize);
        $params['total'] =$total;
        $params['sellers'] =$sellers;
        $params['page'] =$page;
        $params['pageSize'] =$pageSize;
        $params['_SESSION'] =$_SESSION;
        return $this->display('seller/list',$params);
    }
    
    /***
     * 添加商家
     * 
     */
    public function add() {
        $sellerName = isset($_POST['seller_name']) ? trim($_POST['seller_name']) : '';
        $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
        if($sellerName == "") {
            return $this->error('请输入商家名');
        }
        if($mobile == "") {
            return $this->error('请输入手机号');
        }
        $seller = array();
        $seller = $this->seller_model->getSellerByParams(array('seller_name'=>$sellerName));
        if(!empty($seller)) {
            return $this->error('该商家已存在');
        }
        $params = array(); 
        $params['seller_name'] = $sellerName;
        $params['status'] = 1;
        $params['balance'] = 0;
        $params['email'] = isset($_POST['email']) ? $_POST['email'] : '';
        $params['mobile'] = $mobile;
        $params['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
        $params['note'] = isset($_POST['note']) ? $_POST['note'] : '';
        $params['create_time'] = date('Y-m-d H:i:s');
        $params['update_time'] = date('Y-m-d H:i:s');
        $sellerId = $this->seller_model->add($params);
        if($sellerId === false) {
            return $this->error('添加失败');
        } 
        return $this->success('添加成功','/seller/detail?sid='.$sellerId);
    }
    
    /**
     * 商家详情
     * 
     */
    public function detail() {
        $sellerId = isset($_GET['sid']) ? $_GET['sid'] : 0;
        if($sellerId == 0 ) {
            return $this->error('商家ID错误');
        }
        $seller = $this->seller_model->getSellerByParams(array('sid'=>$sellerId));
        if(empty($seller)) {
            return $this->error('未找到该商家信息');
        }
        $params = array();
        $params['seller'] = current($seller);
        $params['_SESSION'] =$_SESSION;
        return $this->display('seller/detail', $params);
    }
    
    /**
     * 商家信息修改
     * 
     */
    public function edit() {
        if(empty($_POST)) {
            $sellerId = isset($_GET['sid']) ? $_GET['sid'] : 0;
            if($sellerId == 0 ) {
                return $this->error('商家ID错误');
            }
            $seller = $this->seller_model->row('*',$sellerId);
            if(empty($seller)) {
                return $this->error('未找到商家信息');
            }
            $params = array();
            $params['seller'] = $seller;
            $params['_SESSION'] =$_SESSION;
            return $this->display('seller/edit', $params);
        }
        $sellerId = isset($_POST['sid']) ? $_POST['sid'] : 0;
        $sellerName = isset($_POST['seller_name']) ? $_POST['seller_name'] : '';
        if($sellerId == 0 ) {
            return $this->error('商家ID错误');
        }
        if($sellerName == '') {
            return $this->error('请输入商家名称');
        }
        
        $seller = $this->seller_model->getSellerByParams(array('seller_name'=>$sellerName));
        if($seller['sid'] != $sellerId) {
            return $this->error('该商户名字已存在');
        }
        $params = array();
        $params['seller_name'] = $sellerName;
        $params['email'] = isset($_POST['email']) ? $_POST['email'] : '';
        $params['mobile'] = isset($_POST['mobile']) ? $_POST['mobile'] : '';
        $params['tableau'] = isset($_POST['tableau']) ? $_POST['tableau'] : '';
        $params['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
        $params['brand'] = isset($_POST['brand']) ? $_POST['brand'] : '';
        $params['region'] = isset($_POST['region']) ? $_POST['region'] : 2;
        $params['update_time'] = date('Y-m-d H:i:s');
        $res = $this->seller_model->edit($params, $sellerId);
        if($res === false) {
            return $this->error('修改失败');
        }
        return $this->success('修改成功','/seller/detail?sid='.$sellerId);
    }
    
    /**
     * 重置密码
     * 
     */
    public function changePassword() {
        $sellerId = isset($_GET['sid']) ? $_GET['sid'] : 10;
        if($sellerId == 0 ) {
            return $this->error('商家ID错误');
        }
        $params = array();
        $params['sid'] = $sellerId;
        $params['password'] = md5('123456');
        $res = $this->seller_model->edit($params, $sellerId);
        if($res === false) {
            return $this->error('重置密码失败');
        }
        return $this->success('重置成功','/seller/detail?sid='.$sellerId);
    }
    
    
    
    
    
    
    
    
    
    
}