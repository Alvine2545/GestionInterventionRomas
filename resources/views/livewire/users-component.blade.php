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
                        <h4>Gestion des clients</h4>
                        <span>Enregistrement et liste des clients</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{url('admin/dashboard')}}"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Clients</a>
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
                                                            <input type="text" wire:model="name" style="width: 60%" style="border: solid black 1px; width: 95%;">
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
                                                            <input type="text" id="identifiant" name="identifiant" wire:model="identifiant" style="border: solid black 1px; width: 95%;">
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
                                                            <input type="text" id="raisonsociale" name="raisonsociale" wire:model="raisonsociale" style="border: solid black 1px; width: 95%;">
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
                                                            <input type="text" wire:model="nom" style="width: 60%">
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
                                                            <input type="text" id="prenom" name="prenom" wire:model="prenom" style="width: 60%">
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
                                                            <input type="text" id="poste" name="poste" wire:model="poste" style="width: 60%">
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
                                                            <input type="email" id="email"  name="email" wire:model='email' style="width: 60%">
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
                                                        <input type="text" id="phone" name="phone" wire:model='phone' style="width: 60%">
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
                                                            <input type="text" id="siege" name="siege" wire:model='siege' style="width: 60%">
                                                            <span class="text-danger">@error('siege'){{$message}}@enderror</span>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4" style="margin-left: 10%">
                                                         <button type="submit" class="btn btn-primary m-b-0">Modifier</button>
                                                     </div>
                                                     <div class="col-sm-4">
                                                        <button type="reset" class="btn btn-danger m-b-0">Annuler</button>
                                                     </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div> --}}
                                    {{-- @endif --}}
                                    <!-- Key table events table start -->
                                    <div class="card">
                                        
                                        @if ($nouveau)
                                            <form wire:submit.prevent='store' id="form">
                                                <div class="">
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <div class="j-unit col-md-4 col-md-offset-2">
                                                                <label class="" for="">Nom de l'entreprise <p style="color: red;"> *</p></label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="j-icon-right" for="name">
                                                                    <i class="icofont icofont-ui-user"></i>
                                                                </label>
                                                                <input type="text" id="name" name="name" wire:model="name" style="border: solid black 1px; width: 95%;" >
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
                                                                <input type="text" id="identifiant" name="identifiant" wire:model="identifiant" style="border: solid black 1px; width: 92%;">
                                                                <span class="text-danger">@error('identifiant'){{$message}}@enderror</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-md-offset-2">
                                                                <label class="" for="">Raison sociale <p style="color: red;"> *</p></label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="j-icon-right" for="name">
                                                                    <i class="icofont icofont-envelope"></i>
                                                                </label>
                                                                <input type="text" id="raisonsociale" name="raisonsociale" wire:model="raisonsociale" style="border: solid black 1px; width: 92%;">
                                                                <span class="text-danger">@error('raisonsociale'){{$message}}@enderror</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-md-offset-2">
                                                                <label class="" for="">Adresse Email <p style="color: red"> *</p></label>
                                                            </div>
                                                                <div class="col-md-6">
                                                                    <label class="j-icon-right" for="name">
                                                                        <i class="icofont icofont-envelope"></i>
                                                                    </label>
                                                                    <input type="email" id="email"  name="email" wire:model='email' style="border: solid black 1px; width: 92%;">
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
                                                                <input type="text" id="phone" name="phone" wire:model='phone' style="border: solid black 1px; width: 95%;">
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
                                                                    <input type="text" id="siege" name="siege" wire:model='siege' style="border: solid black 1px; width: 95%;">
                                                                    <span class="text-danger">@error('siege'){{$message}}@enderror</span>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                    <button type="reset" class="btn btn-sm btn-secondary col-md-4 col-md-offset-8" wire:click="decreaseSteep()">Précédent</button>
                                                    <button type="submit" class="btn btn-sm btn-primary">Enregistrer</button>

                                                </div>
                                            </form><br>
                                        @endif
                                        @if ($liste)
                                            <div class="card-header">
                                                <h5>Liste des clients</h5>
                                                <span>Récapitulatif des informations de clients. Cliquez sur voir pour plus de détails.</span>
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
                                                                <th >Entreprise</th>
                                                                <th >Raison Sociale</th>
                                                                <th >Numero Ifu</th>
                                                                <th >Siège</th>
                                                                <th >Email</th>
                                                                <th >Telephone</th>
                                                                <th >Status</th>
                                                                <th >Role</th>
                                                                <th >Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($users as $value)
                                                                <tr class="text-center">
                                                                    <td class=""><span class="">{{$value->tel}}</span>
                                                                        <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                                    </td>
                                                                    <td class=""><span class="">{{$value->name}}</span>
                                                                        <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                                    </td>
                                                                    <td class=""><span class="">{{$value->raisonSocial}}</span>
                                                                        <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                                    </td>
                                                                    <td class=""><span class="">{{$value->ifu}}</span>
                                                                        <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                                    </td>
                                                                    <td class=""><span class="">{{$value->siege}}</span>
                                                                        <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                                    </td>
                                                                    <td class=""><span class="">{{$value->email}}</span>
                                                                        <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                                    </td>
                                                                    @if ($value->status == true)
                                                                        <td class=""><span class="">Activé</span>
                                                                            <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                                        </td>
                                                                    @else
                                                                        <td class=""><span class=""> <button class="btn btn-primary" onclick="active({{$value->id}})">Désactivé </button> </span>
                                                                            <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                                        </td>
                                                                    @endif
                                                                    
                                                                    <td class=""><span class="">{{$value->role}}</span>
                                                                        <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                                    </td>
                                                                    <td class="row">
                                                                        <button style="margin-left: 4%" wire:click="edit({{$value->id}})" class="btn btn-primary col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 col-md-offset-4 outer-ellipsis"><i class="feather icon-edit-1"></i></button>
                                                                        <button wire:click="destroy({{$value->id}})" class="btn btn-danger col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 col-md-offset-4 outer-ellipsis"><i class="icofont icofont-trash" color="red"></i></button>
                                                                        <button wire:click="view({{$value->id}})" class="openmodal btn btn-secondary col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 col-md-offset-4 outer-ellipsis" data-toggle="modal" data-backdrop="false" data-target="#Vmodal"><i class="icofont icofont-eye-alt" color="red"></i></button>

                                                                    </td>
                                                                </tr>
                                                                
                                                            @endforeach
                                                            
                                                                
                                                                
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div></div>
                                    </div>

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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function active(id){
                
                const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                title: 'Est-vous sûr d\'activer ce compte?',
                text: "Cette action est irréversible!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Oui',
                cancelButtonText: 'Non',
                reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    @this.activate(id);
                    swalWithBootstrapButtons.fire(
                    'Activation',
                    'Compte activé avec succes.',
                    'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                    'QUITTER',
                    '',
                    'error'
                    )
                }
                })
            }
        </script>
    @endpush

</div>

