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
<div class="card card-block" style="width: 80%; margin-left: 10%">
    <table id="demo-foo-filtering" class="table table-striped text-align-center" >
        <thead>
            <tr>
                <th>#</th>
                <th data-breakpoints="xs">Nom</th>
                <th data-breakpoints="xs">Type</th>
                <th data-breakpoints="xs">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $value)
            <tr>
               
                <th scope="row">{{$value->id}}</th>
                <td class=""><span class="">{{$value->nom}}</span>
                    <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                </td> 
                <td class=""><span class="">{{$value->type}}</span>
                    <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
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
                    
                </td>
                @endforeach
               
            </tr>
           
        </tbody>
    </table>
</div>
 @endsection