<?php


include 'login.php';

if(isset($_GET['logOut']) && $_GET['logOut']==1){
    include 'logOut.php';
}

if(isset($_SESSION['isLogedIn'])){
    include 'menu.php';
}
