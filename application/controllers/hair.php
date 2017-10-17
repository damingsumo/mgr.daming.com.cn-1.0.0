<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hair extends MY_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('hair/hairstyle_model');
        $this->load->model('hair/face_model');
        $this->load->model('hair/complexion_model');
        $this->load->model('hair/haircolor_model');
        $this->load->library('pager');
        $this->checkLogin();
    }
    
    public function goStyleAdd() {
        $parmas = array();
        $params['_SESSION'] =$_SESSION;
        return $this->display('image/hairstyle/add', $params);
    }
    
    
    
    public function hairStyleList() {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $pageSize = isset($_GET['pageSize']) ? $_GET['pageSize'] : 24;
        $params = array();
        $params['statusArray'] = array(1, 2);
        $total = $this->hairstyle_model->getHairstyleCountByParams($params);
        $hairStyles = array();
        if($total > 0) {
            $hairStyles = $this->hairstyle_model->getHairstylesByParams($params, $page, $pageSize);
        }
        $params['hairStyles'] = $hairStyles;
        $params['total'] = $total;
        $params['page'] = $page;
        $params['pageSize'] = $pageSize;
        $params['_SESSION'] =$_SESSION;
        $params['pager'] = new pager($total, $page,$pageSize);
        return $this->display('image/hairstyle/list', $params);
    }
    
    
    
    public function hairStyleAdd() {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        if($name == "") {
            return $this->error('请输入发型名称');
        }
        $config['file_name'] = date('Y-m-d-H-i-s');
        $config['upload_path'] = './imgs/hairstyle/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = "2000";
        $this->load->library('upload', $config);
        $this->upload->do_upload('picture_url');
        if($this->upload->display_errors()) {
            return $this->error('添加图片失败');
        }
        $data = $this->upload->data();
        $params = array();
        $params['name'] = $name;
        $params['status'] = isset($_POST['status']) ? $_POST['status'] : 1;
        $params['picture_url'] = '/imgs/hairstyle/'.$data['file_name'];
        $params['create_time'] = date('Y-m-d H:i:s');
        $params['updatetime'] = date('Y-m-d H:i:s');
        $res = $this->hairstyle_model->add($params);
        if($res === false) {
            return $this->error('添加发型失败');
        }
        return $this->success('添加成功', '/hair/hairStyleList');
    }
    
    
    
public function goColorAdd() {
        $params = array();
        $params['_SESSION'] =$_SESSION;
        return $this->display('image/haircolor/add', $params);
    }
    
    
    
    public function haircolorList() {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $pageSize = isset($_GET['pageSize']) ? $_GET['pageSize'] : 24;
        $params = array();
        $params['statusArray'] = array(1, 2);
        $total = $this->haircolor_model->getHairColorCountByParams($params);
        $hairColors = array();
        if($total > 0) {
            $hairColors = $this->haircolor_model->getHairColorsByParams($params, $page, $pageSize);
        }
        $params['hairColors'] = $hairColors;
        $params['total'] = $total;
        $params['page'] = $page;
        $params['pageSize'] = $pageSize;
        $params['_SESSION'] =$_SESSION;
        $params['pager'] = new pager($total, $page,$pageSize);
        return $this->display('image/haircolor/list', $params);
    }
    
    
    
    public function haircolorAdd() {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        if($name == "") {
            return $this->error('请输入发色名称');
        }
        $fileName = date('Y-m-d-H-i-s');
        $uploadPath = './imgs/haircolor/';
        $config['file_name'] = $fileName;
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = "2000";
        $this->load->library('upload', $config);
        $this->upload->do_upload('picture_url');
        if($this->upload->display_errors()) {
            return $this->error('添加图片失败');
        }
        $data = $this->upload->data();
        $params = array();
        $params['name'] = $name;
        $params['status'] = isset($_POST['status']) ? $_POST['status'] : 1;
        $params['picture_url'] = '/imgs/haircolor/'.$data['file_name'];
        $params['create_time'] = date('Y-m-d H:i:s');
        $params['updatetime'] = date('Y-m-d H:i:s');
        $res = $this->haircolor_model->add($params);
        if($res === false) {
            return $this->error('添加发色失败');
        }
        return $this->success('添加成功', '/hair/haircolorList');
    }
    
    public function goFaceAdd() {
        $params = array();
        $params['_SESSION'] =$_SESSION;
        return $this->display('image/face/add', $params);
    }
    
    
    
    public function faceList() {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $pageSize = isset($_GET['pageSize']) ? $_GET['pageSize'] : 24;
        $params = array();
        $params['statusArray'] = array(1, 2);
        $total = $this->face_model->getFaceCountByParams($params);
        $faces = array();
        if($total > 0) {
            $faces = $this->face_model->getFacesByParams($params, $page, $pageSize);
        }
        $params['faces'] = $faces;
        $params['total'] = $total;
        $params['page'] = $page;
        $params['pageSize'] = $pageSize;
        $params['_SESSION'] =$_SESSION;
        $params['pager'] = new pager($total, $page,$pageSize);
        return $this->display('image/face/list', $params);
    }
    
    
    
    public function faceAdd() {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        if($name == "") {
            return $this->error('请输入脸型名称');
        }
        $config['file_name'] = date('Y-m-d-H-i-s');
        $config['upload_path'] = './imgs/face/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = "2000";
        $this->load->library('upload', $config);
        $this->upload->do_upload('picture_url');
        if($this->upload->display_errors()) {
            return $this->error('添加图片失败');
        }
        $data = $this->upload->data();
        $params = array();
        $params['name'] = $name;
        $params['status'] = isset($_POST['status']) ? $_POST['status'] : 1;
        $params['picture_url'] = '/imgs/face/'.$data['file_name'];
        $params['create_time'] = date('Y-m-d H:i:s');
        $params['updatetime'] = date('Y-m-d H:i:s');
        $res = $this->face_model->add($params);
        if($res === false) {
            return $this->error('添加发型失败');
        }
        return $this->success('添加成功', '/hair/faceList');
    }
    
    
    public function goComplexionAdd() {
        $params = array();
        $params['_SESSION'] =$_SESSION;
        return $this->display('image/complexion/add', $params);
    }
    
    
    
    public function complexionList() {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $pageSize = isset($_GET['pageSize']) ? $_GET['pageSize'] : 24;
        $params = array();
        $params['statusArray'] = array(1, 2);
        $total = $this->complexion_model->getComplexionCountByParams($params);
        $complexions = array();
        if($total > 0) {
            $complexions = $this->complexion_model->getComplexionsByParams($params, $page, $pageSize);
        }
        $params['complexions'] = $complexions;
        $params['total'] = $total;
        $params['page'] = $page;
        $params['pageSize'] = $pageSize;
        $params['_SESSION'] =$_SESSION;
        $params['pager'] = new pager($total, $page,$pageSize);
        return $this->display('image/complexion/list', $params);
    }
    
    
    
    public function complexionAdd() { 
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        if($name == "") {
            return $this->error('请输入肤色名称');
        }
        $config['file_name'] = date('Y-m-d-H-i-s');
        $config['upload_path'] = './imgs/complexion/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = "2000";
        $this->load->library('upload', $config);
        $this->upload->do_upload('picture_url');
        if($this->upload->display_errors()) {
            return $this->error('添加图片失败');
        }
        $data = $this->upload->data();
        $params = array();
        $params['name'] = $name;
        $params['status'] = isset($_POST['status']) ? $_POST['status'] : 1;
        $params['picture_url'] = '/imgs/complexion/'.$data['file_name'];
        $params['create_time'] = date('Y-m-d H:i:s');
        $params['updatetime'] = date('Y-m-d H:i:s');
        $res = $this->complexion_model->add($params);
        if($res === false) {
            return $this->error('添加肤色失败');
        }
        return $this->success('添加成功', '/hair/complexionList');
    }
    
    
    
    public function faceEnabled() {
    
        $faceIds = isset($_POST['faceIds']) ? trim($_POST['faceIds'], ',') : '';
        if($faceIds == '') {
            return $this->ajaxError('脸型ID错误');
        }
    
        $faceIds = explode(',', $faceIds);
        foreach($faceIds as $faceId) {
            if($faceId <= 0) {
                return $this->ajaxError('脸型ID错误');
            }
             
            $res = $this->face_model->edit(array('status'=>1), $faceId);
            if($res === false) {
                return $this->ajaxError('启用脸型失败');
            }
        }
    
        return $this->ajaxSuccess('启用脸型成功');
    }
    
    
    public function faceDisable() {
    
        $faceIds = isset($_POST['faceIds']) ? trim($_POST['faceIds'], ',') : '';
        if($faceIds == '') {
            return $this->ajaxError('脸型ID错误');
        }
    
        $faceIds = explode(',', $faceIds);
        foreach($faceIds as $faceId) {
            if($faceId <= 0) {
                return $this->ajaxError('脸型ID错误');
            }
             
            $res = $this->face_model->edit(array('status'=>2), $faceId);
            if($res === false) {
                return $this->ajaxError('禁用脸型失败');
            }
        }
    
        return $this->ajaxSuccess('禁用脸型成功');
    }
    
    public function faceDetele() {
    
        $faceIds = isset($_POST['faceIds']) ? trim($_POST['faceIds'], ',') : '';
        if($faceIds == '') {
            return $this->ajaxError('脸型ID错误');
        }
    
        $faceIds = explode(',', $faceIds);
        foreach($faceIds as $faceId) {
            if($faceId <= 0) {
                return $this->ajaxError('脸型ID错误');
            }
             
            $res = $this->face_model->edit(array('status'=>3), $faceId);
            if($res === false) {
                return $this->ajaxError('删除脸型失败');
            }
        }
    
        return $this->ajaxSuccess('删除脸型成功');
    }
    
    
    
    
    public function haircolorEnabled() {
        $haircolorIds = isset($_POST['haircolorIds']) ? trim($_POST['haircolorIds'], ',') : '';
        if($haircolorIds == '') {
            return $this->ajaxError('发色ID错误');
        }
        
        $haircolorIds = explode(',', $haircolorIds);
        foreach($haircolorIds as $haircolorId) {
            if($haircolorId <= 0) {
                return $this->ajaxError('发色ID错误');
            }
             
            $res = $this->haircolor_model->edit(array('status'=>1), $haircolorId);
            if($res === false) {
                return $this->ajaxError('启用发色失败');
            }
        }
        
        return $this->ajaxSuccess('启用发色成功');
    }
    
    
    public function haircolorDisable() {
        $haircolorIds = isset($_POST['haircolorIds']) ? trim($_POST['haircolorIds'], ',') : '';
        if($haircolorIds == '') {
            return $this->ajaxError('发色ID错误');
        }
    
        $haircolorIds = explode(',', $haircolorIds);
        foreach($haircolorIds as $haircolorId) {
            if($haircolorId <= 0) {
                return $this->ajaxError('发色ID错误');
            }
             
            $res = $this->haircolor_model->edit(array('status'=>2), $haircolorId);
            if($res === false) {
                return $this->ajaxError('禁用发色失败');
            }
        }
    
        return $this->ajaxSuccess('禁用发色成功');
    }
    
    
    public function haircolorDetele() {
        $haircolorIds = isset($_POST['haircolorIds']) ? trim($_POST['haircolorIds'], ',') : '';
        if($haircolorIds == '') {
            return $this->ajaxError('发色ID错误');
        }
    
        $haircolorIds = explode(',', $haircolorIds);
        foreach($haircolorIds as $haircolorId) {
            if($haircolorId <= 0) {
                return $this->ajaxError('发色ID错误');
            }
             
            $res = $this->haircolor_model->edit(array('status'=>3), $haircolorId);
            if($res === false) {
                return $this->ajaxError('删除发色失败');
            }
        }
    
        return $this->ajaxSuccess('删除发色成功');
    }
    
    
    public function hairstyleEnabled() {
        $hairstyleIds = isset($_POST['hairstyleIds']) ? trim($_POST['hairstyleIds'], ',') : '';
        if($hairstyleIds == '') {
            return $this->ajaxError('发型ID错误');
        }
    
        $hairstyleIds = explode(',', $hairstyleIds);
        foreach($hairstyleIds as $hairstyleId) {
            if($hairstyleId <= 0) {
                return $this->ajaxError('发型ID错误');
            }
             
            $res = $this->hairstyle_model->edit(array('status'=>1), $hairstyleId);
            if($res === false) {
                return $this->ajaxError('启用发型失败');
            }
        }
    
        return $this->ajaxSuccess('启用发型成功');
    }
    
    
    public function hairstyleDisable() {
        $hairstyleIds = isset($_POST['hairstyleIds']) ? trim($_POST['hairstyleIds'], ',') : '';
        if($hairstyleIds == '') {
            return $this->ajaxError('发型ID错误');
        }
    
        $hairstyleIds = explode(',', $hairstyleIds);
        foreach($hairstyleIds as $hairstyleId) {
            if($hairstyleId <= 0) {
                return $this->ajaxError('发型ID错误');
            }
             
            $res = $this->hairstyle_model->edit(array('status'=>2), $hairstyleId);
            if($res === false) {
                return $this->ajaxError('删除发型失败');
            }
        }
    
        return $this->ajaxSuccess('删除发型成功');
    }
    
    
    public function hairstyleDetele() {
        $hairstyleIds = isset($_POST['hairstyleIds']) ? trim($_POST['hairstyleIds'], ',') : '';
        if($hairstyleIds == '') {
            return $this->ajaxError('发型ID错误');
        }
    
        $hairstyleIds = explode(',', $hairstyleIds);
        foreach($hairstyleIds as $hairstyleId) {
            if($hairstyleId <= 0) {
                return $this->ajaxError('发型ID错误');
            }
             
            $res = $this->hairstyle_model->edit(array('status'=>3), $hairstyleId);
            if($res === false) {
                return $this->ajaxError('删除发型失败');
            }
        }
    
        return $this->ajaxSuccess('删除发型成功');
    }
    
    
    public function complexionEnabled() {
        $complexionIds = isset($_POST['complexionIds']) ? trim($_POST['complexionIds'], ',') : '';
        if($complexionIds == '') {
            return $this->ajaxError('肤色ID错误');
        }
    
        $complexionIds = explode(',', $complexionIds);
        foreach($complexionIds as $complexionId) {
            if($complexionId <= 0) {
                return $this->ajaxError('肤色ID错误');
            }
             
            $res = $this->complexion_model->edit(array('status'=>1), $complexionId);
            if($res === false) {
                return $this->ajaxError('启用肤色失败');
            }
        }
    
        return $this->ajaxSuccess('启用肤色成功');
    }
    
    
    public function complexionDisable() {
        $complexionIds = isset($_POST['complexionIds']) ? trim($_POST['complexionIds'], ',') : '';
        if($complexionIds == '') {
            return $this->ajaxError('肤色ID错误');
        }
    
        $complexionIds = explode(',', $complexionIds);
        foreach($complexionIds as $complexionId) {
            if($complexionId <= 0) {
                return $this->ajaxError('肤色ID错误');
            }
             
            $res = $this->complexion_model->edit(array('status'=>2), $complexionId);
            if($res === false) {
                return $this->ajaxError('禁用肤色失败');
            }
        }
    
        return $this->ajaxSuccess('禁用肤色成功');
    }
    
    
    public function complexionDetele() {
        $complexionIds = isset($_POST['complexionIds']) ? trim($_POST['complexionIds'], ',') : '';
        if($complexionIds == '') {
            return $this->ajaxError('肤色ID错误');
        }
    
        $complexionIds = explode(',', $complexionIds);
        foreach($complexionIds as $complexionId) {
            if($complexionId <= 0) {
                return $this->ajaxError('肤色ID错误');
            }
             
            $res = $this->complexion_model->edit(array('status'=>3), $complexionId);
            if($res === false) {
                return $this->ajaxError('删除肤色失败');
            }
        }
    
        return $this->ajaxSuccess('删除肤色成功');
    }
}