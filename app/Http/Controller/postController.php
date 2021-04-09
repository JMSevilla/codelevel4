<?php
spl_autoload_register('route_middleware');
class Controller extends Middleware { 
    public function create($data) { 
        $this->authUser($data);
    }
}

function route_middleware() {
    include("../route/web.php");
    include_once $routing['middleware'];
}