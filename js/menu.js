const btnmobile = document.getElementById('btn-mobile');
const btnMobileVoltar = document.getElementById('btn-mobile-voltar');


function toggleMenu(event){
    if(event.type === 'touchstart') event.preventDefault(); 
    const nav = document.getElementById('nav');
    nav.classList.toggle('active');
}

btnmobile.addEventListener('click', toggleMenu);
btnmobile.addEventListener('touchstart', toggleMenu);
btnMobileVoltar.addEventListener('click', toggleMenu);
btnMobileVoltar.addEventListener('touchstart', toggleMenu);

