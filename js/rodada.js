const caixasRodadas = document.querySelectorAll('.rodadaA');
const caixasRodadasB = document.querySelectorAll('.rodadaB');
const caixasRodadasC = document.querySelectorAll('.rodadaC');
const caixasRodadasD = document.querySelectorAll('.rodadaD');
const caixasRodadasE = document.querySelectorAll('.rodadaE');
const caixasRodadasF = document.querySelectorAll('.rodadaF');

let rodadaAtual = 0;
let rodadaAtualB = 0;
let rodadaAtualC = 0;
let rodadaAtualD = 0;
let rodadaAtualE = 0;
let rodadaAtualF = 0;

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

function NextRodadaB(){
    if (rodadaAtualB === caixasRodadasB.length - 1){
        rodadaAtualB = 0;
    } else {
        rodadaAtualB++;
    }
    caixasRodadasB.forEach(caixasRodadasB => {
        caixasRodadasB.classList.remove('rodada-ativa')
    })
    caixasRodadasB[rodadaAtualB].classList.add('rodada-ativa');
}
function backRodadaB(){
    if (rodadaAtualB === 0){
        rodadaAtualB = caixasRodadasB.length -1;
    } else {
        rodadaAtualB--;
    }
    caixasRodadasB.forEach(caixasRodadasB => {
        caixasRodadasB.classList.remove('rodada-ativa')
    })
    caixasRodadasB[rodadaAtualB].classList.add('rodada-ativa');
}

function NextRodadaC(){
    if (rodadaAtualC === caixasRodadasC.length - 1){
        rodadaAtualC = 0;
    } else {
        rodadaAtualC++;
    }
    caixasRodadasC.forEach(caixasRodadasC => {
        caixasRodadasC.classList.remove('rodada-ativa')
    })
    caixasRodadasC[rodadaAtualC].classList.add('rodada-ativa');
}
function backRodadaC(){
    if (rodadaAtualC === 0){
        rodadaAtualC = caixasRodadasC.length -1;
    } else {
        rodadaAtualC--;
    }
    caixasRodadasC.forEach(caixasRodadasC => {
        caixasRodadasC.classList.remove('rodada-ativa')
    })
    caixasRodadasC[rodadaAtualC].classList.add('rodada-ativa');
}

function NextRodadaD(){
    if (rodadaAtualD === caixasRodadasD.length - 1){
        rodadaAtualD = 0;
    } else {
        rodadaAtualD++;
    }
    caixasRodadasD.forEach(caixasRodadasD => {
        caixasRodadasD.classList.remove('rodada-ativa')
    })
    caixasRodadasD[rodadaAtualD].classList.add('rodada-ativa');
}
function backRodadaD(){
    if (rodadaAtualD === 0){
        rodadaAtualD = caixasRodadasD.length -1;
    } else {
        rodadaAtualD--;
    }
    caixasRodadasD.forEach(caixasRodadasD => {
        caixasRodadasD.classList.remove('rodada-ativa')
    })
    caixasRodadasD[rodadaAtualD].classList.add('rodada-ativa');
}

function NextRodadaE(){
    if (rodadaAtualE === caixasRodadasE.length - 1){
        rodadaAtualE = 0;
    } else {
        rodadaAtualE++;
    }
    caixasRodadasE.forEach(caixasRodadasE => {
        caixasRodadasE.classList.remove('rodada-ativa')
    })
    caixasRodadasE[rodadaAtualE].classList.add('rodada-ativa');
}
function backRodadaE(){
    if (rodadaAtualE === 0){
        rodadaAtualE = caixasRodadasE.length -1;
    } else {
        rodadaAtualE--;
    }
    caixasRodadasE.forEach(caixasRodadasE => {
        caixasRodadasE.classList.remove('rodada-ativa')
    })
    caixasRodadasE[rodadaAtualE].classList.add('rodada-ativa');
}

function NextRodadaF(){
    if (rodadaAtualF === caixasRodadasF.length - 1){
        rodadaAtualF = 0;
    } else {
        rodadaAtualF++;
    }
    caixasRodadasF.forEach(caixasRodadasF => {
        caixasRodadasF.classList.remove('rodada-ativa')
    })
    caixasRodadasF[rodadaAtualF].classList.add('rodada-ativa');
}
function backRodadaF(){
    if (rodadaAtualF === 0){
        rodadaAtualF = caixasRodadasF.length -1;
    } else {
        rodadaAtualF--;
    }
    caixasRodadasF.forEach(caixasRodadasF => {
        caixasRodadasF.classList.remove('rodada-ativa')
    })
    caixasRodadasF[rodadaAtualF].classList.add('rodada-ativa');
}

