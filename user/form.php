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
        if ($_SESSION['adm'] == 1)
            echo "<meta http-equiv='refresh' content='0.00001; URL=../adm/home.php'/>";
        else
            echo "<meta http-equiv='refresh' content='0.00001; URL=../user/index.php'/>";
        
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
        echo "<script> alert('Pergunta registrada!')</script>";
    }

    else
    {
        echo "<script> alert('Você não está logado!') </script>";
        echo "<meta http-equiv='refresh' content='0.00001; URL=../user/login.php'/>";
    }

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

if (isset($_POST['cadastro']))
{
    require_once("../adm/functions.php");
    $conn = returnConnection();
    $email = $_POST['email'];
    $senha = MD5($_POST['pass']);
    $adm = $_POST['adm'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    $text = "INSERT INTO usuarios (nome, sobrenome, email, senha, adm) VALUES ('$nome', '$sobrenome', '$email', '$senha', $adm)";
    if ($conn -> query($text)){ //verificar erro de conexao com condicao 
        echo "<script> alert('Usuario registrado!')</script>";
        echo "<meta http-equiv='refresh' content='0.00001; URL=../adm/home.php'/>";
    }
    else{
        echo "<script> alert('Usuario não cadastrado!')</script>";
        //$_SERVER['HTTP_REFERER']
        // pesquisar como voltar com a pagina com formulario preenchido (back-1)
    }
}

if (isset($_POST['register']))
{
    require_once("../adm/functions.php");
    $conn = returnConnection();
    $email = $_POST['email'];
    $senha = MD5($_POST['pass']);
    $adm = 0; // sempre que um usuário se cadastrar por aqui ele é normal

    $text = "INSERT INTO usuarios (nome, sobrenome, email, senha, adm) VALUES ('$nome', '$sobrenome', '$email', '$senha', $adm)";
    $conn -> query($text);
    echo "<script> alert('Usuario registrado!')</script>";
    echo "<meta http-equiv='refresh' content='0.00001; URL=../user/index.php'/>";

}


if (isset($_POST['alteraPost']))
{
    require_once("../adm/functions.php");
    $conn = returnConnection();

    $title = $_POST['alteraPost'];
    $text = $_POST['text'];
    $text1 = $_POST['text1'];
    $imgbackground = $_POST['imgbackground'];
    $img = $_POST['img'];

    $text = "UPDATE posts SET text ='$text', text1 = '$text1', imgbackground='$imgbackground', img = '$img' WHERE title = '$title'";

    $conn -> query($text);
    echo "<script> alert('Postagem Alterada!')</script>";
    echo "<meta http-equiv='refresh' content='0.00001; URL=../adm/gerenciarpostagens.php?titulo=Proteção'/>";
}

?>