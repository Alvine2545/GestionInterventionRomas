<div>
    @if ($updateMode == false)
        <form wire:submit.prevent="store()" novalidate="">
            @csrf
            <div class="row" style="margin-left: 10%; margin-bottom:3%" >
                 <select class="form-control form-control-primary" name="client_id" wire:click="changeEvent($event.target.value)" style="width: 50%" >
                    <option value="">Selectionner le client</option>
                    @foreach ($users as $value)
                        <option value="{{$value->id}}" >{{$value->nom}} </option>
                      @endforeach

                  </select>
             </div>
             @if (collect($pannes)->isNotEmpty())
             <div class="row" style="margin-left: 10%; margin-bottom:3%" >
                <select class="form-control form-control-primary" name="pane_id" wire:model="pane_id" style="width: 50%" >
                    <option value="">Sélectionnez la panne du client</option>
                   @foreach ($pannes as $value)
                        <option value="{{$value->id}}">{{$value->description}} </option>
                    @endforeach
                 </select>
             </div>
             @endif

               <div class="row" style="margin-left: 10%; margin-bottom:3%" >
                  <select class="form-control form-control-primary" name="type_devis_id" wire:model="type_devis_id" style="width: 50%" >
                      <option value="">Sélectionnez le type de devis</option>
                          @foreach ($types as $value)
                       <option value="{{$value->id}}">{{$value->nom}} </option>
                     @endforeach

                 </select>
             </div>
             <div class="form-group row">
                <div class="col-sm-6" style="margin-left: 9%">
                    <label class="col-sm-2 col-form-label">Montant à payer</label>
                    <input type="text" wire:model="prix" class="form-control" name="prix" placeholder="Veuillez entrer le montant">
                    <span class="messages popover-valid"></span>
                </div>
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


      <div class="card">
          <div class="card-header">
            <h4 class="card-title text-left">Liste des devis</h4>
          </div>
          <div class="table-responsive">
              <table class="table table-striped table-bordered" id="example-2">
                 <tbody>
                   <?php $i = 1; ?>
                      @foreach($devis as $value)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$value->prix}}</td>
                            <td>{{$value->client_id}}</td>
                            <td>{{$value->type_devis_id}}</td>
                            <td>{{$value->pannes_id}}</td>
                            <td>
                                <button wire:click="edit({{$value->id}})" class="btn btn-primary">Modifier<i class="icofont icofont-trash" color="red"></i></button> |
                                <button wire:click="destroy({{$value->id}})" class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        @endforeach
                 </tbody>
              </table>
          </div>
      </div>
</div>

