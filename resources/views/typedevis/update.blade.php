@extends('layout1')

@section('content')
<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Modifier un type de devis</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{url('admin/dashboard')}}"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Modifier type devis</a>
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
                                    {{-- <h4 style="margin-top: 10%">Signaler une panne</h4> --}}
                                </div>
                            </div>
                        </div>
                            <!--div class="card-header">
                                <h5>Book Now</h5>
                                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                            </div-->
                            <div class="card-block">
                                <div class="card-block">
                                   
                                    <form id="main" method="PUT" action="{{url('admin/typedevis/update', $typedevis->id)}}" novalidate="">
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nom du devis</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nom" id="nom" placeholder="" value="{{$typedevis->nom}}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                       
                                        
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-5">
                                                <button type="submit" class="btn btn-primary m-b-0">Modifier</button>
                                            </div>
                                            <div class="col-sm-5">
                                                <button type="reset" class="btn btn-danger m-b-0">Annuler</button>
                                            </div>
                                        </div>
                                       
                                        
                                    </form>
                                </div>
                            </div>
                    </div>
                    <!-- Design Wizard card end -->
                </div>
            </div>
        </div>
        <!-- Page body end -->
    </div>
</div>
@endsection