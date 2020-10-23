@extends('layouts.app')
@section('content')

<div class="container py-5 mt-5">
  <div class="row">
    <div class="col-6 col-md-4">
    @foreach($locations as $location)
    <div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$location->località}}</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  <img src="{{Storage::url($location->img)}}" class="card-img-bottom" alt="destinazione" width="150" height="200">
</div>
 <form action="{{route('locations.destroy',compact('location'))}}" method="POST"> @method('DELETE') @csrf
   <button type="submit" class="btn btn-danger" role="button">Elimina destinazione</button>
 </form>
 @endforeach
 
    </div>
  </div>
</div>
@endsection