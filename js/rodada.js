const caixasRodadas = document.querySelectorAll('.rodada');

let rodadaAtual = 0;

function NextRodada(){
    if (rodadaAtual === caixasRodadas.length - 1){
        rodadaAtual = 0;
    } else {
        rodadaAtual++;
    }
    caixasRodadas.forEach(caixasRodadas => {
        caixasRodadas.classList.remove('rodada-ativa')
    })
    caixasRodadas[rodadaAtual].classList.add('rodada-ativa');
}

function backRodada(){
    if (rodadaAtual === 0){
        rodadaAtual = caixasRodadas.length -1;
    } else {
        rodadaAtual--;
    }
    caixasRodadas.forEach(caixasRodadas => {
        caixasRodadas.classList.remove('rodada-ativa')
    })
    caixasRodadas[rodadaAtual].classList.add('rodada-ativa');
}