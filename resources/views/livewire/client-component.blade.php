<div>
    <form wire:submit.prevent='store'>
        {{-- step 1 --}}
        @if ($currentSteep == 1)

        <div class="setp-one">
            <div class="card">
                <div class="card-header bg-secondary text-white">Step 1/2 - Type d'utilisateur</div>
                <div class="card-body">
                    <div class="frameworks d-flex flex-column align-items-left mt-2">
                        <div class="">
                            <div class="form-group">
                                <label class="" for="">Choix du rôles de l'utilisaeur</label>
                                @foreach ($role as $value)
                                <div class="">
                                    <label>
                                        <input type="checkbox" id="" value="{{$value->id}}" wire:model="roles" >
                                        <span class="cr">
                                            <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                        </span>
                                        <span>{{$value->nom}}</span>
                                    </label>
                                </div>
                                <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        {{-- step 2 --}}
        @if ($currentSteep == 2)
        <div class="setp-two">

            <div class="card">
                <div class="card-header bg-secondary text-white">Step 2/2 - Informations personnelles</div>
                <div>
                    @if ($choix == 1)
                            {{-- Client form --}}
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="j-unit col-md-2 col-md-offset-2">
                                <label class="" for="">Nom de l'entreprise *</label>
                            </div>
                            <div class="col-md-8">
                                <label class="j-icon-right" for="name">
                                    <i class="icofont icofont-ui-user"></i>
                                </label>
                                <input type="text" id="name" name="name" wire:model="name">
                                <span class="text-danger">@error('name'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-md-offset-2">
                                <label class="" for="">Numero IFU *</label>
                            </div>
                            <div class="col-md-6">
                                <label class="j-icon-right" for="name">
                                    <i class="icofont icofont-envelope"></i>
                                </label>
                                <input type="text" id="identifiant" name="identifiant" wire:model="identifiant">
                                <span class="text-danger">@error('identifiant'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-md-offset-2">
                                <label class="" for="">Adresse Email *</label>
                            </div>
                                <div class="col-md-6">
                                    <label class="j-icon-right" for="name">
                                        <i class="icofont icofont-envelope"></i>
                                    </label>
                                    <input type="email" id="email"  name="email" wire:model='email'>
                                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-md-offset-2">
                                <label class="" for="">Adresse téléphonique *</label>
                            </div>
                            <div class="col-md-6">
                                <label class="j-icon-right" for="phone">
                                    <i class="icofont icofont-phone"></i>
                                </label>
                                <input type="text" id="phone" name="phone" wire:model='phone'>
                                <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-md-offset-2">
                                <label class="" for="">Siège *</label>
                            </div>
                                <div class="col-md-6">
                                    <label class="j-icon-right" for="">
                                        <i class="icofont icofont-ui-user"></i>
                                    </label>
                                    <input type="text" id="siege" name="siege" wire:model='siege'>
                                    <span class="text-danger">@error('siege'){{$message}}@enderror</span>
                                </div>
                        </div>
                    </div>
                    @endif
                    @if ($choix == 2)
                        {{-- Technicien form --}}
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="j-unit col-md-2 col-md-offset-2">
                                    <label class="" for="">Nom *</label>
                                </div>
                                <div class="col-md-8">
                                    <label class="j-icon-right" for="nom">
                                        <i class="icofont icofont-ui-user"></i>
                                    </label>
                                    <input type="text" id="name" wire:model="nom">
                                    <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-md-offset-2">
                                    <label class="" for="">Prénom *</label>
                                </div>
                                <div class="col-md-6">
                                    <label class="j-icon-right" for="surname">
                                        <i class="icofont icofont-envelope"></i>
                                    </label>
                                    <input type="text" name="surname" wire:model='prenom'>
                                    <span class="text-danger">@error('surname'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-md-offset-2">
                                    <label class="" for="">Adresse Email *</label>
                                </div>
                                    <div class="col-md-6">
                                        <label class="j-icon-right" for="name">
                                            <i class="icofont icofont-envelope"></i>
                                        </label>
                                        <input type="email"  name="email" wire:model='email'>
                                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-md-offset-2">
                                    <label class="" for="">Adresse téléphonique *</label>
                                </div>
                                <div class="col-md-6">
                                    <label class="j-icon-right" for="phone">
                                        <i class="icofont icofont-phone"></i>
                                    </label>
                                    <input type="text" name="phone" wire:model='phone'>
                                    <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-md-offset-2">
                                    <label class="" for="">Siège *</label>
                                </div>
                                    <div class="col-md-6">
                                        <label class="j-icon-right" for="">
                                            <i class="icofont icofont-ui-user"></i>
                                        </label>
                                        <input type="text" id="" wire:model='siege'>
                                        <span class="text-danger">@error('siege'){{$message}}@enderror</span>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <div class="j-unit col-md-2 col-md-offset-2">
                                    <label class="" for="">Poste *</label>
                                </div>
                                <div class="col-md-8">
                                    <label class="j-icon-right" for="poste">
                                        <i class="icofont icofont-ui-user"></i>
                                    </label>
                                    <input type="text" id="poste" wire:model="poste">
                                    <span class="text-danger">@error('poste'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($choix == 4)
                        {{-- Responsable form --}}
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="j-unit col-md-2 col-md-offset-2">
                                    <label class="" for="">Nom *</label>
                                </div>
                                <div class="col-md-8">
                                    <label class="j-icon-right" for="nom">
                                        <i class="icofont icofont-ui-user"></i>
                                    </label>
                                    <input type="text" id="name" wire:model="nom">
                                    <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-md-offset-2">
                                    <label class="" for="">Prénom *</label>
                                </div>
                                <div class="col-md-6">
                                    <label class="j-icon-right" for="surname">
                                        <i class="icofont icofont-envelope"></i>
                                    </label>
                                    <input type="text" name="surname" wire:model='prenom'>
                                    <span class="text-danger">@error('surname'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-md-offset-2">
                                    <label class="" for="">Adresse Email *</label>
                                </div>
                                    <div class="col-md-6">
                                        <label class="j-icon-right" for="email">
                                            <i class="icofont icofont-envelope"></i>
                                        </label>
                                        <input type="email"  name="email" wire:model='email'>
                                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-md-offset-2">
                                    <label class="" for="">Adresse téléphonique *</label>
                                </div>
                                <div class="col-md-6">
                                    <label class="j-icon-right" for="phone">
                                        <i class="icofont icofont-phone"></i>
                                    </label>
                                    <input type="text" name="phone" wire:model='phone'>
                                    <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-md-offset-2">
                                    <label class="" for="">Siège *</label>
                                </div>
                                    <div class="col-md-6">
                                        <label class="j-icon-right" for="">
                                            <i class="icofont icofont-ui-user"></i>
                                        </label>
                                        <input type="text" id="" wire:model='siege'>
                                        <span class="text-danger">@error('siege'){{$message}}@enderror</span>
                                    </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

        </div>
        @endif
        <div class="action-button d-flex justify-content-between bg-white pt-2 pb-2">
            @if ($currentSteep == 1)
            <div></div>
            <button type="button" class="btn btn-sm btn-success" wire:click="increaseSteep()">Suivant</button>
            @endif
            @if ($currentSteep == 2)
            <button type="button" class="btn btn-sm btn-secondary" wire:click="decreaseSteep()">Précédent</button>
            <button type="submit" class="btn btn-sm btn-primary">Enregistrer</button>
            @endif

        </div>
    </form>
</div>
