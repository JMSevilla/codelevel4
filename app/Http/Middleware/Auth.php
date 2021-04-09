<?php
spl_autoload_register('route_database');
class Middleware extends dbmanagement { 
    public function authUser($data){
        include("../Queries/queries.php");
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if($this->querystring($queryIdentifier['authuser::users'])){
                $this->bind(":fname", $data['fname']);
                $this->bind(":lname", $data['lname']);
                $this->bind(":uname", $data['uname']);
                $this->bind(":pass", $this->encrypt($data['pass']));
                if($this->execution())
                {
                    echo json_encode(array("statusCode" => 200));
                }
            }
        }
    }
}

function route_database() {
    include("../route/web.php");
    include_once $routing['database'];
}