<?php
    function login()
    {
        session_start();
        if (isset($_SESSION['email_login']) && $_SESSION['senha_login'])
        {
            $servidor = "localhost";
            $php_usuario = "root"; # Isso tem que mudar em todos os pcs
            $senha = ""; # Isso tambem tem que mudar em todos os pcs
            $banco = "saladamista"; # Isso tem que criar no phpmyadmin
            $mysqli = new mysqli($servidor, $php_usuario, $senha, $banco);
            $text = "SELECT username, password, adm FROM usuarios WHERE username =" . "'$_SESSION[email_login]'" . " AND password = '" . $_SESSION['senha_login'] . "'"
    
            $result = $mysqli -> query($text);
            $confirm = false;
    
            if ($result -> num_rows > 0)
                return true;
            return false;
        }
    }
?>