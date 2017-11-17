<?php
class Model_model extends MY_Model{

    protected $tableName = "model_size";
    protected $primaryKey = 'model_size_id';
    public function __construct() {
    }
    
    public function getSizeByParams($params, $page = 1, $pageSize = 20) {
        $sql = 'select * from ' . $this->tableName . ' where 1 ';
        $binds = array();
        foreach($params as $k => $v) {
            $binds[':' . $k]= $v;
            $sql .= ' and ' . $k . '=:' . $k;
        }
        return $this->page($sql, $binds, $page, $pageSize);
    }
    
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
     * 修改商品信息
     * @param unknown $params
     * @param unknown $goodsId
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
    
    public function delete($params) {
        if(empty($params)) {
            return false;
        }
        $res = $this->db->delete($this->tableName, $params);
        if($res === false) {
            return false;
        }
        return $res;
    }
}
