<?php

class Database {
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_pass = '';
    private $db_name = 'crud-oop-project';

    private $conn = false;
    private $mysqli = '';
    private $result = array();

    //connection
    public function __construct(){
        if(!$this->conn){
            $this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
            $this->conn = true;

            if($this->mysqli->connect_errno > 0){
                return false;
                array_push($this->result,$this->mysqli->error);
            }else{
                return true;
            }
        }else{
            return false;
        }
    }

    //insertion
    public function insert($table, $params=array()){
        if($this->tableInDb($table)){
            $col = implode(', ',array_keys($params));
            $val = implode("', '",$params);

            $sql = "INSERT INTO $table ($col) VALUES('$val')";

            if($this->mysqli->query($sql)){
                array_push($this->result,$this->mysqli->insert_id);
                return true;
            }
        }else{
            return false;
        }
    }

    //table in db
    private function tableInDb($table){
        $sql = "SHOW TABLES LIKE '$table' ";

        $query = $this->mysqli->query($sql);

        if($query->num_rows > 0){
            return true;
        }else{
            array_push($this->result,$table." not present in database");
            return false;
        }
    }

    //print result
    public function result(){
        $data = $this->result;
        $this->result = array();
        return $data;
    }

    //connection close
    public function __destruct(){
        if($this->conn){
            if($this->mysqli->close()){
                $this->conn = false;
                return true;
            }
        }else{
            return false;
        }
    }

}


?>