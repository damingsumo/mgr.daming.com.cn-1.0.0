<?php
if (!defined('BASEPATH')) exit('No direct access allowed.');
class MY_Model extends CI_Model {
    private $STMT = null;
    protected $_tableName ;
    protected $_primaryKey;
    private function bind($param, $var) {
		if (! isset ( $param )) {
			return;
		}
		if (null == $param) {
			return;
		}
		if (! isset ( $this->STMT )) {
			return;
		}
		$this->STMT->bindParam ( $param, $var );
	}
    
    
    public function page($sql, $binds, $page, $pageSize) {
        $limitSQL = '';
        if ($pageSize > 0) {
            $limitSQL = " limit " . (($page - 1) * $pageSize) . ", " . $pageSize;
        }
        return $this->select ( $sql . $limitSQL, $binds, $page, $pageSize);
    
    }
    
    public function select($sql, $binds, $page, $pageSize, $returnFormat = 'Array', $close = true) {
        $this->STMT = $this->db->conn_id->prepare($sql);
        if (is_array ( $binds ) && ! empty ( $binds )) {
            $i = 0;
            foreach ( $binds as $param => $var ) {
                $i ++;
                if (! $param || is_numeric ( $param )) {
                    $param = $i;
                } else if ($param [0] != ':') {
                    $param = ':' . $param;
                }
                $this->bind ( $param, $var );
            }
        }
        $this->STMT->execute ();
        $results = $this->STMT->fetchAll ( PDO::FETCH_ASSOC );
        
        if (strtolower ( $returnFormat ) == 'array') {
            return $results;
        }
        $object = new ArrayObject ( );
		if (! empty ( $results )) {
			$model = new $returnFormat ( );
			foreach ( $results as $row ) {
				$model = clone $model;
				$model->setRow ( $row );
				$object->append ( $model );
			}
		}
		return $object;
    }
    
    
    public function select_one($sql, $binds = array(), $returnFormat = 'Array', $close = false) {
        $results = $this->select ( $sql, $binds, 'Array', $close );
        if (strtolower ( $returnFormat ) == 'array') {
            return isset ( $results [0] ) && is_array ( $results [0] ) ? $results [0] : array ();
        } else {
            $model = new $returnFormat ( );
            if (isset ( $results [0] ) && is_array ( $results [0] ) && ! empty ( $results [0] )) {
                $model->setRow ( $results [0] );
            }
            return $model;
        }
    }
    
    public function remove($sql, $binds = array(), $close = false) {
        return $this->execute ( $sql, $binds, $close, "delete" );
    }
    
    public function execute($sql, $binds = array(), $close = false, $type = "other") {
    		$this->STMT = $this->db->conn_id->prepare ( $sql );
    		if (! $this->STMT)
    			return false;
    		try {
    			if (is_array ( $binds ) && ! empty ( $binds )) {
    				$i = 0;
    				foreach ( $binds as $param => $var ) {
    					$i ++;
    					if (! $param || is_numeric ( $param )) {
    						$param = $i;
    					} else if ($param [0] != ':') {
    						$param = ':' . $param;
    					}
    					$this->bind ( $param, $var );
    				}
    			}
    			$result = $this->STMT->execute ();
    			if ($result == false) {
    				$error = $this->STMT->errorInfo ();
    				return false;
    			}
    			
    		// 			if ($close !== false) {
    		// 				var_dump(222);
    		// 				$this->STMT_close();
    		// 				$this->write_close();
    		// 			}
    		
    
    		} catch ( Exception $e ) {
    			echo 'SQL:' . self::$lastSQL;
    			ECHO '<HR>错误原因:' . $e->getMessage ();
    			return false;
    		}
    		return $result;
    	}
	
}