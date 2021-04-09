<?php 
spl_autoload_register('route_controller');
class Models extends Controller { 
    public function registration() {
        $data = [
            "fname" => $_POST['fname'],
            "lname" => $_POST['lname'],
            "uname" => $_POST['uname'],
            "pass" => $_POST['pass']
        ];
        $this->create($data);
    }
}

function route_controller() {
    include("../route/web.php");
    include_once $routing['controller'];
}