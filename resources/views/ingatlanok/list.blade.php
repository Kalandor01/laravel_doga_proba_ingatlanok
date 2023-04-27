<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Ingatlanok</title>
</head>
<body>
    <div id="ingatlanok">
    <table class="table">
        <tr>
            <th scope="col">Kategória</th>
            <th scope="col">Leírás</th>
            <th scope="col">Hirdetés dátuma</th>
            <th scope="col">Tehermentes</th>
            <th scope="col">Fénykép</th>
        </tr>
        {{csrf_field()}}
        {{method_field("GET")}}
        @foreach ($ingatlanok as $ingatlan)
        <tr scope="row">
            <td><p>{{$ingatlan->nev}}</p></td>
            <td><p>{{$ingatlan->leiras}}</p></td>
            <td><p>{{$ingatlan->hirdetesDatuma}}</p></td>
            <td><p>{{$ingatlan->tehermentes}}</p></td>
            <td><img src="img/{{$ingatlan->kepUrl}}" alt="{{$ingatlan->nev}}" onerror="this.onerror=null; this.src='img/no_image.png'"></td>
        </tr>
        @endforeach
    </table>
    </div>
</body>
</html>