<?php
class Goods_model extends MY_Model{

    protected $tableName = "goods";
    protected $primaryKey = 'gid';
    public function __construct() {
    }
    
    /***
     * 
     * 通过数组获得商品数量
     * @param unknown $params
     * @return number
     */
    public function getGoodsCountByParams($params) {
        $sql = 'select count(*) as total from ' . $this->tableName . ' where 1 ';
        if(isset($params['value'])) {
            $sql .= ' and goods_name like "%' . $params['value']. '%" ';
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
     * 通过数组获得商品信息
     * @param unknown $params
     * @param number $page
     * @param number $pageSize
     * @return ArrayObject|unknown
     */
    public function getGoodsByParams($params, $page = 1, $pageSize = 20) {
        $sql = 'select * from ' . $this->tableName . ' where 1 ';
        if(isset($params['value'])) {
            $sql .= ' and goods_name like "%' . $params['value']. '%" ';
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
     * 
     * 添加商品信息
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
     * 修改商品信息
     * @param unknown $params
     * @param unknown $goodsId
     * @return boolean|unknown
     */
    public function edit($params, $goodsId) {
        if(empty($params)) {
            return false;
        }
        $res = $this->db->update($this->tableName, $params, array('gid'=>$goodsId));
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