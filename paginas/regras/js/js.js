

// ----------------------------------------------------------------- \\
    var btnFecharRegras = document.getElementById("btn-fechar-regras");
    var brx1 = document.getElementById("br-x1");
    var enx1 = document.getElementById("en-x1");
    var esx1 = document.getElementById("es-x1");

    function AbreModalRegras(event){
        if(event.type === 'touchstart') event.preventDefault(); 
        const modal = document.getElementById('modal');
        modal.classList.toggle('modal-aberto');
    }

    brx1.addEventListener('touchstart', AbreModalRegras);
    enx1.addEventListener('touchstart', AbreModalRegras);
    esx1.addEventListener('touchstart', AbreModalRegras);
    btnFecharRegras.addEventListener('touchstart', AbreModalRegras);
// ----------------------------------------------------------------- \\



// ----------------------------------------------------------------- \\
// ------------------- CALENDÁRIO  -------------------------- \\
    var calendario = document.getElementById('calendario')
    function abreCalendario(event){
        if(event.type == 'touchstart') event.preventDefault()
        const textoCalendario = document.getElementById('regras-calendario')
        textoCalendario.classList.toggle('texto-regras-ativo')
    }
    calendario.addEventListener('touchstart', abreCalendario)
// ----------------------------------------------------------------- \\

// ----------------------------------------------------------------- \\
// ------------------- PONTUAÇÃO  -------------------------- \\
    var pontuacao = document.getElementById('pontuacao')
    function abrePontuacao(event){
        if(event.type == 'touchstart') event.preventDefault()
        const textoPontucao = document.getElementById('regras-pontuacao')
        textoPontucao.classList.toggle('texto-regras-ativo')
    }
    pontuacao.addEventListener('touchstart', abrePontuacao)
// ----------------------------------------------------------------- \\

// ----------------------------------------------------------------- \\
// ------------------- PUNIÇÕES  -------------------------- \\
var punicoes = document.getElementById('punicoes')
function abrePunicoes(event){
    if(event.type == 'touchstart') event.preventDefault()
    const textoPunicoes = document.getElementById('regras-punicoes')
    textoPunicoes.classList.toggle('texto-regras-ativo')
}
punicoes.addEventListener('touchstart', abrePunicoes)
// ----------------------------------------------------------------- \\

// ----------------------------------------------------------------- \\
// ------------------- EQUIPAMENTOS  -------------------------- \\
var equipamentos = document.getElementById('equipamentos')
function abreEquipamentos(event){
    if(event.type == 'touchstart') event.preventDefault()
    const textoEquipamentos = document.getElementById('regras-equipamentos')
    textoEquipamentos.classList.toggle('texto-regras-ativo')
}
equipamentos.addEventListener('touchstart', abreEquipamentos)
// ----------------------------------------------------------------- \\

// ----------------------------------------------------------------- \\
// -------------------   -------------------------- \\
var formato = document.getElementById('formato')
function abreFormato(event){
    if(event.type == 'touchstart') event.preventDefault()
    const textoFormato = document.getElementById('regras-formato')
    textoFormato.classList.toggle('texto-regras-ativo')
}
formato.addEventListener('touchstart', abreFormato)
// ----------------------------------------------------------------- \\