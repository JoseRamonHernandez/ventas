<!DOCTYPE html>
<html>
<head> 
    <title>Total Venta</title>
    <Script Language="JavaScript">
            function DameLaFechaHora() {
              var hora = new Date()
              var hrs = hora.getHours();
              var min = hora.getMinutes();
              var hoy = new Date();
              var m = new Array();
              var d = new Array()
              var an= hoy.getYear();
              m[0]="Enero";  m[1]="Febrero";  m[2]="Marzo";
              m[3]="Abril";   m[4]="Mayo";  m[5]="Junio";
              m[6]="Julio";    m[7]="Agosto";   m[8]="Septiembre";
              m[9]="Octubre";   m[10]="Noviembre"; m[11]="Diciembre";
              document.write("(");
              document.write(hoy.getDate());
              document.write(" de ");
              document.write(m[hoy.getMonth()]);
              document.write(")");
            }
          </Script>
</head>
        <body bgcolor="#FF8A00">
        <style>
                div {
      
      margin: 60px;
     
      
      border-collapse: separate;
  }

          .div-1{
            border: 2px solid;
          background-color: #E0DDD8;
          }

          
          .button-1{
              background-color: #00FF38;
              font-size: 20px;
              color:black;
          }
input{
  font-size:smaller;
  background-color: #FBD603;
  vertical-align: 1px;
  text-align: center;
}

.img1{
border-radius: 20px;
}


            </style> 
            <?php
            require_once "./db/conexion.php";

$pago= $_GET['pago'];
// echo ("El cliente pagó con: ".$pago.  " de un total de: "); Imprime el dinero con el que el cliente pagó


$consulta= "SELECT total FROM registro ORDER BY id DESC LIMIT 1";
$ejecutarconsulta= mysqli_query($db,$consulta);
$verfilas= mysqli_num_rows($ejecutarconsulta);
$fila= mysqli_fetch_array($ejecutarconsulta);

// echo $fila[0]; Imprime el valor total de la compra 

$TotalVenta= $pago - $fila[0];
// date_default_timezone_set('America/Mexico_City');    
// $DateAndTime = date('m-d-Y h:i:s a', time());  
// echo $DateAndTime;
?>

<div class="container">

<div class="div-1">
    <center>
    <form method="GET" action="pageHome.php">
    <p> Cambio: <input type="number" name="cambio" value="<?php echo $TotalVenta; ?>" disabled> </p>
    <p align="center" href="./pageHome.php">
                <button type="submit" title="Registrar venta" class="button-1" name="button">Realizar Otra Venta</button>
            </p>
</form>
    </center>


</div>
</div>
<center>
<img src="./img/image2.png" title="ALAS-BRAZAS" class="img1">
</center>       
</body>
</html>