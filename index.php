<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marianattackkkk!</title>
   
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Courier New', Courier, monospace;
        }

        body {
            background-color: #1e5631;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }


        .battle-container {
            background-color: #f8f8f8;
            border: 4px solid #333;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            padding: 24px;
            text-align: center;
            max-width: 500px;
            width: 90%;
            position: relative;
            z-index: 1;
        }

        .image-box {
            background-color: #a8e6cf;
            border: 3px solid #1e5631;
            border-radius: 12px;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px;
            width: 100%;
            overflow: hidden;
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            filter: drop-shadow(0 8px 10px rgba(0,0,0,0.2));
            transition: transform 0.3s ease;
        }

        .image-box img:hover {
            transform: scale(1.05);
        }

        .message-box {
            background-color: #333;
            color: #fff;
            padding: 16px;
            border-radius: 8px;
            border: 3px solid #fbc02d;
            margin-bottom: 24px;
            font-size: 1.2rem;
            font-weight: bold;
            line-height: 1.4;
        }

        .buttons-area {
            display: flex;
            justify-content: center;
            gap: 20px;
            position: relative;
            min-height: 50px;
        }

        .btn {
            padding: 12px 36px;
            font-size: 1.1rem;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.1s, box-shadow 0.1s;
            text-decoration: none;
            display: inline-block;
            user-select: none;
        }

        .btn-sim {
            background-color: #4caf50;
            color: white;
            box-shadow: 0 4px #2e7d32;
        }

        .btn-sim:hover {
            background-color: #43a047;
            transform: translateY(-2px);
        }

        .btn-sim:active {
            transform: translateY(2px);
            box-shadow: 0 0 #2e7d32;
        }

        .btn-nao {
            background-color: #f44336;
            color: white;
            box-shadow: 0 4px #c62828;
            position: relative;
            z-index: 100;
        }

        .runaway {
            position: fixed !important;
            transition: top 0.15s ease-out, left 0.15s ease-out;
        }
    </style>
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