<?php 
    session_start();


if(isset($_POST['submit'])){
    
    $username = "admin";
    $password = "admin";

    if ((isset($_POST['nombre'])) & (isset($_POST['password']))){
        $nombre = $_POST ['nombre'];
        $pass = $_POST ['password'];
    }else{
        header("location:index.html");
    }

}else{
    header("location:index.html");
}
?>