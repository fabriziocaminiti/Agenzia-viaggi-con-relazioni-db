@extends('layouts.app')
@section('content')

<div class="container py-5 mt-5 backgroundform">
    <div class="row justify-content-center">
        <div class="card col-12 col-md-8 shadow">
            @if (session ('message'))
            <div class="alert-success mt-5">
                {{session ('message')}}
            </div>
            @endif
            <form class=""action="{{route('locations.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          
          <div class="form-group mt-5 ">
          <div><h3>Inserisci le tue preferenze e poi ci pensiamo noi!</h3></div>
                <label for="località">Cliente</label>
                       <select name="user_id" id="">
                           @foreach($users as $user)
                           <option value ="{{$user->id}}">{{$user->name}}</option>
                           @endforeach
                       </select>
            </div>
            <div class="form-group ">
                <label for="località">Località</label>
                <hr class="hr">
                        <input type="text" name="località" value="{{old('località')}}" class="form-control" id="località" aria-describedby="località">
            </div>
            <div class="form-group ">
                 <label for="prezzo">Prezzo</label>
                 <hr class="hr">
                            <input type="text" name="prezzo"value="{{old('prezzo')}}" class="form-control" id="prezzo" aria-describedby="prezzo">
            </div>
            <div class="form-grou ">
                  <label for="hotel">Hotel</label>
                  <hr class="hr">
                           <input type="text" name="hotel" value="{{old('hotel')}}" id="hotel" aria-describedby="hotel"class="form-control" >
             </div> 
             <div class="form-group ">  
                    <label for="img">Immagine Città</label>
                    <hr class="hr">
                            <input type="file" name="img" value="{{old('img')}}" id="img" aria-describedby="img">
             </div> 
    
                     <button class="btn btn-apply text-white mb-5" type="submit">Applica</button>
              </form>
        </div>
    </div>
</div>
@endsection