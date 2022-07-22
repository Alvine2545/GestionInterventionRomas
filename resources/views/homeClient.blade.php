@extends('index')

@section('contenu')

    <!--header-->
    <header id="header" class="h-max w-max">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('res/imgs/bgW1.jpeg')}}" class="mx-auto my-auto" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{asset('res/imgs/bgW.jpeg')}}" class="mx-auto my-auto" alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </header>
<!--header-->

<!--section models-->
<section id="models" class="py-5">

    <div class="container">

        <div class="title text-center">
            <h2 class="position-relative d-inline-block">Nos produits</h2>
        </div>

        <div class="modelList mt-2 row">

            <!--models list-->

            <div class="models col-md-5 col-lg-4 col-xl-3" style="height: 30%">

                <div class="modelImg position-relative">
                    <a href="">
                        <img src="res/imgs/produit.jfif" alt="" class="w-100">
                    </a>
                </div>

                <div class="modelDescription p-2">
                    <h2 class="">Nom</h2>
                    <p class="text-justity">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex non quisquam odio laborum assumenda perspiciatis ipsum laudantium quia error quidem, quis nostrum iste! Odit adipisci magnam doloribus amet quibusdam molestias.</p>
                </div>

            </div>

            <div class="models col-md-5 col-lg-4 col-xl-3" style="height: 30%">

                <div class="modelImg position-relative">
                    <a href="">
                        <img src="res/imgs/Kapersky1.jfif" alt="" class="w-100">
                    </a>
                </div>

                <div class="modelDescription p-2">
                    <h2 class="">Nom</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex non quisquam odio laborum assumenda perspiciatis ipsum laudantium quia error quidem, quis nostrum iste! Odit adipisci magnam doloribus amet quibusdam molestias.</p>
                </div>

            </div>

            <div class="models col-md-5 col-lg-4 col-xl-3" style="height: 30%">

                <div class="modelImg position-relative">
                    <a href="">
                        <img src="res/imgs/kapersky.jfif" alt="" class="w-100">
                    </a>
                </div>

                <div class="modelDescription p-2">
                    <h2 class="">Nom</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex non quisquam odio laborum assumenda perspiciatis ipsum laudantium quia error quidem, quis nostrum iste! Odit adipisci magnam doloribus amet quibusdam molestias.</p>
                </div>

            </div>

            <!--models lists-->

        </div>
        <a href="produit"  class="btn-anim btn-2">Voir Plus</a>

    </div>
</section>
<!--section models-->

<!--section Services-->
<section id="services" class="py-5">
    <div class="container">

        <div class="title text-center">
            <h2 class="position-relative d-inline-block">Nos services</h2>
        </div>

        <div class="row mt-5">

            <div class="col-md-12 col-lg-6 col-xl-6">
                <img src="res/imgs/service3.jfif" class="w-100 h-100" alt="">
            </div>

            <div class="col-md-12 col-lg-6 col-xl-6 text-center py-5">
                <h2 class="title text-center mt-5">Conception d'application web</h2>
                <a href="services" target="service1" class="btn-anim btn mt-5">Lire Plus</a>
            </div>

        </div>


        <div class="row mt-5">

            <div class="col-md-12 col-lg-6 col-xl-6 text-center py-5">
                <h2 class="title text-center mt-5">Services après vente</h2>
                <a href="services" target="service2" class="btn-anim btn mt-5">Lire Plus</a>
            </div>

            <div class="col-md-12 col-lg-6 col-xl-6">
                <img src="res/imgs/service1.jfif" class="w-100 h-100" alt="">
            </div>

        </div>
        <div class="row mt-5">

            <div class="col-md-12 col-lg-6 col-xl-6">
                <img src="res/imgs/service2.jfif" class="w-100 h-100" alt="">
            </div>

            <div class="col-md-12 col-lg-6 col-xl-6 text-center py-5">
                <h2 class="title text-center mt-5">Conception d'application mobile</h2>
                <a href="services" target="service1" class="btn-anim btn mt-5">Lire Plus</a>
            </div>

        </div>

    </div>
</section>
<!--section Services-->

<!--section contacts-->
<section id="contact" class="py-5">
    <div class="container">
        <div class="title text-center">
            <h2 class="position-relative d-inline-block">Nous ecrire</h2>
        </div>

        <!--contact form-->

        <div class="col-md-12 col-lg-6 col-xl-6">

        </div>

        <div class="col-md-12 col-lg-6 col-xl-6">

        </div>

        <!--contact form-->

    </div>
</section>
<!--section contacts-->
@endsection
