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
    <?php
    
    ?>
    <h1>Cadastre-se</h1>

    <form id="formulario" action="" method="post">
        Nome: <input class="input" type="text" name="nome" placeholder="Ex: João" required>
        Sobrenome: <input class="input" type="text" method="post" placeholder="Ex: Ferreira da Silva">
        E-mail: <input class="input" type="email" method="post" placeholder="Ex: joaofs58@gmail.com" required>
        
        Senha: <input class="input" type="password" required>
        Confirmar senha: <input class="input" type="password" required>

        <div>
        <p>Qual o seu gênero?</p> 
        <input type="radio" class="genero-radio" name="masculino" value="checkedValue"> Masculino <br>
        <input type="radio" class="genero-radio" name="feminino" value="checkedValue"> Feminino <br>
        <input type="radio" class="genero-radio" name="outro" value="checkedValue" checked> Outro <br>
        </div>

        <button id="btn-confirmar">Confirmar</button>
    </form>
    
</body>
</html>
