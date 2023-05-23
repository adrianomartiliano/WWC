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