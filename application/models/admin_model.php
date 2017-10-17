<?php
class Admin_model extends MY_Model{

    protected $tableName = "admin";
    protected $primaryKey = 'admin_id';
    public function __construct() {
    }
    
    /***
     *
     * 通过数组获得
     * @param unknown $params
     * @return number
     */
    public function getAdminsCountByParams($params) {
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
    
        $data = $this->select_one($sql, $binds);
        return isset($data['total']) ? $data['total']: 0;
    }
    /***
     * 通过数组获得管理员信息
     * 
     * @param unknown $params
     * @param number $page
     * @param unknown $pageSize
     */
    public function getAdminsByParams($params, $page = 1, $pageSize = -1) {
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
    
    /***
     *
     * 添加管理员信息
     * @param unknown $params
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
    
    /***
     *
     * 修改管理员信息
     * @param unknown $params
     * @param unknown $brandId
     */
    public function edit($params,$primaryKey) {
        if(empty($params)) {
            return false;
        }
        $res = $this->db->update( $this->tableName, $params, array($this->primaryKey=>$primaryKey));
        if($res === false) {
            return false;
        }
        return $res;
    }
    
    
    /***
     * 
     * 通过主键获得管理员单条信息
     * 
     * @param string $fields
     * @param unknown $primaryKey
     * @param string $returnType
     * @return boolean|unknown
     */
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