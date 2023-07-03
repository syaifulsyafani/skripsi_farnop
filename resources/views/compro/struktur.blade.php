@extends('compro.main')

@section('container')

<!-- Start top-section Area -->
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center text-center banner-content">
            <div class="col-lg-12">
                <h1 class="text-white">Struktur Organisasi</h1>
            </div>
        </div>
    </div>
</section> <br> <br>
<!-- End top-section Area -->

<section class="about-area section-gap">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 col-md-12 about-left">
                <img class="img-fluid" src="{{ asset('compro/img/struktur.png') }}" alt="">
            </div>
        </div>
    </div>
</section>



@endsection