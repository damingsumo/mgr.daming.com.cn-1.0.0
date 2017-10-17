<?php 
if (!defined('BASEPATH')) exit('No direct access allowed.');    
class MY_controller extends CI_Controller {
 	public function __construct() {
 		parent::__construct();
 	    $this->load->library("session");
 	}
 	public function assign($key,$val) {
  		$this->ci_smarty->assign($key,$val);
 	}
 
 	public function display($html,$arr = array()) {
 		foreach($arr as $key=>$val) {
 			$this->ci_smarty->assign($key,$val);
 		}
  		$this->ci_smarty->display($html.'.tpl');
 	}
 	
    /**
	 * 错误提示
	 *
	 * @param string $msg 提示信息
	 * @param string $url 跳转URL
	 * @param integer $delay 跳转URL延时
	 *
	 */
	public function error($msg = '检测到用户尚未登录', $url = '', $delay = 3) {
		if($url != '') {
			$params['url'] = $url;
		} else {
			$params['url'] = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/index';
		}
		$params = array();
		$params['msg'] = $msg;
		$params['delay'] = $delay * 1000;
		return $this->display('layouts/error', $params);
	}
 	
 	/**
 	 * 成功提示
 	 *
 	 * @param string $msg 提示信息
 	 * @param string $url 跳转URL
 	 * @param integer $delay 跳转URL延时
 	 *
 	 */
 	public function success($msg, $url = '', $delay = 3) {
 	    $params = array();
 	    if($url != '') {
 	        $params['url'] = $url;
 	    } else {
 	        $params['url'] = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/index';
 	    }
 	    $params['_SESSION'] =$_SESSION;
 	    $params['msg'] = $msg;
 	    $params['delay'] = $delay * 1000;
 	    return $this->display('layouts/success', $params);
 	
 	}
 	
 	/**
 	 * 统一给密码加密,注册的时候,先密码为空,创建用户成功后, 重新生成密码进行更新操作.
 	 * 根据用户的创建日期生成salt
 	 */
 	public static function makePassword($password) {
 	    if ($password == '') {
 	        return false;
 	    }
		return md5(substr(md5('thisisabigproblem'), 3, 23) . $password);
		
 	}
 	
 	
 	public function sendPicture($params) {
 	    
 	    $config['file_name'] = isset($params['file_name']) ? $params['file_name'] : '';
 	    if($config['file_name'] == '' ) {
 	        return array();
 	    }
 	    $config['upload_path'] = isset($params['upload_path']) ? $params['upload_path'] : '';
 	    if($config['upload_path'] == '' ) {
 	        return array();
 	    }
 	    $config['file_name'] = iconv("UTF-8","gb2312", $config['file_name']);
 	    $config['allowed_types'] = 'gif|jpg|png';
 	    $config['max_size'] = "2000";
 	    $this->load->library('upload', $config);
 	    $this->upload->do_upload($params['name']);
 	    if($this->upload->display_errors()) {
 	        return array();
 	    }
 	    return $this->upload->data();
 	}
 	
 	
 	public function checkLogin() {
 	    if(!isset($_SESSION['user_name'])) {
 	        $url = '/index/index';
 	        echo "<script language='javascript' type='text/javascript'>";    
            echo "window.location.href='$url'";    
            echo "</script>";  
            exit;
 	    }
 	}
 	
 	
 	
 	
 	public function ajaxSuccess($data, $status = 200) {
 	    echo json_encode ( array ('data' => $data, 'status' => $status ) );
 	    exit ();
 	}
}  