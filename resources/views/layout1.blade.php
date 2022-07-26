<!DOCTYPE html>
<html>
    <head>
        <title>Admin- Romas Interventions</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <link rel="stylesheet" href="{{asset('files\bower_components\select2\css\select2.min.css')}}">

    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('files\assets\images\favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('files\bower_components\bootstrap\css\bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('files\assets\icon\themify-icons\themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('files\assets\icon\icofont\css\icofont.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('files\assets\icon\feather\css\feather.css')}}">
    <!--forms-wizard css-->
    <link rel="stylesheet" type="text/css" href="{{asset('files\bower_components\jquery.steps\css\jquery.steps.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('files\assets\css\style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files\assets\css\jquery.mCustomScrollbar.css')}}">
        <!-- jpro forms css -->
        <link rel="stylesheet" type="text/css" href="{{asset('files\assets\pages\j-pro\css\demo.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('files\assets\pages\j-pro\css\font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('files\assets\pages\j-pro\css\j-pro-modern.css')}}">

        @livewireStyles
    </head>
    <body>
        <!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">

                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>
                    <a href="{{url('admin/dashboard')}}">
                        <span>Romas Intervention</span>
                        <!--img class="img-fluid" src="{{asset('files\assets\images\logo1.png')}}" alt="Theme-Logo"-->
                    </a>
                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="feather icon-maximize full-screen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-bell"></i>
                                    <span class="badge bg-c-pink">5</span>
                                </div>
                                <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">Nouvelle</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{asset('files\assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">{{Auth::user()->name}}</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{asset('files\assets\images\avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                    <span>{{Auth::user()->name}}</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="#!">
                                            <i class="feather icon-settings"></i> Paramètres
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.htm">
                                            <i class="feather icon-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.htm">
                                            <i class="feather icon-mail"></i> Mes messages
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{route('logout')}}" method="post">
                                            @csrf
                                            <i class="feather icon-log-out"></i> <button type="submit" style="border: none"> Déconnecter</button>

                                        </form>

                                    </li>
                                </ul>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sidebar chat start -->
        <div id="sidebar" class="users p-chat-user showChat">
            <div class="had-container">
                <div class="card card_main p-fixed users-main">
                    <div class="user-box">
                        <div class="chat-inner-header">
                            <div class="back_chatBox">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-friend-list">
                            <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius img-radius" src="{{asset('files\assets\images\avatar-3.jpg')}}" alt="Generic placeholder image ">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Josephin Doe</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar inner chat start-->
        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="feather icon-chevron-left"></i> Josephin Doe
                </a>
            </div>
            <div class="media chat-messages">
                <a class="media-left photo-table" href="#!">
                    <img class="media-object img-radius img-radius m-t-5" src="{{asset('files\assets\images\avatar-3.jpg')}}" alt="Generic placeholder image">
                </a>
                <div class="media-body chat-menu-content">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="chat-reply-box p-b-20">
                <div class="right-icon-control">
                    <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                    <div class="form-icon">
                        <i class="feather icon-navigation"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigatio-lavel"> Dashboard</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Utilisateurs</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="{{url('admin/users')}}">
                                            <span class="pcoded-mtext">Ajouter</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{url('client/create')}}">
                                            <span class="pcoded-mtext">Les utilisateurs</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{url('client/create')}}">
                                            <span class="pcoded-mtext">Les clients</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{url('client/create')}}">
                                            <span class="pcoded-mtext">Les techniciens</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Nos installations</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                    <span class="pcoded-mtext">Gestion produits</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="{{url('admin/produit/create')}}">
                                            <span class="pcoded-mtext">Créer produit</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{url('admin/produit/index')}}">
                                            <span class="pcoded-mtext">Les produits</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{url('admin/panne')}}">
                                            <span class="pcoded-mtext">Enregistrer panne</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form-elements-add-on.htm">
                                            <span class="pcoded-mtext">Liste des pannes</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form-elements-add-on.htm">
                                            <span class="pcoded-mtext">Installations</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Plannification</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                                    <span class="pcoded-mtext">Plannification</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="bs-basic-table.htm">
                                            <span class="pcoded-mtext">Nos planning</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="bs-table-sizing.htm">
                                            <span class="pcoded-mtext">Faire planning</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{url('admin/typeintervention/liste')}}">
                                            <span class="pcoded-mtext">Type interventions</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="bs-table-border.htm">
                                            <span class="pcoded-mtext">Interventions</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Interventions</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-unlock"></i></span>
                                    <span class="pcoded-mtext">Reçu</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="auth-normal-sign-in.htm" target="_blank">
                                            <span class="pcoded-mtext">Editer reçu</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="" target="_blank">
                                            <span class="pcoded-mtext">Envoyer reçu</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                                    <span class="pcoded-mtext">Devis</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="error.htm">
                                            <span class="pcoded-mtext">Editer devis</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{url('admin/typedevis/liste')}}">
                                            <span class="pcoded-mtext">Type devis</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                    <span class="pcoded-mtext">Rapport</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="timeline.htm">
                                            <span class="pcoded-mtext">Créer un rapport</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="timeline-social.htm">
                                            <span class="pcoded-mtext">Liste rapport</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            @yield('content')
                        </div>
                    </div>
                </div>

        <script type="text/javascript" src="{{asset('files\bower_components\jquery\js\jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('files\bower_components\jquery-ui\js\jquery-ui.min.js')}}"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="{{asset('files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js')}}"></script>

        <script type="text/javascript" src="{{asset('files\bower_components\popper.js\js\popper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('files\bower_components\bootstrap\js\bootstrap.min.js')}}"></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="{{asset('files\bower_components\modernizr\js\modernizr.js')}}"></script>

        <script type="text/javascript" src="{{asset('files\bower_components\modernizr\js\css-scrollbars.js')}}"></script>
        <script type="text/javascript" src="{{asset('files\bower_components\select2\js\select2.full.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('files\bower_components\multiselect\js\jquery.multi-select.js')}}"></script>
        <script type="text/javascript" src="{{asset('files\assets\js\jquery.quicksearch.js')}}"></script>
        <!-- Custom js -->
        <script type="text/javascript" src="{{asset('files\assets\pages\j-pro\js\custom\booking.js')}}"></script>
        <script type="text/javascript" src="{{asset('files\assets\pages\advance-elements\select2-custom.js')}}"></script>
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

        <!--Forms - Wizard js-->
        <script src="{{asset('files\bower_components\jquery.cookie\js\jquery.cookie.js')}}"></script>
        <script src="{{asset('files\bower_components\jquery.steps\js\jquery.steps.js')}}"></script>
        <script src="{{asset('files\bower_components\jquery-validation\js\jquery.validate.js')}}"></script>
        <!-- j-pro js -->
        <script type="text/javascript" src="{{asset('files\assets\pages\j-pro\js\jquery.ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('files\assets\pages\j-pro\js\jquery.maskedinput.min.js')}}"></script>
            {{-- <script type="text/javascript" src="{{asset('files\assets\pages\j-pro\js\jquery.j-pro.js')}}"></script> --}}
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>
    <!--script>
        $(document).ready(function() {
            $('#next').click(function(){
            var cases = document.getElementById("j-pro").role;
            for(var i=0; i<cases.length; i++){
                if(cases[i].checked){
                    if(cases[i].value == 3){
                        console.log(cases[i].value);
                        $('#userrole').html('<div class="j-unit"><label class="j-label">Nom de l\'entreprise *</label><div class="j-input"><label class="j-icon-right" for="name"><i class="icofont icofont-ui-user"></i></label><input type="text" id="name" name="name"></div></div><div class="j-row"><div class="j-span6 j-unit"><label class="j-label">Numero IFU *</label><div class="j-input"><label class="j-icon-right" for="email"><i class="icofont icofont-envelope"></i></label><input type="text" id="identifiant" name="identifiant"></div></div><div class="j-span6 j-unit"><label class="j-label">Raison sociale</label><div class="j-input"><label class="j-icon-right" for="phone"><i class="icofont icofont-phone"></i></label><input type="text" id="raisonsociale" name="raisonsociale"></div></div></div><div class="j-row"><div class="j-span6 j-unit"><label class="j-label">Adresse Email</label><div class="j-input"><label class="j-icon-right" for="email"><i class="icofont icofont-envelope"></i></label><input type="email" id="email" name="email"></div></div><div class="j-span6 j-unit"><label class="j-label">Adresse téléphonique</label><div class="j-input"><label class="j-icon-right" for="phone"><i class="icofont icofont-phone"></i></label><input type="text" id="phone" name="phone"></div></div></div><div class="j-unit"><label class="j-label">Siège</label><div class="j-input"><label class="j-icon-right" for="name"><i class="icofont icofont-ui-user"></i></label><input type="text" id="siege" name="siege"></div></div>');
                    }else if(cases[i].value == 2){
                        console.log(cases[i].value);
                        $('#userrole').html('<div class="j-unit"><label class="j-label">Nom *</label><div class="j-input"><label class="j-icon-right" for="name"><i class="icofont icofont-ui-user"></i></label><input type="text" id="name" name="name"></div></div><div class="j-row"><div class="j-span6 j-unit"><label class="j-label">Prénom *</label><div class="j-input"><label class="j-icon-right" for="email"><i class="icofont icofont-envelope"></i></label><input type="text" id="identifiant" name="identifiant"></div></div><div class="j-span6 j-unit"><label class="j-label">Email *</label><div class="j-input"><label class="j-icon-right" for="phone"><i class="icofont icofont-phone"></i></label><input type="text" id="raisonsociale" name="raisonsocialr"></div></div></div><div class="j-row"><div class="j-span6 j-unit"><label class="j-label">Adresse Email</label><div class="j-input"><label class="j-icon-right" for="email"><i class="icofont icofont-envelope"></i></label><input type="email" id="email" name="email"></div></div><div class="j-span6 j-unit"><label class="j-label">Adresse téléphonique</label><div class="j-input"><label class="j-icon-right" for="phone"><i class="icofont icofont-phone"></i></label><input type="text" id="phone" name="phone"></div></div></div><div class="j-unit"><label class="j-label">Siège</label><div class="j-input"><label class="j-icon-right" for="name"><i class="icofont icofont-ui-user"></i></label><input type="text" id="siege" name="siege"></div></div>');

                    }else if(cases[i].value == 1){
                        console.log(cases[i].value);
                        $('#userrole').html('<div class="j-unit"><label class="j-label">Nom *</label><div class="j-input"><label class="j-icon-right" for="name"><i class="icofont icofont-ui-user"></i></label><input type="text" id="name" name="name"></div></div><div class="j-row"><div class="j-span6 j-unit"><label class="j-label">Numero IFU</label><div class="j-input"><label class="j-icon-right" for="email"><i class="icofont icofont-envelope"></i></label><input type="text" id="identifiant" name="identifiant"></div></div><div class="j-span6 j-unit"><label class="j-label">Raison sociale</label><div class="j-input"><label class="j-icon-right" for="phone"><i class="icofont icofont-phone"></i></label><input type="text" id="raisonsociale" name="raisonsocialr"></div></div></div><div class="j-row"><div class="j-span6 j-unit"><label class="j-label">Adresse Email</label><div class="j-input"><label class="j-icon-right" for="email"><i class="icofont icofont-envelope"></i></label><input type="email" id="email" name="email"></div></div><div class="j-span6 j-unit"><label class="j-label">Adresse téléphonique</label><div class="j-input"><label class="j-icon-right" for="phone"><i class="icofont icofont-phone"></i></label><input type="text" id="phone" name="phone"></div></div></div><div class="j-unit"><label class="j-label">Siège</label><div class="j-input"><label class="j-icon-right" for="name"><i class="icofont icofont-ui-user"></i></label><input type="text" id="siege" name="siege"></div></div>');

                    }
                }
            }
        });
    });

    </script-->
        @livewireScripts
    </body>
</html>
