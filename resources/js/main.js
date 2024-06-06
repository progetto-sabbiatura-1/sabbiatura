let navbar = document.querySelector('.navbar');
let menuBtn = document.querySelector('#menu-btn');

menuBtn.addEventListener('click' , ()=>{
navbar.classList.toggle('d-none');
navbar.classList.toggle('d-md-none');
});

// METODO QUASI GIUSTO

// let aboutUs = document.querySelector('#chisiamo');
// let about = document.querySelector('#about');

// document.getElementById("chisiamo").onclick = function (event) {
//     window.scrollTo({ top: 600, behavior: 'smooth'});
// };

let aboutUs = document.querySelector('#chisiamo');
let about = document.querySelector('#about'); 

document.getElementById("chisiamo").onclick = function (event) {
    let aboutPosition = about.offsetTop;
    window.scrollTo({ top: aboutPosition, behavior: 'smooth' }); 
};

let aboutUs2 = document.querySelector('#chisiamo2');


document.getElementById("chisiamo2").onclick = function (event) {
    let aboutPosition = about.offsetTop;
    window.scrollTo({ top: aboutPosition, behavior: 'smooth' }); 
};



