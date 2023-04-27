<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Új ingatlan</title>
</head>
<body>
    <div id="formDiv">
        <form action="/api/ingatlanok", method="post">
            {{csrf_field()}}
            {{method_field("POST")}}
            <div class="form-group">
            <label for="kategoria">Ingatlan kategória</label>
            <select name="kategoria">
            @foreach ($kategoriak as $kategoria)
                <option value="{{$kategoria->id}}">{{$kategoria->nev}}</option>
            @endforeach
            </select>
            </div>
            <div class="form-group">
            <label for="hirdetesDatumas">Hirdetés dátuma</label><br>
            <input type="date" name="hirdetesDatuma"><br>
            </div>
            <div class="form-group">
            <label for="leiras">Ingatlan leírása</label><br>
            <input type="textarea" name="leiras"><br>
            </div>
            <div class="form-group">
            <input type="checkbox" name="tehermentes">
            <label for="tehermentes">Tehermentes ingatlan</label><br>
            </div>
            <div class="form-group">
            <label for="ar">Ár</label><br>
            <input type="number" name="ar" min="0"><br>
            </div>
            <div class="form-group">
            <label for="imgUrl">Kép az ingatlanról</label><br>
            <input type="text" name="imgUrl"><br>
            </div>
            <input type="submit" value="Küldés">
        </form>
    </div>
</body>
</html>