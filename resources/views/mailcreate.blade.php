@extends('layouts.app')
@section('content')

<div class="container py-3 mt-5">
    <div class="row mt-5 mailbody">
        <div class="card col-12 shadow bg-transparent">
                <div class="col-12 mt-3"><h5>Inserisci i tuoi dati e ti ricontatteremo in giornata</h5></div>
                @if (session ('message'))
                <div class="alert-success mt-5">
                    {{session ('message')}}
                </div>
                @endif
                <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                @csrf
             
                <div class="row">
                <div class="form-group col-6 mt-3">
                    <label for="name">Nome e Cognome</label>
                    <hr class="hr">
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" aria-describedby="name">
                </div>
                <div class="form-group col-4 mt-3">
                    <label for="phone">Telefono</label>
                    <hr class="hr">
                                <input type="text" name="phone"value="{{old('phone')}}" class="form-control" id="phone" aria-describedby="phone">
                </div>
                </div>
                
               <div class="row">
               <div class="form-group col-4">                 
                                <label for="exampleInputEmail1">Email address</label>
                                <hr class="hr">
                                <input type="email" name="email" value="{{old('email')}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                <div class="form-group col-4">  
                        <label for="dateOfbirth">Data di nascita</label>
                        <hr class="hr">
                                <input type="text" name="dateOfbirth" value="{{old('dateOfbirth')}}" id="dateOfbirth" aria-describedby="dateOfbirth" class="form-control" >
                </div> 
                <div class="form-group col-4">  
                        <label for="job">Lavoro</label>
                        <hr class="hr">
                                <input type="text" name="job" value="{{old('job')}}" id="job" aria-describedby="job" class="form-control" >
                </div>
               </div>
                <div class="form-group ">  
                        <label for="message">Messaggio</label>
                        <hr class="hr">
                                <textarea name="message" value="{{old('message')}}"  aria-describedby="message" class="form-control" id="message" rows="3"></textarea>
                </div>   
                                <button class="btn btn-apply text-white mb-5" type="submit">Applica</button>
                </form>
        </div>
    </div>
</div>
@endsection