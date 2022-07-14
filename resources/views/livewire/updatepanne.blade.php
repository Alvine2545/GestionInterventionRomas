
<br>
<br>
<div class="page-body" style="width: 70%">
    <div class="row">
        <div class="col-sm-12">
            
            <!-- Tooltip Validation card start -->
            <div class="card">
              <div class="card-header">
                <h5>Modifier la panne</h5>
            </div>
                <div class="card-block" >
                    <form action="" wire:submit.prevent="update()">
                        @csrf
                        <div class="row" style="margin-left: 10%; margin-bottom:3%" >
                          <select class="form-control form-control-primary" name="client_id" wire:model="client_id" style="width: 50%" readonly>
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
                        <input type="hidden" wire:model="selected_id">
                        <label class="col-sm-6 col-form-label">Veuillez resoumettre votre description</label>
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <textarea  wire:model="description" value="description" type="textarea" rows="4" class="form-control" name="description" placeholder="Veuillez nous renseigner sur votre panne">{{$this->description}}</textarea>
                            <span class="messages popover-valid"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4" style="margin-left: 10%">
                                <button type="submit" class="btn btn-primary m-b-0">Enregistrer</button>
                            </div>
                            <div class="col-sm-4" >
                                <button wire:click="destroy({{$value->id}})"class="btn btn-danger m-b-0">Annuler</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
            <!-- Tooltip Validation card end -->
           
        </div>
    </div>
</div>