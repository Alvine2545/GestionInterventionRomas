@extends('index')

<style>
    body
    {
        background-color: brown;
        /* background-image: url("res/imgs/bgW1.jpeg"); */
    }

</style>
@section('contenu')
<div class="pcoded-content">
  <div class="pcoded-inner-content">
      <!-- Main-body start -->
      <div class="main-body">
          <div class="page-wrapper">
              <!--Page-header start -->
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
                                      <h3 class="text-center" style="margin-top: 3%; color:gold">Signaler une panne</h3>
                                  </div>
                                  <div class="card-block" >
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                    </div><br />
                                  @endif
                                      <form id="second" method="post" action="{{ url('pannes/store') }}" novalidate="">
                                        @csrf
                                        @method('POST')
                                        <div class="row" style="margin-left: 10%; margin-bottom:3%" >
                                            <label for="produit" class="col-md-4 col-md-offset-2">Produit installés</label>
                                          <select name="produit" style="width: 50%" class="col-md-6">
                                            @foreach ($produits as $produit) {
                                              <option value="{{$produit->id}}">{{$produit->nom}} </option> 
                                          }
                                            @endforeach
                                            
                                          </select>
                                        </div>
                                          <div class="form-group row" style="margin-left: 10%">
                                            <label for="description" class="col-md-4 col-md-offset-2">Description de la panne</label>
                                            <div class="col-sm-6" >
                    
                                              <textarea type="textarea" rows="4" class="form-control" name="description" placeholder="Veuillez nous renseigner sur votre panne"></textarea>
                                              <span class="messages popover-valid"></span>
                                            </div>
                                          </div>
                                          
                                            
                                          <div class="row">
                                            <div class="col-sm-4" style="margin-left: 10%">
                                                <button type="submit" class="btn btn-primary m-b-0">Envoyer</button>
                                            </div>
                                            <div class="col-sm-4">
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
