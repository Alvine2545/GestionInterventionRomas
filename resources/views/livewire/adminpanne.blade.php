<div class="page-wrapper">
    @push('styles')
        <style>
           
        </style>
    @endpush
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Enregistrer une panne</h4>
                        {{-- <span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit</span--> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{url('admin/dashboard')}}"> <i class="feather icon-home"></i> </a>
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
                    {{-- <div class="card"> --}}
                        {{-- <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline text-center" >
                                    <h4 style="margin-top: 10%">Ajouter un utilisateur</h4>
                                </div>
                            </div>
                        </div> --}}
                            <!--div class="card-header">
                                <h5>Book Now</h5>
                                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                            </div-->
                            <button wire:click="new" class="btn btn-primary" style="margin-left: 92%">Nouveau</button>

                            <div class="card-block">
                                {{-- <div class="j-wrapper j-wrapper-640"> --}}
                                    {{-- Boutton déroulant --}}
                                    <div class="card">
                                        <div class="card-header">
                                          <h3 class="card-title text-center">Liste des pannes</h3>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered" id="example-2">
                                                <thead>
                                                    <th>#</th>
                                                    <th>Description</th>
                                                    <th>Actions</th>                                                
                                                </thead>
                                               <tbody>
                                                 <?php $i = 1; ?>
                                                    @foreach($pannes as $value)
                                                      <tr>
                                                          <td>{{$i++}}</td>
                                                          <td>{{$value->nom}}</td>
                                                          <td>{{$value->description}}</td>
                                                          <td>
                                                              <button wire:click="edit({{$value->id}})" class="btn btn-primary"><i class="icofont icofont-edit" color="red"></i></button> |
                                                              <button class="btn btn-secondary details" data-toggle="modal" data-backdrop="false" data-target="#myModal2" ><i class="icofont icofont-eye" color="red"></i></button> |
                                                              <button wire:click="destroy({{$value->id}})" class="btn btn-danger"><i class="icofont icofont-trash" color="red"></i></button>
                                                          </td>
                                                      </tr>
                                                      <div class="modal fade" id="myModal2">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3 class="modal-title">Détails</h3>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="container">{{$value->description}}</div>
                                                                <div class="modal-body">
                                                                    <span>
                                                                        {{$value->description}}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                      @endforeach
                                               </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    

                                {{-- </div> --}}
                            </div>
                    </div>
                    <!-- Design Wizard card end -->
                </div>
            </div>
        </div>
        <!-- Page body end -->
    </div>
    
    @push('scripts')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}
    <script>
  
    $(function(){
  
        $('.details').click(function() {
            $('#myModal2').modal('show');
        });
    })
        </script>
    @endpush
</div>

