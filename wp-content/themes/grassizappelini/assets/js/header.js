const $header = document.querySelector('header.home');

window.onscroll = function(){
    let $top = window.scrollY;

    if($top >= 50){
        $header.classList.add('active');
    }else{
        $header.classList.remove('active');
    }
}