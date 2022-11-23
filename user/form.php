<?php

if (isset($_POST["Login"]))
{
    session_start();
    require_once("../adm/functions.php");
    $_SESSION['loginUser'] = $_POST['email'];
    $_SESSION['passUser'] = $_POST['senha'];


    $confirm = verifyLogin();
    if ($confirm)
    {    
        echo "<meta http-equiv='refresh' content='0.00001; URL=../adm/home.php'/>";
    }
    else
    {
        echo "<script> alert('usuario ou senha não encontrado.') </script>";
        echo "<meta http-equiv='refresh' content='0.00001; URL=../user/login.php'/>";
    }
}
?>