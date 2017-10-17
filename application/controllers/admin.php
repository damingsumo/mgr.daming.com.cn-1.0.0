<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->library('pager');
        $this->checkLogin();
    }
    /***
     * 
     * 跳转新增管理员界面
     */
    public function goAdd() {
        $params['_SESSION'] =$_SESSION;
        return $this->display('admin/add', $params);
    }
    
    /***
     * 
     * 管理员列表
     */
    public function adminList() {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $pageSize = isset($_GET['pageSize']) ? $_GET['pageSize'] : 20;
        $value = isset($_GET['value']) ? trim($_GET['value']) : '';
        $params = array();
        if($value != '') {
            $params['value'] = $value;
        }
        $admins = array();
        $total = $this->admin_model->getAdminsCountByParams($params);
        if($total > 0) {
            $admins = $this->admin_model->getAdminsByParams($params, $page, $pageSize);
        }
        $params['admins'] = $admins;
        $params['total'] = $total;
        $params['page'] = $page;
        $params['pageSize'] = $pageSize;
        $params['_SESSION'] =$_SESSION;
        $params['pager'] = new pager($total, $page,$pageSize);
        return $this->display('admin/list', $params);
    }
    
    
    public function add() {
        $userName = isset($_POST['user_name']) ? $_POST['user_name'] : '';
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        if($userName == '') {
            return $this->error('请输入用户名');
        }
        $total = $this->admin_model->getAdminsCountByParams(array('user_name'=>$userName));
        if($total >0) {
            return $this->error('该用户名已存在');
        }
        if($name == '') {
            return $this->error('请输入姓名');
        }
        if($mobile == '') {
            return $this->error('请输入手机号');
        }
        if($password == '') {
            return $this->error('请输入密码');
        }
        
        $params = array();
        $params['user_name'] = $userName;
        $params['name'] = $name;
        $params['password'] = $this->makePassword($password);
        $params['email'] = isset($_POST['email']) ? $_POST['email'] : '';
        $params['mobile'] = $mobile;
        $params['status'] = isset($_POST['status']) ? $_POST['status'] : 1;
        $params['level'] = isset($_POST['level']) ? $_POST['level'] : 1;
        $params['note'] = isset($_POST['note']) ? $_POST['note'] : '';
        $params['create_time'] = date('Y-m-d H:i:s');
        $params['update_time'] = date('Y-m-d H:i:s');
        $adminId = $this->admin_model->add($params);
        if($adminId === false) {
            return $this->error('添加失败');
        }
        return $this->success('添加成功', '/admin/detail?admin_id='.$adminId);
        
        
    }
    
    public function edit() {
        if(empty($_POST)) {
            $adminId = isset($_GET['admin_id']) ? $_GET['admin_id'] : 0;
            if($adminId <= 0 ) {
                return $this->error('管理员ID错误');
            }
            $admin = $this->admin_model->row('*',$adminId);
            if(empty($admin)) {
                return $this->error('未找到管理员信息');
            }
            $params =array();
            $params['admin'] = $admin;
            $params['_SESSION'] =$_SESSION;
            return $this->display('admin/edit',$params);
        }
        $adminId = isset($_POST['admin_id']) ? $_POST['admin_id'] : 0;
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
        if($adminId <= 0) {
            return $this->error('管理员ID错误');
        }
        if($name == '') {
            return $this->error('请输入姓名');
        }
        if($mobile == '') {
            return $this->error('请输入手机号');
        }
        
        $params = array();
        $params['name'] = $name;
        $params['email'] = isset($_POST['email']) ? $_POST['email'] : '';
        $params['mobile'] = $mobile;
        $params['note'] = isset($_POST['note']) ? $_POST['note'] : '';
        $params['update_time'] = date('Y-m-d H:i:s');
        $res = $this->admin_model->edit($params, $adminId);
        if($res === false) {
            return $this->error('编辑失败');
        }
        return $this->success('编辑成功', '/admin/detail?admin_id='.$adminId);
        
        
    }
    
    public function detail() {
        $adminId = isset($_GET['admin_id']) ? $_GET['admin_id'] : 0;
        if($adminId < 0 ) {
            return $this->error('管理员ID错误');
        }
        $admin = $this->admin_model->row('*',$adminId);
        if(empty($admin)) {
            return $this->error('未找到管理员信息');
        }
        $params =array();
        $params['admin'] = $admin;
        $params['_SESSION'] =$_SESSION;
        return $this->display('admin/detail',$params);
        
    }
    
    public function enabled() {
        $adminIds = isset($_POST['adminIds']) ? trim($_POST['adminIds'], ',') : '';
        if($adminIds == '') {
            return $this->ajaxError('管理员ID错误');
        }
    
        $adminIds = explode(',', $adminIds);
        foreach($adminIds as $adminId) {
            if($adminId <= 0) {
                return $this->ajaxError('管理员ID错误');
            }
             
            $res = $this->admin_model->edit(array('status'=>1), $adminId);
            if($res === false) {
                return $this->ajaxError('启用管理员失败');
            }
        }
    
        return $this->ajaxSuccess('启用管理员成功');
    }
    
    
    public function disable() {
        $adminIds = isset($_POST['adminIds']) ? trim($_POST['adminIds'], ',') : '';
        if($adminIds == '') {
            return $this->ajaxError('管理员ID错误');
        }
    
        $adminIds = explode(',', $adminIds);
        foreach($adminIds as $adminId) {
            if($adminId <= 0) {
                return $this->ajaxError('管理员ID错误');
            }
             
            $res = $this->admin_model->edit(array('status'=>2), $adminId);
            if($res === false) {
                return $this->ajaxError('禁用管理员失败');
            }
        }
    
        return $this->ajaxSuccess('禁用管理员成功');
    }
    
    public function changePassword() {
        $adminId = isset($_POST['adminId']) ? $_POST['adminId'] : 0;
        $password = isset($_POST['password']) ? $_POST['password'] : '123456';
        $params['password'] = $this->makePassword($password);
        $res = $this->admin_model->edit($params, $adminId);
        if($res === false) {
            return $this->ajaxError('密码重置失败');
        }
        return $this->ajaxSuccess('密码重置成功');
        
        
    }
    
    
}