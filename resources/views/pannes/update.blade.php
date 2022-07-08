@extends('index')
@section('contenu')
<style>
    .uper {
      margin-top: 40px;
    }
  </style>
  
  <div class="card uper">
    <div class="card-body">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif
  
        <form method="post" action="{{ route('pannes/update', $pannes->id)}}">
          @csrf
          @method('PUT')
          <div class="card">
            <div class="card-header">
                <h5>Modifier la panne</h5>
            </div>
            <div class="card-block">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Veuillez resoumettre votre description</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="description" placeholder="description" value="{{$pannes->description}}">
                            <span class="messages popover-valid"></span>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary m-b-0">Modifier</button>
                        </div>
                        <div class="col-sm-5">
                            <button type="reset" class="btn btn-primary m-b-0">Annuler</button>
                        </div>
                    </div>
                
            </div>
        </div>
        </form>
    </div>
  </div>
@endsection
