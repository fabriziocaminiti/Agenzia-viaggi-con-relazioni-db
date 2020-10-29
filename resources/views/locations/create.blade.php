@extends('layouts.app')
@section('content')

<div class="container py-5 mt-5">
    <div class="row justify-content-center">
        <div class="card col-12 col-md-6 shadow backgroundform">
            @if (session ('message'))
            <div class="alert-success mt-5">
                {{session ('message')}}
            </div>
            @endif
            <form class=""action="{{route('locations.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div><h3 class="text-white mt-3">Inserisci le tue preferenze e poi ci pensiamo noi!</h3></div>
          <div class="row">
          <div class="form-group col-4 mt-3 mr-5">
                <label for="località">Cliente</label>
                       <select name="user_id" id="">
                           @foreach($users as $user)
                           <option value ="{{$user->id}}">{{$user->name}}</option>
                           @endforeach
                       </select>
          </div>
          <div class="form-group col-4 mt-3 mr-5">          
                       <label for="time">Periodo</label>
                           <hr class="hr">
                           <input type="text" name="time" value="{{old('time')}}" id="time" aria-describedby="time">
            </div>
          </div>
       <div class="row">
       <div class="form-group col-4 mt-3 mr-5">
                <label for="località">Località</label>
                <hr class="hr">
                        <input type="text" name="località" value="{{old('località')}}" id="località" aria-describedby="località">
            </div>
            <div class="form-group col-4 mt-3 mr-5">
            <label for="prezzo">Quanto vuoi spendere</label>
                  <hr class="hr">
                  <input type="text" name="prezzo" value="{{old('prezzo')}}" id="prezzo" aria-describedby="prezzo">
            </div>
       </div>
                     <div class="row">
                     <div class="form-group col-4 mt-3 mr-5">
                      <label for="hotel">Hotel</label>
                      <hr class="hr">
                      <input type="text" name="hotel" value="{{old('hotel')}}" id="hotel" aria-describedby="hotel">
                      </div>
                           <div class="form-group col-4 mt-3 mr-5">
                           <label for="payment">Pagamento</label>
                           <hr class="hr">
                           <input type="text" name="payment" value="{{old('payment')}}" id="payment" aria-describedby="payment">
                           </div>
                     </div>
             <div class="form-group mt-3 mr-5">  
                    <label for="img">Immagine della città che vuoi visitare</label>
                    <hr class="hr">
                            <input type="file" name="img" value="{{old('img')}}" id="img" aria-describedby="img">
             </div> 
    
                     <button class="btn btn-apply text-white mb-5" type="submit">Applica</button>
              </form>
        </div>
    </div>
</div>
@endsection