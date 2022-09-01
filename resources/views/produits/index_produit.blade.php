@extends('layout1')

@section('content')
<div class="row align-items-end">
    <div class="col-lg-8">
        <div class="page-header-title">
            <div class="d-inline">
                <h4>Table des produits</h4>
                <span>Liste des produits</span>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Liste des produits</a>
                </li>
            </ul>
        </div>
    </div>
</div><br>
<div class="card">
    <div class="card-header">
        <h5>Liste des produits</h5>
        <button type="button" class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger" data-modal="modal-13"> <i class="icofont icofont-plus m-r-5"></i> Add Product
        </button>
    </div>
    <div class="card-block">
        {{-- <div class="table-responsive"> --}}
            <div class="table-content">
                <div class="project-table">
                    <table id="e-product-list" class="table table-striped dt-responsive nowrap" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Nom du produit</th>
                                <th>Type du produit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($produits as $value)
                                <tr>
                                    <td class="pro-list-img">
                                        <img src="{{asset('storage/'.$value->photo)}}" class="img-fluid" alt="tbl">
                                    </td>
                                    <td class="pro-name">
                                        <h6> Produit {{$i}} </h6>
                                        <span>{{$value->nom}}</span>
                                    </td>
                                    <td>{{$value->type}}</td>
                                    <td class="action-icon">
                                        <form method="post" action="{{url('admin/produit/edit', $value->id)}}" style="display: inline; margin-right: -10%;">
                                            @csrf
                                            @method('GET')
                                            <span class="">
                                                <button type="submit" class="btn m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Modifier">
                                                    <i class="icofont icofont-edit-alt f-20"></i>
                                                </button>
                                            </span>
                                        </form>
                                        <form method="POST" action="{{url('admin/produit/destroy', $value->id)}}" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <span class="">
                                                <button type="submit" class="btn text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Supprimer">
                                                    <i class="icofont icofont-trash" color="red"></i>
                                                </button>
                                            </span>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        {{-- </div> --}}
    </div>
    {{-- <div class="md-modal md-effect-13 addcontact" id="modal-13">
        <div class="md-content">
            <h3 class="f-26">Add Product</h3>
            <div>
                <div class="input-group">
                    <input type="text" class="form-control pname" placeholder="Prodcut Name">
                    <span class="input-group-addon btn btn-primary">Chooese File</span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                    <input type="text" class="form-control pname" placeholder="Prodcut Name">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                    <input type="text" class="form-control pamount" placeholder="Amount">
                </div>
                <div class="input-group">
                    <select id="hello-single" class="form-control stock">
                        <option value="">---- Select Stock ----</option>
                        <option value="married">In Stock</option>
                        <option value="unmarried">Out of Stock</option>
                        <option value="unmarried">Law Stock</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">Save</button>
                    <button type="button" class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">Close</button>
                </div>
            </div>
        </div>
    </div> --}}
</div>
{{-- <div class="card">
    <div class="card-header">
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><i class="feather icon-maximize full-card"></i></li>
                <li><i class="feather icon-minus minimize-card"></i></li>
                <li><i class="feather icon-trash-2 close-card"></i></li>
            </ul>
        </div>
    </div>
    <div class="card-block">
        <div class="dt-responsive table-responsive" class="align-content-center">
            <table id="events-key-table" class="table table-striped table-bordered nowrap align-content-center">
                <thead>
                    <tr class="align-content-center">
                        <th>#</th>
                        <th >Nom</th>
                        <th >Type</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody >
                    <div class="row">
                        @foreach ($produits as $value)
                        <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="card prod-view">
                                <div class="prod-item text-center">
                                    <div class="prod-img">
                                        <div class="option-hover">
                                            <form method="post" action="{{url('admin/produit/edit',$value->id)}}" style="display: inline;">
                                                @csrf
                                                @method('GET')
                                                <span class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 outer-ellipsis">
                                                    <button type="submit" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                        <i class="icofont icofont-edit-alt f-20"></i>
                                                    </button>
                                                </span>
                                            </form>
                                            <form method="POST" action="{{url('admin/produit/destroy', $value->id)}}" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <span class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 outer-ellipsis">
                                                    <button type="submit" class="btn btn-danger btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon" >
                                                        <i class="icofont icofont-trash" color="red"></i>
                                                    </button>
                                                </span>
                                            </form>
                                        </div>
                                        <a href="#!" class="hvr-shrink">
                                            <img src="{{asset('storage/'.$value->photo)}}" class="img-fluid o-hidden">
                                        </a>
                                    </div>
                                    <div class="prod-info">
                                        <a href="#" class="txt-muted"><h4>{{$value->nom}}</h4></a>
                                        <div class="m-b-10">
                                            <label class="label label-success"></label><a class="text-muted f-w-600">{{$value->type}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- @foreach ($produits as $value)
                        <tr class="text-center">
    
                            <th scope="row">{{$value->id}}</th>
                            <td class=""><span class="">{{$value->nom}}</span>
                            </td>
                            <td class=""><span class="">{{$value->type}}</span>
                            </td>
                            <td class="row">
                                <form method="POST" action="{{url('admin/produit/destroy', $value->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <span class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 outer-ellipsis"><button type="submit" class="btn btn-danger" ><i class="icofont icofont-trash" color="red"></i>Supprimer</button>
                                    </span>
                                </form>
                                <form method="post" action="{{url('admin/produit/edit',$value->id)}}" >
                                    @method('GET')
                                    <span class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 outer-ellipsis"><button type="submit" class="btn btn-primary" ><i class="feather icon-edit-1"></i>Modifier</button>
                                    </span>
                                </form>
                                <div>
                                <button data-toggle="modal" data-target="#Modal-lightbox" class="btn btn-secondary"><i class="icofont icofont-eye" color="red"></i>Voire</button>
                                    <div class="modal fade" id="Modal-lightbox" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach        -}}
                </tbody>
            </table> 
        </div>
    </div>
    {{-- <div class="modal fade" id="Vmodal" tabindex="-1" role="dialog" aria-labelledby="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Détails </h3>
                    <button required type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer ">
                    <a href="#" data-dismiss="modal" class="btn btn-secondary">Fermer</a>
                </div>
            </div>
        </div>
    </div> -}}
</div> --}}
 @endsection