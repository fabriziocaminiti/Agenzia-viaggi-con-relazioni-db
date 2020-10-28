@extends('layouts.app')
@section('content')

<div class="container py-5 mt-5">
    <div class="row justify-content-center">
        <div class="card col-6 col-md-8 mailbody shadow">
            @if (session ('message'))
            <div class="alert-success mt-5">
                {{session ('message')}}
            </div>
            @endif
            <form action="{{route('locations.update',compact('location'))}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <div class="form-group mt-3">
            <h2>Modifica i dati alla tua prenotazione</h2>
            <div class="form-group">
                            <label for="img">Immagine</label><br>
                            <input type="file" name="img" value="{{$location->img}}" id="img" aria-describedby="img">
                            </div> 
                <label for="località">Località</label>
                <hr class="hr">
                        <input type="text" name="località" value="{{$location->località}}" class="form-control" id="località" aria-describedby="località">
            </div>
            <div class="form-group">
                 <label for="prezzo">Prezzo</label>
                 <hr class="hr">
                            <input type="text" name="prezzo" value="{{$location->prezzo}}" class="form-control" id="prezzo" aria-describedby="prezzo">
            </div>
            <div class="form-group">
                  <label for="hotel">Hotel</label>
                  <hr class="hr">
                           <input type="text" name="hotel" value="{{$location->hotel}}" id="hotel" aria-describedby="hotel">
             </div> 
             <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button class="btn btn-apply text-white mb-5" type="submit">Applica</button>
              </form>
        </div>
    </div>
</div>
@endsection