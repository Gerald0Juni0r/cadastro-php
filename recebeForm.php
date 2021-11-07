<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastre-se</title>

    <link rel="stylesheet" href="./CSS/geral.css">

</head>
<body>
    <div id="recebeForm">
        <?php 
            echo "Nome: " . $_POST["nome"] . "<br>" ; 
            echo "Sobrenome: " . $_POST["sobrenome"] . "<br>" ; 
            echo "Email: " . $_POST["email"] . "<br>" ; 
            echo "Senha: " . $_POST["senha"] . "<br>" ; 

            if($_POST["senha"] == $_POST["csenha"]){
                echo "<br> Senha válida";
            }
            else{
                echo "<br> Senha invalida";
            }
        ?>
    </div>
<body>
</html>