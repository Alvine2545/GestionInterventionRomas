@extends('index')
<style>

</style>
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
            <h2 class="position-relative d-inline-block">A propos</h2>
        </div>
        <div class="card">
            Le cabinet ROYAL-MAGNIFICAT SERVICE SARL (ROMAS) est une entreprise de gestion informatique qui assure la formation, la conception de site web et logiciels, la vente de matériels informatique et bureautique. Elle a vu le jour le 1er juillet 2015 sous l’initiative de Monsieur Gabin ANADJEME qui est son Directeur général. ROMAS est une entreprise privée de droit béninois qui essaye d’offrir le meilleur de la technologie informatique à sa clientèle en réalisant pour le compte des prestations avec l’obsession de la qualité et la recherche de valeur ajoutée certaine.
            Cette entreprise naissante s’est très vite formalisée en fonction des devoirs en vigueur. Son siège social est situé à Cotonou, quartier Sainte-Rita au carré No1538d.
            Proposant diverses solutions informatiques, elle offre et mets en vente des matériels informatiques: ordinateurs portables ou bureautiques, 
            logiciel anti-virus(Kapersky), disque dur.
        </div>
        <div class="modelList mt-2 row">

            <!--models list-->
            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                <div class="card prod-view">
                    <div class="prod-item text-center">
                        @foreach ($lesproduits as $produit)
                            <div class="prod-img">
                                <a href="#!" class="hvr-shrink">
                                    <img src="{{Storage::url($produit->photo)}}" class="img-fluid o-hidden" alt="prod1.jpg">
                                </a>
                            </div>
                            <div class="prod-info">
                                <a href="http://romastechnologie.com" class="txt-muted"><h4>Nom</h4></a>
                                <span class="prod-price">{{$produit->type}} {{$produit->nom}}</span>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            <!--models lists-->

        </div>
        <a href="http://romastechnologie.com/"  class="btn-anim btn-2">Voir Plus</a>

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
                <a href="http://romastechnologie.com/" class="btn-anim btn mt-5">Lire Plus</a>
            </div>

        </div>


        <div class="row mt-5">

            <div class="col-md-12 col-lg-6 col-xl-6 text-center py-5">
                <h2 class="title text-center mt-5">Services après vente</h2>
                <a href="http://romastechnologie.com/" class="btn-anim btn mt-5">Lire Plus</a>
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
                <a href="http://romastechnologie.com/" class="btn-anim btn mt-5">Lire Plus</a>
            </div>

        </div>

    </div>
</section>
<!--section Services-->

<!--section contacts-->
<section id="contact" class="py-5">
    <div class="container">
        <div class="title text-center">
            <h2 class="position-relative d-inline-block">Nous écrire</h2>
        </div>
        @if (Auth::check())
        <div class="j-wrapper j-wrapper-640">
            <form action="{{ url('client/pannes/store') }}" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" novalidate="">
                @csrf
                @method('POST')
                <div class="j-content">
                    <!-- start email -->
                    <div class="j-unit">
                        <div class="j-input">
                            <label class="j-icon-left" for="email">
                                <i class="icofont icofont-envelope"></i>
                            </label>
                            <input type="email" readonly placeholder="Email ou Numero IFU" id="email" name="email" value="{{Auth::user()->email}}">
                        </div>
                    </div>
                    <!-- end email -->
                        <div class="j-unit">
                            <label class="j-input j-select">
                                <select name="produit">
                                    @if (collect(['produits'])->isEmpty())
                                        <option value="" selected="">Vous n'avez aucun produit chez ROMAS</option>
                                    @else
                                        <option value="" selected="">Choisir un produit</option>
                                        @foreach ($produits as $produit) 
                                            <option value="{{$produit->id}}">{{$produit->nom}} </option> 
                                        @endforeach                                     
                                    @endif
                                    
                                </select>
                                <i></i>
                            </label>
                        </div>
                        <!-- start file -->
                        <div class="j-unit">
                            <div class="j-input j-append-big-btn">
                                <label class="j-icon-left" for="file_input">
                                    <i class="icofont icofont-download"></i>
                                </label>
                                <div class="j-file-button">
                                    Choisir
                                    <input type="file" name="photo" onchange="document.getElementById('photo').value = this.value;">
                                </div>
                                <input type="text" id="photo" name="photo" placeholder="Aucun fichier sélectionné">
                                <span class="j-hint">Image: jpg / png / doc, d'au plus 1Mb</span>
                            </div>
                        </div>
                        <!-- end file -->
                        <!-- start message -->
                        <div class="j-unit">
                            <div class="j-input">
                                <label class="j-icon-left" for="message">
                                    <i class="icofont icofont-file-text"></i>
                                </label>
                                <textarea placeholder="Additional info" spellcheck="false" id="message" name="description"></textarea>
                                <span class="j-tooltip j-tooltip-right-top">Décrivez au mieux possible votre message</span>
                            </div>
                        </div>
                        <!-- end message -->
                    <!-- start response from server -->
                    <div class="j-response"></div>
                    <!-- end response from server -->
                </div>
                <!-- end /.content -->
                <div class="j-footer">
                    <div>Assurez-vous d'avoir remplir tous les champs avant d'envoyer le formulaire</div>
                    @if (collect(['produits'])->isEmpty())

                        <button disabled type="submit" class="btn btn-primary">Envoyer</button>
                    @else
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    @endif
                    
                    <button type="reset" class="btn btn-default m-r-20">Annuler</button>
                </div>
                <!-- end /.footer -->
            </form>
        </div>
        @else
            <span class="text-center"><h3>Vous n'êtes pas connectez!</h3></span>
        @endif
        
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
