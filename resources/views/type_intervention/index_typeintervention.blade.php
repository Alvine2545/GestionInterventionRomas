@extends('layout1')
@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
<!-- Main-body start -->
<div class="">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Liste des types d'intervention</h4>
                            <span>Liste et ajout d'un type d'intervention</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{url('admin/planning')}}">Plannification</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Type intervention</a>
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
                    <!-- Task-detail-right start -->
                    <div class="col-xl-4 col-lg-12 push-xl-8 task-detail-right">
                        @if ($edit == true)
                        <form method="post" action="{{ url('admin/typeintervention/update', $type_inter->id ) }}">
                            @csrf
                            @method('PUT')
                            <div class="card">
                              <div class="card-header">
                                  <h5>Modifier le type d'intervention</h5>
                              </div>
                              <div class="card-block">
                                      <div class="form-group row">
                                          {{-- <label class="col-sm-2 col-form-label">Entrer le nom</label> --}}
                                          <div class="col-sm-12" style="margin-left: 1%;">
                                              <input type="text" class="form-control" name="nom" placeholder="Nom" value="{{$type_inter->nom}}">
                                              <span class="messages popover-valid"></span>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <label class="col-sm-2"></label>
                                          <div class="col-sm-10">
                                              <button type="submit" class="btn btn-primary m-b-0">Modifier</button>
                                              <a href="{{url('admin/typeintervention/liste')}}"><button type="button" class="btn btn-danger m-b-0">Annuler</button></a>
                                          </div>
                                      </div>
                                  
                              </div>
                          </div>
                          </form>
                        @else
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text"><i class="icofont icofont-edit-alt m-r-10"></i>Nouveau</h5>
                                </div>
                                <div class="card-block">
                                    <div class="counter">
                                        <div class="yourCountdownContainer">
                                            <div class="row">
                                                <form method="post" action="{{ url('admin/typeintervention/store') }}">
                                                    @csrf
                                                    @method('POST')
                                                    <div class="form-group row">
                                                        {{-- <label class="col-sm-4 col-form-label">Entrer le nom</label> --}}
                                                        <div class=" col-sm-12" style="margin-left: 13%;">
                                                            <input type="text" class="form-control" name="nom" placeholder="Nom">
                                                            <span class="messages popover-valid"></span>
                                                        </div>
                                                    </div>
                                                    <div class=" row">
                                                        <div class="col-sm-4" style="margin-right: 20%; margin-left: 12%;">
                                                            <button type="submit" class="btn btn-primary m-b-0">Enregistrer</button>
                                                        </div>
                                                        <div class=" col-sm-4" >
                                                            <button type="reset" class="btn btn-danger m-b-0">Annuler</button>
                                                        </div>
                                                    </div>
                                                <!--/div-->
                                                </form>
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of yourCountdown -->
                                    </div>
                                    <!-- end of counter -->
                                </div>
                            </div>    
                        @endif
                        
                    </div>
                    <!-- Task-detail-right start -->
                    <!-- Task-detail-left start -->
                    <div class="col-xl-8 col-lg-12 pull-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="icofont icofont-tasks-alt m-r-5"></i> Liste des types d'intervention</h5>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive m-t-20">
                                    <table class="table m-b-0 f-14 b-solid requid-table">
                                        <thead>
                                            <tr class="text-uppercase">
                                                <th class="text-center">#</th>
                                                <th class="text-center">Nom</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center text-muted">
                                            @foreach($types as $type)
                                                <tr>
                                                    <td>{{$type->id}}</td>
                                                    <td>{{$type->nom}}</td>
                                                    <td>
                                                        <a href="{{url('admin/typeintervention/edit', $type->id)}}" class="btn btn-primary"> <i class="icofont icofont-edit-alt m-r-10"></i></a>
                                                        <form style="display: inline;" action="{{url('admin/typeintervention/destroy', $type->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit"><i class="icofont icofont-delete-alt m-r-10"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Task-detail-left end -->
                </div>
            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <!-- Main-body end -->
</div>


  {{-- <div class="row align-items-end">
    <div class="col-lg-8">
        <div class="page-header-title">
            <div class="d-inline">
                <h4>Liste des types d'intervention</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Liste des types d'intervention</a>
                </li>
            </ul>
        </div>
    </div>
</div>

    <form action="{{ url('admin/typeintervention/create')}}" method="post">
      @csrf
      @method('GET')
    </form>
    <div class="card">
      <div class="card-header">
        <h5>Liste des types d'interventions</h5>
      </div>
      <div class="card-block">
          <div class="table-responsive">
              <table class="table table-striped table-bordered" id="example-2">
                  <tbody>
                    
                      @foreach($types as $type)
                      
                      <tr>
                          <td>{{$type->id}}</td>
                          <td>{{$type->nom}}</td>
                          <td><a href="{{url('admin/typeintervention/edit', $type->id)}}" class="btn btn-primary">Modifier</a></td>
                          <td>
                              <form action="{{url('admin/typeintervention/destroy', $type->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
    </div> --}}
  
  <!-- Edit With Button card end -->

@endsection

