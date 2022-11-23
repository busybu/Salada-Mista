<?php
function returnConnection(){
    $conexao = "localhost";
    $username = "root";
    $password = "123";
    $banco = "saladamista";
    
    return new mysqli($conexao, $username, $password, $banco);
}

function verifyLogin(){
    session_start();
    if (session())
        return false;

    $conexao = "localhost";
    $username = "root";
    $password = "123";
    $banco = "saladamista";
    
    $mysqli = new mysqli($conexao, $username, $password, $banco);
    $result  = $mysqli -> query("SELECT * FROM usuarios WHERE email = $_SESSION['loginUser']");
    if ($result->num_rows > 0)
        return true;
    return false;
}

function session(){
    if (isset($_SESSION['loginUser']) && isset($_SESSION['passUser']) && $_SESSION['loginUser'] != "" && $_SESSION['passUser'] != "")
        return false;
    $_SESSION['loginUser'] = "";
    $_SESSION['passUser'] = "";
    return true;
        
}

function Error404()
{
    echo "<meta http-equiv='refresh' content='0.00001; URL=../user/404error.php'/>";
}
?>