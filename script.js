// ============================================
// SELETORES
// ============================================
const btnSim = document.getElementById('btn-sim');
const btnNao = document.getElementById('btn-nao');
const btnReiniciar = document.getElementById('btn-reiniciar');
const telaSucesso = document.getElementById('tela-sucesso');
const audio = document.getElementById('audio-pablo');
const video = document.getElementById('video-bg');

// ============================================
// BOTÃO "NÃO" — fuga fluida com física
// ============================================
let posX = 12, posY = 0, velX = 0, velY = 0;

window.addEventListener('load', () => {
  setTimeout(() => {
    const rect = btnNao.getBoundingClientRect();
    posX = rect.left;
    posY = rect.top;

    btnNao.style.position = 'fixed';
    btnNao.style.left = posX + 'px';
    btnNao.style.top  = posY + 'px';
    btnNao.style.visibility = 'visible';

    atualizarBotao();
  }, 0);
});

function fugir(cursorX, cursorY) {
  const rect = btnNao.getBoundingClientRect();
  const centroX = rect.left + rect.width / 2;
  const centroY = rect.top + rect.height / 2;
  const dx = centroX - cursorX;
  const dy = centroY - cursorY;
  const dist = Math.hypot(dx, dy);

  if (dist < 160) {
    const forca = (160 - dist) / 160;
    velX += (dx / dist) * forca * 28;
    velY += (dy / dist) * forca * 28;
  }
}

function atualizarBotao() {
  const margem = 16;
  const vw = window.innerWidth;
  const vh = window.innerHeight;
  const larg = btnNao.offsetWidth || 200;
  const alt  = btnNao.offsetHeight || 46;

  posX += velX;
  posY += velY;

  if (posX < margem)            { posX = margem;            velX =  Math.abs(velX) * 0.6; }
  if (posX + larg > vw - margem){ posX = vw - larg - margem; velX = -Math.abs(velX) * 0.6; }
  if (posY < margem)            { posY = margem;            velY =  Math.abs(velY) * 0.6; }
  if (posY + alt  > vh - margem){ posY = vh - alt - margem;  velY = -Math.abs(velY) * 0.6; }

  velX *= 0.82;
  velY *= 0.82;

  btnNao.style.left = posX + 'px';
  btnNao.style.top  = posY + 'px';

  requestAnimationFrame(atualizarBotao);
}

document.addEventListener('mousemove', e => fugir(e.clientX, e.clientY));
document.addEventListener('touchmove', e => fugir(e.touches[0].clientX, e.touches[0].clientY));

btnNao.addEventListener('click', () => {
  velX += (Math.random() - 0.5) * 40;
  velY += (Math.random() - 0.5) * 40;
});

// ============================================
// BOTÃO "SIM"
// ============================================
btnSim.addEventListener('click', () => {
  telaSucesso.classList.add('visivel');
  video.classList.add('ativo');
  audio.currentTime = 43;
  audio.play().catch(() => {});
  video.currentTime = 0;
  video.play().catch(() => {});
});

// ============================================
// BOTÃO "REINICIAR"
// ============================================
btnReiniciar.addEventListener('click', () => {
  telaSucesso.classList.remove('visivel');
  video.classList.remove('ativo');
  audio.pause();
  audio.currentTime = 0;
  video.pause();
  video.currentTime = 0;
});