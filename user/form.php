<?php
include 'db/db.php';



if (isset($_POST["Login"]))
{
    $result = $mysqli -> query("SELECT * FROM usuarios");
    $confirm = false;
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc())
        {
            $id = $row["id"];
            $email = $row["email"];
            $senha = $row["senha"];
            if ($email == $_POST['email'] && $senha == $_POST['senha'])
                $confirm = true;
        }
    }
    
    if ($confirm)
    {
        echo "<meta http-equiv='refresh' content='0.00001; URL=adm/home.php'/>";
    }
    else
    {
        echo "Login ou senha não encontrado";
    }
}

$mysqli->close();
?>