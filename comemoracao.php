<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comemoração com o Ash!</title>
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

        .celebration-container {
            background-color: #f8f8f8;
            border: 4px solid #333;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.7);
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
            height: 350px;
            width: 100%;
            overflow: hidden;
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            display: block;
            filter: drop-shadow(0 8px 12px rgba(0, 0, 0, 0.3));
        }

        .message-box {
            background-color: #333;
            color: #fff;
            padding: 16px;
            border-radius: 8px;
            border: 3px solid #fbc02d;
            margin-bottom: 24px;
            font-size: 1.1rem;
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
            padding: 12px 20px;
            font-size: 0.95rem;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.1s, box-shadow 0.1s;
            text-decoration: none;
            display: inline-block;
            user-select: none;
        }

        .btn-revanche {
            background-color: #1976d2;
            color: white;
            box-shadow: 0 4px #0d47a1;
        }

        .btn-revanche:hover {
            background-color: #1565c0;
            transform: translateY(-2px);
        }

        .btn-revanche:active {
            transform: translateY(2px);
            box-shadow: 0 0 #0d47a1;
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