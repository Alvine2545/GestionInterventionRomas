<div class="col-lg-8">
    <div class="page-header-title">
        <div class="d-inline text-center" >
            <h4 style="margin-top: 10%">Créer une installation</h4>
        </div>
    </div>
</div>
<div class="card-block">
    <form wire:submit.prevent="store">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label"><h4 class="sub-title">Clients <p style="color: red">*</p></h4></label>
            <div class="col-sm-10 col-md-10">
                <select name="client" class="form-control js-example-tags js-example-responsive" wire:model="client">
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label"><h4 class="sub-title">Produits <p style="color: red">*</p></h4></label>
            <div class="col-sm-10 col-md-10" style="width:75%;">
                <select name="produit" class="form-control js-example-tags js-example-responsive col-sm-10" wire:model="produit">
                    @foreach ($produits as $produit)
                        <option value="{{$produit->id}}">{{$produit->nom}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label"><h4 class="sub-title">Version du produit <p style="color: red">*</p></h4></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="version" placeholder="Version" wire:model="version">
            <span class="messages popover-valid"></span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"><h4 class="sub-title">Description de l'installation <p style="color: red">*</p></h4></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="description" placeholder="Description" wire:model="description">
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
    </form>
</div>