<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ingatlanok</title>
</head>
<body>
    <div>
    {{csrf_field()}}
    {{method_field("GET")}}
    @foreach ($ingatlanok as $ingatlan)
        <div>
            <img src="img/{{$ingatlan->kepUrl}}" alt="{{$ingatlan->nev}}" onerror="this.onerror=null; this.src='img/no_image.png'">
        </div>
    @endforeach
    </div>
</body>
</html>