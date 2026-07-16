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

        .btn-voltar {
            padding: 12px 32px;
            font-size: 1.1rem;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            background-color: #1976d2;
            color: white;
            box-shadow: 0 4px #0d47a1;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.1s, background-color 0.2s;
        }

        .btn-voltar:hover {
            background-color: #1565c0;
            transform: translateY(-2px);
        }

        .btn-voltar:active {
            transform: translateY(2px);
            box-shadow: 0 0 #0d47a1;
        }
    </style>
</head>
<body>

    <div class="result-container">
        
        <div class="image-box">
            <img src="marianab.jpg" alt="Mariana Atacando">
        </div>

        <div class="message-box">
            Foi super efetivo! Mariana foi derrotada com sucesso! ⚡
        </div>

        <a href="index.php" class="btn-voltar">Ataque novamente</a>
    </div>

</body>
</html>