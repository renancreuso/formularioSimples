<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>
<body>
<form action="processa_dados.php" method="post" id="form">
    <h2 class="cadastro__titulo" >Inscreva-se</h2>
    <div class="container">
        <label for="" class="titulo">Nome</label>
        <input type="text" class="entrada" name="nome" required>
        <label for="" class="titulo">Cidade</label>
        <input type="text" class="entrada" name="cidade" required>
        <label for=""class="titulo">Telefone</label>
        <input type="tel" class="entrada" name="telefone" required>
        
    
    </div>
        
    </div>
        <button class="botao" type="submit" >Enviar</button>
    </div>
</form>
<script>
    const botao = document.querySelector(".botao");
    botao.addEventListener('mousemove',()=>botao.style.background = "#32ACD9");
    botao.addEventListener('mouseout',()=>botao.style.background = "#288FB4");
</script>
</body>

</html>