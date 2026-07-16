<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marianattackkkk!</title>
 <link rel="stylesheet" href="index.css">
 <script src="index.js"></script>

</head>
<body>

    <div class="battle-container">
        
        <div class="image-box">
            <img src="mariana.jpg.png" alt="Mariana atacando">
        </div>

        <div class="message-box">
            você gostaria de contra-atacar a pokemon mariana?!!
        </div>

         <div class="buttons-area">
            <a href="sim.php" class="btn btn-sim">Atacar com Thunderbolt!</a>
            <button id="btnNao" class="btn btn-nao">Cessar fogo(não atacar) </button>
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