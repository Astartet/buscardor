<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Prueba Buscador Ayudas Invepat</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col-5" style="margin-top: 25%;">
    <h1>Buscador de Ayudas de Invepat</h1>
    <form action="resultados.php" method="post">
        <div class="form-floating" style="padding-bottom: 12px;">
        
        <select name="provincias" id="provincias" class="form-select" aria-label="Floating label select example">
            <optgroup label="Andalucia">
                <option value="">Seleccione una provincia</option>
                <option value="CORDOBA">Córdoba</option>
                <option value="SEVILLA">Sevilla</option>
                <option value="MALAGA">Málaga</option>
                <option value="CADIZ">Cádiz</option>
                <option value="HUELVA">Huelva</option>
                <option value="JAEN">Jaén</option>
                <option value="GRANADA">Granada</option>
                <option value="ALMERIA">Almería</option>
            </optgroup>
            <optgroup label="Extremadura">
                <option value="CACERES">Cáceres</option>
                <option value="BADAJOZ">Badajoz</option>
            </optgroup>
        </select>
        <label for="provincias">Provincia: </label>
        </div>
        <div class="form-floating">
        
        <select name="sectores" id="sectores" class="form-select" aria-label="Floating label select example">
            <option value="">Seleccione su sector</option>
            <option value="AGP">Agricultura, Ganadería y Pesca</option>
            <option value="CHT">Comercio, Hostelería y Turismo</option>
            <option value="INDUSTRIA">Industria</option>
            <option value="I+D">I+D</option>
            <option value="CULTURA">Cultura</option>
            <option value="DEPORTES">Deportes</option>
            <option value="SERVICIO">Servicios</option>
        </select>
        <label for="sectores">Sector: </label>
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-primary" id="enviar" name='enviar' onclick="validarInput();">Ver ayudas</button>
    </form>
    </div>
    <div class="col">
      
    </div>
  </div>
</div>
<script>
    function validarInput(){
        var todo_correcto = true;

        var provincia = document.getElementById('provincias');
        var sector = document.getElementById('sectores');

        if (provincia == ""){
            todo_correcto = false;
        }
        if (sector == ""){
            todo_correcto = false;
        }
        return todo_correcto;
    }   
</script>
    



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</body>
</html>