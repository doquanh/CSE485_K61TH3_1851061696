<?php 

session_start();
session_destroy();
header("location:login.html?error= mời đăng nhập");