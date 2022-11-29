<?php
    // COLOCAR ISSO EM TODAS AS PÁGINAS DE ADM PARA VERIFICAR O LOGIN
    session_start();
    require_once("../adm/functions.php");
    if (!verifyLogin() || $_SESSION['adm'] != 1){
        echo "<script> alert('Não autorizado.') </script>";
        redirectLogin();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admhome.css">
    <title>Bem vindo
        <?php echo $_SESSION['loginUser']; ?>
    </title>
</head>
<body>
    <header>
        <div class="header-box">
            <p>Olá,
                <?php echo $_SESSION['loginUser']; ?>
            </p>
            <img src="../img/5.png" alt="">
        </div>
    </header>
    <section class="options-container">
        <div class="options-box">
            <div class="options">
                <button>Postagens</button>
                <button>Perguntas</button>
                <button>Usuários</button>
                <button>Sair</button>
            </div>
            <div class="img-box">
                
            </div>
        </div>
    </section>
</body>
</html>