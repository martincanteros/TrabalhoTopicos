<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comemoração com o Ash!</title>
     <link rel="stylesheet" href="comemoracao.css">
</head>
<body>

    <div class="celebration-container">
        
        <div class="image-box">
            <img src="ash.jpeg" alt="Ash e Pikachu comemorando">
        </div>

        <div class="message-box">
            você voltou ao ash, ele ficou feliz por terem vencido a luta!
        </div>

        <div class="buttons-area">
            <a href="index.php" class="btn btn-revanche">Pedir uma Revanche!</a>
            <button id="btnNao" class="btn btn-nao">não ter que lutar de novo</button>
        </div>
    </div>

    <script>
        const btnNao = document.getElementById('btnNao');

        function moverBotao() {
            btnNao.classList.add('runaway');
            
            const margem = 30;
            const larguraMax = window.innerWidth - btnNao.offsetWidth - margem;
            const alturaMax = window.innerHeight - btnNao.offsetHeight - margem;
            
            const novaPosX = Math.max(margem, Math.floor(Math.random() * larguraMax));
            const novaPosY = Math.max(margem, Math.floor(Math.random() * alturaMax));
            
            btnNao.style.left = novaPosX + 'px';
            btnNao.style.top = novaPosY + 'px';
        }

        btnNao.addEventListener('mouseover', moverBotao);
        btnNao.addEventListener('click', (e) => {
            e.preventDefault();
            moverBotao();
        });
        btnNao.addEventListener('touchstart', (e) => {
            e.preventDefault();
            moverBotao();
        });
    </script>
</body>
</html>