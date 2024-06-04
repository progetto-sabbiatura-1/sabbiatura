<x-layout>

<header class="header">

<!-- logo -->
<a href=""><img src="/img/ben4.png" alt="" class="logo"></a>
<!-- navbar -->

<div class="spazioNavbar d-none d-md-none"></div>

<nav class="navbar d-none d-md-block d-lg-block">
    <a href="{{route('home')}}">Home</a>
    <a href="#">Chi Siamo</a>
    <a href="{{route('galleria')}}">Galleria</a>
    <a href="{{route('contatti')}}">Contatti</a>
</nav>

<div class="share d-none d-md-none">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>

<div class="icons">
    <div class="fas fa-bars" id="menu-btn"></div>
</div>

</header>

<!-- galleria -->
<div class="container gallery">
    <div class="heading3">
        <h3>Photo </h3><span>Gallery</span>
    </div>
    <div class="box">
        
        <div class="dream">
            <img src="/img/sabb1.jpg" alt="">
            <img src="/img/galleria1.jpg" alt="">
            <img src="/img/sab2.jpg" alt="">
            <img src="/img/galleria5.jpg" alt="">
        </div>
        <div class="dream">
            <img src="/img/cant1.jpg" alt="">
            <img src="/img/galleria8.jpg" alt="">
            <img src="/img/galleria3.jpg" alt="">
            <img src="/img/galleria6.jpg" alt="">
        </div>
        <div class="dream">
            <img src="/img/galleria2.jpg" alt="">
            <img src="/img/galleria9.jpg" alt="">
            <img src="/img/galleria4.jpg" alt="">
            <img src="/img/galleria7.png" alt="">
        </div>

    </div>

    <div class="btn bottoneGalleria">
        <a href="{{route('home')}}">Home</a>
    </div>

</div>





<!-- footer -->
<section class="footer">
    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="tel: +393791056039" class="fab fa-whatsapp"></a>
    </div>
    <div class="links">
    <a href="{{route('home')}}">Home</a>
    <a href="#">Chi Siamo</a>
    <a href="{{route('galleria')}}">Galleria</a>
    <a href="{{route('contatti')}}">Contatti</a>
    </div>

    <div class="credit">created by <span>Jacopo Bellina</span> | all rights reserved @2024</div>

</section>

</x-layout>