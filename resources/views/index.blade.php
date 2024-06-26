<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('files\bower_components\bootstrap\css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('app.css')}}">

    <link rel="stylesheet" href="{{asset('files\bower_components\select2\css\select2.min.css')}}">

    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('files\assets\images\favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('files\bower_components\bootstrap\css\bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('files\assets\icon\themify-icons\themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('files\assets\icon\icofont\css\icofont.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('files\assets\icon\feather\css\feather.css')}}">
     <!-- jpro forms css -->
     <link rel="stylesheet" type="text/css" href="{{asset('files\assets\pages\j-pro\css\demo.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('files\assets\pages\j-pro\css\font-awesome.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('files\assets\pages\j-pro\css\j-pro-modern.css')}}">
    <!--forms-wizard css-->
    <link rel="stylesheet" type="text/css" href="{{asset('files\bower_components\jquery.steps\css\jquery.steps.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('files\assets\css\style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files\assets\css\jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <title>Acceuil</title>
</head>

<body>
    @include('sweetalert::alert')
    <!-- navbar -->
    <nav class="navbar navbar-expand navbar-white py-0 fixed-top" style="background-color: #202a87">
        <div class="container row">
            <!--navbar brand-->
            <a href="#" class="navbar-brand d-flex  align-items-center col-md-2 col-md-offset-8">
                <img src="{{asset('files/assets/images/logo_romas2.png')}}" alt="">
                <span class="" style="color: white">ROMAS Interventions</span>
            </a>
            <div class="collapse navbar-collapse col-md-2" id="navMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-3 py-3" style="margin-left: -5%">
                        <a href="#" class="nav-link  text-uppercase text-white ">
                            Acceuil
                        </a>
                    </li>
                    <li class="nav-item px-3 py-3" style="margin-left: -5%">
                        <a href="#services" class="nav-link text-uppercase text-white">
                            Services
                        </a>
                    </li>
                    <li class="nav-item px-3 py-3" style="margin-left: -5%">
                        <a href="http://romastechnologie.com/" class="nav-link text-uppercase text-white ">
                            Produits
                        </a>
                    </li>
                    
                    <li class="nav-item px-3 py-3 dropdown" style="margin-left: -5%">
                        {{-- <div class="dropdown"> --}}
                            @if (Auth::check())
                                <a class="nav-link text-uppercase text-white dropdown-toggle" href="#contact" data-bs-toggle="dropdown">
                                    Pannes
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#contact">Signaler une panne</a></li>
                                    {{-- @if () --}}
                                        <li><a class="dropdown-item" href="{{url('client/details')}}"> Ma page</a></li>    
                                    {{-- @endif --}}
                                </ul>
                            @else
                                <a  class="nav-link text-uppercase text-white" href="{{url('login')}}" data-toggle="modal" data-target="#tabbed-form">
                                    Authentification
                                </a>
                            @endif
                        {{-- </div> --}}
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
                                            <form method="post" action="{{route('login')}}" novalidate>
                                                @method('POST')
                                                @csrf
                                            <div class="input-group row" style="margin-bottom: 8%">
                                                <input type="hidden" name="rol" value="client">
                                                <label for="number" class="col-md-4 col-md-offset-2">Email</label>
                                                <input id = "identifiant" type="email" required name="email" class="form-control col-md-6" placeholder="IFU" required autofocus>
                                                <span class="md-line"></span>
                                            </div>
                                            <div class="input-group row" style="margin-bottom: 8%">
                                                <label class="col-md-4 col-md-offset-2">Mot de passe</label>
                                                <input type="password" name="password" id="password" required class="form-control col-md-6" placeholder="Mot de passe" required autocomplete="current-password">
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
                                                @method('GET')
                                            <div class="input-group row" style="margin-bottom: 8%">
                                                <label for="number" class="col-md-4 col-md-offset-2">Numero IFU</label>
                                                <input id = "identifiantR" type="number" name="identifiant" class="col-md-6 form-control" placeholder="IFU" required autofocus>
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
                                                    <img src="{{asset('files\assets\images\auth\Logo-small-bottom.png')}}" alt="small-logo.png">
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

    <footer class=" text-white p-4 po" style="background-color: #050d50">
        <div class="container">
            <div class="row text-center text-md-left">

                <div class="col-md-12 col-lg-3 col-xl-3">
                    <img src="{{url('files/assets/images/logo_romas2.png')}}" alt="">
                    <p>
                        <a href="#" class="text-decoration-none text-white">
                            ROYAL-MAGNIFICAT SERVICES Technologie
                        </a>
                    </p>
                </div>
                
                <div class="col-md-12 col-lg-3 col-xl-3">
                    <h4 class="text-uppercase" >Romas Interventions</h4>
                    <p>La plateforme qui vous sauve la vie.</p>
                </div>


                <div class="col-md-12 col-lg-3 col-xl-3">
                    <h4 class="text-uppercase">
                        Liens
                    </h4>

                    <p>
                        <a href="http://romastechnologie.com/" class="text-decoration-none text-white">
                            A propos
                        </a>
                    </p>

                    <p>
                        <a href="#" class="text-decoration-none text-white">
                            Devenir un partenaire
                        </a>
                    </p>

                    <p>
                        <a href="client/help" class="text-decoration-none text-white">
                            Aide
                        </a>
                    </p>

                </div>

                <div class="col-md-12 col-lg-3 col-xl-3">
                    <h4 class="text-upeercase">
                        Contacts
                    </h4>

                    <p>
                        <i class="fas fa-home mr-3"></i>
                        Bénin, Cotonou, Ste Rita
                    </p>

                    <p>
                        <i class="fas fa-envelope mr-3"></i>
                        <a href="mailto:contact@romas-benin.com" class="text-decoration-none text-white">
                            contact@romas-benin.com
                        </a>
                    </p>

                    <p>
                        <i class="fas fa-globe mr-3"></i>
                        <a href="http://romastechnologie.com/" class="text-decoration-none text-white">
                            http://romastechnologie.com/
                        </a>
                    </p>

                    <p>
                        <i class="fas fa-phone mr-3"></i>
                        <a href="tel:+22990621523" class="text-decoration-none text-white">(00229) 90 62 15 23</a>  -  <a href="tel:+22996110917" class="text-decoration-none text-white">96 11 09 17</a>
                    </p>

                </div>

            </div><hr style="border-color: white">
            <div class="row footer-bottom mt-70 pt-3 pb-1">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-bottom-content">
                        <div class="footer-bottom-content-copy">
                            <p>© 2022 Romas .Tous droits réservés. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer-bottom-right">
                        <div class="footer-bottom-right-text">
                                                </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- js bootstrap -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <!-- Required Jquery -->
    <script type="text/javascript" src="{{asset('files\bower_components\jquery\js\jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('files\bower_components\jquery-ui\js\jquery-ui.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js')}}"></script>

    <script type="text/javascript" src="{{asset('files\bower_components\popper.js\js\popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('files\bower_components\bootstrap\js\bootstrap.min.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('files\bower_components\modernizr\js\modernizr.js')}}"></script>

    <script type="text/javascript" src="{{asset('files\bower_components\modernizr\js\css-scrollbars.js')}}"></script>

    <script type="text/javascript" src="{{asset('files\bower_components\multiselect\js\jquery.multi-select.js')}}"></script>
    <script type="text/javascript" src="{{asset('files\assets\js\jquery.quicksearch.js')}}"></script>
    <!-- j-pro js -->
    <script type="text/javascript" src="{{asset('files\assets\pages\j-pro\js\jquery.ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('files\assets\pages\j-pro\js\jquery.maskedinput.min.js')}}"></script>
    
    <!-- Custom js -->
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{asset('files\bower_components\i18next\js\i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('files\bower_components\jquery-i18next\js\jquery-i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('files\assets\pages\j-pro\js\custom\booking-multistep.js')}}"></script>
    
     <!-- modernizr js -->
     <script type="text/javascript" src="{{asset('files\bower_components\modernizr\js\css-scrollbars.js')}}"></script>

     <!-- Custom js -->
     <script type="text/javascript" src="{{asset('files\assets\pages\j-pro\js\custom\booking.js')}}"></script>
     <script type="text/javascript" src="{{asset('files\assets\pages\j-pro\js\custom\suggestion-form.js')}}"></script>
    <!--Forms - Wizard js-->
    <script src="{{asset('files\bower_components\jquery.cookie\js\jquery.cookie.js')}}"></script>
    <script src="{{asset('files\bower_components\jquery.steps\js\jquery.steps.js')}}"></script>
    <script src="{{asset('files\bower_components\jquery-validation\js\jquery.validate.js')}}"></script>
    <!-- Validation js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script type="text/javascript" src="{{asset('files\assets\pages\form-validation\validate.js')}}"></script>
    <!-- Custom js -->
    <script src="{{asset('files\assets\pages\forms-wizard-validation\form-wizard.js')}}"></script>
    <script src="{{asset('files\assets\js\pcoded.min.js')}}"></script>
    <script src="{{asset('files\assets\js\vartical-layout.min.js')}}"></script>
    <script src="{{asset('files\assets\js\jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('files\assets\js\script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');

</script>
<script src="js/app.js"></script>
<script>
    @if(Session::has('message'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('error'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ session('error') }}");
    @endif

    @if(Session::has('info'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.info("{{ session('info') }}");
    @endif

    @if(Session::has('warning'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.warning("{{ session('warning') }}");
    @endif
</script>
</body>

</html>
