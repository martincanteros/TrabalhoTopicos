<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mariana ataquekkkk!</title>
    <link rel="stylesheet" href="sim.css">
</head>
<body>

    <div class="result-container">
        
        <div class="image-box">
            <img src="marianab.jpg" alt="Mariana Atacando">
        </div>

        <div class="message-box">
            Seu ataque eletrico foi super efetivo! Mariana foi derrotada com sucesso! ⚡
        </div>

        <div class="buttons-area">
            <a href="comemoracao.php" class="btn btn-sim">Comemorar vitória!</a>
            <button id="btnNao" class="btn btn-nao">não comemorar</button>
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