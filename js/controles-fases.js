
const fases = document.querySelectorAll(".fase-grupo, .oitavas, .quartas, .semifinal, .final");
let faseAtual = 3;

function avancaFase(){
    if (faseAtual === fases.length - 1){
        faseAtual = 0;
    } else {
        faseAtual++;
    }
    fases.forEach(faseAtual => {
        faseAtual.classList.remove('fase-ativa');
    })
    fases[faseAtual].classList.add('fase-ativa');
}
function voltaFase(){
    if (faseAtual === 0){
        faseAtual = fases.length -1;
    } else {
        faseAtual--;
    }
    fases.forEach(faseAtual => {
        faseAtual.classList.remove('fase-ativa')
    })
    fases[faseAtual].classList.add('fase-ativa');
}