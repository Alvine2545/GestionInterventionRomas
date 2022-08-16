@extends('layout1')
@section('content')
<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Dashboard</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{url('admin/dashboard')}}"> <i class="feather icon-home"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <!-- Page-body start -->
    <div class="page-body">
        <div class="row">
            <!-- customar project  start -->
            {{-- <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-block">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="feather icon-users f-30 text-c-pink"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Utilisateurs</h6>
                                <h2 class="m-b-0">{{$users}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-block">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="feather icon-alert-triangle f-30 text-c-blue"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Pannes</h6>
                                <h2 class="m-b-0">{{$pannes}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-block">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="feather icon-book f-30 text-c-lite-green"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Installations</h6>
                                <h2 class="m-b-0">{{$installations}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-block">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="feather icon-feather f-30 text-c-green"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Rapports</h6>
                                <h2 class="m-b-0">{{$rapports}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- customar project  end -->

            <!-- user start -->
            {{-- <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <img src="..\files\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                </div>
                                <h6 class="f-w-600">{{Auth::user()->name}}</h6>
                                <p>Administrateur</p>
                                <i class="feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"><a href="" class="__cf_email__" data-cfemail="1e747b70675e79737f7772307d7173">{{Auth::user()->email}}</a></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Téléphone</p>
                                        <h6 class="text-muted f-w-400">{{Auth::user()->tel}}</h6>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-xl-6 col-md-12">
                <div class="row">
                    <!-- order-visitor start -->
                    <div class="col-md-6">
                        <div class=" text-center text-white">
                            <div class="card user-widget-card bg-c-green">
                                <div class="card-block">
                                    <i class="feather icon-user bg-simple-c-green card1-icon"></i>
                                    <h4>{{$clients}}</h4>
                                    <p>Clients</p>
                                    <a href="{{url('admin/lesclients')}}" class="more-info">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" text-center text-white">
                            <div class="card user-widget-card bg-c-pink">
                                <div class="card-block">
                                    <i class="feather icon-shopping-cart bg-simple-c-pink card1-icon"></i>
                                    <h4>{{$produits}}</h4>
                                    <p>Produits</p>
                                    <a href="{{url('admin/produit/liste')}}" class="more-info">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" text-center text-white">
                            <div class="card user-widget-card bg-c-blue">
                                <div class="card-block">
                                    <i class="feather icon-users bg-simple-c-blue card1-icon"></i>
                                    <h4>{{$techniciens}}</h4>
                                    <p>Techniciens</p>
                                    <a href="{{url('admin/produit/liste')}}" class="more-info">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class=" text-center text-white">
                            <div class="card user-widget-card bg-c-yellow">
                                <div class="card-block">
                                    <i class="feather icon-filter bg-simple-c-yellow card1-icon"></i>
                                    <h4>{{$interventions}}</h4>
                                    <p>Interventions</p>
                                    <a href="{{url('admin/interventions')}}" class="more-info">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="row">
                    <!-- order-visitor start -->
                    <div class="col-md-6">
                        <div class=" text-center text-white">
                            <div class="card user-widget-card bg-c-blue">
                                <div class="card-block">
                                    <i class="feather icon-alert-triangle bg-simple-c-blue card1-icon"></i>
                                    <h4>{{$pannes}}</h4>
                                    <p>Pannes</p>
                                    <a href="{{url('admin/lesclients')}}" class="more-info">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" text-center text-white">
                            <div class="card user-widget-card bg-c-yellow">
                                <div class="card-block">
                                    <i class="feather icon-filter bg-simple-c-yellow card1-icon"></i>
                                    <h4>{{$interventions}}</h4>
                                    <p>Installations</p>
                                    <a href="{{$installations}}" class="more-info">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" text-center text-white">
                            <div class="card user-widget-card bg-c-green">
                                <div class="card-block">
                                    <i class="feather icon-briefcase bg-simple-c-green card1-icon"></i>
                                    <h4>{{$clients}}</h4>
                                    <p>Plannifications</p>
                                    <a href="{{url('admin/planning')}}" class="more-info">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" text-center text-white">
                            <div class="card user-widget-card bg-c-pink">
                                <div class="card-block">
                                    <i class="feather icon-shopping-cart bg-simple-c-pink card1-icon"></i>
                                    <h4>{{$clients}}</h4>
                                    <p>Devis</p>
                                    <a href="{{url('admin/devis/liste')}}" class="more-info">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <!-- order-visitor start -->
                    <div class="col-md-6">
                        <div class=" text-center text-white">
                            <div class="card user-widget-card bg-c-green">
                                <div class="card-block">
                                    <i class="feather icon-user bg-simple-c-green card1-icon"></i>
                                    <h4>{{$clients}}</h4>
                                    <p>Pannes</p>
                                    <a href="{{url('admin/lesclients')}}" class="more-info">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" text-center text-white">
                            <div class="card user-widget-card bg-c-blue">
                                <div class="card-block">
                                    <i class="feather icon-users bg-simple-c-blue card1-icon"></i>
                                    <h4>{{$techniciens}}</h4>
                                    <p>Rapports</p>
                                    <a href="{{url('admin/produit/liste')}}" class="more-info">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" text-center text-white">
                            <div class="card user-widget-card bg-c-yellow">
                                <div class="card-block">
                                    <i class="feather icon-filter bg-simple-c-yellow card1-icon"></i>
                                    <h4>{{$interventions}}</h4>
                                    <p>Devis</p>
                                    <a href="{{url('admin/interventions')}}" class="more-info">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class=" text-center text-white">
                            <div class="card user-widget-card bg-c-pink">
                                <div class="card-block">
                                    <i class="feather icon-shopping-cart bg-simple-c-pink card1-icon"></i>
                                    <h4>{{$produits}}</h4>
                                    <p>Installations</p>
                                    <a href="{{url('admin/produit/liste')}}" class="more-info">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- user end -->
        </div>
    </div>
    <!-- Page-body end -->
    <div class="modal fade" id="modal">
        <div class="md-content">
            <h3><span class="text-muted text-center">Modal Dialog</span></h3>
            <div>
                <p>This is a modal window. You can do the following things with it:</p>
                <ul>
                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                </ul>
                <button type="button" class="btn btn-primary waves-effect md-close">Close</button>
            </div>
        </div>
    </div>
    
</div>
@endsection
