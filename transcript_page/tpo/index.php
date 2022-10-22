<?php

include '../database_connection.php';
include '../function.php';

if(!is_admin_login()){
    header('location:../tpo_login.php');
}

include '../header.php';

?>