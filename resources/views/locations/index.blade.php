@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
      @foreach ($locations as $location)
        <div class="card mb-3">
          <img src="{{Storage::url($location->img)}}" class="card-img-top" width="400" height="400" alt="...">
           <div class="card-body">
            <h5 class="card-title">{{$location->località}}</h5>
             <p class="card-text">{{$location->hotel}}</p>
             <p class="card-text">{{$location->prezzo}}</p>  
           </div>
        </div>
        @endforeach
        </div>
    </div>
</div>
@endsection