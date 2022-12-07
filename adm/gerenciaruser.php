<?php
if (@$_GET['excl'])
    {
        session_start();
        require_once("../adm/functions.php");
        if (!verifyLogin() || $_SESSION['adm'] != 1){
            echo "<script> alert('Não autorizado.') </script>";
            redirectLogin();
        }
        $conn = returnConnection();
        $text = "DELETE FROM usuarios WHERE id =" . $_GET['excl'];
        $conn -> query($text);
        echo "<script> alert('Usuario apagado!')</script>";
        echo "<meta http-equiv='refresh' content='0.00001; URL=../adm/cadastros.php'/>";
    }
?>