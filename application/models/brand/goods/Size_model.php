<?php
class Size_model extends MY_Model{

    protected $tableName = "goods_size";
    protected $primaryKey = 'goods_size_id';
    public function __construct() {
    }
    
    /***
     * 
     * 通过数组获得商品上衣尺码数量
     * @param unknown $params
     * @return number
     */
    public function getSizesCountByParams($params) {
        $sql = 'select count(*) as total from ' . $this->tableName . ' where 1 ';
        $binds = array();
        foreach($params as $k => $v) {
            $binds[':' . $k]= $v;
            $sql .= ' and ' . $k . '=:' . $k;
        }
    
        $data = $this->select_one($sql, $binds);
        return isset($data['total']) ? $data['total']: 0;
    }
    
    /***
     * 通过数组获得商品上衣信息
     * @param unknown $params
     * @param number $page
     * @param number $pageSize
     * @return ArrayObject|unknown
     */
    public function getSizesByParams($params, $page = 1, $pageSize = 20) {
        $sql = 'select * from ' . $this->tableName . ' where 1 ';
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
    
    
    
    public function delete($params) {
        if(empty($params)) {
            return false;
        }
        $sql = 'delete from '. $this->tableName . ' where 1 '; 
        $binds = array();
        foreach($params as $k => $v) {
            $binds[':' . $k]= $v;
            $sql .= ' and ' . $k . '=:' . $k;
        }
        return $this->remove($sql, $binds);
    }
    
//     /***
//      * 
//      * 修改商品信息
//      * @param unknown $params
//      * @param unknown $goodsId
//      * @return boolean|unknown
//      */
//     public function edit($params, $goodsId) {
//         if(empty($params)) {
//             return false;
//         }
//         $res = $this->db->update($this->tableName, $params, array('sid'=>colourCollocationId));
//         if($res === false) {
//             return false;
//         }
//         return $res;
//     }
//     public function detail($goodsId) {
//         $goodsId =1;
//         return $this->db->row($this->tableName, array('gid'=>$goodsId));
//     }
}