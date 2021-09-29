<!DOCTYPE html>
<html>
    <head>
        <title>Ventas Cuahutemoc</title>

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
              document.write("Fecha y hora: "+hrs+":"+min+" (");
              document.write(hoy.getDate());
              document.write(" de ");
              document.write(m[hoy.getMonth()]);
              document.write(")");
            }
          </Script>

    </head>
    
    <body bgcolor="#FF8A00">
    <?php   require_once "./db/conexion.php"; ?>

    
        <style>
img{
    border-radius: 120px;
}
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

    <script>
    DameLaFechaHora();
  </script>
    
        <center>
          <p style="font-family:Brush Script MT;"><font size="13">Alitas BBq y mas...</font></p>
        </center> 
        <center>
        <div class="div-1"  >
            <form method="GET" action="index.php"> 
                <p style="font-family:Brush Script MT;"><font size="5">Alitas:   
                    <input type="number" name="alitas" value="0">
                    HotDogs:  
                    <input type="number" name="hotdogs" value="0"></font>
                </p>
                <p style="font-family:Brush Script MT;"><font size="5">Papas:    
                    <input type="number" name="papas" value="0">
                    Platanos:
                    <input type="number" name="platanos" value="0"></font>
                </p>
                <p style="font-family:Brush Script MT;"><font size="5">HotCakes:
                    <input type="number" name="hotcakes" value="0">
                    Micheladas:
                    <input type="number" name="micheladas" value="0"></font>
                </p>
                <p align="right">
                <button type="submit" title="Realizar venta" class="button-1" name="button1">SubTotal</button>
            </p>
            </form>
        </div>
        <img src="img/image1.png" alt="imagen de asador" title="Alitas al carbon" name="button1">
    
       
    </center>
    <?php

    if(isset($_GET["button1"])==1)
    {


        $alitas= $_GET['alitas'];
        $hotdogs= $_GET['hotdogs'];
        $papas= $_GET['papas'];
        $platanos= $_GET['platanos'];
        $hotcakes= $_GET['hotcakes'];
        $micheladas= $_GET['micheladas'];
        $pago= 0;
                    $FechaHora= "<script>
                    DameLaFechaHora();
                  </script>" ;
                  $date = $FechaHora;
                  $fecha = date("Y-m-d");
                
                    $consulta= "SELECT * FROM precios ORDER BY id DESC LIMIT 1";
                    $ejecutarconsulta= mysqli_query($db,$consulta);
                    $verfilas= mysqli_num_rows($ejecutarconsulta);
                    $fila= mysqli_fetch_array($ejecutarconsulta);
        
                    /* aqui realizaremos las multiplicaciones con los precios en la db para saber el total de la venta */
        
                  
            $Total1=$fila[1]*$alitas;
            $Total2=$fila[4]*$hotdogs;
            $Total3=$fila[2]*$papas;
            $Total4=$fila[5]*$platanos;
            $Total5=$fila[3]*$hotcakes;
            $Total6=$fila[6]*$micheladas;

            $TotalVenta= ($Total1+$Total2+$Total3+$Total4+$Total5+$Total6);

        ?>
        <div class="container">
            <div class="div-1">
                <center>
            <form method="GET" action="venta.php">
            <p>Total  de la Venta <input type="number" value="<?php echo $TotalVenta; ?>" disabled>
                Pago <input type="number" name="pago" placeholder="El cliente paga con: ">
            </p>
            <p align="center">
                <button type="submit" title="Registrar venta" class="button-1">Realizar Venta</button>
            </p>
            </form>
            </center>
            
            </div>
            </div>
            <?php

$almacenar= "INSERT INTO registro( alitas, papas, hotcakes, hotdogs, platanos, micheladas, total, pago, fecha) VALUES ( '$alitas', '$papas', '$hotcakes', '$hotdogs', '$platanos', '$micheladas', '$TotalVenta', '$pago', '$fecha')";
$resultado= mysqli_query($db, $almacenar);

    }

    ?>

    </body>
</html>