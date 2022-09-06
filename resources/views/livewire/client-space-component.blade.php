@section('contenu')
<div class="tab-pane" id="binfo" role="tabpanel" style="margin-top: 5%;">
    <!-- info card start -->
    <div class="">
        <div class="card-header">
            <h3 class="card-header-text">Mes pannes </h3>
        </div>
        <div class="card-block">
            <div class="row">
                @foreach ($pannes as $panne)
                    <div class="card user-card col-md-6 b-l-warning business-info services">
                        <div class="card-header">
                            <h5>{{$panne->nom}}</h5>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                    <li><i class="feather icon-trash-2 close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="task-list-table">
                                <p class="task-due"><strong> Date : </strong><strong class="label label-info">{{$panne->created_at}}</strong></p>
                            </div>
                            <div class="task-board m-0">
                               @foreach ($panne->plannings as $item)
                                {{-- @foreach ($item as $value) --}}
                                    @if ($item->pivot->estTraiter == true)
                                        <p class="task-due"><strong> Status : </strong><strong class="label label-success">Déja traiter</strong></p>
                                    @else
                                        <p class="task-due"><strong> Status : </strong><strong class="label label-danger">En cours</strong></p>                                        
                                    @endif
                                {{-- @endforeach --}}
                               @endforeach                                
                            </div>
                            <!-- end of pull-right class -->
                        </div>
                        <div class="card-block">
                            <div class="top-cap-text">
                                <p>{{$panne->description}}</p>
                            </div>
                            @foreach ($panne->produitinstalle() as $item)
                            {{dd("bvc")}}
                            {{dd("tyuk_ ".$item->id)}}
                                @if ($item->pivot->estTraiter == true)
                                    <img class="img-fluid" src="{{asset('files\assets\images\user-card\inverse-img2.jpg')}}" alt="img-inverse">
                                    <p class="task-due"><strong> Status : </strong><strong class="label label-success">Déja traiter</strong></p>
                                @endif
                           @endforeach  
                        </div>
                    </div>    
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- info card end -->
</div>
@endsection
