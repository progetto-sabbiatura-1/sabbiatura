let navbar = document.querySelector('.navbar');
let menuBtn = document.querySelector('#menu-btn');

menuBtn.addEventListener('click' , ()=>{
navbar.classList.toggle('d-none');
navbar.classList.toggle('d-md-none');
});
window.addEventListener('scroll' , ()=>{
    if (window.scrollY > 0) {
        // navbar.style.height = '60px';
        
    }else {
        // header.style.height = '50px';
        
    }
})

window.onscroll = () =>{
    // navbar.classList.toggle('d-none');
    // navbar.classList.toggle('d-md-none');
}
window.onclick = () =>{
    // navbar.classList.toggle('d-none');
    // navbar.classList.toggle('d-md-none');
}
