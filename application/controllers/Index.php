<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_controller {
    public function __construct() {
        parent::__construct();
        $this->load->library("session");
        $this->load->model('Admin_model');
    }
    /***
     * 登录
     * 
     */
    public function login() {
        $userName = isset($_POST['user_name']) ? $_POST['user_name'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        if($userName == '') {
            return $this->display('layouts/loginerror', array('msg' => '请输入账号'));
        }
        if($password == '') {
            return $this->display('layouts/loginerror', array('msg' => '请输入密码'));
        }
        $admin = $this->Admin_model->getAdminsByParams(array('user_name'=>$userName,'password'=>$this->makePassword($password),'status'=>1));
        $admin = current($admin);
        if(empty($admin)) {
            return $this->display('layouts/loginerror', array('msg' => '账号或者密码错误,请重新登录'));
        }
        $this->session->set_userdata('user_name', $userName);
        return $this->success('登录成功', '/seller/sellerList');
    }
    
    /***
     * 
     * 登出
     */
    public function loginOut() {
        $this->session->unset_userdata('user_name');
        $url = '/index/index';
        echo "<script language='javascript' type='text/javascript'>";    
        echo "window.location.href='$url'";    
        echo "</script>";  
        exit;
    }
    
    
    public function index() {
        return $this->display('index/index');
    }
}