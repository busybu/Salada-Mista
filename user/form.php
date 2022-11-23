<?php

session_start();
$conexao = "localhost";
$username = "root";
$password = "";
$banco = "saladamista";

$mysqli = new mysqli($conexao, $username, $password, $banco);


if (isset($_POST["Login"]))
{
    $result = $mysqli -> query("SELECT * FROM usuarios");
    $confirm = false;
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc())
        {
            $id = $row["id"];
            $email = $row["email"];
            $senha = $row["senha"];
            if ($email == $_POST['email'] && $senha == $_POST['senha'])
            {
                $confirm = true;
                break;
            }
        }
    }
    
    if ($confirm)
    {
        $_SESSION['loginUser'] = $email;
        $_SESSION['passUser'] = $senha;
        
        echo "<meta http-equiv='refresh' content='0.00001; URL=adm/home.php'/>";
    }
    else
    {
        echo "Login ou senha não encontrado";
    }
}

$mysqli->close();
?>