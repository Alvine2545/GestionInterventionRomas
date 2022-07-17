<!DOCTYPE html>
<html>
    <head>
        <title>Admin- GestInterventions</title>
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
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{asset('files\assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{asset('files\assets\images\avatar-3.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{asset('files\assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-message-square"></i>
                                    <span class="badge bg-c-green">3</span>
                                </div>
                            </div>
                        </li>
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{asset('files\assets\images\avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                    <span>John Doe</span>
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
                                        <a href="auth-lock-screen.htm">
                                            <i class="feather icon-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-normal-sign-in.htm">
                                            <i class="feather icon-log-out"></i> Déconnecté
                                        </a>
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
                            <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{asset('files\assets\images\avatar-2.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Lary Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{asset('files\assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alice</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{asset('files\assets\images\avatar-3.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alia</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{asset('files\assets\images\avatar-2.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Suzen</div>
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
                        <div class="pcoded-navigatio-lavel">Navigation</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Dashboard</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="index-1.htm">
                                            <span class="pcoded-mtext">Utilisateurs</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="dashboard-crm.htm">
                                            <span class="pcoded-mtext">Les utilisateurs</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{url('client/create')}}">
                                            <span class="pcoded-mtext">Ajouter utilisateur</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                    <span class="pcoded-mtext">Gestion des clients</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-mtext">Clients</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="menu-static.htm">
                                                    <span class="pcoded-mtext">Les clients</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="{{url('client/create')}}">
                                                    <span class="pcoded-mtext">Ajouter client</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-header-fixed.htm">
                                                    <span class="pcoded-mtext">Ajouter pannes</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="menu-bottom.htm">
                                            <span class="pcoded-mtext">Techniciens</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="box-layout.htm" target="_blank">
                                            <span class="pcoded-mtext">Les techniciens</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="menu-rtl.htm" target="_blank">
                                            <span class="pcoded-mtext">Ajouter technicien</span>
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
                                        <a href="{{url('produit/create')}}">
                                            <span class="pcoded-mtext">Créer produit</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{url('produit/index')}}">
                                            <span class="pcoded-mtext">Les produits</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="button.htm">
                                            <span class="pcoded-mtext">Créer installations</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="box-shadow.htm">
                                            <span class="pcoded-mtext">Intallations</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-gitlab"></i></span>
                                    <span class="pcoded-mtext">Advance Components</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="draggable.htm">
                                            <span class="pcoded-mtext">Draggable</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="bs-grid.htm">
                                            <span class="pcoded-mtext">Grid Stack</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="light-box.htm">
                                            <span class="pcoded-mtext">Light Box</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="modal.htm">
                                            <span class="pcoded-mtext">Modal</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="notification.htm">
                                            <span class="pcoded-mtext">Notifications</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="notify.htm">
                                            <span class="pcoded-mtext">PNOTIFY</span>
                                            <span class="pcoded-badge label label-info">NEW</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="rating.htm">
                                            <span class="pcoded-mtext">Rating</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="range-slider.htm">
                                            <span class="pcoded-mtext">Range Slider</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="slider.htm">
                                            <span class="pcoded-mtext">Slider</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="syntax-highlighter.htm">
                                            <span class="pcoded-mtext">Syntax Highlighter</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="tour.htm">
                                            <span class="pcoded-mtext">Tour</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="treeview.htm">
                                            <span class="pcoded-mtext">Tree View</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="nestable.htm">
                                            <span class="pcoded-mtext">Nestable</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="toolbar.htm">
                                            <span class="pcoded-mtext">Toolbar</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="x-editable.htm">
                                            <span class="pcoded-mtext">X-Editable</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                                    <span class="pcoded-mtext">Extra Components</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="session-timeout.htm">
                                            <span class="pcoded-mtext">Session Timeout</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="session-idle-timeout.htm">
                                            <span class="pcoded-mtext">Session Idle Timeout</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="offline.htm">
                                            <span class="pcoded-mtext">Offline</span>
                                        </a>
                                    </li>
                    
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-command"></i></span>
                                    <span class="pcoded-mtext">Icons</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="icon-font-awesome.htm">
                                            <span class="pcoded-mtext">Font Awesome</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-themify.htm">
                                            <span class="pcoded-mtext">Themify</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-simple-line.htm">
                                            <span class="pcoded-mtext">Simple Line Icon</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-ion.htm">
                                            <span class="pcoded-mtext">Ion Icon</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-material-design.htm">
                                            <span class="pcoded-mtext">Material Design</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-icofonts.htm">
                                            <span class="pcoded-mtext">Ico Fonts</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-weather.htm">
                                            <span class="pcoded-mtext">Weather Icon</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-typicons.htm">
                                            <span class="pcoded-mtext">Typicons</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-flags.htm">
                                            <span class="pcoded-mtext">Flags</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Pannes</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                    <span class="pcoded-mtext">Enregister</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="form-elements-component.htm">
                                            <span class="pcoded-mtext">Enregistrer panne</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form-elements-add-on.htm">
                                            <span class="pcoded-mtext">Liste des pannes</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Plannings</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                                    <span class="pcoded-mtext">Planning</span>
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
                                        <a href="bs-table-border.htm">
                                            <span class="pcoded-mtext">Interventions</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Reçus</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-unlock"></i></span>
                                    <span class="pcoded-mtext">Les reçus</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="auth-normal-sign-in.htm" target="_blank">
                                            <span class="pcoded-mtext">Editer reçu</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-sign-in-social.htm" target="_blank">
                                            <span class="pcoded-mtext">Liste des devis</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-sign-up-social.htm" target="_blank">
                                            <span class="pcoded-mtext">Registration Social Icon</span>
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
                                            <span class="pcoded-mtext">Créer un devis</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="comming-soon.htm">
                                            <span class="pcoded-mtext">Lies des sevoir</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="offline-ui.htm">
                                            <span class="pcoded-mtext"> UI</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                    <span class="pcoded-mtext">Rapporte</span>
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
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
                                    <span class="pcoded-mtext">E-Commerce</span>
                                    <span class="pcoded-badge label label-danger">NEW</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="product.htm">
                                            <span class="pcoded-mtext">Product</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="product-list.htm">
                                            <span class="pcoded-mtext">Product List</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="product-edit.htm">
                                            <span class="pcoded-mtext">Product Edit</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="product-detail.htm">
                                            <span class="pcoded-mtext">Product Detail</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="product-cart.htm">
                                            <span class="pcoded-mtext">Product Card</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="product-payment.htm">
                                            <span class="pcoded-mtext">Credit Card Form</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-mail"></i></span>
                                    <span class="pcoded-mtext">Email</span>
                                </a>>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Devis</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class=" ">
                                <a href="chat.htm">
                                    <span class="pcoded-micon"><i class="feather icon-message-square"></i></span>
                                    <span class="pcoded-mtext">Chat</span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-globe"></i></span>
                                    <span class="pcoded-mtext">Social</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="fb-wall.htm">
                                            <span class="pcoded-mtext">Wall</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="message.htm">
                                            <span class="pcoded-mtext">Messages</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-check-circle"></i></span>
                                    <span class="pcoded-mtext">Task</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="task-list.htm">
                                            <span class="pcoded-mtext">Task List</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="task-board.htm">
                                            <span class="pcoded-mtext">Task Board</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="task-detail.htm">
                                            <span class="pcoded-mtext">Task Detail</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="issue-list.htm">
                                            <span class="pcoded-mtext">Issue List</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-bookmark"></i></span>
                                    <span class="pcoded-mtext">To-Do</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="todo.htm">
                                            <span class="pcoded-mtext">To-Do</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="notes.htm">
                                            <span class="pcoded-mtext">Notes</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-image"></i></span>
                                    <span class="pcoded-mtext">Gallery</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="gallery-grid.htm">
                                            <span class="pcoded-mtext">Gallery-Grid</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="gallery-masonry.htm">
                                            <span class="pcoded-mtext">Masonry Gallery</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="gallery-advance.htm">
                                            <span class="pcoded-mtext">Advance Gallery</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-search"></i><b>S</b></span>
                                    <span class="pcoded-mtext">Search</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="search-result.htm">
                                            <span class="pcoded-mtext">Simple Search</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="search-result2.htm">
                                            <span class="pcoded-mtext">Grouping Search</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-award"></i></span>
                                    <span class="pcoded-mtext">Job Search</span>
                                    <span class="pcoded-badge label label-danger">NEW</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="job-card-view.htm">
                                            <span class="pcoded-mtext">Card View</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="job-details.htm">
                                            <span class="pcoded-mtext">Job Detailed</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="job-find.htm">
                                            <span class="pcoded-mtext">Job Find</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="job-panel-view.htm">
                                            <span class="pcoded-mtext">Job Panel View</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Other</div>
                        <div class="pcoded-navigatio-lavel">Demandes</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="">
                                <a href="http://html.codedthemes.com/Adminty/doc" target="_blank">
                                    <span class="pcoded-micon"><i class="feather icon-monitor"></i></span>
                                    <span class="pcoded-mtext">Documentation</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" target="_blank">
                                    <span class="pcoded-micon"><i class="feather icon-help-circle"></i></span>
                                    <span class="pcoded-mtext">Submit Issue</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h4>Ajouter une installation</h4>
                                                    <span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Installation</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                               
                                                <!-- Design Wizard card start -->
                                                <div class="card">
                                                    <div class="col-lg-8">
                                                        <div class="page-header-title">
                                                            <div class="d-inline text-center" >
                                                                <h4 style="margin-top: 10%">Créer une installation</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        
                                                        {{ $slot }}
                                                    </div>
                                                </div>
                                                <!-- Design Wizard card end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->

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
        <script type="text/javascript" src="{{asset('files\assets\pages\j-pro\js\jquery.j-pro.js')}}"></script>
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
        @livewireScripts
    </body>
</html>