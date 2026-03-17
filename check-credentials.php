<?php

// print_r($_POST);
$username = $_POST['username'];
$password = $_POST['password'];

if((!empty($username) || !empty($password)) && ($username === 'Admin' && $password === '123')){
    session_start();

    $_SESSION['username'] = $username;
    $_SESSION['role'] = 'admin';

    header('Location: ./home.php');
    exit;
}else{
    header('Location: ./login.php');
    exit;
}