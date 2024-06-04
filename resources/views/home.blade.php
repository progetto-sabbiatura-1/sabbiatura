<x-layout>
<header class="header">

<!-- logo -->
<a href=""><img src="/img/ben4.png" alt="" class="logo"></a>
<!-- navbar -->

<div class="spazioNavbar d-none d-md-none"></div>

<nav class="navbar d-none d-md-block d-lg-block">
    <a href="{{route('home')}}">Home</a>
    <a href="{{route('home')}}">Chi Siamo</a>
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

@if (session('success'))
<div class="alert alert-success message">
    <p class="m-0 text-black">{{session('success')}}</p>
</div>
@endif


<!-- immagine copertina -->
<section class="home" id="home">
    <div class="content">

        <h3><strong>Sabbiature e Verniciature</strong></h3>
        <p>Sabbiature e Verniciature di Khabbas Benjamin & Mousa Sabbiature, specializzati nel settore da più di 30 anni.
        </p>
        <img src="/img/ben4.png" alt="" class="stemma-header">
        <a href="{{route('contatti')}}" class="btn">Contattaci adesso</a>
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
            <h3>Di Cosa ci Occupiamo?</h3>
            <p>La nostra ditta è specializzata in sabbiature edili su Cotto e Legno (Travi, Travicelli, Mezzana, Pareti interne e Facciate esterne). Trattamento cotto antispolvero e trattamento legno antitarlo con apposita macchinetta a pressione.</p>
            <p>Sabbiatura metalli, lavorazione che viene usata per la rimozione della ruggine e per la rimozione di residui di vernice dal metallo per poi passare alla verniciatura del metallo sabbiato con l' applicazione dei prodotti più idonei e protettivi.</p>
            <a href="{{route('galleria')}}" class="btn">vedi di più</a>
        </div>
    </div>
</section>

<!-- Galleria -->
<hr class="my-5">
<section class="galleria" id="galleria">
<h1 class="heading"> <span>galleria</span></h1>
<h3 class="text-center  heading-2 display-5 mb-5">Alcuni dei Nostri <span> Lavori </span></h3>


    <div class="container">
        <div class="row">
            <div class="col-12">

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="/img/sab2.jpg" class="d-block carousel-image w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="/img/galleria3.jpg" class="d-block carousel-image w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="/img/galleria2.jpg" class="d-block carousel-image w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="/img/galleria1.jpg" class="d-block carousel-image w-100" alt="...">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

            </div>
        </div>
    </div>

    

</section>




<!-- contact part -->
<hr class="my-5">
<section class="contact" id="contact">
    <h2 class="heading"><span>contattaci</span></h2>
    <div class="row background">
    <iframe class="map background" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46275.453430516245!2d10.28408452638932!3d43.539542503367365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d5e967eb7e0fa3%3A0x602df37d22da13d4!2sLivorno%20LI!5e0!3m2!1sit!2sit!4v1707400883546!5m2!1sit!2sit"loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <form action="{{route('submit')}}" method="POST" class="background">
            @csrf
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name" name="name" class="@error('name') is-invalid @enderror">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email" name="email" class="@error('email') is-invalid @enderror">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="inputBox">
                <span class="fas"></span>
                <textarea name="body" id="" cols="140" rows="10" placeholder="Di cosa hai bisogno..." class="form-controll bg-black text-white @error('body') is-invalid @enderror"></textarea>
            @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

        <div class="d-flex justify-content-center">
        <input type="submit" value="contattaci adesso" class="bottone-contatti">
        </form>

    </div>
</section>

<!-- footer -->

<section class="footer">
    <div class="share">
        <!-- <a href="#" class="fab fa-facebook-f"></a> -->
        <a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Afsd_profile%3AACoAAE9hrjsBzHkdcXzI4FhYb8y8t_5lkADsjdE&keywords=benyamin%20khabbas&origin=RICH_QUERY_SUGGESTION&position=0&searchId=7e8a5756-4d13-47ce-b83f-4993c3178865&sid=io~&spellCorrectionEnabled=false" class="fab fa-linkedin" target="_blank"></a>
        <a href="tel: +393791056039" target="_blank" class="fab fa-whatsapp"></a>
    </div>
    <div class="links">
    <a href="{{route('home')}}">Home</a>
    <a href="{{route('home')}}">Chi Siamo</a>
    <a href="{{route('galleria')}}">Galleria</a>
    <a href="{{route('contatti')}}">Contatti</a>
    </div>

    <div class="credit">created by <span>Jacopo Bellina</span> | all rights reserved @2024</div>

</section>





</x-layout>