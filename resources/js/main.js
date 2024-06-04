let navbar = document.querySelector('.navbar');
let menuBtn = document.querySelector('#menu-btn');

menuBtn.addEventListener('click' , ()=>{
navbar.classList.toggle('d-none');
navbar.classList.toggle('d-md-none');
});

// METODO QUASI GIUSTO

// window.addEventListener('scroll', () => {
//     if (window.scrollY > 100) {
//         navbar.classList.add('d-none');
//     } else {
//         navbar.classList.remove('d-none');
//     }
//     });





window.onscroll = () =>{
    // navbar.classList.toggle('d-none');
    // navbar.classList.toggle('d-md-none');
}
window.onclick = () =>{
    // navbar.classList.toggle('d-none');
    // navbar.classList.toggle('d-md-none');
}
