<x-layout>
<header class="header">

<!-- logo -->
<a href=""><img src="/img/ben4.png" alt="" class="logo"></a>
<!-- navbar -->
<nav class="navbar d-none d-md-block d-lg-block">
    <a href="{{route('home')}}">Home</a>
    <a href="#">Chi Siamo</a>
    <a href="#">Galleria</a>
    <a href="#">Contatti</a>
</nav>

<div class="icons">
    <div class="fas fa-search" id="search-btn"></div>
    <div class="fas fa-bars" id="menu-btn"></div>
</div>


<div class="search-form">
    <input type="search" id="search-box" placeholder="cearca qualcosa...">
    <label for="search-box" class="fas fa-search"></label>
</div>

</header>

@if (session('message'))
<div class="alert alert-success">
    <p class="m-5">{{session('message')}}</p>
</div>
@endif

<!-- immagine copertina -->
<section class="home" id="home">
    <div class="content">

        <h3><strong>Sabbiature e Verniciature</strong></h3>
        <p>Sabbiature e Verniciature di Khabbas Benjamin & Mousa Sabbiature, specializzati nel settore da più di 30 anni.
        </p>
        <img src="/img/ben3.png" alt="" class="stemma-header">
        <a href="#" class="btn">Contattaci adesso</a>
        
    </div>
</section>
<!-- about us -->
<section class="about" id="about">
    <h1 class="heading"> <span>About</span> us </h1>
    <div class="row bordo-about">
        <div class="image">
            <img src="/img/ben3.png" alt="">
        </div>
        <div class="content">
            <h3>cosa rende il nostro lavoro unico?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem et quia magnam nam nulla ut dolor quos! Facilis qui dolor nisi. Dolore temporibus repudiandae alias culpa possimus cupiditate.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae sequi, nisi aliquam officia asperiores quidem hic provident aut vel aperiam.</p>
            <a href="#" class="btn">vedi di più</a>
        </div>
    </div>
</section>

<!-- Galleria -->
<section class="galleria" id="galleria">
<h1 class="heading"> <span>galleria</span></h1>
<h3 class="text-center text-white heading-2 display-5"> <span> Alcuni dei Nostri lavori </span></h3>
    <div class="row d-flex justify-content-center">

        <div class="col-6 col-md-4 col-lg-2 d-flex galleria">         
            <div class="card" style="width: 30rem;">
                <img src="/img/sabb1.jpg" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex galleria">
            <div class="card" style="width: 30rem;">
                <img src="/img/cant2.jpg" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex galleria">
            <div class="card" style="width: 30rem;">
                <img src="/img/cant3.jpg" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex galleria">
            <div class="card" style="width: 30rem;">
                <img src="/img/cant1.jpg" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex galleria">
            <div class="card" style="width: 30rem;">
                <img src="/img/sab2.jpg" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex galleria">
            <div class="card" style="width: 30rem;">
                <img src="/img/cant1.jpg" class="card-img-top" alt="...">
            </div>
        </div>

    </div>
</section>




<!-- contact part -->
<section class="contact" id="contact">
    <h2 class="heading"><span>contattaci</span></h2>
    <div class="row">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46275.453430516245!2d10.28408452638932!3d43.539542503367365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d5e967eb7e0fa3%3A0x602df37d22da13d4!2sLivorno%20LI!5e0!3m2!1sit!2sit!4v1707400883546!5m2!1sit!2sit"loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <form action="{{route('submit')}}" method="POST">
            @csrf
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="nome" name="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email" name="email">
            </div>
            <div class="inputBox">
                <span class="fas"></span>
                <textarea name="body" id="" cols="140" rows="10" placeholder="Di cosa hai bisogno..." class="form-controll bg-black text-white"></textarea>
            </div>

        <div class="d-flex justify-content-center">
        <input type="submit" value="contattaci adesso" class="bottone-contatti">

        </form>
    </div>
</section>

<!-- footer -->

<section class="footer">
    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>
    <div class="links">
    <a href="{{route('home')}}">Home</a>
    <a href="#">Chi Siamo</a>
    <a href="#">Galleria</a>
    <a href="#">Contatti</a>
    </div>

    <div class="credit">created by <span>Jacopo Bellina</span> | all rights reserved @2024</div>

</section>





</x-layout>