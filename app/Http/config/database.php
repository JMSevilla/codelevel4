<?php

class dbmanagement { 
    private $host = "localhost";
    private $username = "root";
    private $pass = "";
    private $databasename = "dbusermanagement";
    private $stmt;
    private $cons;

    public function access() {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->databasename;
            $this->cons = new PDO($dsn, $this->username, $this->pass);
            $this->cons->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->cons;
        } 
        catch (PDOException $exceptionn) {
            die("Could not connect to the database " . $exceptionn->getMessage());
        }
    }
    public function querystring($sql)
    {
        return $this->stmt = $this->access()->prepare($sql);
    }
    public function encrypt($password) { 
        return password_hash($password, PASSWORD_DEFAULT);
    }
    public function bind($param, $val, $type=null){
        if(is_null($type))
        {
            switch(true){
                case $type == 1:
                    $type = PDO::PARAM_INT;    
                break;
                case $type == 2:
                    $type = PDO::PARAM_BOOL;    
                break;
                case $type == 3:
                    $type = PDO::PARAM_NULL;    
                break;
                default:
                $type = PDO::PARAM_STR; 
            }
        }
        return $this->stmt->bindParam($param, $val, $type);
    }
    public function execution(){
        return $this->stmt->execute();
    }
}


