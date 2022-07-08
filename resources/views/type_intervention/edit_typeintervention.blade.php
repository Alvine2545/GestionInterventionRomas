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
                    <a href="index-1.htm">
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
@section('dashbord')
    
<div class="row align-items-end">
    <div class="col-lg-8">
        <div class="page-header-title">
            <div class="d-inline">
                <h4>Modifierer un type d'intervention</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Type Intervention</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ url('admin/typeintervention/update', $type_inter->id ) }}">
        @csrf
        @method('PUT')
        <div class="card">
          <div class="card-header">
              <h5>Modifier le type d'intervention</h5>
          </div>
          <div class="card-block">
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Entrer le nom</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="nom" placeholder="Nom" value="{{$type_inter->nom}}">
                          <span class="messages popover-valid"></span>
                      </div>
                  </div>
                  <div class="row">
                      <label class="col-sm-2"></label>
                      <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary m-b-0">Modifier</button>
                      </div>
                  </div>
              
          </div>
      </div>
      </form>
  </div>
</div>
@endsection
