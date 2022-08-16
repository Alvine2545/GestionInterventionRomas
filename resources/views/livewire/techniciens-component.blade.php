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
                        <h4>Gestion des techniciens</h4>
                        <span>Enregistrement et liste des techniciens</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{url('admin/dashboard')}}"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Techniciens</a>
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
                                    <!-- Key table events table start -->
                                    <div class="card" >
                                        @if ($nouveau)
                                            <form wire:submit.prevent='store' id="form" style="width: 80%; margin-left: 10%">
                                                <div class="">
                                                    <div class="card-header text-uppercase text-facebook text-center text-underline">
                                                        <h4>Ajouter un nouveau technicien</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-md-offset-2">
                                                                <label class="" for="">Nom <span style="color: red"> *</span></label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="input-group input-group-primary">
                                                                    <span class="input-group-addon">
                                                                        <i class="icofont icofont-user"></i>
                                                                    </span>
                                                                    <input required type="text" class="form-control" id="name" wire:model="nom" style="border: solid black 1px; width: 95%;">
                                                                    <span class="text-danger">@error('nom'){{$message}}@enderror</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-md-offset-2">
                                                                <label class="" for="">Prénom <span style="color: red"> *</span></label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="input-group input-group-primary">
                                                                    <span class="input-group-addon">
                                                                        <i class="icofont icofont-user"></i>
                                                                    </span>
                                                                    <input class="form-control" required type="text" name="surname" wire:model='prenom' style="border: solid black 1px; width: 92%;">
                                                                    <span class="text-danger">@error('prenom'){{$message}}@enderror</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-md-offset-2">
                                                                <label class="" for="">Adresse Email <span style="color: red"> *</span></label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="input-group input-group-primary">
                                                                    <span class="input-group-addon">
                                                                        <i class="icofont icofont-email"></i>
                                                                    </span>
                                                                    <input required type="email" class="form-control" name="email" wire:model='email' style="border: solid black 1px; width: 92%;">
                                                                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-md-offset-2">
                                                                <label class="" for="">Adresse téléphonique <span style="color: red"> *</span></label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="input-group input-group-primary">
                                                                    <span class="input-group-addon">
                                                                        <i class="icofont icofont-telephone"></i>
                                                                    </span>
                                                                    <input required type="text" class="form-control" name="phone" wire:model='phone' style="border: solid black 1px; width: 95%;">
                                                                    <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-md-offset-2">
                                                                <label class="" for="">Siège <span style="color: red"> *</span></label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="input-group input-group-primary">
                                                                    <span class="input-group-addon">
                                                                        <i class="icofont icofont-hotel"></i>
                                                                    </span>
                                                                    <input required type="text" id="" wire:model='siege' name="siege" style="border: solid black 1px; width: 95%;">
                                                                    <span class="text-danger">@error('siege'){{$message}}@enderror</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="j-unit col-md-4 col-md-offset-2">
                                                                <label class="" for="">Poste <span style="color: red"> *</span></label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="input-group input-group-primary">
                                                                    <span class="input-group-addon">
                                                                        <i class="icofont icofont-worker"></i>
                                                                    </span>
                                                                    <input required type="text" id="poste" wire:model="poste" name="poste" style="border: solid black 1px; width: 95%;">
                                                                    <span class="text-danger">@error('poste'){{$message}}@enderror</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <button type="reset" class="btn btn-danger col-md-2" style="margin-right: 60%" wire:click="">Annuler</button>
                                                        <button type="submit" class="btn btn-primarys col-md-2">Enregistrer</button>
                                                    </div> 
                                                </div>                                               
                                            </form><br>
                                        @endif
                                        @if ($liste)
                                            <div class="card-header">
                                                <h5>Liste des techniciens</h5>
                                                <span>Récapitulatif des informations de techniciens. Cliquez sur voir pour plus de détails.</span>
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
                                                    <table id="events-key-table" class="table table-striped table-bordered nowrap" wire:ignore>
                                                        <thead>
                                                            <tr>
                                                                <th >Nom Prénoms</th>
                                                                <th >Poste</th>
                                                                <th >Telephone</th>
                                                                <th >Siège</th>
                                                                <th >Email</th>
                                                                <th >Disponibilité</th>
                                                                <th >Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($users as $value)
                                                                <tr class="text-center">
                                                                    <td class=""><span class="">{{$value->nom}} {{$value->prenom}}</span>
                                                                        <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                                    </td>
                                                                    <td class=""><span class="">{{$value->poste}}</span>
                                                                        <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                                    </td>
                                                                    <td class=""><span class="">{{$value->tel}}</span>
                                                                        <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                                    </td>
                                                                    <td class=""><span class="">{{$value->siege}}</span>
                                                                        <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                                    </td>
                                                                    <td class=""><span class="">{{$value->email}}</span>
                                                                        <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                                    </td>
                                                                    
                                                                    @if ($value->disponibilite == true)
                                                                        <td class=""><span class="">Disponible</span>
                                                                            <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                                        </td>
                                                                    @else
                                                                        <td class=""><span class="">Indisponible</span>
                                                                            <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                                        </td>
                                                                    @endif
                                                                    <td class="row">
                                                                        <button style="margin-left: 2%" wire:click="edit({{$value->id}})" class="btn btn-primary outer-ellipsis col-md-2"><i class="feather icon-edit-1"></i></button>
                                                                        <button onclick="delet({{$value->id}})" class="btn btn-danger outer-ellipsis col-md-2"><i class="icofont icofont-trash" color="red"></i></button>
                                                                        <button onclick="vue({{$value->id}})" class="openmodal btn btn-secondary outer-ellipsis col-md-2" data-toggle="modal" data-backdrop="false" data-target="#Vmodal"><i class="icofont icofont-eye-alt" color="red"></i></button>

                                                                    </td>
                                                                </tr>
                                                                
                                                            @endforeach
                                                            
                                                                
                                                                
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($updateForm)
                                            <div class="">
                                                <div class="card-header">
                                                    <h5>Mise à jour des informations</h5>
                                                    <span>Modifier les informations du technicien</span>

                                                </div>
                                                <div class="card-block">
                                                    <form id="main" action="" wire:submit.prevent="update" novalidate="">
                                                        
                                                        <div class="card-body">
                                                            <div class="form-group row">
                                                                <div class="col-md-4 col-md-offset-2">
                                                                    <label class="" for="">Nom <span style="color: red"> *</span></label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="input-group input-group-primary">
                                                                        <span class="input-group-addon">
                                                                            <i class="icofont icofont-user"></i>
                                                                        </span>
                                                                        <input value="{{$nom}}" required type="text" class="form-control" id="name" wire:model="nom" style="border: solid black 1px; width: 95%;">
                                                                        <span class="text-danger">@error('nom'){{$message}}@enderror</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4 col-md-offset-2">
                                                                    <label class="" for="">Prénom <span style="color: red"> *</span></label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="input-group input-group-primary">
                                                                        <span class="input-group-addon">
                                                                            <i class="icofont icofont-user"></i>
                                                                        </span>
                                                                        <input value="{{$prenom}}" class="form-control" required type="text" name="surname" wire:model='prenom' style="border: solid black 1px; width: 92%;">
                                                                        <span class="text-danger">@error('prenom'){{$message}}@enderror</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4 col-md-offset-2">
                                                                    <label class="" for="">Adresse Email <span style="color: red"> *</span></label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="input-group input-group-primary">
                                                                        <span class="input-group-addon">
                                                                            <i class="icofont icofont-email"></i>
                                                                        </span>
                                                                        <input value="{{$email}}" required type="email" class="form-control" name="email" wire:model='email' style="border: solid black 1px; width: 92%;">
                                                                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4 col-md-offset-2">
                                                                    <label class="" for="">Adresse téléphonique <span style="color: red"> *</span></label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="input-group input-group-primary">
                                                                        <span class="input-group-addon">
                                                                            <i class="icofont icofont-telephone"></i>
                                                                        </span>
                                                                        <input required value="{{$phone}}" type="text" class="form-control" name="phone" wire:model='phone' style="border: solid black 1px; width: 95%;">
                                                                        <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4 col-md-offset-2">
                                                                    <label class="" for="">Siège <span style="color: red"> *</span></label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="input-group input-group-primary">
                                                                        <span class="input-group-addon">
                                                                            <i class="icofont icofont-hotel"></i>
                                                                        </span>
                                                                        <input value="{{$siege}}" required type="text" id="" wire:model='siege' name="siege" style="border: solid black 1px; width: 95%;">
                                                                        <span class="text-danger">@error('siege'){{$message}}@enderror</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="j-unit col-md-4 col-md-offset-2">
                                                                    <label class="" for="">Poste <span style="color: red"> *</span></label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="input-group input-group-primary">
                                                                        <span class="input-group-addon">
                                                                            <i class="icofont icofont-worker"></i>
                                                                        </span>
                                                                        <input value="{{$poste}}" required type="text" id="poste" wire:model="poste" name="poste" style="border: solid black 1px; width: 95%;">
                                                                        <span class="text-danger">@error('poste'){{$message}}@enderror</span>
                                                                    </div>
                                                                </div>
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
    @if ($viewUser == true)
    <div class="modal fade" id="Vmodal" tabindex="-1" role="dialog" aria-labelledby="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Détails </h3>
                    <button required type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Poste</th>
                                <th>Siège</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                {{-- <th>Rôle</th> --}}
                                <th>Disponibilité</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">4</th>
                                <td>{{$nom}}</td>
                                <td>{{$prenom}}</td>
                                <td>{{$poste}}</td>
                                <td>{{$siege}}</td>
                                <td>{{$email}}</td>
                                <td>{{$phone}}</td>
                                {{-- <td>{{$role}}</td> --}}
                                <td>4</td>
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
    
    @push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function vue(id){
                @this.view(id);
                var mode = document.getElementById('Vmodal');
                
                mode.show();
            }
             function delet(id){
                
                 const swalWithBootstrapButtons = Swal.mixin({
                 customClass: {
                     confirmButton: 'btn btn-success',
                     cancelButton: 'btn btn-danger'
                 },
                 buttonsStyling: false
                 })

                 swalWithBootstrapButtons.fire({
                 title: 'Est-vous sûr de vouloir supprimer cet technicien?',
                 text: "Cette action est irréversible!",
                 icon: 'warning',
                 showCancelButton: true,
                 confirmButtonText: 'Oui',
                 cancelButtonText: 'Non',
                 reverseButtons: true
                 }).then((result) => {
                 if (result.isConfirmed) {
                     @this.destroy(id);
                     swalWithBootstrapButtons.fire(
                     'Suppression',
                     'Supprimé avec succes.',
                     'success'
                     )
                     @this.render();
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

