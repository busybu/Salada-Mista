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

if (isset($_POST['confirmQuest']))
{
    session_start();
    require_once("../adm/functions.php");
    
    $confirm = verifyLogin();
    if ($confirm)
    {
        $conn = returnConnection();
        $question = $_POST['quest'];
        $conn -> query("INSERT INTO perguntas (texto_pergunta) VALUES ('$question')");
    }

    else
    {
        echo "<script> alert('Você não está logado!') </script>";
        echo "<meta http-equiv='refresh' content='0.00001; URL=../user/login.php'/>";
    }

    echo "<script> alert('Pergunta registrada!')</script>";
    echo "<meta http-equiv='refresh' content='0.00001; URL=../user/perguntas.php'/>";
}

if (isset($_POST['alteraQuest']))
{
    require_once("../adm/functions.php");
    $conn = returnConnection();
    $text = "UPDATE perguntas SET texto_pergunta ='" . $_POST['post_text'] . "', resposta ='" . $_POST['post_resp'] . "' WHERE id =" . $_POST['alteraQuest'];

    $conn -> query($text);
    echo "<script> alert('Resposta registrada!')</script>";
    echo "<meta http-equiv='refresh' content='0.00001; URL=../adm/perguntasadm.php'/>";
}
?>