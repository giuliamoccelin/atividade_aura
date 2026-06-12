<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>A Culpada</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <!-- Vídeo de fundo (fica atrás de tudo) -->
  <video id="video-bg" src="video.mp4" preload="auto"></video>

  <!-- Card com a pergunta -->
  <div class="card">
    <span class="emoji">💔</span>
    <h1>Você foi a culpada desse amor se acabar?</h1>
    <p class="subtitulo">Pense bem antes de responder...</p>

    <div class="botoes">
      <button class="btn" id="btn-sim">Sim</button>
      <div class="placeholder-nao"></div>
    </div>
  </div>

  <!-- Botão "Não" flutuante -->
  <button class="btn" id="btn-nao">Não</button>

  <!-- Tela de sucesso (sobrepõe o vídeo) -->
  <div id="tela-sucesso">
    <span class="emoji-sucesso">🎶</span>
    <h2>Você sabe a verdade!</h2>
    <p>Ela foi a culpada, e Pablo já sabia disso...</p>
    <button id="btn-reiniciar">Perguntar de novo</button>
    <audio id="audio-pablo" src="pablo.mp3" preload="auto"></audio>
  </div>

  <script src="script.js"></script>
</body>
</html>