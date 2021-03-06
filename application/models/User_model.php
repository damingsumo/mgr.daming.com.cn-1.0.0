<?php
class User_model extends MY_Model{

    protected $tableName = "user";
    protected $primaryKey = 'uid';
    public function __construct() {
    }
    
    /***
     * 通过数组查询商家数量
     *
     * @param unknown $params
     * @return number|unknown
     */
    public function getUsersCountByParams($params) {
        $sql = 'select count(*) as total from ' . $this->tableName . ' where 1 ';
        if(isset($params['value'])) {
            $sql .= ' and name like "%' . $params['value']. '%" ';
            unset($params['value']);
        }
        $binds = array();
        foreach($params as $k => $v) {
            $binds[':' . $k]= $v;
            $sql .= ' and ' . $k . '=:' . $k;
        }
//     print_r($sql);exit;
        $data = $this->select_one($sql, $binds);
        return isset($data['total']) ? $data['total']: 0;
    }
    /***
     * 通过数组查询商家信息
     *
     * @param unknown $params
     */
    public function getUsersByParams($params, $page = 1, $pageSize = -1) {
        $sql = 'select * from ' . $this->tableName . ' where 1=1';
        if(isset($params['value'])) {
            $sql .= ' and name like "%' . $params['value']. '%" ';
            unset($params['value']);
        }
        $binds = array();
        if(!empty($params)) {
            foreach($params as $k => $v) {
                $binds[':' . $k] = $v;
                $sql .= ' and ' . $k . '=:' . $k;
            }
        }
    
        return $this->page($sql, $binds, $page, $pageSize);
    }
    
    /**
     *
     * 添加商户信息
     *
     * @param unknown $params
     * @return int
     */
    public function add($params) {
        if(empty($params)) {
            return false;
        }
        $res = $this->db->insert($this->tableName, $params);
        if($res === false) {
            return false;
        }
        return $this->db->insert_id();
    }
    
    
    public function edit($params, $sellerId) {
        if(empty($params)) {
            return false;
        }
        $res = $this->db->update($this->tableName, $params, array('sid'=>$sellerId));
        if($res === false) {
            return false;
        }
        return $res;
    }
    
    public function row($fields = '*', $primaryKey, $returnType = 'Array') {
        if(!$primaryKey) {
            return false;
        }
        if(is_array($fields) && !empty($fields)) {
            $fields = implode(',', $fields);
        } else {
            $fields = '*';
        }
        $sql = 'select '.$fields.' from '.$this->tableName.' where '.$this->primaryKey.'=:'.$this->primaryKey;
        return $this->select_one($sql, array(':'.$this->primaryKey=>$primaryKey), $returnType);
    }
}