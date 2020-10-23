@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            @if (session ('message'))
            <div class="alert-success">
                {{session ('message')}}
            </div>
            @endif
            <form action="{{route('locations.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label for="località">Località</label>
                        <input type="text" name="località" value="{{old('località')}}" class="form-control" id="località" aria-describedby="località">
            </div>
            <div class="form-group">
                 <label for="prezzo">Prezzo</label>
                            <input type="text" name="prezzo"value="{{old('prezzo')}}" class="form-control" id="prezzo" aria-describedby="prezzo">
            </div>
            <div class="form-group">
                  <label for="hotel">Hotel</label><br>
                           <input type="text" name="hotel" value="{{old('hotel')}}" id="hotel" aria-describedby="hotel">
             </div> 
             <div class="form-group">  
                    <label for="img">Immagine Città</label><br>
                            <input type="file" name="img" value="{{old('img')}}" id="img" aria-describedby="img">
             </div> 
                            <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection