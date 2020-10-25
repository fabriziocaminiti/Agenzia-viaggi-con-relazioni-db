@extends('layouts.app')
@section('content')

<div class="container py-5 mt-5">
  <div class="row col-12">
  @foreach($locations as $location)
  <div class="card-body ml-4 mr-4 col-md-5 mt-3 mb-3 shadow">
    
    <h5 class="card-title">{{$location->località}}</h5>
    <hr class="hr">
    <p class="card-text">Questa fantastica meta è stata scelta da: <small class="text-muted">
    {{$location->user->name}}
    </small></p>
    <p class="card-text">Il cliente ha prenotato presso: <small class="text-muted">
    {{$location->hotel}}
    </small></p>
    <p class="card-text">Tutto al prezzo di : <small class="text-muted">
    {{$location->prezzo}}
    </small></p>
    <img src="{{Storage::url($location->img)}}" class="card-img-bottom" alt="destinazione" width="150" height="200">
   
   <a class="btn btn-success mt-4 mb-3" href="{{route('locations.edit',compact('location'))}}" type="submit" role="button">Modifica dati</a>
  <form action="{{route('locations.destroy',compact('location'))}}" method="POST"> @method('DELETE') @csrf
   <button type="submit" class="btn btn-danger mt-3 mb-3" role="button">Elimina destinazione</button>
 </form>
  
  </div>
  @endforeach
  
  </div>
</div>
@endsection