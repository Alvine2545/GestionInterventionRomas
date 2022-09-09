@push('scripts')

@endpush
<div class="page-wrapper">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Interventions</h4>
                        <span>Enregistrement d'une intervention réalisée chez un client</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Intervention</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @if ($nouveau)
        <div class="card">
            <div class="card-header">
                <h5>Ajouter une intervention</h5>
                <span></span>
                <span style="margin-left: 85%;"><button class="btn btn-primary btn-anim " wire:click="view">Voire  la liste</button></span>
            </div>
            <div class="card-block">
                <form action="" wire:submit.prevent="store" class="">
                    <div class="row">
                        <div class="col-sm-12 col-xl-4 m-b-30" wire:ignore>
                            <h4 class="sub-title">Planning</h4>
                            {{-- <p>Choisissez un planning
                            </p> --}}
                            <select class=" col-sm-12" style="width:70%;" wire:model="plannification" wire:change="click">
                                <option value="">Choisissez une plannification</option>
                                @foreach ($plannifications as $planing)
                                    <option value="{{$planing->id}}">{{$planing->title}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">@error('plannifications'){{$message}}@enderror</span>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-4 m-b-30">
                            <h4 class="sub-title">Type de l'intervention</h4>
                            <div class="form-radio">
                                @if (count($typeIntervention)>0)
                                    @foreach ($typeIntervention as $value)
                                    <div class="radio radiofill radio-inverse radio-inline">
                                        <label>
                                            <input type="radio" name="radio" value="{{$value->id}}" wire:model="type">
                                            <i class="helper"></i>{{$value->nom}}
                                        </label>
                                    </div>
                                    @endforeach    
                                @else
                                <div class="radio radiofill radio-inverse radio-inline">
                                    <label>
                                        Aucun type disponible. <a href="{{url('admin/typeintervention/create')}}">Ajouter un!</a>
                                    </label>
                                </div>
                                @endif
                                <span class="text-danger">@error('typeIntervention'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-4 m-b-30">
                            <h4 class="sub-title">Date intervention</h4>
                            <div class="form">
                                <input class="form-control" type="date" wire:model="dateI">
                            </div>
                            <span class="text-danger">@error('date'){{$message}}@enderror</span>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-6 m-b-30">
                            <h4 class="sub-title">Déroulement</h4>
                            <div class="form">
                                <textarea class="form-control " wire:model="detail" rows="6" placeholder="Détail de l'intervention"></textarea>
                            </div>
                            <span class="text-danger">@error('detail'){{$message}}@enderror</span>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-6 m-b-30">
                            <h4 class="sub-title">Solutions</h4>
                            <div class="form">
                                <textarea class="form-control " wire:model="solution" rows="6" placeholder="Solution pour régler la panne"></textarea>
                            </div>
                            <span class="text-danger">@error('solution'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4 m-b-30">
                        <h4 class="sub-title">Lieu intervention</h4>
                        <div class="form">
                            <input class="form-control" type="text" wire:model="lieu">
                        </div>
                        <span class="text-danger">@error('lieu'){{$message}}@enderror</span>
                    </div>
                    @if ($plannification != null)
                        <h4 class="sub-title">Pannes résolues</h4>
                        @foreach ($planings->pannes as $pan)
                            <div class="form-radio m-b-30">
                                <div class="checkbox-fade fade-in-info">
                                    <label>
                                        <input type="checkbox" value="{{$pan->id}}" wire:model="pannes" wire:ignores>
                                        <span class="cr">
                                            <i class="cr-icon icofont icofont-ui-check txt-info"></i>
                                        </span>
                                        <span> {{$pan->nom}}</span>
                                    </label>
                                    <span class="text-danger">@error('pannes'){{$message}}@enderror</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row align-content-center">
                        <div class="col-md-6 col-sm-2 col-md-offset-2">
                            <button class="btn btn-primary" type="submit">Enregistrer</button>
                        </div>
                        <div class="col-md-6 col-sm-2">
                            <button class="btn btn-danger" type="reset">Annuler</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endif
    @if ($liste)
        <div class="card-header-right">
            <span style="margin-left: 90%;"><button class="btn btn-primary" style="margin-bottom: 2%;" wire:click="new">Ajouter</button></span>
        </div>
        <div class="card">
            <div class="card-header">
                <h5>Liste des interventions</h5>
                <span>Récapitulatif des interventions réalisée chez les clients. Cliquez sur voir pour plus de détails.</span>
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
                                <th >Code</th>
                                <th >Date</th>
                                <th >Lieu</th>
                                <th >Appréciation</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($interventions as $value)
                                <tr class="text-center">

                                    <th scope="row">{{$value->id}}</th>
                                    <td class=""><span class="">{{$value->code}}</span>
                                    </td>
                                    <td class=""><span class="">{{$value->date}}</span>
                                    </td>
                                    <td class=""><span class="">{{$value->lieu}}</span>
                                    </td>
                                    @if ($value->appreciation == null)
                                        <td class=""><span class="">Aucune appréciation n'a été donnée</span>
                                        </td>
                                    @else
                                        <td class=""><span class="">{{$value->appreciation}}</span>
                                        </td>
                                    @endif
                                    <td class="row">
                                        <button wire:click="edit({{$value->id}})" class="btn btn-primary col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 outer-ellipsis"><i class="feather icon-edit-1"></i></button>
                                        <button wire:click="destroy({{$value->id}})" class="btn btn-danger col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 outer-ellipsis"><i class="icofont icofont-trash" color="red"></i></button>
                                        <button wire:click="detail({{$value->id}})" class=" btn btn-secondary col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 outer-ellipsis" data-toggle="modal" data-backdrop="false" data-target="#Vmodal"><i class="icofont icofont-eye-alt" color="red"></i></button>
                                    </td>
                                </tr>
                            @endforeach       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
    @if ($details)
        @include('livewire.interventionDetail');
    @endif
</div>
