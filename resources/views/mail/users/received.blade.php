<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row col-8">
            <h1>Buongiorno, il cliente {{$user['name']}} ha prenotato questa meta</h1>
            <h2>Dati cliente:</h2>
            <ul>
            <li>Email: {{$user['email']}}</li>
            <li>Telefono: {{$user['phone']}}</li>
            <li>Data di nascita: {{$user['dateOfbirth']}}</li>
            <li>Lavoro: {{$user['job']}}</li>
            </ul>
        <div class="col-8 mt-4">    
            <h3>{{$user['message']}}</h3>
        </div>        
</div>
</body>
</html>