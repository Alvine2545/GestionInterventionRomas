@extends('layout1')

@section('dashbord')
<div class="row align-items-end">
    <div class="col-lg-8">
        <div class="page-header-title">
            <div class="d-inline">
                <h4>Table des types de devis</h4>
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
@endsection
@section('content')
<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Table des types de devis</h4>
                        <span>Liste des types de devis</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{url('admin/dashboard')}}"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Types devis</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

        <!-- Page body start -->
        <div class="page-body">
            <a href="{{url('admin/typedevis/create')}}"><button class="btn btn-grd-primary" style="margin-left: 90%"> Nouveau</button></a>
            <div class="row">
                <div class="col-sm-12">
                   
                    <!-- Design Wizard card start -->
                        {{-- <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline text-center" >
                                    <h4 style="margin-top: 10%">Signaler une panne</h4>
                                </div>
                            </div>
                        </div> --}}
                            <!--div class="card-header">
                                <h5>Book Now</h5>
                                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                            </div-->
                            <div class="card-block">
                                {{-- <div class="j-wrapper j-wrapper-640"> --}}
                                    
                                    
                                    {{-- <div class="card-header">
                                        <h5>Filtering</h5>
                                    
                                    </div> --}}
                                    <div class="card-block">
                                        <table id="demo-foo-filtering" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th data-breakpoints="xs">Nom</th>
                                                    <th data-breakpoints="xs">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (collect($typedevis)->isEmpty())
                                                    <tr>
                                                        <td colspan="3" class="text-center">Aucun type devis disponible</td>
                                                    </tr>
                                                @else
                                                @foreach ($typedevis as $value)
                                                <tr>
                                                   
                                                    <th scope="row">{{$value->id}}</th>
                                                    <td class=""><span class="">{{$value->nom}}</span>
                                                        <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                    </td> 
                                                    <td class="row">
                                                        <form class="" method="POST" action="{{url('admin/typedevis/destroy', $value->id)}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            
                                                            <span class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 outer-ellipsis"><button type="submit" class="btn btn-primary"><i class="icofont icofont-trash" color="red"></i></button>
                                                            </span>
                                                        </form>
                                                        <form method="post" action="{{url('admin/typedevis/edit',$value->id)}}">
                                                            @method('PUT')
                                                            <span class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 outer-ellipsis"><button type="submit" class="btn btn-danger"><i class="feather icon-edit-1"></i></button>
                                                            </span>
                                                        </form>
                                                        
                                                    </td>               
                                                </tr>
                                                @endforeach
                                                @endif
                                                
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                {{-- </div> --}}
                            </div>
                    <!-- Design Wizard card end -->
                </div>
            </div>
        </div>
        <!-- Page body end -->
    </div>
</div>

 @endsection