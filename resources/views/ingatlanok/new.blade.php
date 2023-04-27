<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Új ingatlan</title>
</head>
<body>
    <form action="/api/ingatlanok", method="post">
        {{csrf_field()}}
        {{method_field("POST")}}
        <select name="kategoria">
        @foreach ($kategoriak as $kategoria)
            <option value="{{$kategoria->id}}">{{$kategoria->nev}}</option>
        @endforeach
        </select><br>
        <label for="hirdetesDatumas">Hirdetés dátuma</label><br>
        <input type="date" name="hirdetesDatuma"><br>
        <label for="leiras">Ingatlan leírása</label><br>
        <input type="textarea" name="leiras"><br>
        <input type="checkbox" name="tehermentes">
        <label for="tehermentes">Tehermentes ingatlan</label><br>
        <label for="ar">Ár</label><br>
        <input type="number" name="ar" min="0"><br>
        <label for="imgUrl">Kép az ingatlanról</label><br>
        <input type="text" name="imgUrl"><br>
        <input type="submit" value="Küldés">
    </form>
</body>
</html>