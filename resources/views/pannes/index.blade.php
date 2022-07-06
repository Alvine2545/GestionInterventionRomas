@extends('index')
@section('contenu')
<style>
    .uper {
      margin-top: 40px;
    }
  </style>
  
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
  
    <table class="table table-striped">
      <form action="{{ route('pannes/liste')}}" method="post">
        @csrf
        @method('GET')
      </form>
      <div class="card">
        <div class="card-header">
            <h5>Liste des pannes</h5>
  
        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="example-2">
                    <tbody>
                      
                        @foreach($pannes as $value)
                        
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->description}}</td>
                            <td><a href="{{route('pannes/{id}/edit')}}" class="btn btn-primary">Modifier</a></td>
                            <td>
                                <form action="{{route('pannes/destroy/{id}')}}" method="post">
                                  @csrf
                                  @method('GET')
                                  <button class="btn btn-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   
@endsection
