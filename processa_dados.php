<?php
$cadastro = ['nome'=>$_REQUEST['nome'],'cidade'=>$_REQUEST['cidade'], 'telefone'=>$_REQUEST['telefone']];
['nome'=>$nome, 'cidade'=>$cidade,'telefone'=>$telefone] = $cadastro;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrado</title>
</head>

<body>
    <main class="apresentacao">
        <h2 class="apresentacao_titulo"> Confirme Seus Dados</h2>
        <section class='container02'>

            <h3>Usuario:
                <?= $nome; ?>
            </h3>
            <p>Cidade:
                <?= $cidade; ?> - Telefone:
                <?= $telefone; ?>
            </p>
            <button class="botao2" type="submit"><a href="./index.php" rel="nofollow">confirmar</a></button>
        </section>
        
    </main>
        
<script>
    const botao2 = document.querySelector(".botao2");
    botao2.addEventListener('click',()=>alert("Dados Cadastrado com sucesso."));
    botao2.addEventListener('mousemove',()=>botao2.style.background = "#32ACD9");
    botao2.addEventListener('mouseout',()=>botao2.style.background = "#288FB4");
    </script>
</body>

</html>