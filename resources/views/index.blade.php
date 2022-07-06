<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('files\bower_components\bootstrap\css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <title>Acceuil</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand navbar-light bg-white py-0 fixed-top">
        <div class="container row">
            <!--navbar brand-->
            <a href="" class="navbar-brand d-flex  align-items-center col-md-2 col-md-offset-6">
                <span class="" style="color: #ECBD00">Romas Interventions</span>
            </a>
            <!--navbar tooggler-->
            <!--button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggle-icon"></span>
            </button-->
            <!--navbar menu-->
            <div class="collapse navbar-collapse col-md-4" id="navMenu" style="">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-3 py-3" style="margin-left: -5%">
                        <a href="#" class="nav-link text-uppercase text-dark connexion-anim">
                            Acceuil
                        </a>
                    </li>
                    <li class="nav-item px-3 py-3" style="margin-left: -5%">
                        <a href="services" class="nav-link text-uppercase text-dark connexion-anim">
                            Services
                        </a>
                    </li>
                    <!--li class="nav-item px-3 py-3">
                        <a href="model" class="nav-link text-uppercase text-dark connexion-anim">
                            Signaler une panne
                        </a>
                    </li-->
                    <!--li class="nav-item px-3 py-3">
                        <a href="faq" class="nav-link text-uppercase text-dark connexion-anim">
                            FAQ
                        </a>
                    </li-->
                    <li class="nav-item px-3 py-3" style="margin-left: -5%">
                        <a href="contact" class="nav-link text-uppercase text-dark connexion-anim">
                            Contacts
                        </a>
                    </li>
                            <!--li class="nav-item px-3 py-3">
                                <a href="{{url('client/login')}}" class="nav-link text-uppercase text-dark connexion-anim">
                                    Connexion
                                </a>
                            </li--> 
                        <li class="nav-item px-3 py-3" style="margin-left: -5%">
                            <a  class="nav-link text-uppercase text-dark connexion-anim" data-toggle="modal" data-target="#tabbed-form">
                                Authentification
                            </a>
                        </li>                     
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->

   @yield('contenu')

<!-- tabbed form modal start -->
<div id="tabbed-form" class="modal fade mixed-form" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content card">
            <div class="modal-body card-block">
                <div class="login-card-modal">

                        <div class="tabbed-modal">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#sign_in" role="tab">
                                        <h6>Se connecter</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#regi" role="tab">
                                        <h6>S'authentifier</h6>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="sign_in" role="tabpanel">
                                        <div class="auth-box">
                                            <div class="row m-b-20">
                                                <div class="col-md-12">
                                                    <h3 class="text-center txt-primary">Se connecter</h3>
                                                </div>
                                            </div>
                                            <hr>
                                            <p class="text-inverse m-t-25">C'est votre première fois ? <a href="#regi"> S'authentifier </a> ici </p> 
                                            <form method="post" action="{{url('client/login')}}">
                                                @csrf
                                            <div class="input-group row" style="margin-bottom: 8%">
                                                <label for="number" class="col-md-4 col-md-offset-2">Numero IFU</label>
                                                <input id = "number" type="number" required name="identifiant" class="form-control col-md-6" placeholder="IFU" required autofocus>
                                                <span class="md-line"></span>
                                            </div>
                                            <div class="input-group row" style="margin-bottom: 8%">
                                                <label class="col-md-4 col-md-offset-2">Mot de passe</label>
                                                <input type="password" name="password" required class="form-control col-md-6" placeholder="Mot de passe" required autocomplete="current-password">
                                                <span class="md-line"></span>
                                            </div>
                                            <div class="row m-t-25 text-left">
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="checkbox-fade fade-in-primary">
                                                        <label>
                                                            <input type="checkbox" value="" id="remember_me" name="remember" >
                                                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                            <span class="text-inverse">Se souvenir de moi</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12 forgot-phone text-right">
                                                    @if (Route::has('password.request'))
                                                        <a href="{{ route('password.request') }}" class="text-right f-w-600 text-inverse"> Mot de passe oublié?</a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row m-t-15">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center">Envoyer</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                </div>
                                    <div class="tab-pane" id="regi" role="tabpanel">
                                        <div class="auth-box">
                                            <div class="row m-b-20">
                                                <div class="col-md-12">
                                                    <h3 class="text-center txt-primary">Authentification</h3>
                                                </div>
                                            </div>
                                            <hr>
                                            <form method="post" action="{{url('client/register')}}">
                                                @csrf
                                            <div class="input-group row" style="margin-bottom: 8%">
                                                <label for="number" class="col-md-4 col-md-offset-2">Numero IFU</label>
                                                <input id = "number" type="number" name="identifiant" class="col-md-6 form-control" placeholder="IFU" required autofocus>
                                                <span class="md-line"></span>
                                            </div>
                                            <div class="input-group row" style="margin-bottom: 8%">
                                                <label class="col-md-4 col-md-offset-2">Mot de passe</label>
                                                <input type="password" class="col-md-6 form-control" placeholder="Choose Password" name="password" required autocomplete="new-password">
                                                <span class="md-line"></span>
                                            </div>
                                            <div class="input-group row" style="margin-bottom: 8%">
                                                <label class="col-md-4 col-md-offset-2">Comfirmer mot de passe</label>
                                                <input type="password" class="col-md-6 form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                                <span class="md-line"></span>
                                            </div>
                                            <div class="row m-t-15">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center">Enregistrer</button>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-10">
                                                </div>
                                                <div class="col-md-2">
                                                    <img src="..\files\assets\images\auth\Logo-small-bottom.png" alt="small-logo.png">
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tabbed form modal end -->
    <!--footer-->

    <footer class="bg-dark text-white p-4 po">
        <div class="container">
            <div class="row text-center text-md-left">

                <div class="col-md-12 col-lg-3 col-xl-3">
                    <h4 class="text-uppercase" style="color: #ECBD00">GestIntervention</h4>
                    <p>Adipisci quasi modi tempore facere illum suscipit.</p>
                </div>

                <div class="col-md-12 col-lg-3 col-xl-3">
                    <h4 class="text-uppercase" style="color: #ECBD00"> Devloppeurs </h4>
                    <p>
                        <a href="#" class="text-decoration-none text-white">
                            Eunice ALLADAKAN
                        </a>
                    </p>
                    <p>
                        <a href="#" class="text-decoration-none text-white">
                            Floriane ANATO
                        </a>
                    </p>
                </div>

                <div class="col-md-12 col-lg-3 col-xl-3">
                    <h4 class="text-uppercase" style="color: #ECBD00">
                        Liens
                    </h4>

                    <p>
                        <a href="#" class="text-decoration-none text-white">
                            A propos
                        </a>
                    </p>

                    <p>
                        <a href="#" class="text-decoration-none text-white">
                            Devenir un partenaire
                        </a>
                    </p>

                    <p>
                        <a href="#" class="text-decoration-none text-white">
                            Aide
                        </a>
                    </p>

                </div>

                <div class="col-md-12 col-lg-3 col-xl-3">
                    <h4 class="text-upeercase" style="color: #ECBD00">
                        Contacts
                    </h4>

                    <p>
                        <i class="fas fa-home mr-3"></i>
                        Cotonou, Benin
                    </p>

                    <p>
                        <i class="fas fa-envelope mr-3"></i>
                        <a href="#" class="text-decoration-none text-white">
                            ecadmin@gmail.com
                        </a>
                    </p>

                    <p>
                        <i class="fas fa-phone mr-3"></i>
                        +229 66534045
                    </p>

                </div>

            </div>
        </div>
    </footer>

    <!--footer-->

    <!-- js bootstrap -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('files\assets\pages\j-pro\js\custom\booking.js')}}"></script>

</body>

</html>