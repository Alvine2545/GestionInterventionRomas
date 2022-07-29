@extends('layout1')

@section('content')

<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!--h4>Ajouter une installation</h4>
                        <span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit</span-->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Pannes</a>
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
                                    <h4 style="margin-top: 10%"></h4>
                                </div>
                            </div>
                        </div>
                            <!--div class="card-header">
                                <h5>Book Now</h5>
                                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                            </div-->
                            <div class="card-block">
                                    <form method="post" action="{{ url('admin/produit/store') }}">
                                        @csrf
                                        @method('POST')
                                          <div class="card-block">
                                                  <div class="form-group row">
                                                      <label class="col-sm-2 col-form-label">Entrer le nom produit</label>
                                                      <div class="col-sm-8">
                                                          <input type="text" class="form-control" name="nom" placeholder="Produit">
                                                          <span class="messages popover-valid"></span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Entrer le type produit</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="type" placeholder="Type">
                                                        <span class="messages popover-valid"></span>
                                                    </div>
                                                </div>
                                                  <div class="row">
                                                      <label class="col-sm-2"></label>
                                                      <div class="col-sm-5">
                                                          <button type="submit" class="btn btn-primary m-b-0">Enregistrer</button>
                                                      </div>
                                                      <div class="col-sm-5">
                                                        <button type="reset" class="btn btn-danger m-b-0">Annuler</button>
                                                    </div>
                                                  </div>
                                                  
                                          </div>
                                      <!--/div-->
                                      </form>
                                
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

