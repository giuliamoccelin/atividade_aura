<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trabalho de Tópicos</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <video id="video-bg" src="video.mp4" preload="auto"></video>


  <div class="card">
    <span class="emoji">💔</span>
    <h1>Quem foi culpad@ do nosso amor se acabar?</h1>
    <p class="subtitulo">Pense bem antes de responder...</p>

    <div class="resposta">
    
      <div class="botoes">
        <button class="btn" id="btn-sim">Você</button>
        <div id="placeholder-nao"></div>
      </div>

      <button class="btn" id="btn-nao">Não sei</button>

    </div>
  </div>

  

  <div id="tela-sucesso">
    <span class="emoji-sucesso">🖤</span>
    <h2>Você sabe quem foi!!</h2>
    <p>VOCÊ foi a culpada, e Pablo já sabia disso...</p>
    <button id="btn-reiniciar">Perguntar de novo</button>
    <audio id="audio-pablo" src="pablo.mp3" preload="auto"></audio>
  </div>

  <script src="script.js"></script>
</body>
</html>