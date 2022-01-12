<?php 

session_start();
session_destroy();
header("location:form_login.php?error= mời đăng nhập");