@extends('layouts.app')
@section('content')

<div class="container py-5 mt-5">
  <div class="row col-12 border-dark">
  @foreach($locations as $location)
  <div class="card border-dark ml-4 mr-4 col-md-5 mt-3 mb-3 shadow">
    
    <h5 class="card-title mt-3">{{$location->località}}</h5>
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

    <img src="{{Storage::url($location->img)}}" class="card-img-bottom" alt="" width="150" height="200">
   
 <div class="row">
   <div class="col-6">
 <a class="btn text-white mt-4 mb-3" href="{{route('locations.edit',compact('location'))}}" type="submit" role="button">Modifica dati</a>
 </div>
  <div class="col-6 mt-2">
  <form action="{{route('locations.destroy',compact('location'))}}" method="POST"> @method('DELETE') @csrf
   <button type="submit" class="btn text-white mt-3 mb-3" role="button">Elimina destinazione</button>
 </form>
  </div>
 </div>
  
  </div>
  @endforeach
  
  </div>
</div>
@endsection