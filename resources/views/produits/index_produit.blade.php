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
                <li class="breadcrumb-item"><a href="#!">Produits</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Liste des produits</a>
                </li>
            </ul>
        </div>
    </div>
</div><br>
<div class="card">
    <div class="card-header">
        {{-- <h5>Liste des utilisateurs</h5> --}}
        {{-- <span>Récapitulatif des informations de clients et des techniciens. Cliquez sur voir pour plus de détails.</span> --}}
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><i class="feather icon-maximize full-card"></i></li>
                <li><i class="feather icon-minus minimize-card"></i></li>
                <li><i class="feather icon-trash-2 close-card"></i></li>
            </ul>
        </div>
    </div>
    <div class="card-block">
        <div class="dt-responsive table-responsive">
            <table id="events-key-table" class="table table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        <th>#</th>
                        <th >Nom</th>
                        <th >Type</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produits as $value)
                        <tr class="text-center">
    
                            <th scope="row">{{$value->id}}</th>
                            <td class=""><span class="">{{$value->nom}}</span>
                                <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                            </td>
                            <td class=""><span class="">{{$value->type}}</span>
                                <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
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
                                    <button data-toggle="modal" data-target="#Modal-lightbox"><i class="icofont icofont-eye" color="red"></i>Voire</button>
                                    <div class="modal fade" id="Modal-lightbox" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <img src="..\files\assets\images\modal\overflow.jpg" alt="" class="img img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach       
                </tbody>
            </table> 
        </div>
    </div>
    <div class="modal fade" id="Vmodal" tabindex="-1" role="dialog" aria-labelledby="modal">
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
    </div>
</div>
 @endsection