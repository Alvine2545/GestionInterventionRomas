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
                        <li class="breadcrumb-item"><a href="#!">Devis</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <button style="margin-left: 90%" class="btn btn-grd-primary" wire:click="new">Nouveau</button>
    <div class="card">
        
        {{-- <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline text-center" >
                    <h4 style="margin-top: 10%">Signaler une panne</h4>
                </div>
            </div>
        </div> --}}
        <div class="card-block">
            <!--div class="card-header">
                <h5>Book Now</h5>
                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
            </div-->
            @if ($nouveau)
            @if ($updateMode == false)
            
            <form wire:submit.prevent="store" novalidate="">
                @csrf
                <div class="row" style="margin-left: 10%; margin-bottom:3%" >
                    <label for="client_id" class="col-md-4">Client</label>
                    <select class="form-control form-control-primary" name="client_id" wire:model="client_id" style="width: 50%" >
                        <option value="">Sélectionnez le client</option>
                        @foreach ($clients as $value)
                            <option value="{{$value->id}}" >{{$value->nom}} </option>
                        @endforeach

                    </select>
                </div> 
                <div class="row" style="margin-left: 10%; margin-bottom:3%" >
                    <label for="devis" class="col-md-4">Type devis</label>
                    <select class="form-control form-control-primary" name="type_devis_id" wire:model="type_devis_id" wire:change="$emit('changeEvent', $event.target.value)" style="width: 50%" >
                        <option value="">Sélectionnez le type de devis</option>
                            @foreach ($typedevis as $value)
                                <option value="{{$value->id}}">{{$value->nom}} </option>
                            @endforeach
                    </select>
                </div>
                @if (collect($pannes)->isNotEmpty())
                <div class="row" style="margin-left: 10%; margin-bottom:3%" >
                    <label for="pane" class="col-md-4">Panne</label>
                    <select class="form-control form-control-primary" name="pane_id" wire:model="pane_id" style="width: 50%" >
                        <option value="">Sélectionnez la panne du client</option>
                        @foreach ($pannes as $value)
                            <option value= "{{$value->id}}"> {{$value->description}}</option>
                        @endforeach
                    </select>
                </div>
                @endif
                <div class="form-group row" style="margin-left: 10%; margin-bottom:3%">
                    {{-- <div class="col-sm-6" style="margin-left: 9%"> --}}
                        <label class="col-sm-4">Montant à payer</label>
                        <input type="text" wire:model="prix" class="form-control col-sm-6" name="prix" placeholder="Veuillez entrer le montant">
                        <span class="messages popover-valid"></span>
                    {{-- </div> --}}
                </div>

                <div class="row">
                    <div class="col-sm-4" style="margin-left: 10%">
                         <button type="submit" class="btn btn-primary m-b-0">Enregistrer</button>
                     </div>
                     <div class="col-sm-4">
                        <button type="reset" class="btn btn-danger m-b-0">Annuler</button>
                     </div>
                </div>
                   <br>
                   <br>
    
            </form>
        @else
            @include('livewire.updatedevis')
        @endif
            @endif
            <div class="card">
                        <div class="card-header">
                          <h4 class="card-title text-left">Liste des devis</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="example-2">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th data-breakpoints="xs">Destinataire</th>
                                        <th data-breakpoints="xs">Type</th>
                                        <th data-breakpoints="xs">Paiement</th>
                                        <th data-breakpoints="xs">Prix</th>                                                                
                                        <th data-breakpoints="xs">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                               <tbody>
                                @if (collect([$devis])->isNotEmpty())
                                    <tr>
                                        <td colspan="6" class="text-center">Aucune donnée disponible</td>
                                    </tr>
                                @else
                                 <?php $i = 1; ?>
                                 @foreach($devis as $value)
                                  <tr>
                                      <td>{{$i++}}</td>
                                      <td>{{$value->prix}}</td>
                                      <td>{{$value->user_id}}</td>
                                      <td>{{$value->type}}</td>
                                      <td>{{$value->interventions_id}}</td>
                                      <td>
                                          <button wire:click="edit({{$value->id}})" class="btn btn-primary">Modifier<i class="icofont icofont-trash" color="red"></i></button> |
                                          <button wire:click="view({{$value->id}})" class="btn btn-secondary">Détails</button>
                                          <button wire:click="destroy({{$value->id}})" class="btn btn-danger">Supprimer</button>
                                      </td>
                                  </tr>
                                  @endforeach
                           
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>
    </div>
    </div>
</div>
