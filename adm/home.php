<?php
    // COLOCAR ISSO EM TODAS AS PÁGINAS DE ADM PARA VERIFICAR O LOGIN
    session_start();
    require_once("../adm/functions.php");
    if (!verifyLogin()){
        echo "<script> alert('Sessão não iniciada.') </script>";
        redirectLogin();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo
        <?php echo $_SESSION['loginUser']; ?>
    </title>
</head>
<body>
    <div>Coco</div>
</body>
</html>