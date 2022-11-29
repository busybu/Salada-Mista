<?php
    // COLOCAR ISSO EM TODAS AS PÁGINAS DE ADM PARA VERIFICAR O LOGIN
    session_start();
    require_once("../adm/functions.php");
    if (!verifyLogin() || $_SESSION['adm'] != 1){
        echo "<script> alert('Não autorizado.') </script>";
        redirectLogin();
    }

    if (@$_GET['excl'])
    {
        $conn = returnConnection();
        $text = "DELETE FROM perguntas WHERE id =" . $_GET['excl'];
        $conn -> query($text);
        echo "<script> alert('Pergunta apagada!')</script>";
        echo "<meta http-equiv='refresh' content='0.00001; URL=../adm/perguntasadm.php'/>";
    }

    $conn = returnConnection();
    $text = 'SELECT id, texto_pergunta, resposta FROM perguntas WHERE id =' . $_GET["resp"];
    $result = $conn -> query($text);
    $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <form action="../user/form.php" method="POST">
        <div class="card-divisor">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="post_text"><?php echo $row['texto_pergunta'] ?></textarea>
                <label for="floatingTextarea2">
                    Pergunta
                </label>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="post_resp"><?php echo $row['resposta'];?></textarea>
                <label for="floatingTextarea2">
                        Resposta
                </label>
            </div>
            <button class="btn btn-primary" type="submit" name="alteraQuest" value=<?php echo $row['id'] ?>>
                Alterar
            </button>
        </div>
    </form>
</body>
</html>