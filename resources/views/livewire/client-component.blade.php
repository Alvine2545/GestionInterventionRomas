<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!--h4>Ajouter une installation</h4>
                        <span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit</span-->
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
                            <button wire:click="new" class="btn btn-primary" style="margin-left: 90%">Nouveau</button>

                            <div class="card-block">
                                {{-- <div class="j-wrapper j-wrapper-640"> --}}
                                    {{-- Boutton déroulant --}}
                                    
                                        
                                    @if ($nouveau)
                                        <form wire:submit.prevent='store' id="form">
                                            {{-- step 1 --}}
                                            @if ($currentSteep == 1)
                                        
                                            <div class="setp-one">
                                                <div class="card">
                                                    <div class="card-header text-white" style="background-color: slategrey"> <h4> Step 1/2 - Type d'utilisateur</h4></div>
                                                    <div class="card-body">
                                                        <div class="frameworks d-flex flex-column align-items-left mt-2">
                                                                <div class="form-group">
                                                                    <label class="" for="" style="text-align: center">Choix du rôles de l'utilisateur</label>
                                                                    @foreach ($role as $value)
                                                                    <div class="">
                                                                        <label>
                                                                            <input type="checkbox" id="" value="{{$value->id}}" wire:model="roles" class="" name="roles">
                                                                            
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
                                        
                                                <div class="card">
                                                    <div class="card-header bg-secondary text-white"> <h4> Step 2/2 - Informations personnelles</h4></div>
                                                    <div>
                                                        @if ($choix == 1)
                                                                {{-- Client form --}}
                                                        <div class="card-body">
                                                            <div class="form-group row">
                                                                <div class="j-unit col-md-4 col-md-offset-2">
                                                                    <label class="" for="">Nom de l'entreprise <p style="color: red"> *</p></label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="j-icon-right" for="name">
                                                                        <i class="icofont icofont-ui-user"></i>
                                                                    </label>
                                                                    <input type="text" id="name" name="name" wire:model="name">
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
                                                                    <input type="text" id="identifiant" name="identifiant" wire:model="identifiant">
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
                                                                    <input type="text" id="raisonsociale" name="raisonsociale" wire:model="raisonsociale">
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
                                                                        <input type="email" id="email"  name="email" wire:model='email'>
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
                                                                    <input type="text" id="phone" name="phone" wire:model='phone'>
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
                                                                    <div class="j-unit col-md-4 col-md-offset-2">
                                                                        <label class="" for="">Nom <p style="color: red"> *</p></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="j-icon-right" for="nom">
                                                                            <i class="icofont icofont-ui-user"></i>
                                                                        </label>
                                                                        <input type="text" id="name" wire:model="nom">
                                                                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-md-offset-2">
                                                                        <label class="" for="">Prénom <p style="color: red"> *</p></label>
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
                                                                        <label class="" for="">Adresse Email <p style="color: red"> *</p></label>
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
                                                                        <label class="" for="">Adresse téléphonique <p style="color: red"> *</p></label>
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
                                                                        <label class="" for="">Siège <p style="color: red"> *</p></label>
                                                                    </div>
                                                                        <div class="col-md-6">
                                                                            <label class="j-icon-right" for="">
                                                                                <i class="icofont icofont-ui-user"></i>
                                                                            </label>
                                                                            <input type="text" id="" wire:model='siege' name="siege">
                                                                            <span class="text-danger">@error('siege'){{$message}}@enderror</span>
                                                                        </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="j-unit col-md-4 col-md-offset-2">
                                                                        <label class="" for="">Poste <p style="color: red"> *</p></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="j-icon-right" for="poste">
                                                                            <i class="icofont icofont-ui-user"></i>
                                                                        </label>
                                                                        <input type="text" id="poste" wire:model="poste" name="poste">
                                                                        <span class="text-danger">@error('poste'){{$message}}@enderror</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if ($choix == 4)
                                                            {{-- Responsable form --}}
                                                            <div class="card-body">
                                                                <div class="form-group row">
                                                                    <div class="j-unit col-md-4 col-md-offset-2">
                                                                        <label class="" for="">Nom <p style="color: red"> *</p></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="j-icon-right" for="nom">
                                                                            <i class="icofont icofont-ui-user"></i>
                                                                        </label>
                                                                        <input type="text" id="name" wire:model="nom">
                                                                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-md-offset-2">
                                                                        <label class="" for="">Prénom <p style="color: red"> *</p></label>
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
                                                                        <label class="" for="">Adresse Email <p style="color: red"> *</p></label>
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
                                                                        <label class="" for="">Adresse téléphonique <p style="color: red"> *</p></label>
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
                                                                        <label class="" for="">Siège <p style="color: red"> *</p></label>
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
                                        </form><br>
                                        @endif
                                    <div class="table-responsive dt-responsive">
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
                                                    <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->prenom}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->siege}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->email}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                </td>
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
                                                <td class=""><span class="">{{$value->status}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->poste}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->disponibilite}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                </td>
                                                <td class=""><span class="">{{$value->role}}</span>
                                                    <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                                                </td> 
                                                <td class="row">
                                                    <form class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 col-md-offset-4 outer-ellipsis" method="POST" action="{{url('admin/typedevis/destroy', $value->id)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        
                                                        <span class=""><button type="submit" class="btn btn-primary"><i class="icofont icofont-trash" color="red"></i></button>
                                                        </span>
                                                    </form>
                                                    <form class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 col-md-offset-4 outer-ellipsis" method="post" action="{{url('admin/typedevis/edit',$value->id)}}">
                                                        @method('GET')
                                                        <span class=""><button type="submit" class="btn btn-danger"><i class="feather icon-edit-1"></i></button>
                                                        </span>
                                                    </form>
                                                    
                                                </td>
                                                @endforeach
                                               
                                            </tr>
                                           
                                        </tbody>
                                    </table>
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
</div>

