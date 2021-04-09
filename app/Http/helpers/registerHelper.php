<?php
spl_autoload_register('route_models');
if(isset($_POST['trigger']) == true)
{
    $callback = new Models();
    $callback->registration();
}

function route_models() {
    include("../route/web.php");
    include_once $routing['models'];
}