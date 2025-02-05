<?php

class Database{
    public $conn;
    public string $local = "10.38.0.126";
    public string $db = "crudphp";
    public string $user = "devweb";
    public string $passwords = "suporte@22";
    public $table;
    

    public function __construct($table = null){
        $this->table = $table;
        $this->Conecta();
    }

    public function Conecta(){
        try{
            $this->conn = new PDO('mysql:host=' .$this->local. ';dbname=' .$this->db, $this->user, $this->passwords);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }catch(PDOException $e){
            die('ERROR: ' . $e->getMessage());
        }
    }

    public function execute($query, $binds = []){
        try{
            $stmt = $this->conn->prepare($query);
            $stmt->execute($binds);
            return $stmt;
        }catch (PDOException $err) {
            die("Connection Failed: " . $err->getMessage());
        }
    }

    public function insert($values){
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');


        $query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';
        $this->execute($query, array_values($values));

        return $this->conn->LastInsertId();
    }

    public function select($where = null, $params = [], $order = null, $limit = null, $fields = '*') {
        $whereClause = is_string($where) && strlen($where) ? 'WHERE ' . $where : '';
        $orderClause = is_string($order) && strlen($order) ? 'ORDER BY ' . $order : '';
        $limitClause = is_string($limit) && strlen($limit) ? 'LIMIT ' . $limit : '';
    
        $query = 'SELECT ' . $fields . ' FROM ' . $this->table . ' ' . $whereClause . ' ' . $orderClause . ' ' . $limitClause;
    
        return $this->execute($query, $params);
    }
    

    public function delete($where, $params = []) {
        $sql = 'DELETE FROM ' . $this->table . ' WHERE ' . $where;
        $result = $this->execute($sql, $params); 
    
        return $result ? true : false;
    }
    

    public function update($where, $values, $paramsWhere) {
        $fields = array_keys($values);
        
        
        $query = 'UPDATE ' . $this->table . ' SET ' . implode(' = ?, ', $fields) . ' = ? WHERE ' . $where;
    
        
        $params = array_merge(array_values($values), $paramsWhere);
    
        return $this->execute($query, $params);
    }
    
}
?>
