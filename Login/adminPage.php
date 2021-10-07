<?php
 session_start();

 $sesionUser = $_SESSION['user'];
//  $sesionPass = $_SESSION['pass'];
//  if($_SESSION['user'] == null || $_SESSION['user'] = '')
//  {
//     ?>
       

      <script>
//     window.location="../index.php";
//     </script> 
   
        <?php  
//      die();
//  }
?>
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
    
    <body bgcolor="#FF8A00" important>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <?php
       require_once "../db/conexion.php"; 

    ?>

    
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

    
/* copiado */
/* menu */

#menu ul {
 list-style:none;
 margin:0;
 padding:0;
}

/* items del menu */

#menu ul li {
    border-radius: 10px;
 background-color:#FF8A00;
}

/* enlaces del menu */

#menu ul a {
 display:block;
 color:#fff;
 text-decoration:none;
 font-weight:400;
 font-size:15px;
 padding:10px;
 font-family:"HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif;
 text-transform:uppercase;
 letter-spacing:1px;
}

/* items del menu */

#menu ul li {
 position: relative;
 float:right;
 margin:0;
 padding:0;
}

/* efecto al pasar el ratón por los items del menu */

#menu ul li:hover {
 background:#5b78a7;
}
/* menu desplegable */

#menu ul ul {
 display:none;
 position:absolute;
 top:100%;
 left:0;
 background:#eee;
 padding:0;
}

/* items del menu desplegable */

#menu ul ul li {
 float:none;
 width:150px
}

/* enlaces de los items del menu desplegable */

#menu ul ul a {
 line-height:120%;
 padding:10px 15px;
}

/* items del menu desplegable al pasar el ratón */

#menu ul li:hover > ul {
 display:block;
}
        </style>

    <!-- start nav -->
    <p align="right">
<nav id="menu" >
    <!-- start menu -->
    <ul >
     <li><a href="#">Opciones</a>
    <!-- start menu desplegable -->
     <ul>
    <li><a href="../pageHome.php">Home</a></li>
     <li><a href="#">Consultar ventas</a></li>
     <li><a href="#">Usuarios</a></li>
     <li><a href="./preciosPage.php">Precios</a></li>
     <li><a href="../index.php" title="Regresar al Login">Cerrar Sesion</a></li>
     </ul>
    <!-- end menu desplegable -->
     </li>
    </ul>
    <!-- end menu -->
    </nav>
    <!-- end nav -->
</p>
<script>
    DameLaFechaHora();
  </script>
  <?php
      require_once "../db/conexion.php";
?>
  <center>
      <h1>Registros de Ventas</h1>
  </center>
  
<div id="">

<div class="container">
    <center>
<table class="table">
        <thead>
          <tr class="table-active">
              
          <th class="bg-dark text-white">FECHA</th>
          <th class="bg-dark text-white">ALITAS</th>
            <th class="bg-dark text-white">PAPAS</th>
              <th class="bg-dark text-white">HOTCAKES</th>
              <th class="bg-dark text-white">HOTDOGS</th>
              <th class="bg-dark text-white">PLATANOS</th>
              <th class="bg-dark text-white">MICHELADAS</th>
              <th class="bg-dark text-white">TOTAL</th>
              
              
             
          </tr>
        </thead>
        
    <?php
    $consulta= "SELECT * FROM registro WHERE id>='3'";
    $ejecutarconsulta= mysqli_query($db,$consulta);
    $verfilas= mysqli_num_rows($ejecutarconsulta);
    $fila= mysqli_fetch_array($ejecutarconsulta);
// echo $verfilas;
    if(!$ejecutarconsulta)
    {
        echo("ERROR en la consulta");
    }
    else
        {
            if($verfilas<1)
            {
                echo("<tr><td>Sin registros</td></tr>");
            }
            else
            {
                for($x=0; $x<=$fila; $x++)
                {   
                    echo' 
                        <tr>
                        <td class="table-warning">'.$fila[8].'</td>
                        <td class="table-warning">'.$fila[1].'</td>
                        <td class="table-warning">'.$fila[2].'</td>
                        <td class="table-warning">'.$fila[3].'</td>
                        <td class="table-warning">'.$fila[4].'</td>
                        <td class="table-warning">'.$fila[5].'</td>
                        <td class="table-warning">'.$fila[6].'</td>
                        <td class="table-warning">$'.$fila[7].'</td>
                        
                              
                        </tr>';
                    
                        $fila=mysqli_fetch_array($ejecutarconsulta);
                }
            }
        }

    ?>
        
      
<br>

</table>
</center>

</div>

</div>
</div>
<?php
echo $_SESSION['user'];
?>
</body>
</html>