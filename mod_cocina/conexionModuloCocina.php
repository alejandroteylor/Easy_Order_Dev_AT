<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> MODULO COCINA </title>
    <meta name="viewport" content="width=device-width, user-scalable-no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/padidosrealizados.css">
</head>
<body>
   <div class="container">
       <br>
        <center><h1>MODULO COCINA</h1></center>
       <br>
   <div class="">
      <div class="btn-group-justified">
           <a href="modulococina.php" class="btn btn-primary">Lista Pedidos</a>
           <a href="pedidosrealizados.php" class="btn btn-primary">Pedidos Realizados</a>
       </div>
   </div>
   <div class="table-responsive">
        <table class="table table-striped table-bordered table-condensed">
            <tr class="success">
                <th> N° </th>
                <th> PEDIDO </th>
                <th> CANTIDAD </th>
                <th> TIEMPO </th>
                <th> ESTADO </th>
                <th> DETALLE </th>
            </tr>
        
    <?php
    $server = "localhost";
    $usuario = "root";
    $contraseña = "";
    $bd = "pedidos";
    
    $conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
        or die (" Error en la conexion");
    
    $consulta = mysqli_query($conexion, "SELECT * from platos")
        or die (" Error al traer los datos");
    
    while ($extraido = mysqli_fetch_array($consulta))
    {
        echo '<tr  class="success">';
        echo '<td>'.$extraido['id_plato'].'</td>';
        echo '<td>'.$extraido['nombre_plato'].'</td>';
        echo '<td>'.$extraido['cantidad_plato'].'</td>';
        echo '<td>'.$extraido['tiempo_plato'].'</td>';
        echo '<td>'.$extraido['estado_plato'].'</td>';
        echo '<td>'.'<input type="submit"  value="CONSULTAR" name="btnRegistros">'.'</td>';
        
    }
    mysqli_close($conexion);
    echo'</table>';
    ?>
    <form action="conexionModuloCocina.php">
        <input type="submit"  value="CONSULTAR" name="btnRegistros">
        </form>
</table>
 </div>
    </div>
</body>
</html>