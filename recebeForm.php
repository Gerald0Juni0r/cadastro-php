<!DOCTYPE html>
<html lang="PT-BR">
<body>
    <?php 
        echo "Nome: " . $_POST["nome"] . "<br>" ; 
        echo "Sobrenome: " . $_POST["sobrenome"] . "<br>" ; 
        echo "Email: " . $_POST["email"] . "<br>" ; 
        echo "Senha: " . $_POST["senha"] . "<br>" ; 

        if($_POST["senha"] == $_POST["csenha"]){
            echo "<br>Senha válida";
        }
        else{
            echo "<br>Senha invalida";
        }
    ?>
<body>
</html>