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

                    <!-- Design Wizard card start -->
                    {{-- <div class="card"> --}}
                        {{-- <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline text-center" >
                                    <h4 style="margin-top: 10%">Ajouter un utilisateur</h4>
                                </div>
                            </div>
                        </div> --}}
                            <!--div class="card-header">
                                <h5>Book Now</h5>
                                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                            </div-->
                            <div class="row">
                                <div class="col-md-4"></div>
                            </div>
                            <button wire:click="new" class="btn btn-primary" style="margin-left: 92%">Nouveau</button>

                            <div class="card-block">
                                {{-- <div class="j-wrapper j-wrapper-640"> --}}
                                    {{-- Boutton déroulant --}}


                                    @if ($nouveau)
                                        <form wire:submit.prevent='store' class="card" id="form" style=" width: 80%; margin-left: 10%;">
                                            {{-- step 1 --}}
                                            @if ($currentSteep == 1)

                                            <div class="setp-one">
                                                <div class="">
                                                    <div class="card-header text-white" style="background-color: #202a87"> <h4 class="text-center"> Step 1/2 - Type d'utilisateur</h4></div>
                                                    <div class="card-body">
                                                        <div class="frameworks d-flex flex-column align-items-left mt-2">
                                                                <div class="form-group">
                                                                    <label class="" for="" style="text-align: center">Choix du rôles de l'utilisateur</label>
                                                                    @foreach ($role as $value)
                                                                    <div class="">
                                                                        <label>
                                                                            <input required type="checkbox" id="" value="{{$value->id}}" wire:model="roles" class="" name="roles">

                                                                            <span class="col-md-6">{{$value->nom}}</span>
                                                                        </label>
                                                                    </div>
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
                                                                    <input required type="text" id="name" name="name" wire:model="name" style="border: solid black 1px; width: 95%;" >
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
                                            <div class="action-button d-flex justify-content-between bg-white pt-2 pb-2" style="margin: 2%">
                                                @if ($currentSteep == 1)
                                                <div></div>
                                                <button required type="button" class="btn btn-sm btn-success" wire:click="increaseSteep()">Suivant</button>
                                                @endif
                                                @if ($currentSteep == 2)
                                                <button required type="button" class="btn btn-sm btn-secondary" wire:click="decreaseSteep()">Précédent</button>
                                                <button required type="submit" class="btn btn-sm btn-primary">Enregistrer</button>
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
                                                    <label class="col-sm-2 col-form-label">Rôle de l'utilisateur <span style="color: red"> *</span></label>
                                                    <div class="col-sm-10">
                                                        <select id="hello-single" class="form-control" wire:modele="unrole">
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
                                                            <input required type="text" class="form-control" id="name" wire:model="name" value="{{$name}}">
                                                            <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Numero IFU <span style="color: red"> *</span></label>
                                                        <div class="col-sm-10">
                                                            <input required type="text" value="{{$identifiant}}" id="identifiant" name="identifiant" wire:model="identifiant" class="form-control">
                                                            <span class="text-danger">@error('identifiant'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Raison sociale <span style="color: red"> *</span></label>
                                                        <div class="col-sm-10">
                                                            <input required type="text" value="{{$raisonsociale}}" id="raisonsociale" name="raisonsociale" wire:model="raisonsociale" class="form-control">
                                                            <span class="text-danger">@error('raisonsociale'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nom <span style="color: red"> *</span></label>
                                                        <div class="col-sm-10">
                                                            <input required type="text" value="{{$nom}}" id="nom" name="nom" wire:model="nom" class="form-control">
                                                            <span class="text-danger">@error('nom'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Prénom <span style="color: red"> *</span></label>
                                                        <div class="col-sm-10">
                                                            <input required type="text" value="{{$prenom}}" id="prenom" name="prenom" wire:model="prenom" class="form-control">
                                                            <span class="text-danger">@error('prenom'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Poste <span style="color: red"> *</span></label>
                                                        <div class="col-sm-10">
                                                            <input required type="text" value="{{$poste}}" id="poste" name="poste" wire:model="poste" class="form-control">
                                                            <span class="text-danger">@error('poste'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Adresse email <span style="color: red"> *</span></label>
                                                    <div class="col-sm-10">
                                                        <input required type="text" value="{{$email}}" id="email" name="email" wire:model="email" class="form-control">
                                                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Adresse téléphonique <span style="color: red"> *</span></label>
                                                    <div class="col-sm-10">
                                                        <input required type="text" value="{{$phone}}" id="phone" name="phone" wire:model="phone" class="form-control">
                                                        <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Siège <span style="color: red"> *</span></label>
                                                    <div class="col-sm-10">
                                                        <input required type="text" value="{{$siege}}" id="siege" name="siege" wire:model="siege" class="form-control">
                                                        <span class="text-danger">@error('siege'){{$message}}@enderror</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4"></label>
                                                    <div class="col-sm-4">
                                                        <button required type="submit" class="btn btn-primary m-b-0">Modifier</button>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <button required type="reset" class="btn btn-danger m-b-0">Annuler</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    {{-- <div class="card">
                                        <div class="card-header">
                                            <h3>Mise à jour des informations</h3>

                                        </div>
                                        <div class="card-block">
                                            <form action="" wire:submit.prevent="update">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <div class="j-unit col-md-4 col-md-offset-2">
                                                            <label class="" for="">Choix du rôles de l'utilisateur <p style="color: red"> *</p></label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select name="" id="" style="width: 60%" wire:modele="roles">
                                                                @foreach ($role as $value)
                                                                <option value="{{$value->id}}">{{$value->nom}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <span class="text-danger">@error('roles'){{$message}}@enderror</span>
                                                    </div>
                                                    @if ($isClient == true)
                                                    <div class="form-group row">
                                                        <div class="j-unit col-md-4 col-md-offset-2">
                                                            <label class="" for="">Nom de l'entreprise <p style="color: red"> *</p></label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="j-icon-right" for="name">
                                                                <i class="icofont icofont-ui-user"></i>
                                                            </label>
                                                            <input required type="text" wire:model="name" style="width: 60%" style="border: solid black 1px; width: 95%;">
                                                            <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-4 col-md-offset-2">
                                                            <label class="" for="">Numero IFU <p style="color: red"> *</p></label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="j-icon-right" for="name">
                                                                <i class="icofont icofont-envelope"></i>
                                                            </label>
                                                            <input required type="text" id="identifiant" name="identifiant" wire:model="identifiant" style="border: solid black 1px; width: 95%;">
                                                            <span class="text-danger">@error('identifiant'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-4 col-md-offset-2">
                                                            <label class="" for="">Raison sociale <p style="color: red"> *</p></label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="j-icon-right" for="name">
                                                                <i class="icofont icofont-envelope"></i>
                                                            </label>
                                                            <input required type="text" id="raisonsociale" name="raisonsociale" wire:model="raisonsociale" style="border: solid black 1px; width: 95%;">
                                                            <span class="text-danger">@error('raisonsociale'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="form-group row">
                                                        <div class="j-unit col-md-4 col-md-offset-2">
                                                            <label class="" for="">Nom <p style="color: red"> *</p></label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="j-icon-right" for="name">
                                                                <i class="icofont icofont-ui-user"></i>
                                                            </label>
                                                            <input required type="text" wire:model="nom" style="width: 60%">
                                                            <span class="text-danger">@error('nom'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-4 col-md-offset-2">
                                                            <label class="" for="">Prénom <p style="color: red"> *</p></label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="j-icon-right" for="prenom">
                                                                <i class="icofont icofont-envelope"></i>
                                                            </label>
                                                            <input required type="text" id="prenom" name="prenom" wire:model="prenom" style="width: 60%">
                                                            <span class="text-danger">@error('prenom'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-4 col-md-offset-2">
                                                            <label class="" for="">Poste <p style="color: red"> *</p></label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="j-icon-right" for="name">
                                                                <i class="icofont icofont-envelope"></i>
                                                            </label>
                                                            <input required type="text" id="poste" name="poste" wire:model="poste" style="width: 60%">
                                                            <span class="text-danger">@error('poste'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    @endif
                                                
                                                <div class="form-group row">
                                                    <div class="col-md-4 col-md-offset-2">
                                                        <label class="" for="">Adresse Email <p style="color: red"> *</p></label>
                                                    </div>
                                                        <div class="col-md-6">
                                                            <label class="j-icon-right" for="name">
                                                                <i class="icofont icofont-envelope"></i>
                                                            </label>
                                                            <input required type="email" id="email"  name="email" wire:model='email' style="width: 60%">
                                                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4 col-md-offset-2">
                                                        <label class="" for="">Adresse téléphonique <p style="color: red"> *</p></label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="j-icon-right" for="phone">
                                                            <i class="icofont icofont-phone"></i>
                                                        </label>
                                                        <input required type="text" id="phone" name="phone" wire:model='phone' style="width: 60%">
                                                        <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4 col-md-offset-2">
                                                        <label class="" for="">Siège <p style="color: red"> *</p></label>
                                                    </div>
                                                        <div class="col-md-6">
                                                            <label class="j-icon-right" for="">
                                                                <i class="icofont icofont-ui-user"></i>
                                                            </label>
                                                            <input required type="text" id="siege" name="siege" wire:model='siege' style="width: 60%">
                                                            <span class="text-danger">@error('siege'){{$message}}@enderror</span>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4" style="margin-left: 10%">
                                                         <button required type="submit" class="btn btn-primary m-b-0">Modifier</button>
                                                     </div>
                                                     <div class="col-sm-4">
                                                        <button required type="reset" class="btn btn-danger m-b-0">Annuler</button>
                                                     </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div> --}}
                                    @endif
                                    <!-- Key table events table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Liste des utilisateurs</h5>
                                            <span>Récapitulatif des informations de clients et des techniciens. Cliquez sur voir pour plus de détails.</span>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li><i class="feather icon-maximize full-card"></i></li>
                                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                                    <li><i class="feather icon-trash-2 close-card"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="events-key-table" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            {{-- <th >Nom</th>
                                                            <th >Prénom</th> --}}
                                                            <th >Siège</th>
                                                            <th >Email</th>
                                                            <th >Telephone</th>

                                                            {{-- <th >Entreprise</th>
                                                            <th >Raison Sociale</th>
                                                            <th >Numero Ifu</th>
                                                            <th >Status</th> --}}

                                                            <th >Poste</th>
                                                            {{-- <th >Disponibilité</th> --}}

                                                            <th >Role</th>
                                                            <th >Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($users as $value)
                                                            <tr class="text-center">

                                                                <th scope="row">{{$value->id}}</th>
                                                                {{-- <td class=""><span class="">{{$value->nom}}</span>
                                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                                </td>
                                                                <td class=""><span class="">{{$value->prenom}}</span>
                                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                                </td> --}}
                                                                <td class=""><span class="">{{$value->siege}}</span>
                                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                                </td>
                                                                <td class=""><span class="">{{$value->email}}</span>
                                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                                </td>
                                                                <td class=""><span class="">{{$value->tel}}</span>
                                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                                </td>
                                                                {{-- <td class=""><span class="">{{$value->name}}</span>
                                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                                </td>
                                                                <td class=""><span class="">{{$value->raisonSocial}}</span>
                                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                                </td>
                                                                <td class=""><span class="">{{$value->ifu}}</span>
                                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                                </td>
                                                                <td class=""><span class="">{{$value->status}}</span>
                                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                                </td> --}}
                                                                <td class=""><span class="">{{$value->poste}}</span>
                                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                                </td>
                                                                {{-- <td class=""><span class="">{{$value->disponibilite}}</span>
                                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                                </td> --}}
                                                                <td class=""><span class="">{{$value->role}}</span>
                                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                                </td>
                                                                <td class="row">
                                                                    <button wire:click="edit({{$value->id}})" class="btn btn-primary col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 outer-ellipsis"><i class="feather icon-edit-1"></i></button>
                                                                    <button wire:click="destroy({{$value->id}})" class="btn btn-danger col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 outer-ellipsis"><i class="icofont icofont-trash" color="red"></i></button>
                                                                    <button wire:click="view({{$value->id}})" data-toggle="modal" data-target="#Vmodal" class=" btn btn-secondary col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 outer-ellipsis" data-toggle="modal" data-backdrop="false" data-target="#Vmodal"><i class="icofont icofont-eye-alt" color="red"></i></button>
                                                                </td>
                                                            </tr>
                                                        @endforeach       
                                                    </tbody>
                                                    
                                                    {{-- <tfoot>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </tfoot> --}}
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
                                                                                    <th data-breakpoints="xs"><span class="">{{ $role[0]->nom }}</span></th>
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
                                    <!-- Key table events table end -->
                                    {{-- <div class="table-responsive dt-responsive">
                                    <table id="demo-foo-filtering" class="table table-striped" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th data-breakpoints="xs">Nom</th>
                                                <th data-breakpoints="xs">Prénom</th>
                                                <th data-breakpoints="xs">Siège</th>
                                                <th data-breakpoints="xs">Email</th>
                                                <th data-breakpoints="xs">Telephone</th>

                                                <th data-breakpoints="xs">Entreprise</th>
                                                <th data-breakpoints="xs">Raison Sociale</th>
                                                <th data-breakpoints="xs">Numero Ifu</th>
                                                <th data-breakpoints="xs">Status</th>

                                                <th data-breakpoints="xs">Poste</th>
                                                <th data-breakpoints="xs">Disponibilité</th>

                                                <th data-breakpoints="xs">Role</th>
                                                <th data-breakpoints="xs">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $value)
                                            <tr class="text-center">

                                                <th scope="row">{{$value->id}}</th>
                                                <td class=""><span class="">{{$value->nom}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->prenom}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->siege}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->email}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->tel}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->name}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->raisonSocial}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->ifu}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->status}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->poste}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->disponibilite}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->role}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" required type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class="row">
                                                    <button wire:click="edit({{$value->id}})" class="btn btn-primary col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 col-md-offset-4 outer-ellipsis"><i class="feather icon-edit-1"></i></button>
                                                    {{-- <button wire:click="view({{$value->id}})" class="btn btn-secondary col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 col-md-offset-4 outer-ellipsis"><i class="icofont icofont-eye-alt"></i></button> -}}
                                                    <button wire:click="destroy({{$value->id}})" class="btn btn-danger col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 col-md-offset-4 outer-ellipsis"><i class="icofont icofont-trash" color="red"></i></button>


                                                </td>
                                                @endforeach

                                            </tr>

                                        </tbody>
                                    </table>
                                    </div> --}}
                                    <div class="row">
                                        <div></div>
                                    </div>
                                    {{-- <button onclick="Livewire.emit('openModal', 'hello-world')">Open Modal</button> --}}

                                {{-- </div> --}}
                            </div>
                    </div>
                    <!-- Design Wizard card end -->
                </div>
            </div>
        </div>
        <!-- Page body end -->
        
        
    </div>
    
    @push('scripts')
        {{-- <script>
            require('./vendor/livewire-ui/modal');
            require('../../vendor/livewire-ui/modal/resources/js/modal');
        </script> --}}
        <script>
            //  $(() => {
            //     $('a').click(e => {
            //     let that = e.currentTarget;
            //     e.preventDefault();
            //     $.ajax({
            //         method: $(that).attr('method'),
            //         url: $(that).attr('href'),
            //         data: $(that).serialize()
            //     })
            //     .done((data) => {
            //         $('#detail').html(data);
            //         $('.modal').modal('show');
            //     })
            //     .fail((data) => {
            //         console.log(data);
            //     });
            //     });
            // });
            //  $(document).ready(function () {
            //      $(".openmodal").click(function(){
            //          $('#Vmodal').modal('show');
            //      });
            //  });
        </script>
    @endpush
</div>

