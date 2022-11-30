<?php
function returnConnection(){
    $conexao = "localhost";
    $username = "root";
    $password = "";
    $banco = "saladamista";
    
    return new mysqli($conexao, $username, $password, $banco);
}

function verifyLogin(){
    if (!session())
        return false;
    
    $mysqli = returnConnection();
    $email = $_SESSION['loginUser'];
    $pass = MD5($_SESSION['passUser']);
    $result  = $mysqli -> query("SELECT * FROM usuarios WHERE email = '$email' and senha = '$pass'");
    if ($result->num_rows > 0)
    {
        $_SESSION['adm'] = $result->fetch_assoc()['adm'];
        return true;
    }
    return false;
}

function session(){
    if (isset($_SESSION['loginUser']) && isset($_SESSION['passUser']) && $_SESSION['loginUser'] != "" && $_SESSION['passUser'] != "")
        return true;
    $_SESSION['loginUser'] = "user";
    $_SESSION['passUser'] = "";
    $_SESSION['adm'] = 0;
    return false;
        
}

function Error404()
{
    echo "<meta http-equiv='refresh' content='0.00001; URL=../user/404error.php'/>";
}

function redirectLogin()
{
    echo "<meta http-equiv='refresh' content='0.00001; URL=../user/login.php'/>";
}
?>