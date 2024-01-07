if(window.innerWidth > 1024){
    const $whatsIcon = document.querySelector('#floating-whatsapp');
    const $formulario = document.querySelector('.floating-form .form');
    
    $whatsIcon.addEventListener('click', function(el){
        el.preventDefault();
        $formulario.classList.toggle('active');
    });
}



//SCROLL TO TOP
const $voltarTopoBtn = document.querySelector('#voltarTopo');

$voltarTopoBtn.addEventListener('click', function(el){
    el.preventDefault();
    window.scrollTo(0, 0);
});
