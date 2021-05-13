<?php
            include 'connection.php';
            $sector = $_POST['sectores'];
            $provincia = $_POST['provincias'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Resultado ayudas Invepat</title>
</head>
<body>
    

<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col-8">
        <h1>Resultados de búsqueda: <?php
            $contar = "SELECT COUNT(*) from ayudas where sector='$sector' and provincia='$provincia'";
            $contar_query = mysqli_query($conn,$contar);
            $contar_resultado = mysqli_fetch_row($contar_query);
            echo $contar_resultado[0];
        ?></h1>
            
            <?php
            include 'connection.php';

            $sector = $_POST['sectores'];
            $provincia = $_POST['provincias'];
            
            
            
            $consulta = "SELECT * from ayudas where sector='$sector' and provincia='$provincia'";
            
            $result = mysqli_query($conn,$consulta);
            
            if (mysqli_num_rows($result)<1){
                header('Location: error.html');
            }
            
            while ($row = mysqli_fetch_array($result)){
            echo "<div class='card text-center' style='border: none;'>\n";
            echo "<div class='card-body'>\n";
             echo "<h5 class='card-title'>".$row['nombre_ayuda']."</h5>";
             echo "<p class='card-text' style='border: none;'>".$row['fecha_fin']."</p>";
             echo "<a href='#' class='btn btn-primary' id='logo'><span>Ver PDF</span></a>";
            echo "</div>";
            echo "</div>";
            }
            ?>
                

            



    </div>
    <div class="col">
      
    </div>
  </div>
</div>
</body>
</html>