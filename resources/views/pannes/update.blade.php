@extends('index')
@section('contenu')
<div class="pcoded-content">
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
                                  <h4>Forms Validation</h4>
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
                                  <li class="breadcrumb-item"><a href="#!">Form Validation</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Page-header end -->
                 
                  <!-- Page body start -->
                  <div class="page-body" style="width: 70%; margin-left:15%">
                      <div class="row">
                          <div class="col-sm-12">
                              
                              <!-- Tooltip Validation card start -->
                              <div class="card">
                                <div class="card-header">
                                  <h5>Modifier la panne</h5>
                              </div>
                                  <div class="card-block" >
                                    
                                      <form id="second" method="post" action="{{ url('pannes/update', $pane->id)}}" >
                                        @csrf
                                        @method('PUT')
                                        <label class="col-sm-6 col-form-label">Veuillez resoumettre votre description</label>
                                        <div class="form-group row">
                                          <div class="col-sm-10">
                                            <textarea value="{{$pane->id}}" type="textarea" rows="4" class="form-control" name="description" placeholder="Veuillez nous renseigner sur votre panne">{{$pane->description}}</textarea>
                                            <span class="messages popover-valid"></span>
                                          </div>
                                      </div>
                                          
                                          
                                            
                                          <div class="row">
                                            <div class="col-sm-5" style="margin-left: 10%">
                                                <button type="submit" class="btn btn-primary m-b-0">Enregistrer</button>
                                            </div>
                                            <div class="col-sm-5" >
                                                <button type="reset" class="btn btn-danger m-b-0">Annuler</button>
                                            </div>
                                        </div>
                                              
                                      </form>
                                  </div>
                              </div>
                              <!-- Tooltip Validation card end -->
                             
                          </div>
                      </div>
                  </div>
                  <!-- Page body end -->
              </div>
          </div>
          <!-- Main-body end -->
          
      </div>
  </div>
</div>
@endsection
