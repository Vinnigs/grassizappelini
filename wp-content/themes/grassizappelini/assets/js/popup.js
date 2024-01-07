
const $buttPopup1 = document.getElementById("butt-popup-1");
const $buttPopup2 = document.getElementById("butt-popup-2");
const $buttPopup3 = document.getElementById("butt-popup-3");
const $popup1 = document.getElementById("popup-1");
const $popup2 = document.getElementById("popup-2");
const $popup3 = document.getElementById("popup-3");
const $closeBtn1 = document.getElementById("close-btn-1");
const $closeBtn2 = document.getElementById("close-btn-2");
const $closeBtn3 = document.getElementById("close-btn-3");


// const $voltarTopoBtn = document.querySelector('#voltarTopo');

$buttPopup1.addEventListener('click', function(el){
    $popup1.classList.add("active");
    el.preventDefault();
    // window.scrollTo(0, 0);
});

$closeBtn1.addEventListener('click', function(el){
    $popup1.classList.remove("active");
    el.preventDefault();

});

$buttPopup2.addEventListener('click', function(el){
    $popup2.classList.add("active");
    el.preventDefault();
    // window.scrollTo(0, 0);
});

$closeBtn2.addEventListener('click', function(el){
    $popup2.classList.remove("active");
    el.preventDefault();

});

$buttPopup3.addEventListener('click', function(el){
    $popup3.classList.add("active");
    el.preventDefault();
    // window.scrollTo(0, 0);
});

$closeBtn3.addEventListener('click', function(el){
    $popup3.classList.remove("active");
    el.preventDefault();

});




// function openPopup(element){

// }


// function togglePopup(el){
//     document.getElementById("popup-1").classList.toggle("active");
//     el.preventDefault();
// }