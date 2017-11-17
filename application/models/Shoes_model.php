<?php
class Shoes_model extends MY_Model{

    protected $tableName = "shoes";
    protected $primaryKey = 'shoes_id';
    public function __construct() {
    }
    /***
     * 通过数组查询数量
     * 
     * @param unknown $params
     * @return number|unknown
     */
    public function getShoesCountByParams($params) {
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
    
    /**
     * 通过数组获得查询鞋子信息
     * 
     * @param unknown $params
     * @param number $page
     * @param number $pageSize
     */
    public function getShoesByParams($params, $page = 1, $pageSize = -1) {
        $sql = 'select * from ' . $this->tableName . ' where 1 ';
        if(isset($params['value'])) {
            $sql .= ' and name like "%' . $params['value']. '%" ';
            unset($params['value']);
        }
        $binds = array();
        foreach($params as $k => $v) {
            $binds[':' . $k]= $v;
            $sql .= ' and ' . $k . '=:' . $k;
        }
        return $this->page($sql, $binds, $page, $pageSize);
    }
    
    /***
     * 添加鞋子种类
     * 
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
     * 修改鞋子种类
     * 
     * @return boolean|unknown
     */
    public function edit($params, $primaryKey) {
        if(empty($params)) {
            return false;
        }
        $res = $this->db->update($this->tableName, $params, array($this->primaryKey=>$primaryKey));
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