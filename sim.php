<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mariana ataquekkkk!</title>
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

        .result-container {
            background-color: #fff;
            border: 4px solid #fbc02d;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.7);
            padding: 24px;
            text-align: center;
            max-width: 500px;
            width: 90%;
            animation: tremor 0.4s ease-in-out;
            position: relative;
            z-index: 1;
        }

        @keyframes tremor {
            0% { transform: translate(0, 0) scale(0.9); }
            20% { transform: translate(-10px, 10px) scale(1.02); }
            40% { transform: translate(10px, -10px) scale(1.02); }
            60% { transform: translate(-10px, -10px) scale(1); }
            80% { transform: translate(10px, 10px) scale(1); }
            100% { transform: translate(0, 0) scale(1); }
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
            filter: drop-shadow(0 8px 12px rgba(245, 127, 23, 0.4));
        }

        .message-box {
            background-color: #333;
            color: #fff;
            padding: 16px;
            border-radius: 8px;
            border: 3px solid #4caf50;
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
            padding: 12px 24px;
            font-size: 1rem;
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