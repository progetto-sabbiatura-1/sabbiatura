<x-layout>
<header class="header">

<!-- logo -->
<a href=""><img src="/img/ben4.png" alt="" class="logo"></a>

<!-- navbar -->

<div class="spazioNavbar"></div>

<nav class="navbar d-none d-md-block d-lg-block">
    <a href="{{route('home')}}">Home</a>
    <a href="#">Chi Siamo</a>
    <a href="{{route('galleria')}}">Galleria</a>
    <a href="{{route('contatti')}}">Contatti</a>
</nav>

<div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="tel: +393791056039" class="fab fa-whatsapp"></a>
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


<!-- contact part -->
<section class="contact contactContatti" id="contact">

    

    <div class="row">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46275.453430516245!2d10.28408452638932!3d43.539542503367365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d5e967eb7e0fa3%3A0x602df37d22da13d4!2sLivorno%20LI!5e0!3m2!1sit!2sit!4v1707400883546!5m2!1sit!2sit"loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <form action="{{route('submit')}}" method="POST" class="backgroundContatti">
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

</section>
<!-- footer -->

<section class="footer">

    <div class="links">
    <a href="{{route('home')}}">Home</a>
    <a href="#">Chi Siamo</a>
    <a href="{{route('galleria')}}">Galleria</a>
    <a href="{{route('contatti')}}">Contatti</a>
    </div>

    <div class="credit">created by <span>Jacopo Bellina</span> | all rights reserved @2024</div>

</section>

</x-layout>