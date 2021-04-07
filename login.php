<?php

session_start();

$a = [
    'login' => 'login',
    'password' => 12345,
];


if(isset($_POST['login'])&& isset($_POST['password'])){   
if ($_POST['login'] == $a['login'] && $_POST['password'] == $a['password']){
   echo $_SESSION['isLogedIn']=1;
}else{
    echo "'Welcome!' $a[login]";
}
}

if(!isset($_SESSION['isLogedIn']) || $_SESSION['isLogedIn']!==1){
   echo '<form method = "POST" action = "index.php">';
   echo '<input type ="text" name="login">';
   echo '<br>';
   echo '<input type = "password" name ="password">';
   echo '<br>';
   echo '<input type="submit">';
   echo '</form>';
}




