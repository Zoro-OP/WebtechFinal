<?php
require_once '../model/db_connect.php';

function getAllUsers(){
    $query = "select * from taskuser";
    return get($query);
}


 ?>