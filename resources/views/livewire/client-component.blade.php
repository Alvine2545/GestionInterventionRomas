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
                        <h4>Gestion des utilisateurs</h4>
                        <span>Enregistrement et liste des utilisateurs</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{url('admin/dashboard')}}"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Utilisateurs</a>
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
                            <div class="row">
                                <div class="col-md-4"></div>
                            </div>
                            <button wire:click="new" class="btn btn-primary" style="margin-left: 92%">Nouveau</button>
                            <div class="card-block">
                                    {{-- Boutton déroulant --}}
                                    @if ($nouveau)
                                        <form wire:submit.prevent='store' class="card" id="form" style=" width: 100%; ">
                                            {{-- step 1 --}}
                                            @if ($currentSteep == 1)
                                            <div class="setp-one">
                                                <div class="">
                                                    <div class="card-header text-white" style="background-color: #202a87"> <h4 class="text-center"> Step 1/2 - Type d'utilisateur</h4></div>
                                                    <div class="card-body" style="align-content: center;">
                                                        <div class="frameworks d-flex flex-column align-items-left mt-2">
                                                                <div class="form-group">
                                                                    <h5><label class="" for="">Choix du rôles de l'utilisateur</label></h5>
                                                                    @foreach ($role as $value)
                                                                    <div class="checkbox-zoom zoom-info">
                                                                        <label>
                                                                            <input required type="checkbox" id="" value="{{$value->id}}" wire:model="roles" class="" name="roles">
                                                                            <span class="cr">
                                                                                <i class="cr-icon icofont icofont-ui-check txt-info"></i>
                                                                            </span>
                                                                            <span class="col-md-6 bold">{{$value->nom}}</span>
                                                                        </label>
                                                                    </div><br>
                                                                    @endforeach
                                                                    <span class="text-danger">@error('roles'){{$message}}@enderror</span>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            {{-- step 2 --}}
                                            @if ($currentSteep == 2)
                                            <div class="setp-two">

                                                <div class="">
                                                    <div class="card-header text-white" style="background-color: #202a87"> <h4 class="text-center"> Step 2/2 - Informations personnelles</h4></div>
                                                    <div>
                                                        @if ($choix == 1)
                                                                {{-- Client form --}}
                                                        <div class="card-body">
                                                            <div class="form-group row">
                                                                <div class="j-unit col-md-4 col-md-offset-2">
                                                                    <label class="" for="">Nom de l'entreprise <span style="color: red;"> *</span></label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="j-icon-right" for="name">
                                                                        <i class="icofont icofont-ui-user"></i>
                                                                    </label>
                                                                    <input class="" required type="text" id="name" name="name" wire:model="name" style="border: solid black 1px; width: 95%;" >
                                                                    <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4 col-md-offset-2">
                                                                    <label class="" for="">Numero IFU <span style="color: red"> *</span></label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="j-icon-right" for="name">
                                                                        <i class="icofont icofont-envelope"></i>
                                                                    </label>
                                                                    <input required type="text" id="identifiant" name="identifiant" wire:model="identifiant" style="border: solid black 1px; width: 92%;">
                                                                    <span class="text-danger">@error('identifiant'){{$message}}@enderror</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4 col-md-offset-2">
                                                                    <label class="" for="">Raison sociale <span style="color: red;"> *</span></label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="j-icon-right" for="name">
                                                                        <i class="icofont icofont-envelope"></i>
                                                                    </label>
                                                                    <input required type="text" id="raisonsociale" name="raisonsociale" wire:model="raisonsociale" style="border: solid black 1px; width: 92%;">
                                                                    <span class="text-danger">@error('raisonsociale'){{$message}}@enderror</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4 col-md-offset-2">
                                                                    <label class="" for="">Adresse Email <span style="color: red"> *</span></label>
                                                                </div>
                                                                    <div class="col-md-6">
                                                                        <label class="j-icon-right" for="name">
                                                                            <i class="icofont icofont-envelope"></i>
                                                                        </label>
                                                                        <input required type="email" id="email"  name="email" wire:model='email' style="border: solid black 1px; width: 92%;">
                                                                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4 col-md-offset-2">
                                                                    <label class="" for="">Adresse téléphonique <span style="color: red"> *</span></label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="j-icon-right" for="phone">
                                                                        <i class="icofont icofont-phone"></i>
                                                                    </label>
                                                                    <input required type="text" id="phone" name="phone" wire:model='phone' style="border: solid black 1px; width: 95%;">
                                                                    <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4 col-md-offset-2">
                                                                    <label class="" for="">Siège <span style="color: red"> *</span></label>
                                                                </div>
                                                                    <div class="col-md-6">
                                                                        <label class="j-icon-right" for="">
                                                                            <i class="icofont icofont-ui-user"></i>
                                                                        </label>
                                                                        <input required type="text" id="siege" name="siege" wire:model='siege' style="border: solid black 1px; width: 95%;">
                                                                        <span class="text-danger">@error('siege'){{$message}}@enderror</span>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if ($choix == 2)
                                                            {{-- Technicien form --}}
                                                            <div class="card-body">
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-md-offset-2">
                                                                        <label class="" for="">Nom <span style="color: red"> *</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="j-icon-right" for="nom">
                                                                            <i class="icofont icofont-ui-user"></i>
                                                                        </label>
                                                                        <input required type="text" id="name" wire:model="nom" style="border: solid black 1px; width: 95%;">
                                                                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-md-offset-2">
                                                                        <label class="" for="">Prénom <span style="color: red"> *</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="j-icon-right" for="surname">
                                                                            <i class="icofont icofont-envelope"></i>
                                                                        </label>
                                                                        <input required type="text" name="surname" wire:model='prenom' style="border: solid black 1px; width: 92%;">
                                                                        <span class="text-danger">@error('surname'){{$message}}@enderror</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-md-offset-2">
                                                                        <label class="" for="">Adresse Email <span style="color: red"> *</span></label>
                                                                    </div>
                                                                        <div class="col-md-6">
                                                                            <label class="j-icon-right" for="name">
                                                                                <i class="icofont icofont-envelope"></i>
                                                                            </label>
                                                                            <input required type="email"  name="email" wire:model='email' style="border: solid black 1px; width: 92%;">
                                                                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                                                        </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-md-offset-2">
                                                                        <label class="" for="">Adresse téléphonique <span style="color: red"> *</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="j-icon-right" for="phone">
                                                                            <i class="icofont icofont-phone"></i>
                                                                        </label>
                                                                        <input required type="text" name="phone" wire:model='phone' style="border: solid black 1px; width: 95%;">
                                                                        <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-md-offset-2">
                                                                        <label class="" for="">Siège <span style="color: red"> *</span></label>
                                                                    </div>
                                                                        <div class="col-md-6">
                                                                            <label class="j-icon-right" for="">
                                                                                <i class="icofont icofont-ui-user"></i>
                                                                            </label>
                                                                            <input required type="text" id="" wire:model='siege' name="siege" style="border: solid black 1px; width: 95%;">
                                                                            <span class="text-danger">@error('siege'){{$message}}@enderror</span>
                                                                        </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="j-unit col-md-4 col-md-offset-2">
                                                                        <label class="" for="">Poste <span style="color: red"> *</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="j-icon-right" for="poste">
                                                                            <i class="icofont icofont-ui-user"></i>
                                                                        </label>
                                                                        <input required type="text" id="poste" wire:model="poste" name="poste" style="border: solid black 1px; width: 95%;">
                                                                        <span class="text-danger">@error('poste'){{$message}}@enderror</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if ($choix == 3)
                                                            {{-- Responsable form --}}
                                                            <div class="card-body">
                                                                <div class="form-group row">
                                                                    <div class="j-unit col-md-4 col-md-offset-2">
                                                                        <label class="" for="">Nom <span style="color: red"> *</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="j-icon-right" for="nom">
                                                                            <i class="icofont icofont-ui-user"></i>
                                                                        </label>
                                                                        <input required type="text" id="name" wire:model="nom" style="border: solid black 1px; width: 92%;">
                                                                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-md-offset-2">
                                                                        <label class="" for="">Prénom <span style="color: red"> *</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="j-icon-right" for="surname">
                                                                            <i class="icofont icofont-envelope"></i>
                                                                        </label>
                                                                        <input required type="text" name="surname" wire:model='prenom' style="border: solid black 1px; width: 92%;">
                                                                        <span class="text-danger">@error('surname'){{$message}}@enderror</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-md-offset-2">
                                                                        <label class="" for="">Adresse Email <span style="color: red"> *</span></label>
                                                                    </div>
                                                                        <div class="col-md-6">
                                                                            <label class="j-icon-right" for="email">
                                                                                <i class="icofont icofont-envelope"></i>
                                                                            </label>
                                                                            <input required type="email"  name="email" wire:model='email' style="border: solid black 1px; width: 92%;">
                                                                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                                                        </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-md-offset-2">
                                                                        <label class="" for="">Adresse téléphonique <span style="color: red"> *</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="j-icon-right" for="phone">
                                                                            <i class="icofont icofont-phone"></i>
                                                                        </label>
                                                                        <input required type="text" name="phone" wire:model='phone' style="border: solid black 1px; width: 92%;">
                                                                        <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-md-offset-2">
                                                                        <label class="" for="">Siège <span style="color: red"> *</span></label>
                                                                    </div>
                                                                        <div class="col-md-6">
                                                                            <label class="j-icon-right" for="">
                                                                                <i class="icofont icofont-ui-user"></i>
                                                                            </label>
                                                                            <input required type="text" id="" wire:model='siege' style="border: solid black 1px; width: 92%;">
                                                                            <span class="text-danger">@error('siege'){{$message}}@enderror</span>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                            @endif
                                            <div class="action-button d-flex justify-content-between bg-white pt-2 pb-2" style="margin-right: 2%; margin-top: -2%">
                                                @if ($currentSteep == 1)
                                                <div></div>
                                                <button required type="button" class="btn btn-md btn-success" wire:click="increaseSteep()">Suivant</button>
                                                @endif
                                                @if ($currentSteep == 2)
                                                <button required type="button" style="margin-left: 15%;" class="btn btn-md btn-secondary" wire:click="decreaseSteep()">Précédent</button>
                                                <button required type="submit" class="btn btn-md btn-primary" style="margin-right: 15%;">Enregistrer</button>
                                                @endif
                                                @if ($stored)
                                                    <script>
                                                        const Toast = Swal.mixin({
                                                        toast: true,
                                                        position: 'top-end',
                                                        showConfirmButton: false,
                                                        timer: 3000,
                                                        timerProgressBar: true,
                                                        didOpen: (toast) => {
                                                            toast.addEventListener('mouseenter', Swal.stopTimer)
                                                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                                                        }
                                                        })

                                                        Toast.fire({
                                                        icon: 'success',
                                                        title: 'Enregistrer avec succes'
                                                        })
                                                        
                                                    </script>
                                                @endif
                                            </div>
                                        </form><br>
                                    @endif

                                    @if ($updateForm)
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Mise à jour des informations</h5>
                                            <span>Modifier les informations des utilisateurs</span>

                                        </div>
                                        <div class="card-block">
                                            <form id="main" action="" wire:submit.prevent="update" novalidate="">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Rôle utilisateur<span style="color: red"> *</span></label>
                                                    <div class="col-sm-10">
                                                        <select id="hello-single" class="form-control" wire:modele="unrole">
                                                            <option value="Choisissez un rôle">Choisissez un rôle</option>
                                                            @foreach ($role as $value)
                                                                <option value="{{$value->id}}">{{$value->nom}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="text-danger">@error('roles'){{$message}}@enderror</span>
                                                    </div>
                                                </div>
                                                @if ($isClient == true)
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nom de l'entreprise <span style="color: red"> *</span></label>
                                                        <div class="col-sm-10">
                                                            <input required type="text" placeholder="Nom de l'entreprise" class="form-control" id="name" wire:model="name" value="{{$name}}">
                                                            <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Numero IFU <span style="color: red"> *</span></label>
                                                        <div class="col-sm-10">
                                                            <input placeholder="Numero IFU" required type="text" value="{{$identifiant}}" id="identifiant" name="identifiant" wire:model="identifiant" class="form-control">
                                                            <span class="text-danger">@error('identifiant'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Raison sociale <span style="color: red"> *</span></label>
                                                        <div class="col-sm-10">
                                                            <input placeholder="Raison sociale" required type="text" value="{{$raisonsociale}}" id="raisonsociale" name="raisonsociale" wire:model="raisonsociale" class="form-control">
                                                            <span class="text-danger">@error('raisonsociale'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nom <span style="color: red"> *</span></label>
                                                        <div class="col-sm-10">
                                                            <input placeholder="Nom du technicien" required type="text" value="{{$nom}}" id="nom" name="nom" wire:model="nom" class="form-control">
                                                            <span class="text-danger">@error('nom'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Prénom <span style="color: red"> *</span></label>
                                                        <div class="col-sm-10">
                                                            <input placeholder="Prénom du technicien" required type="text" value="{{$prenom}}" id="prenom" name="prenom" wire:model="prenom" class="form-control">
                                                            <span class="text-danger">@error('prenom'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Poste <span style="color: red"> *</span></label>
                                                        <div class="col-sm-10">
                                                            <input placeholder="Poste du technicien" required type="text" value="{{$poste}}" id="poste" name="poste" wire:model="poste" class="form-control">
                                                            <span class="text-danger">@error('poste'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Adresse email <span style="color: red"> *</span></label>
                                                    <div class="col-sm-10">
                                                        <input placeholder="Email du technicien" required type="text" value="{{$email}}" id="email" name="email" wire:model="email" class="form-control">
                                                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Adresse téléphonique <span style="color: red"> *</span></label>
                                                    <div class="col-sm-10">
                                                        <input placeholder="Téléphone du technicien" required type="text" value="{{$phone}}" id="phone" name="phone" wire:model="phone" class="form-control">
                                                        <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Siège <span style="color: red"> *</span></label>
                                                    <div class="col-sm-10">
                                                        <input placeholder="Siège du technicien" required type="text" value="{{$siege}}" id="siege" name="siege" wire:model="siege" class="form-control">
                                                        <span class="text-danger">@error('siege'){{$message}}@enderror</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4"></label>
                                                    <div class="col-sm-4">
                                                        <button required type="submit" class="btn btn-primary m-b-0">Modifier</button>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <button required type="reset" class="btn btn-danger m-b-0" wire:click='annuler'>Annuler</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endif
                                    <!-- Key table events table start -->
                                    @if ($liste == true)
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Liste des utilisateurs</h5>
                                                <span>Récapitulatif des informations de clients et des techniciens. Cliquez sur voir pour plus de détails.</span>
                                            </div>
                                            <div class="card-block">
                                                <div class="dt-responsive">
                                                    <table id="events-key-table" class="table table-striped table-bordered nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>id</th>
                                                                <th >Siège</th>
                                                                <th >Email</th>
                                                                <th >Telephone</th>
                                                                <th >Role</th>
                                                                <th >Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($users as $value)
                                                                <tr class="text-center">
                                                                    <th scope="row">{{$value->id}}</th>
                                                                    {{-- <td class=""><span class="">{{$value->name}}</span> --}}
                                                                    <td class=""><span class="">{{$value->siege}}</span>
                                                                    </td>
                                                                    <td class=""><span class="">{{$value->email}}</span>
                                                                    </td>
                                                                    <td class=""><span class="">{{$value->tel}}</span>
                                                                    </td>
                                                                    <td class=""><span class="">{{$value->role}}</span>
                                                                    </td>
                                                                    <td class="row" style="margin-left: 2%;">
                                                                        <button wire:click="edit({{$value->id}})" style="margin-right: 2%;" class="btn btn-primary outer-ellipsis col-md-2 col-md-offset-2"><i class="feather icon-edit-1"></i></button>
                                                                        <button wire:click="destroy({{$value->id}})" style="margin-right: 2%;" class="btn btn-danger col-md-2 col-md-offset-2 outer-ellipsis"><i class="icofont icofont-trash" color="red"></i></button>
                                                                        <button wire:click="view({{$value->id}})" data-toggle="modal" data-target="#Vmodal" class=" btn btn-secondary col-md-2 outer-ellipsis" data-toggle="modal" data-backdrop="false" data-target="#Vmodal"><i class="icofont icofont-eye-alt" color="red"></i></button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach       
                                                        </tbody>
                                                    </table> 
                                                    @if ($viewUser == true)
                                                            <div wire:ignore.self class="modal fade" id="Vmodal" tabindex="-1" role="dialog" aria-labelledby="modal">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h3 class="modal-title">Détails </h3>
                                                                            <button required type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                        </div>
                                                                        <div class="container"></div>
                                                                        <div class="modal-body">
                                                                            <table id="demo-foo-filtering" class="table table-striped text-align-center">
                                                                            
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th data-breakpoints="xs">Nom</th>
                                                                                        <th data-breakpoints="xs"><span class="">{{ $nom }}</span></th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th data-breakpoints="xs">Prénom</th>
                                                                                        <th data-breakpoints="xs"><span class="">{{ $prenom }}</span></th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th data-breakpoints="xs">Poste</th>
                                                                                        <th data-breakpoints="xs"><span class="">{{ $poste }}</span></th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th data-breakpoints="xs">Siège</th>
                                                                                        <th data-breakpoints="xs"><span class="">{{ $siege }}</span></th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th data-breakpoints="xs">Email</th>
                                                                                        <th data-breakpoints="xs"><span class="">{{ $email }}</span></th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th data-breakpoints="xs">Téléphone</th>
                                                                                        <th data-breakpoints="xs"><span class="">{{ $phone }}</span></th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th data-breakpoints="xs">Disponibilité</th>
                                                                                        <th data-breakpoints="xs"><span class="">{{ $disponibilite }}</span></th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th data-breakpoints="xs">Rôle</th>
                                                                                        <th data-breakpoints="xs"><span class="">{{ $role[2]->nom }}</span></th>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="modal-footer ">
                                                                            <a href="#" data-dismiss="modal" class="btn btn-secondary">Fermer</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @push('scripts')
        <script>
            
        </script>
    @endpush
</div>

