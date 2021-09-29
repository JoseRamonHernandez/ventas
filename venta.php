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
          background-color: #E0DDD8
          }

          
          .button-1{
              background-color: #0C20D1;
              font-size: 20px;
              color:white;
          }
input{
  font-size:smaller;
  background-color: #FBD603;
  vertical-align: 1px;
  text-align: center;
}

  
            </style> 
            <?php
            require_once "./db/conexion.php";

$pago= $_GET['pago'];
echo $pago;



?>
   
   <a href="./index.php">regresar</a>
        </body>
</html>