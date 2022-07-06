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
                    <form class="md-float-material">
                        <div class="tabbed-modal">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#sign_in" role="tab">
                                        <h6>Sign in</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#regi" role="tab">
                                        <h6>Register</h6>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="sign_in" role="tabpanel">
                                    <div class="auth-box">
                                        <div class="row m-b-20">
                                            <div class="col-md-3">
                                                <h3 class="text-center txt-primary">Sign In</h3>
                                            </div>
                                            <div class="col-md-9">
                                                <p class="text-inverse m-t-25 text-left">Don't have an account? <a href=""> Register </a> here for free!</p>
                                            </div>
                                        </div>
                                        <p class="text-inverse b-b-default text-left p-b-5">Sign in easily with your social account:</p>
                                        <div class="row m-b-20">
                                            <div class="col-md-6">
                                                <button class="btn btn-facebook m-b-20"><i class="icofont icofont-social-facebook"></i>Sign in with facebook</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-twitter m-b-20"><i class="icofont icofont-social-twitter"></i>Sign in with twitter</button>
                                            </div>
                                        </div>
                                        <p class="text-inverse b-b-default text-left p-b-5">Sign in with your regular account</p>
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Username">
                                            <span class="md-line"></span>
                                        </div>
                                        <div class="input-group">
                                            <input type="password" class="form-control" placeholder="password">
                                            <span class="md-line"></span>
                                        </div>
                               