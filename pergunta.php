<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pergunta Especial</title>
    <style>
        body { 
            text-align: center; 
            padding-top: 100px; 
            font-family: 'Arial', sans-serif; 
            background-color: #ffe4e1; /* Cor de fundo romântica */
            overflow: hidden; 
        }
        h1 { color: #d63384; }
        .btn { 
            padding: 15px 30px; 
            font-size: 20px; 
            cursor: pointer; 
            border-radius: 10px; 
            border: none; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        #sim { background-color: #28a745; color: white; }
        #nao { 
            background-color: #dc3545; color: white; 
            position: absolute; 
            transition: all 0.2s ease; /* Faz o botão deslizar suavemente */
        }
    </style>
</head>
<body>

    <h1 id="titulo">Você aceita viajar comigo?</h1>

    <!-- Botão SIM -->
    <button id="sim" class="btn" onclick="aceitou()">SIM</button>

    <!-- Botão NÃO que foge -->
    <button id="nao" class="btn" onmouseover="foge()">NÃO</button>

    <!-- O seu áudio da Banda Magníficos -->
    <audio id="musica">
        <source src="musica.mp3" type="audio/mpeg">
        Seu navegador não suporta áudio.
    </audio>

    <script>
        function foge() {
            var btnNao = document.getElementById('nao');
            
            // Gera posições aleatórias
            var x = Math.random() * (window.innerWidth - btnNao.offsetWidth);
            var y = Math.random() * (window.innerHeight - btnNao.offsetHeight);

            // Aplica as novas posições
            btnNao.style.left = x + "px";
            btnNao.style.top = y + "px";
        }

        function aceitou() {
            // 1. Toca a música "Estou indo embora"
            var som = document.getElementById('musica');
            som.play();

            // 2. Muda o texto da tela
            document.getElementById('titulo').innerHTML = "AEEEE! Prepare as malas! 🧳✈️";

            // 3. Some com o botão NÃO
            document.getElementById('nao').style.display = "none";
            
            // 4. Aumenta o botão SIM para comemorar
            document.getElementById('sim').style.transform = "scale(1.5)";
            document.getElementById('sim').innerHTML = "PARTIU!";
        }
    </script>

</body>
</html>