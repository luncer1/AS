<?php

if(!session_id())
{
    session_start();
}

$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';


if(!empty($role)){
    header("Location:"._APP_URL);
}


?>