
<br>
<br>
<div class="page-body" style="width: 60%; margin-left: 20%">
    <div class="row">
        <div class="col-sm-12">
            
            <!-- Tooltip Validation card start -->
            <div class="card">
              <div class="card-header">
                <h4 style="text-align: center">Modifier la panne</h4>
            </div>
                <div class="card-block" >
                    <form action="" wire:submit.prevent="update()">
                        @csrf
                        <div class="row" style="margin-bottom:3%" >
                            <label class="col-sm-2">Client</label>
                          <select class="form-control form-control-primary" name="client_id" wire:model="client_id" style="width: 50%" readonly>
                            <option value="">Sélectionnez le client</option>
                            @foreach ($users as $value) 
                              <option value="{{$value->id}}">{{$value->nom}} </option>
                            @endforeach
                            
                          </select>
                        </div>
                        @if (count($produits)> 0)
                            <div class="row" style="margin-bottom:3%" >
                                <label class="col-sm-2">Produit</label>
                              <select class="form-control form-control-primary" name="produit_id" wire:model="produit_id" style="width: 50%" >
                                  <option value="">Sélectionnez un produit</option>
                                  @foreach ($produits as $value)
                                    <option value="{{$value->id}}">{{$value->nom}} </option> 
                                  @endforeach
                              </select>
                            </div>
                        @endif
                        <input type="hidden" wire:model="selected_id">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Panne</label>
                            <textarea  wire:model="description" value="description" type="textarea" rows="4" class="form-control col-sm-8" name="description" placeholder="Veuillez nous renseigner sur votre panne">{{$this->description}}</textarea>
                            <span class="messages popover-valid"></span>
                        </div>
                        <div class="row">
                            <div class="col-sm-4" style="margin-left: 10%">
                                <button type="submit" class="btn btn-primary m-b-0">Enregistrer</button>
                            </div>
                            <div class="col-sm-4" >
                                <button wire:click="close"class="btn btn-danger m-b-0">Annuler</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
            <!-- Tooltip Validation card end -->
           
        </div>
    </div>
</div>