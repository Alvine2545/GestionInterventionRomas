<br>
<br>
<div class="page-body" style="width: 70%">
    <div class="row">
        <div class="col-sm-12">

            <!-- Tooltip Validation card start -->
            <div class="card">
              <div class="card-header">
                <h5>Modifier le devis</h5>
            </div>
                <div class="card-block" >
                    <form action="" wire:submit.prevent="update()">
                        @csrf
                        <div class="row" style="margin-left: 10%; margin-bottom:3%" >
                            <select class="form-control form-control-primary" name="client_id" wire:model="client_id" style="width: 50%" >
                               <option value="">Sélectionnez le client</option>
                                @foreach ($users as $value)
                                   <option value="{{$value->id}}">{{$value->nom}} </option>
                                 @endforeach

                             </select>
                        </div>
                        @if (count($panne)> 0)
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
                                  @foreach ($typedevis as $value)
                                      <option value="{{$value->id}}">{{$value->nom}} </option>
                                 @endforeach

                            </select>
                      </div>
                        <input type="hidden" wire:model="selected_id">
                        <label class="col-sm-2 col-form-label">Veuillez resoumettre votre montant</label>
                        <div class="form-group row">
                            <div class="col-sm-6" style="margin-left: 9%">
                                <input type="text" wire:model="prix" class="form-control" name="prix" placeholder="Montant à payer">
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
