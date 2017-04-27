<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PAGOS REALIZADOS</title>
    <meta name="viewport" content="width=device-width, user-scalable-no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pagosrealizads.css">
</head>
<body>
     <div class="container">
        <br>
        <center><h1>MODULO PAGOS</h1></center>
        <br>
         <div class="">
      
       <div class="btn-group-justified">
           <a href="pagospendientes.html" class="btn btn-dafault">Pagos Pendientes</a>
           <a href="pagosrealizados.html" class="btn btn-dafault"> Pagos Realizados</a>
            
        </div>
        </div>
           <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed">
               <tr class="success">
            <th>No</th>
            <th>PEDIDO</th>
            <th>CANTIDAD</th>
            <th>MESA</th>
            <th>VALOR</th>
            <th> ESTADO </th>
            <th> HORA </th>
            <th> DETALLE </th>
            </tr>
             </table>    

            <?php
            $server = "localhost";
            $usuario = "root";
            $contraseña = "";
            $bd = "pagos";

            $conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
                or die (" Error en la conexion");

            $consulta = mysqli_query($conexion, "SELECT * from pagospendientes")
                or die (" Error al traer los datos");

            while ($extraido = mysqli_fetch_array ($consulta))
            {
                echo '<table class="border "1"">';
                echo '<tr  class="success">';
                echo '<td>'.$extraido['id_PagosPendiente'].'</td>';
                echo '<td>'.$extraido['nombre_plato'].'</td>';
                echo '<td>'.$extraido['cantidad_plato'].'</td>';
                echo '<td>'.$extraido['mesa_pago'].'</td>';
                echo '<td>'.$extraido['valor_plato'].'</td>';
                echo '<td>'.$extraido['estado_pedido'].'</td>';
                echo '<td>'.$extraido['hora_pago'].'</td>';
                echo '<td>'.'<input type="submit"  value="CONSULTAR" name="btnRegistros">'.'</td>';
            }
                mysqli_close($conexion);
                echo'</table>';
        ?>
    <form action="conexionpagosrealizados.php">
    <input type="submit"  value="CONSULTAR" name="btnRegistros">
    </form>
    </div>
    </div>
</body>    
</html>