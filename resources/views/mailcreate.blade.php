@extends('layouts.app')
@section('content')

<div class="container py-5 mt-5">
    <div class="row justify-content-center">
        <div class="card col-6 col-md-8 shadow">
            @if (session ('message'))
            <div class="alert-success mt-5">
                {{session ('message')}}
            </div>
            @endif
            <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-group mt-3">
                <label for="name">Nome</label>
                <hr class="hr">
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" aria-describedby="name">
            </div>
            <div class="form-group ">
                 <label for="phone">Telefono</label>
                 <hr class="hr">
                            <input type="text" name="phone"value="{{old('phone')}}" class="form-control" id="phone" aria-describedby="phone">
            </div>
            <div class="form-group">                 
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" value="{{old('email')}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
             <div class="form-group ">  
                    <label for="dateOfbirth">Data di nascita</label>
                    <hr class="hr">
                            <input type="text" name="dateOfbirth" value="{{old('dateOfbirth')}}" id="dateOfbirth" aria-describedby="dateOfbirth">
             </div> 
             <div class="form-group ">  
                    <label for="job">Lavoro</label>
                    <hr class="hr">
                            <input type="text" name="job" value="{{old('job')}}" id="job" aria-describedby="job">
             </div>
             <div class="form-group ">  
                    <label for="paymentMethod">Preferenza di pagamento</label>
                    <hr class="hr">
                            <input type="text" name="paymentMethod" value="{{old('paymentMethod')}}" id="paymentMethod" aria-describedby="paymentMethod">
             </div>
             <div class="form-group ">  
                    <label for="message">Messaggio</label>
                    <hr class="hr">
                            <input type="text" name="message" rows="3" value="{{old('message')}}" id="message" aria-describedby="message">
             </div>   
                            <button class="btn btn-apply text-white mb-5" type="submit">Applica</button>
              </form>
        </div>
    </div>
</div>
@endsection