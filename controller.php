<?php
include ("model.php");
if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];          
        
        $user = new User($username, $password);
        if($user->validateAutentication()) {
            header('Location: welcome.php?username=' . $username); 
            exit;
        } else {
            header('Location: login.php?error=true');
            exit;
        }
} else {
    header('Location: login.php');
    exit;
}