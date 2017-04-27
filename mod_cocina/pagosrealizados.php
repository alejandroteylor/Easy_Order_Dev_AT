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
         <form action="conexionpagosrealizados.php">
        <input type="submit"  value="CONSULTAR" name="btnRegistros">
        </form>
        
    </div>
    </div>
</body>
</html>