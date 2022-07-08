{{dd($data->installations())}}
<div class="card-header">
    <h5>Filtre</h5>
    <span>Rechercher dans la table.</span>

</div>
<div class="card-block">
    <table id="demo-foo-filtering" class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th data-breakpoints="xs">Nom de l'entraprise</th>
                <th data-breakpoints="xs">Raison sociale</th>
                <th data-breakpoints="xs">Siège</th>
                <th data-breakpoints="xs">Adresse Téléphonique</th>
                <th data-breakpoints="xs">Mail</th>
                <th data-breakpoints="xs">Action</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                @foreach ($clients as $client)
                <th scope="row">{{$client->id}}</th>
                <td class=""><span class="">{{$client->raisonSocial}}</span>
                    <!--input class="tabledit-input form-control input-sm" type="text" name="First" value="Mark"-->
                </td> 
                <td class="">
                    <form method="POST" action="{{route('client.destroy', $client->id)}}">
                        @csrf
                        @method('DELETE')
                        
                        <span class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 outer-ellipsis"><button type="submit" ><i class="icofont icofont-trash" color="red"></i></button>
                        </span>
                    </form>
                    <form method="post" action="{{url('client/'.$client->id)}}">
                        @method('GET')
                        <span class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12 outer-ellipsis"><button type="submit" ><i class="feather icon-edit-1"></i></button>
                        </span>
                    </form>
                    
                </td>
                @endforeach
               
            </tr>
           
        </tbody>
    </table>
</div>