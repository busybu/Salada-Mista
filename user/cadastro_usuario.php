<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro_usuario.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="cadastro-title">
        <h1>Insira seus dados</h1>
    </div>
    <form action="form.php" method="POST">
        <fieldset class="fieldset-nome">
            Dados Pessoais
            <table cellspacing="10">
                <tr>
                    <td>
                        <label for="nome">Nome:</label>
                    </td>
                    <td>
                        <input type="text" name="nome" id="">
                    </td>
                    <td>
                        <label for="sobrenome">Sobrenome:</label>
                    </td>
                    <td>
                        <input type="text" name="sobrenome" id="">
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            Login
            <table cellspacing="10" class="table-cadastro">
                <tr>
                    <td>
                        <label for="email">E-mail:</label>
                    </td>
                    <td>
                        <input type="text" name="email" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="login">Login de usuário: </label>
                    </td>
                    <td>
                        <input type="text" name="login">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Senha: </label>
                    </td>
                    <td>
                        <input type="password" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="passconfirm">Confirme a senha: </label>
                    </td>
                    <td>
                        <input type="password" name="passconfirm">
                    </td>
                </tr>
            </table>
        </fieldset>
        <br />
        <div class="cadastro-buttons">
            <input type="submit" name="register">
            <input type="reset" value="Limpar">
        </div>
        </table>
        </fieldset>
    </form>
</body>

</html>