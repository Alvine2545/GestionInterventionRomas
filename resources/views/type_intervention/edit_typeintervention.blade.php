@extends('layout1')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
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
