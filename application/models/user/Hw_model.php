<?php
class Hw_model extends MY_Model{

    private $tableName = "user_hw";
    protected $primaryKey = 'user_hw_id';
    public function __construct() {
    }

    /***
     *
     * 通过数组获得用户身材信息数量
     * @param unknown $params
     * @return number
     */
    public function gethwsCountByParams($params) {
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
     * 通过数组获得用户身材信息
     *
     * @param unknown $params
     * @param number $page
     * @param unknown $pageSize
     */
    public function gethwsByParams($params, $page = 1, $pageSize = -1) {
        $sql = 'select * from ' . $this->tableName . ' where 1=1';
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