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
    <h1>Cadastre-se</h1>

    <form id="formulario" method="post" action="recebeForm.php">
        Nome: <input class="input" type="text" name="nome" placeholder="Ex: João" required>
        Sobrenome: <input class="input" type="text" name="sobrenome" placeholder="Ex: Ferreira da Silva">
        E-mail: <input class="input" type="email" name="email" placeholder="Ex: joaofs58@gmail.com" required>
        Senha: <input id="senha" class="input" type="password" name="senha" required>
        Confirmar senha: <input id="csenha" class="input" type="password" name="csenha" required>

        <div>
        <p>Qual o seu gênero?</p> 
        <input type="radio" class="genero-radio" name="genero" value="Masculino" > Masculino <br>
        <input type="radio" class="genero-radio" name="genero" value="Feminino" > Feminino <br>
        <input type="radio" class="genero-radio" name="genero" value="Outro" checked> Outro <br>
        </div>

        <button id="btn-confirmar">Confirmar</button>
    </form>
    
</body>
</html>


