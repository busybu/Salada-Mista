<?php
$servidor = 'localhost';
$banco = 'saladamista';
$usuario = 'root';
$senha = '123';

$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

if(!$mysqli)
{
    echo "erro ao conectar ao banco de dados!";
    exit();
}

else
{
    echo "deu boa arrombado";
 }