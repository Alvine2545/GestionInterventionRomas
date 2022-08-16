@extends('layout1')

@section('dashbord')
    
<div class="row align-items-end">
    <div class="col-lg-8">
        <div class="page-header-title">
            <div class="d-inline">
                <h4>Modifier un produit</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Produit</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Modifier des produits</a>
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

      <form method="post" action="{{ url('admin/produit/update', $produit->id ) }}">
        @csrf
        @method('PUT')
          <div class="card-header">
              <h4 class="text-center">Modifier un produit</h4>
          </div>
          <div class="card-block">
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Entrer le nom</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="nom" placeholder="Nom" value="{{$produit->nom}}">
                          <span class="messages popover-valid"></span>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Type de produit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="type" placeholder="Nom" value="{{$produit->type}}">
                        <span class="messages popover-valid"></span>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Photo du produit</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="photo" placeholder="Choisir une photo du produit">
                            <span class="messages popover-valid"></span>
                        </div>
                    </div>
                  <div class="row" style=" margin-top:5%">
                      <div class="col-md-4 col-md-offset-8" style="margin-left: 30%;">
                          <button type="submit" class="btn btn-primary">Modifier</button>
                      </div>
                      <div class="">
                        <button type="reset" class="btn btn-danger">Annuler</button>
                    </div>
                  </div>
                    
          </div>
      </form>
  </div>
@endsection
