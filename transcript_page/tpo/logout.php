<?php

session_start();

session_destroy();

header('location:../tpo_login.php');
?>