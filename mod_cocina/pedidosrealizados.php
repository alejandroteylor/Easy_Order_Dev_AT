<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PAGOS PENDIENTES</title>
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
           <a href="modulococina.php" class="btn btn-primary">Lista Pedidos </a>
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
            <th> HORA </th>
            </tr>
     </table>
         <form action="conexionPedidosRealizados.php">
        <input type="submit"  value="CONSULTAR" name="btnRegistros">
        </form>
    </table>
    </div>
    </div>
</body>
</html>