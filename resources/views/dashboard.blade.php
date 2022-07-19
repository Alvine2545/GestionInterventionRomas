@extends('layout1')
@section('menu')
    
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
                    <a href="javascript:void(0)">
                        <span class="pcoded-mtext">Utilisateurs</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{url('admin/client/liste')}}">
                        <span class="pcoded-mtext">Les utilisateurs</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{url('admin/client/create')}}">
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
                            <a href="{{url('admin/client/create')}}">
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
                    <a href="{{('admin/typedevis/create')}}">
                        <span class="pcoded-mtext">Créer un type de devis</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{('admin/typedevis/liste')}}">
                        <span class="pcoded-mtext">Liste des devis</span>
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
@endsection
{{-- @section('dashbord')
<div class="row align-items-end">
    <div class="col-lg-8">
        <div class="page-header-title">
            <div class="d-inline">
                <h4>Table des types de deviss</h4>
                <span>Liste des types de devis</span>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Devis</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Types de devis</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection --}}
@section('content')
<div class="row">
    <!-- task, page, download counter  start -->
    <div class="col-xl-3 col-md-6">
        <div class="card bg-c-yellow update-card">
            <div class="card-block">
                <div class="row align-items-end">
                    <div class="col-8">
                        <h4 class="text-white">$30200</h4>
                        <h6 class="text-white m-b-0">All Earnings</h6>
                    </div>
                    <div class="col-4 text-right">
                        <canvas id="update-chart-1" height="50"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-c-green update-card">
            <div class="card-block">
                <div class="row align-items-end">
                    <div class="col-8">
                        <h4 class="text-white">290+</h4>
                        <h6 class="text-white m-b-0">Page Views</h6>
                    </div>
                    <div class="col-4 text-right">
                        <canvas id="update-chart-2" height="50"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-c-pink update-card">
            <div class="card-block">
                <div class="row align-items-end">
                    <div class="col-8">
                        <h4 class="text-white">145</h4>
                        <h6 class="text-white m-b-0">Task Completed</h6>
                    </div>
                    <div class="col-4 text-right">
                        <canvas id="update-chart-3" height="50"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-c-lite-green update-card">
            <div class="card-block">
                <div class="row align-items-end">
                    <div class="col-8">
                        <h4 class="text-white">500</h4>
                        <h6 class="text-white m-b-0">Downloads</h6>
                    </div>
                    <div class="col-4 text-right">
                        <canvas id="update-chart-4" height="50"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
            </div>
        </div>
    </div>
    <!-- task, page, download counter  end -->

    <!--  sale analytics start -->
    <div class="col-xl-9 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Sales Analytics</h5>
                <span class="text-muted">For more details about usage, please refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="feather icon-maximize full-card"></i></li>
                        <li><i class="feather icon-minus minimize-card"></i></li>
                        <li><i class="feather icon-trash-2 close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div id="sales-analytics" style="height: 265px;"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-12">
        <div class="card user-card2">
            <div class="card-block text-center">
                <h6 class="m-b-15">Project Risk</h6>
                <div class="risk-rate">
                    <span><b>5</b></span>
                </div>
                <h6 class="m-b-10 m-t-10">Balanced</h6>
                <a href="#!" class="text-c-yellow b-b-warning">Change Your Risk</a>
                <div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
                    <div class="col m-t-15 b-r-default">
                        <h6 class="text-muted">Nr</h6>
                        <h6>AWS 2455</h6>
                    </div>
                    <div class="col m-t-15">
                        <h6 class="text-muted">Created</h6>
                        <h6>30th Sep</h6>
                    </div>
                </div>
            </div>
            <button class="btn btn-warning btn-block p-t-15 p-b-15">Download Overall Report</button>
        </div>
    </div>
    <!--  sale analytics end -->

    <div class="col-xl-8 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Application Sales</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="feather icon-maximize full-card"></i></li>
                        <li><i class="feather icon-minus minimize-card"></i></li>
                        <li><i class="feather icon-trash-2 close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="table-responsive">
                    <table class="table table-hover  table-borderless">
                        <thead>
                            <tr>
                                <th>
                                    <div class="chk-option">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                                    <i class="cr-icon feather icon-check txt-default"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    Application</th>
                                <th>Sales</th>
                                <th>Change</th>
                                <th>Avg Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                                    <i class="cr-icon feather icon-check txt-default"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <h6>Able Pro</h6>
                                        <p class="text-muted m-b-0">Powerful Admin Theme</p>
                                    </div>
                                </td>
                                <td>16,300</td>
                                <td><canvas id="app-sale1" height="50" width="100"></canvas></td>
                                <td>$53</td>
                                <td class="text-c-blue">$15,652</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                                    <i class="cr-icon feather icon-check txt-default"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <h6>Photoshop</h6>
                                        <p class="text-muted m-b-0">Design Software</p>
                                    </div>
                                </td>
                                <td>26,421</td>
                                <td><canvas id="app-sale2" height="50" width="100"></canvas></td>
                                <td>$35</td>
                                <td class="text-c-blue">$18,785</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                                    <i class="cr-icon feather icon-check txt-default"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <h6>Guruable</h6>
                                        <p class="text-muted m-b-0">Best Admin Template</p>
                                    </div>
                                </td>
                                <td>8,265</td>
                                <td><canvas id="app-sale3" height="50" width="100"></canvas></td>
                                <td>$98</td>
                                <td class="text-c-blue">$9,652</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                                    <i class="cr-icon feather icon-check txt-default"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <h6>Flatable</h6>
                                        <p class="text-muted m-b-0">Admin App</p>
                                    </div>
                                </td>
                                <td>10,652</td>
                                <td><canvas id="app-sale4" height="50" width="100"></canvas></td>
                                <td>$20</td>
                                <td class="text-c-blue">$7,856</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12">
        <div class="card user-activity-card">
            <div class="card-header">
                <h5>User Activity</h5>
            </div>
            <div class="card-block">
                <div class="row m-b-25">
                    <div class="col-auto p-r-0">
                        <div class="u-img">
                            <img src="..\files\assets\images\breadcrumb-bg.jpg" alt="user image" class="img-radius cover-img">
                            <img src="..\files\assets\images\avatar-2.jpg" alt="user image" class="img-radius profile-img">
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="m-b-5">John Deo</h6>
                        <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text.</p>
                        <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p>
                    </div>
                </div>
                <div class="row m-b-25">
                    <div class="col-auto p-r-0">
                        <div class="u-img">
                            <img src="..\files\assets\images\breadcrumb-bg.jpg" alt="user image" class="img-radius cover-img">
                            <img src="..\files\assets\images\avatar-2.jpg" alt="user image" class="img-radius profile-img">
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="m-b-5">John Deo</h6>
                        <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text.</p>
                        <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p>
                    </div>
                </div>
                <div class="row m-b-25">
                    <div class="col-auto p-r-0">
                        <div class="u-img">
                            <img src="..\files\assets\images\breadcrumb-bg.jpg" alt="user image" class="img-radius cover-img">
                            <img src="..\files\assets\images\avatar-2.jpg" alt="user image" class="img-radius profile-img">
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="m-b-5">John Deo</h6>
                        <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text.</p>
                        <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p>
                    </div>
                </div>
                <div class="row m-b-5">
                    <div class="col-auto p-r-0">
                        <div class="u-img">
                            <img src="..\files\assets\images\breadcrumb-bg.jpg" alt="user image" class="img-radius cover-img">
                            <img src="..\files\assets\images\avatar-2.jpg" alt="user image" class="img-radius profile-img">
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="m-b-5">John Deo</h6>
                        <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text.</p>
                        <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p>
                    </div>
                </div>

                <div class="text-center">
                    <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                </div>
            </div>
        </div>
    </div>

    <!-- wather user -->
    <div class="col-xl-6 col-md-12">
        <div class="card latest-update-card">
            <div class="card-header">
                <h5>Latest Updates</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="latest-update-box">
                    <div class="row p-b-15">
                        <div class="col-auto text-right update-meta">
                            <p class="text-muted m-b-0 d-inline">4 hrs ago</p>
                            <i class="feather icon-briefcase bg-simple-c-pink update-icon"></i>
                        </div>
                        <div class="col">
                            <h6>+ 5 New Products were added!</h6>
                            <p class="text-muted m-b-0">Congratulations!</p>
                        </div>
                    </div>
                    <div class="row p-b-15">
                        <div class="col-auto text-right update-meta">
                            <p class="text-muted m-b-0 d-inline">1 day ago</p>
                            <i class="feather icon-check bg-simple-c-yellow  update-icon"></i>
                        </div>
                        <div class="col">
                            <h6>Database backup completed!</h6>
                            <p class="text-muted m-b-0">Download the <span class="text-c-blue">latest backup</span>.</p>
                        </div>
                    </div>
                    <div class="row p-b-0">
                        <div class="col-auto text-right update-meta">
                            <p class="text-muted m-b-0 d-inline">2 day ago</p>
                            <i class="feather icon-facebook bg-simple-c-green update-icon"></i>
                        </div>
                        <div class="col">
                            <h6>+1 Friend Requests</h6>
                            <p class="text-muted m-b-10">This is great, keep it up!</p>
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <tbody>
                                        <tr>
                                            <td class="b-none">
                                                <a href="#!" class="align-middle">
                                                <img src="..\files\assets\images\avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6>Jeny William</h6>
                                                    <p class="text-muted m-b-0">Graphic Designer</p>
                                                </div>
                                            </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-12">
        <div class="card user-card-full">
            <div class="row m-l-0 m-r-0">
                <div class="col-sm-4 bg-c-lite-green user-profile">
                    <div class="card-block text-center text-white">
                        <div class="m-b-25">
                            <img src="..\files\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                        </div>
                        <h6 class="f-w-600">Jeny William</h6>
                        <p>Web Designer</p>
                        <i class="feather icon-edit m-t-10 f-16"></i>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card-block">
                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Email</p>
                                <h6 class="text-muted f-w-400"><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="3a505f54437a5d575b535614595557">[email&#160;protected]</a></h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Phone</p>
                                <h6 class="text-muted f-w-400">0023-333-526136</h6>
                            </div>
                        </div>
                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Recent</p>
                                <h6 class="text-muted f-w-400">Guruable Admin</h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Most Viewed</p>
                                <h6 class="text-muted f-w-400">Able Pro Admin</h6>
                            </div>
                        </div>
                        <ul class="social-link list-unstyled m-t-40 m-b-10">
                            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook"><i class="feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter"><i class="feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram"><i class="feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wather user -->

    <!-- social download  start -->
    <div class="col-xl-4 col-md-6">
        <div class="card social-card bg-simple-c-blue">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <i class="feather icon-mail f-34 text-c-blue social-icon"></i>
                    </div>
                    <div class="col">
                        <h6 class="m-b-0">Mail</h6>
                        <p>231.2w downloads</p>
                        <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                    </div>
                </div>
            </div>
            <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card social-card bg-simple-c-pink">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <i class="feather icon-twitter f-34 text-c-pink social-icon"></i>
                    </div>
                    <div class="col">
                        <h6 class="m-b-0">twitter</h6>
                        <p>231.2w downloads</p>
                        <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                    </div>
                </div>
            </div>
            <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="col-xl-4 col-md-12">
        <div class="card social-card bg-simple-c-green">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <i class="feather icon-instagram f-34 text-c-green social-icon"></i>
                    </div>
                    <div class="col">
                        <h6 class="m-b-0">Instagram</h6>
                        <p>231.2w downloads</p>
                        <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                    </div>
                </div>
            </div>
            <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
        </div>
    </div>
    <!-- social download  end -->

</div>

 @endsection