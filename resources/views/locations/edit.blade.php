@extends('layouts.app')
@section('content')

<div class="container py-5 mt-5">
    <div class="row justify-content-center">
        <div class="card col-6 col-md-4 mailbody shadow">
            @if (session ('message'))
            <div class="alert-success mt-5">
                {{session ('message')}}
            </div>
            @endif
        <form action="{{route('locations.update',compact('location'))}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <h2>Modifica i dati alla tua prenotazione</h2>
            <div class="form-group">
            <label for="time">Periodo</label>
            <hr class="hr">
            <input type="text" name="time" value="{{$location->time}}" id="time" aria-describedby="time">
            </div> 
             <div class="form-group">
            <label for="hotel">Hotel</label>
            <hr class="hr">
            <input type="text" name="hotel" value="{{$location->hotel}}" id="hotel" aria-describedby="hotel">
            </div> 
            <div class="form-group">
            <label for="prezzo">Prezzo</label>
            <hr class="hr">
            <input type="text" name="prezzo" value="{{$location->prezzo}}" id="prezzo" aria-describedby="prezzo">
            </div>
            <div class="form-group">
            <label for="payment">Pagamento</label>
            <hr class="hr">
            <input type="text" name="payment" value="{{$location->payment}}" id="payment" aria-describedby="payment">
            </div>
            <div class="form-group">  
            <label for="img">Immagine della città che vuoi visitare</label>
            <hr class="hr">
            <input type="file" name="img" value="{{$location->img}}" id="img" aria-describedby="img">
            </div> 
            <button class="btn btn-apply text-white mb-5" type="submit">Applica</button>
        </form>
        </div>
    </div>
</div>
@endsection