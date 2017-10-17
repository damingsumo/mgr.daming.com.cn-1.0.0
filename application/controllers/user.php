<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('user/figure_model');
        $this->load->library('pager');
        $this->checkLogin();
    }
    
    public function userList() {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $pageSize = isset($_GET['pageSize']) ? $_GET['pageSize'] : 1;
        $value = isset($_GET['value']) ? trim($_GET['value']) : '';
        $params = array();
        if($value != '') {
            $params['value'] = $value;
        }
        $users = array();
        $total = $this->user_model->getUsersCountByParams($params);
        if($total > 0 ) {
            $users = $this->user_model->getUsersByParams($params, $page, $pageSize);
        }
        foreach ($users as $user) {
            $user['figure'] = current($this->figure_model->getFiguresByParams(array('uid'=>$user['uid'])));
        }
        
        $params['pager'] = new pager($total, $page,$pageSize);
        $params['total'] =$total;
        $params['users'] =$users;
        $params['page'] =$page;
        $params['_SESSION'] =$_SESSION;
        $params['pageSize'] =$pageSize;
        return $this->display('user/list',$params);
    }
    
    public function detail() {
        $uid = isset($_GET['uid']) ? $_GET['uid'] : 0;
        if($uid <= 0) {
            return $this->error('用户ID错误');
        }
        $user = $this->user_model->row('*',$uid);
        $user['figure'] = current($this->figure_model->getFiguresByParams(array('uid'=>$user['uid'])));
        $params = array();
        $params['user'] = $user;
        $params['_SESSION'] =$_SESSION;
        return $this->display('user/detail', $params);
    }
    
    
}