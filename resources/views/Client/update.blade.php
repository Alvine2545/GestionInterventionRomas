@extends('layout')
@section('content')
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
                                <h4>Enregistrer client</h4>
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
                                <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Formulaire d'enregistrement</a>
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
                            <!-- Basic Inputs Validation start -->
                            <div class="card">
                                
                                <div class="card-block">
                                   
                                    <form id="main" method="GET" action="{{route('client.edit', $client->id)}}" novalidate="">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="_method" value="GET">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nom de l'entreprise</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Raison Sociale</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="raisonsocial" id="raisonsociale" placeholder="" value="{{$client->raisonSocial}}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Siège</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Adresse téléphonique</label>
                                            <div class="col-sm-10">
                                                <input type="tel" class="form-control" name="telephone" id="telephone" placeholder="">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-5">
                                                <button type="submit" class="btn btn-primary m-b-0">Modifier</button>
                                            </div>
                                            <div class="col-sm-5">
                                                <button type="reset" class="btn btn-primary m-b-0">Annuler</button>
                                            </div>
                                        </div>
                                       
                                        
                                    </form>
                                </div>
                            </div>
                            <!-- Basic Inputs Validation end -->
                           
                            
                        </div>
                    </div>
                </div>
                <!-- Page body end -->
            </div>
        </div>
        <!-- Main-body end -->
        <div id="styleSelector">

        </div>
    </div>
</div>
@endsection