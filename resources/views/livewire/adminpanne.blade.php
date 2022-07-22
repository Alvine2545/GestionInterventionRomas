<div>
      @if ($updateMode == false)
          <form wire:submit.prevent="store()" novalidate="">
              @csrf
              <div class="row" style="margin-left: 10%; margin-bottom:3%" >
                   <select class="form-control form-control-primary" name="client_id" wire:model="client_id" style="width: 50%" >
                      <option value="">Sélectionnez le client</option>
                       @foreach ($users as $value)
                          <option value="{{$value->id}}">{{$value->nom}} </option>
                        @endforeach

                    </select>
               </div>
               @if (count($produits)> 0)
                   <div class="row" style="margin-left: 10%; margin-bottom:3%" >
                      <select class="form-control form-control-primary" name="produit_id" wire:model="produit_id" style="width: 50%" >
                          <option value="">Sélectionnez un produit</option>
                         @foreach ($produits as $value)
                              <option value="{{$value->id}}">{{$value->nom}} </option>
                          @endforeach
                       </select>
                   </div>
               @endif
               <div class="form-group row">
                  <div class="col-sm-6" style="margin-left: 9%">
                      <textarea type="textarea"  wire:model="description" rows="4" class="form-control" name="description" placeholder="Veuillez nous renseigner sur votre panne"></textarea>
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
            @include('livewire.updatepanne')
       @endif


        <div class="card">
            <div class="card-header">
              <h4 class="card-title text-left">Liste des pannes</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="example-2">
                   <tbody>
                     <?php $i = 1; ?>
                        @foreach($pannes as $value)
                          <tr>
                              <td>{{$i++}}</td>
                              <td>{{$value->description}}</td>
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



