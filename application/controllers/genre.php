<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genre extends MY_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('brand_model');
        $this->load->model('genre_model');
        $this->load->model('brand/goods_model');
        $this->load->library('pager');
        $this->checkLogin();
    }
    
    public function goAdd() {
        $params = array();
        $params['_SESSION'] =$_SESSION;
        return $this->display('genre/add', $params);
    }
    
    
    
    public function genreList() {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $pageSize = isset($_GET['pageSize']) ? $_GET['pageSize'] : 24;
        $value = isset($_GET['value']) ? trim($_GET['value']) : '';
        $category = isset($_GET['category']) ? $_GET['category'] : 0;
        $params = array();
        if($value != '') {
            $params['value'] = $value;
        }
        if($category != 0) {
            $params['category'] = $category;
        }
        $params['statusArray'] = array(1,2);
        $genres = array();
        $total = $this->genre_model->getGenresCountByParams($params);
        if($total > 0) {
            $genres = $this->genre_model->getGenresByParams($params, $page, $pageSize);
        }
        $params['total'] = $total;
        $params['genres'] = $genres;
        $params['page'] = $page;
        $params['pageSize'] = $pageSize;
        $params['_SESSION'] =$_SESSION;
        $params['pager'] = new pager($total, $page,$pageSize);
        return $this->display('genre/list', $params);
    }
    
    
    public function add() {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $category = isset($_POST['category']) ? $_POST['category'] : 0;
        if($name == '') {
            return $this->error('请输入鞋子名称');
        }
        if($category == 0) {
            return $this->error('请选择呢鞋子类别');
        }
        $data = $this->sendPicture(array('file_name'=>date('Y-m-d-H-i-s').'-1', 'name'=>'picture_url', 'upload_path'=>'./imgs/genre/'));
        if(empty($data)) {
            return $this->error('添加图片失败');
        }
        $params = array();
        $params['name'] = $name;
        $params['category'] = $category;
        $params['status'] = isset($_POST['status']) ? $_POST['status'] : 1;
        $params['picture_url'] = '/imgs/genre/'.$data['file_name'];
        $params['create_time'] = date('Y-m-d H:i:s');
        $params['update_time'] = date('Y-m-d H:i:s');
        $shoesId = $this->genre_model->add($params);
        if($shoesId === false) {
            return $this->error('添加失败');
        }
        return $this->success('添加成功','/genre/genreList');
    }
    
    
    public function enabled() {
        $genreIds = isset($_POST['genreIds']) ? trim($_POST['genreIds'], ',') : '';
        if($genreIds == '') {
            return $this->ajaxError('分类ID错误');
        }
    
        $genreIds = explode(',', $genreIds);
        foreach($genreIds as $genreId) {
            if($genreId <= 0) {
                return $this->ajaxError('分类ID错误');
            }
             
            $res = $this->genre_model->edit(array('status'=>1), $genreId);
            if($res === false) {
                return $this->ajaxError('启用分类失败');
            }
        }
    
        return $this->ajaxSuccess('启用分类成功');
    }
    
    
    public function disable() {
        $genreIds = isset($_POST['genreIds']) ? trim($_POST['genreIds'], ',') : '';
        if($genreIds == '') {
            return $this->ajaxError('分类ID错误');
        }
    
        $genreIds = explode(',', $genreIds);
        foreach($genreIds as $genreId) {
            if($genreId <= 0) {
                return $this->ajaxError('分类ID错误');
            }
             
            $res = $this->genre_model->edit(array('status'=>2), $genreId);
            if($res === false) {
                return $this->ajaxError('禁用分类失败');
            }
        }
    
        return $this->ajaxSuccess('禁用分类成功');
    }
    
    
    public function detele() {
        $genreIds = isset($_POST['genreIds']) ? trim($_POST['genreIds'], ',') : '';
        if($genreIds == '') {
            return $this->ajaxError('分类ID错误');
        }
    
        $genreIds = explode(',', $genreIds);
        foreach($genreIds as $genreId) {
            if($genreId <= 0) {
                return $this->ajaxError('分类ID错误');
            }
             
            $res = $this->genre_model->edit(array('status'=>3), $genreId);
            if($res === false) {
                return $this->ajaxError('删除分类失败');
            }
        }
    
        return $this->ajaxSuccess('删除分类成功');
    }
    
    
    public function getGenre() {
        $category = isset($_POST['category']) ? $_POST['category'] : 0;
        $params = array();
        if($category == 0) {
            echo  json_encode(array());
        }
        $params['category'] = $category;
        $params['status'] = 1;
        $genres = array();
        $genres = $this->genre_model->getGenresByParams($params);
        
        
        $genresStr = '<option value="0" selected disabled >请选择</option>';
        if(empty($genres)) {
            $date = array('status' => '200', 'res' => $genresStr);
            echo json_encode($date);
            exit();
        }
        
        foreach($genres as $genre) {
            $genresStr .= "<option value=" . $genre['genre_id'] . " >" . $genre['name'] . "</option>";
        }
        $date = array('status' => '200', 'res' => $genresStr);
        echo json_encode($date);
        exit();
    }
}