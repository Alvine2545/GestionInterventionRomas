<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Ajouter une installation</h4>
                        <span>Enregistrement d'une installationde produit chez un client</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Installation</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <button style="margin-left: 90%" class="btn btn-primary" wire:click="nouveau">Nouveau</button><br>        
        {{-- <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline text-center" >
                    <h4 style="margin-top: 10%">Signaler une panne</h4>
                </div>
            </div>
        </div> --}}
        <div class="card">
                @if($updateMode)
                    <div class="card-block">
                        @include('livewire.update')
                    </div>
                @endif
                @if ($createMode)
                    <div class="card-header">
                        <div class="d-inline" >
                            <h4 style="margin-top: 3%" class="text-center">Créer une installation</h4>
                        </div>
                    </div>
                    <div class="card-block">
                        <form wire:submit.prevent="store" style="margin-left: 5%">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><h4 class="sub-title">Clients <p style="color: red">*</p></h4></label>
                                <div class="col-sm-10 col-md-10" style="width:75%;">
                                    <select name="client" class="form-control js-example-tags js-example-responsive" wire:model="client">
                                        @foreach ($data as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><h4 class="sub-title">Produits <p style="color: red">*</p></h4></label>
                                <div class="col-sm-10 col-md-10" style="width:75%;">
                                    <select class="form-control js-example-tags js-example-responsive col-sm-10" wire:model="produit">
                                        @foreach ($produits as $produit)
                                            <option value="{{$produit->id}}">{{$produit->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><h4 class="sub-title">Version du produit <p style="color: red">*</p></h4></label>
                                <div class="col-sm-10 col-md-10" style="width:75%;">
                                    <input type="text" class="form-control" name="version" placeholder="Version" wire:model="version">
                                <span class="messages popover-valid"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><h4 class="sub-title">Description de l'installation <p style="color: red">*</p></h4></label>
                            <div class="col-sm-10" style="width:75%;">
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
                @endif
        </div>
        <table id="demo-foo-filtering" class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th data-breakpoints="xs">Nom du produit</th>
                    <th data-breakpoints="xs">Type de produit</th>
                    <th data-breakpoints="xs">Version</th>
                    <th data-breakpoints="xs">Entreprise</th>
                    <th data-breakpoints="xs">Description</th>
                    <th data-breakpoints="xs">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($installation as $value)
                        <tr>
                            <th scope="row">{{$value->id}}</th>
                            <td class=""><span class="">{{$value->produits}}</span>
                                <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                            </td> 
                            <td class=""><span class="">{{$value->type}}</span>
                                <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                            </td>
                            <td class=""><span class="">{{$value->version}}</span>
                                <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                            </td>
                            <td class=""><span class="">{{$value->nom}}</span>
                                <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                            </td>
                            <td class=""><span class="">{{$value->description}}</span>
                                <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                            </td>
                            <td class="row">
                                <form class="col-md-4 col-md-offset-4">
                                    @csrf
                                    <span class=" outer-ellipsis"><button wire:click="destroy($value->id,$value->installation_id)" class="btn btn-danger"><i class="icofont icofont-trash"></i></button>
                                    </span>
                                </form>
                                <form class="col-md-4">
                                    <span class= "outer-ellipsis"><button wire:click="edit($value->id, $value->installation_id)" class="btn btn-secondary"><i class="feather icon-edit-1"></i></button>
                                    </span>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
</div>
