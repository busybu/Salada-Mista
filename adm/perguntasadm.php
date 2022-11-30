<?php
// COLOCAR ISSO EM TODAS AS PÁGINAS DE ADM PARA VERIFICAR O LOGIN
session_start();
require_once("../adm/functions.php");
if (!verifyLogin()) {
    echo "<script> alert('Sessão não iniciada.') </script>";
    redirectLogin();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/perguntasadm.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/scrollreveal.min.js">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
    <section class="perguntas-revisar">
        <form action='gerenciarperguntas.php' method='GET'>
            <?php
                $conn = returnConnection();
                $result = $conn -> query('SELECT id, texto_pergunta, resposta FROM perguntas ORDER BY id DESC');
                while($row = $result->fetch_assoc())
                {
                    echo '<div class="card-divisor">';
                        echo '<div class="card">';
                            echo '<div class="card-header">';
                                echo 'Pergunta ID: ', $row['id'];
                            echo '</div>';
                        echo '<div class="card-body">';
                        echo '<blockquote class="blockquote mb-0">';
                            echo '<p>';
                            echo $row['texto_pergunta'];
                            echo '</p>';
                        echo '<footer class="blockquote-footer">';
                        echo $row['resposta'];
                        echo '</footer>';
                    echo '</blockquote>';
                    $id = $row['id'];
                    $link = 'href="gerenciarperguntas.php?excl=' . $id . '"';

                    $confirm = ' onclick="'. "return confirm('Tem certeza que deseja deletar este registro?')" . '"';
                    echo '<a ', $link, $confirm, ' class="btn btn-outline-danger" name="excl" value=', $row["id"],'>Excluir</a>';
                    echo '<button type="submit" class="btn btn-outline-success" name="resp" value=',$row['id'];
                        echo '>Responder</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            ?>

                    
                </div>
            </div>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>