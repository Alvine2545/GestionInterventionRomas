@extends('layout1')
@section('dashbord')
<div class="row align-items-end">
    <div class="col-lg-8">
        <div class="page-header-title">
            <div class="d-inline">
                <h4>Booking Multi Steps</h4>
                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Ready To Use</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Booking Multi Steps</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('menu')
<div class="pcoded-inner-navbar main-menu">
    <div class="pcoded-navigatio-lavel">Dashboard</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                <span class="pcoded-mtext">Utilisateur</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="{{url('admin/client/create')}}">
                        <span class="pcoded-mtext">Ajouter un utilisateur</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{url('admin/client/index')}}">
                        <span class="pcoded-mtext">Liste des utilisateus</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{url('admin/client/index')}}">
                        <span class="pcoded-mtext">Mes clients</span>
                    </a>
                </li>
                <li class="">
                    <a href="dashboard-crm.htm">
                        <span class="pcoded-mtext">Les techniciens</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                <span class="pcoded-mtext">Gestion des interventions</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="index-1.htm">
                        <span class="pcoded-mtext">Les interventions</span>
                    </a>
                </li>
                <li class="">
                    <a href="dashboard-crm.htm">
                        <span class="pcoded-mtext">Ajouter une intervention</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{url('admin/typeintervention/create')}}">
                        <span class="pcoded-mtext">Ajouter un type intervention</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="navbar-light.htm">
                <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                <span class="pcoded-mtext">Pannes</span>
            </a>
        </li>
    </ul>
    <div class="pcoded-navigatio-lavel">Clients</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                <span class="pcoded-mtext">Installations</span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="alert.htm">
                        <span class="pcoded-mtext">Ajouter une installation</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="breadcrumb.htm">
                        <span class="pcoded-mtext">Mes installations</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="button.htm">
                        <span class="pcoded-mtext">Créer un reçu</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-gitlab"></i></span>
                <span class="pcoded-mtext">Paiement</span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="draggable.htm">
                        <span class="pcoded-mtext">Etat financier des clients</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="bs-grid.htm">
                        <span class="pcoded-mtext">Créer un reçu</span>
                    </a>
                </li>
    </ul>
    <div class="pcoded-navigatio-lavel">Gestion des produits</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                <span class="pcoded-mtext"> Produits</span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="bs-basic-table.htm">
                        <span class="pcoded-mtext">Les produits</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="bs-table-sizing.htm">
                        <span class="pcoded-mtext"> Créer un produit</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="pcoded-navigatio-lavel">Gestion des devis</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu ">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span>
                <span class="pcoded-mtext">Devis</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="chart-google.htm">
                        <span class="pcoded-mtext">Les devis</span>
                    </a>
                </li>
                <li class="">
                    <a href="chart-echart.htm">
                        <span class="pcoded-mtext">Créer un devis</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{url('admin/typedevis/create')}}">
                        <span class="pcoded-mtext">Créer un type de devis</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="..\files\extra-pages\landingpage\index.htm" target="_blank">
                <span class="pcoded-micon"><i class="feather icon-navigation-2"></i></span>
                <span class="pcoded-mtext">Landing Page</span>
            </a>
        </li>
    </ul>
    <div class="pcoded-navigatio-lavel">Rapport</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu ">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-unlock"></i></span>
                <span class="pcoded-mtext">Authentication</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="auth-normal-sign-in.htm" target="_blank">
                        <span class="pcoded-mtext">Login With BG Image</span>
                    </a>
                </li>
                <li class="">
                    <a href="auth-sign-in-social.htm" target="_blank">
                        <span class="pcoded-mtext">Login With Social Icon</span>
                    </a>
                </li>
                <li class="">
                    <a href="auth-sign-in-social-header-footer.htm" target="_blank">
                        <span class="pcoded-mtext">Login Social With Header And Footer</span>
                    </a>
                </li>
                <li class="">
                    <a href="auth-normal-sign-in-header-footer.htm" target="_blank">
                        <span class="pcoded-mtext">Login With Header And Footer</span>
                    </a>
                </li>
                <li class="">
                    <a href="auth-sign-up.htm" target="_blank">
                        <span class="pcoded-mtext">Registration BG Image</span>
                    </a>
                </li>
                <li class="">
                    <a href="auth-sign-up-social.htm" target="_blank">
                        <span class="pcoded-mtext">Registration Social Icon</span>
                    </a>
                </li>
                <li class="">
                    <a href="auth-sign-up-social-header-footer.htm" target="_blank">
                        <span class="pcoded-mtext">Registration Social With Header And Footer</span>
                    </a>
                </li>
                <li class="">
                    <a href="auth-sign-up-header-footer.htm" target="_blank">
                        <span class="pcoded-mtext">Registration With Header And Footer</span>
                    </a>
                </li>
                <li class="">
                    <a href="auth-multi-step-sign-up.htm" target="_blank">
                        <span class="pcoded-mtext">Multi Step Registration</span>
                    </a>
                </li>
                <li class="">
                    <a href="auth-reset-password.htm" target="_blank">
                        <span class="pcoded-mtext">Forgot Password</span>
                    </a>
                </li>
                <li class="">
                    <a href="auth-lock-screen.htm" target="_blank">
                        <span class="pcoded-mtext">Lock Screen</span>
                    </a>
                </li>
                <li class="">
                    <a href="auth-modal.htm" target="_blank">
                        <span class="pcoded-mtext">Modal</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="pcoded-hasmenu ">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                <span class="pcoded-mtext">Maintenance</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="error.htm">
                        <span class="pcoded-mtext">Error</span>
                    </a>
                </li>
                <li class="">
                    <a href="comming-soon.htm">
                        <span class="pcoded-mtext">Comming Soon</span>
                    </a>
                </li>
                <li class="">
                    <a href="offline-ui.htm">
                        <span class="pcoded-mtext">Offline UI</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="pcoded-hasmenu ">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                <span class="pcoded-mtext">User Profile</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="timeline.htm">
                        <span class="pcoded-mtext">Timeline</span>
                    </a>
                </li>
                <li class="">
                    <a href="timeline-social.htm">
                        <span class="pcoded-mtext">Timeline Social</span>
                    </a>
                </li>
                <li class="">
                    <a href="user-profile.htm">
                        <span class="pcoded-mtext">User Profile</span>
                    </a>
                </li>
                <li class="">
                    <a href="user-card.htm">
                        <span class="pcoded-mtext">User Card</span>
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
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="email-compose.htm">
                        <span class="pcoded-mtext">Compose Email</span>
                    </a>
                </li>
                <li class="">
                    <a href="email-inbox.htm">
                        <span class="pcoded-mtext">Inbox</span>
                    </a>
                </li>
                <li class="">
                    <a href="email-read.htm">
                        <span class="pcoded-mtext">Read Mail</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu ">
                    <a href="javascript:void(0)">
                        <span class="pcoded-mtext">Email Template</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="..\files\extra-pages\email-templates\email-welcome.htm">
                                <span class="pcoded-mtext">Welcome Email</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="..\files\extra-pages\email-templates\email-password.htm">
                                <span class="pcoded-mtext">Reset Password</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="..\files\extra-pages\email-templates\email-newsletter.htm">
                                <span class="pcoded-mtext">Newsletter Email</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="..\files\extra-pages\email-templates\email-launch.htm">
                                <span class="pcoded-mtext">App Launch</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="..\files\extra-pages\email-templates\email-activation.htm">
                                <span class="pcoded-mtext">Activation Code</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    <div class="pcoded-navigatio-lavel"></div>
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
    <div class="pcoded-navigatio-lavel">Extension</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu ">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-file-plus"></i></span>
                <span class="pcoded-mtext">Editor</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="ck-editor.htm">
                        <span class="pcoded-mtext">CK-Editor</span>
                    </a>
                </li>
                <li class="">
                    <a href="wysiwyg-editor.htm">
                        <span class="pcoded-mtext">WYSIWYG Editor</span>
                    </a>
                </li>
                <li class="">
                    <a href="ace-editor.htm">
                        <span class="pcoded-mtext">Ace Editor</span>
                    </a>
                </li>
                <li class="">
                    <a href="long-press-editor.htm">
                        <span class="pcoded-mtext">Long Press Editor</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu ">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-file-minus"></i></span>
                <span class="pcoded-mtext">Invoice</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="invoice.htm">
                        <span class="pcoded-mtext">Invoice</span>
                    </a>
                </li>
                <li class="">
                    <a href="invoice-summary.htm">
                        <span class="pcoded-mtext">Invoice Summary</span>
                    </a>
                </li>
                <li class="">
                    <a href="invoice-list.htm">
                        <span class="pcoded-mtext">Invoice List</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="pcoded-hasmenu ">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-calendar"></i></span>
                <span class="pcoded-mtext">Event Calendar</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="event-full-calender.htm">
                        <span class="pcoded-mtext">Full Calendar</span>
                    </a>
                </li>
                <li class="">
                    <a href="event-clndr.htm">
                        <span class="pcoded-mtext">CLNDER</span>
                        <span class="pcoded-badge label label-info">NEW</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="image-crop.htm">
                <span class="pcoded-micon"><i class="feather icon-scissors"></i></span>
                <span class="pcoded-mtext">Image Cropper</span>
            </a>
        </li>
        <li class="">
            <a href="file-upload.htm">
                <span class="pcoded-micon"><i class="feather icon-upload-cloud"></i></span>
                <span class="pcoded-mtext">File Upload</span>
            </a>
        </li>
        <li class="">
            <a href="change-loges.htm">
                <span class="pcoded-micon"><i class="feather icon-briefcase"></i><b>CL</b></span>
                <span class="pcoded-mtext">Change Loges</span>
            </a>
        </li>
    </ul>
    <div class="pcoded-navigatio-lavel">Other</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu ">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                <span class="pcoded-mtext">Menu Levels</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="javascript:void(0)">
                        <span class="pcoded-mtext">Menu Level 2.1</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu ">
                    <a href="javascript:void(0)">
                        <span class="pcoded-mtext">Menu Level 2.2</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="javascript:void(0)">
                                <span class="pcoded-mtext">Menu Level 3.1</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:void(0)">
                        <span class="pcoded-mtext">Menu Level 2.3</span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="">
            <a href="javascript:void(0)" class="disabled">
                <span class="pcoded-micon"><i class="feather icon-power"></i></span>
                <span class="pcoded-mtext">Disabled Menu</span>
            </a>
        </li>
        <li class="">
            <a href="sample-page.htm">
                <span class="pcoded-micon"><i class="feather icon-watch"></i></span>
                <span class="pcoded-mtext">Sample Page</span>
            </a>
        </li>
    </ul>
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
@endsection
@section('content')
<div class="card-header">
    <h5>Book Now</h5>
    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
</div>
<div class="card-block">
    <div class="j-wrapper j-wrapper-640">
        <form action="j-pro/php/action.php" method="post" class="j-pro j-multistep" id="j-pro" novalidate="">
            <!-- end /.header-->
            <div class="j-content">
                <fieldset>
                    <div class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                        <span>Step 1/3 - Personal info</span>
                    </div>
                    <!-- start name -->
                    <div class="j-unit">
                        <label class="j-label">Your name</label>
                        <div class="j-input">
                            <label class="j-icon-right" for="name">
        <i class="icofont icofont-ui-user"></i>
    </label>
                            <input type="text" id="name" name="name">
                        </div>
                    </div>
                    <!-- end name -->
                    <!-- start email phone -->
                    <div class="j-row">
                        <div class="j-span6 j-unit">
                            <label class="j-label">Your email</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="email">
            <i class="icofont icofont-envelope"></i>
        </label>
                                <input type="email" id="email" name="email">
                            </div>
                        </div>
                        <div class="j-span6 j-unit">
                            <label class="j-label">Phone/Mobile</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="phone">
            <i class="icofont icofont-phone"></i>
        </label>
                                <input type="text" id="phone" name="phone">
                            </div>
                        </div>
                    </div>
                    <!-- end email phone -->
                </fieldset>
                <fieldset>
                    <div class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                        <span>Step 2/3 - Booking details</span>
                    </div>
                    <!-- start guests -->
                    <div class="j-row">
                        <div class="j-span6 j-unit">
                            <label class="j-label">Adult guests</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="adults">
            <i class="icofont icofont-waiter"></i>
        </label>
                                <input type="text" id="adults" name="adults">
                                <span class="j-tooltip j-tooltip-right-top">Number of adult guests</span>
                            </div>
                        </div>
                        <div class="j-span6 j-unit">
                            <label class="j-label">Children guests</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="children">
            <i class="icofont icofont-woman-in-glasses"></i>
        </label>
                                <input type="text" id="children" name="children">
                                <span class="j-tooltip j-tooltip-right-top">Number of children</span>
                            </div>
                        </div>
                    </div>
                    <!-- end guests -->
                    <!-- start date -->
                    <div class="j-row">
                        <div class="j-span6 j-unit">
                            <label class="j-label">Check-in date</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="date_from">
            <i class="icofont icofont-ui-calendar"></i>
        </label>
                                <input type="text" id="date_from" name="date_from" readonly="">
                            </div>
                        </div>
                        <div class="j-span6 j-unit">
                            <label class="j-label">Check-out date</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="date_to">
            <i class="icofont icofont-ui-calendar"></i>
        </label>
                                <input type="text" id="date_to" name="date_to" readonly="">
                            </div>
                        </div>
                    </div>
                    <!-- end date -->
                </fieldset>
                <fieldset>
                    <div class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                        <span>Step 3/3 - Comments</span>
                    </div>
                    <!-- start message -->
                    <div class="j-unit">
                        <label class="j-label">Comments/Message</label>
                        <div class="j-input">
                            <textarea spellcheck="false" name="message"></textarea>
                        </div>
                    </div>
                    <!-- end message -->
                </fieldset>
                <!-- start response from server -->
                <div class="j-response"></div>
                <!-- end response from server -->
            </div>
            <!-- end /.content -->
            <div class="j-footer">
                <button type="submit" class="btn btn-primary j-multi-submit-btn">Booking</button>
                <button type="button" class="btn btn-primary j-multi-next-btn">Next</button>
                <button type="button" class="btn btn-default m-r-20 j-multi-prev-btn">Back</button>
            </div>
            <!-- end /.footer -->
        </form>
    </div>
</div>
@endsection