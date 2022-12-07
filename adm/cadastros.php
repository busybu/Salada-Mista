<?php
    // COLOCAR ISSO EM TODAS AS PÁGINAS DE ADM PARA VERIFICAR O LOGIN
    session_start();
    require_once("../adm/functions.php");
    if (!verifyLogin() || $_SESSION['adm'] != 1){
        echo "<script> alert('Não autorizado.') </script>";
        redirectLogin();
    }
    $conn = returnConnection();
    $id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container col-5" style="margin-top: 10%;">
        <form action="../user/form.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="pass">
            </div>
        </div>
        <div class="form-group">
            <label for="selectAdm">Tipo de Usuario</label>
            <select name="adm" class="inputselect" id="selectAdm">
                <option value="0">Comum</option>
                <option value="1">Adiministrador</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary" name="cadastro">Cadastrar</button>
        </form>
    </div>

    <div class="container col-7 mt-5">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $text = "SELECT id, nome, sobrenome, email, adm FROM usuarios where id != $id";
                    $result = $conn -> query($text);
                    while ($row = $result->fetch_assoc())
                    {
                        $id = $row['id'];
                        echo '<form action="../user/form.php" method="POST">';
                            echo "<tr>";
                                echo "<td>";
                                echo $id;
                                echo "</td>";

                                echo "<td>";
                                echo $row['nome'];
                                echo "</td>";

                                echo "<td>";
                                echo $row['sobrenome'];
                                echo "</td>";

                                echo "<td>";
                                echo $row['email'];
                                echo "</td>";

                                echo "<td>";
                                $link = 'href="gerenciaruser.php?excl=' . $id . '"';
                                $confirm = ' onclick="'. "return confirm('Tem certeza que deseja deletar este registro?')" . '"';
                                echo '<a ', $link, $confirm, ' class="btn btn-outline-danger" name="excl" value=', $row["id"],'>Excluir</a>';
                                echo "<td>";
                            echo "</tr>";
                        echo "</form>";
                    }
                ?>

            </tbody>
        </table>
    </div>
</body>
</html>