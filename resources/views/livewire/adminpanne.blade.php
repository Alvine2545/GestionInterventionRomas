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
                        <span>Enregistrement de la panne d'un client</span>
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
                    <button wire:click="new" class="btn btn-primary" style="margin-left: 92%">Nouveau</button>
                    <div class="card-block">
                        {{-- <div class="j-wrapper j-wrapper-640"> --}}
                            {{-- Boutton déroulant --}}
                            
                            @if ($nouveau == true)
                            <?php
                                Alert::info('Message', 'Vous n\'avez aucun produit chez RoMAS Technologie');
                            ?>
                                <div class="card" style="width: 60%; margin-left: 20%">
                                    <div class="col-lg-8">
                                        <div class="page-header-title">
                                            <div class="d-inline text-center" >
                                                <h4 style="margin-top: 10%">Créer une panne</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <form wire:submit.prevent="store" novalidate="">
                                            @csrf
                                            <div class="row" style="margin-bottom:3%" > 
                                                <label for="" class="col-md-2">Cient</label>
                                                <select class="form-control form-control-primary col-md-8" name="client_id" wire:model="client_id" style="width: 50%" >
                                                    <option value="">Sélectionnez le client</option>
                                                    @foreach ($users as $value)
                                                        <option value="{{$value->id}}">{{$value->nom}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @if (count($produits)> 0)
                                                <div class="row" style=" margin-bottom:3%" >
                                                    <label for="" class="col-md-2">Produits</label>
                                                    <select class="form-control form-control-primary col-md-8" name="produit_id" wire:model="produit_id" style="width: 50%" >
                                                        <option value="">Sélectionnez un produit</option>
                                                    @foreach ($produits as $value)
                                                        <option value="{{$value->id}}">{{$value->nom}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endif
                                            <div class=" row" style=" margin-bottom:5%">
                                                    <label for="" class="col-md-2">Panne</label>
                                                    <textarea type="textarea"  wire:model="description" rows="5" class="form-control col-md-8" name="description" placeholder="Veuillez nous renseigner sur votre panne"></textarea>
                                                    <span class="messages popover-valid"></span>
                                            </div>
    
                                            <div class="row">
                                                <div class="col-sm-4" style="margin-left: 20%">
                                                    <button type="submit" class="btn btn-primary m-b-0">Enregistrer</button>
                                                </div>
                                                <div class="col-sm-4">
                                                    <button wire:click='close' type="reset" class="btn btn-danger m-b-0">Annuler</button>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
    
                                        </form>
                                    </div>
                                </div>
                            @endif
                            @if($updateMode == true)
                                @include('livewire.updatepanne')
                            @endif


                            @if ($liste == true)
                                <div class="card" style="width: 60%; margin-left: 20%">
                                    <div class="card-header">
                                        <h5>Liste des pannes</h5>
                                        <span></span>

                                    </div>
                                    <div class="card-block table-border-style" style="margin-left: 5%">
                                        <div class="table-responsive" >
                                            <table class="table" >
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Code</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <?php $i = 1; ?>
                                                        @foreach($pannes as $value)
                                                        <tr>
                                                            <td>{{$i++}}</td>
                                                            <td>{{$value->nom}}</td>
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
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @endif

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

