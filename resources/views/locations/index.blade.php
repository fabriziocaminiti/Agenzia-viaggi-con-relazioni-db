@extends('layouts.app')
@section('content')

<div class="container py-5 mt-5">
  <div class="row col-12 border-dark">
  @foreach($locations as $location)
  <div class="card border-dark ml-4 mr-4 col-md-5 mt-3 mb-3 shadow backgroundform wow zoomIn">
    
    <h5 class="card-title mt-3">{{$location->località}}</h5>
    <hr class="hr">
    <p class="card-text">Questa fantastica meta è stata scelta da: <small>{{$location->user->name}}</small>
    </p>
    <p class="card-text">Nel periodo di: <small>{{$location->time}}</small>
    </p>
    <p class="card-text">Soggiornerà presso:<small>{{$location->hotel}}</small>
    </p>
    <p class="card-text">Tutto al prezzo di: <small>{{$location->prezzo}}</small>
    </p>
    <p class="card-text">Modalità di pagamento: <small>{{$location->payment}}</small>
    </p>

    <img src="{{Storage::url($location->img)}}" class="card-img-bottom" alt="meta" width="150" height="200">
   
 <div class="row">
   <div class="col-6">
 <a class="btn text-white mt-4 mb-3" href="{{route('locations.edit',compact('location'))}}" type="submit" role="button">Modifica dati</a>
 </div>
  <div class="col-6 mt-4">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Elimina destinazione
</button>

<!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Sicuro di voler eliminare la destinazione?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <form action="{{route('locations.destroy',compact('location'))}}" method="POST"> 
          @method('DELETE')
           @csrf
         <button type="submit" class="btn text-white mt-3 mb-3" role="button">Si</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </div>
 </div>
  
  </div>
  @endforeach
  
  </div>
</div>
@endsection