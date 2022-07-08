@extends('index')
@section('contenu')
<style>
    .uper {
      margin-top: 40px;
    }
    html {
  height: 100%;
}
body {
  min-height: 100%;
  margin: 0;
  padding: 0;
  position: relative;
}
footer {position: absolute; bottom: 0; left: 0; right: 0}
</style>
  
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
  
    <table class="table table-striped">
     
      <div class="card">
        <div class="card-header">
            <h5>Liste des pannes</h5>
        </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="example-2">
                    <tbody>
                      <?php $i = 1; ?>
                        @foreach($pannes as $value)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$value->description}}</td>
                            <td>
                              <form method="POST" action="{{url('pannes/edit',$value->id)}}">
                                @csrf
                                @method('GET')
                                <button class="btn btn-primary" type="submit">Modifier<i class="icofont icofont-trash" color="red"></i></button>
                            </form>
                          </td>
                            <td>
                                <form action="{{url('pannes/destroy',$value->id)}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
   
@endsection
