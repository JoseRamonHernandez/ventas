<!DOCTYPE HTML>
<html>
    <body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

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
              <tr>
                  
                  
              <th class="bg-dark text-white">ALITAS</th>
                <th class="bg-dark text-white">PAPAS</th>
                  <th class="bg-dark text-white">HOTCAKES</th>
                  <th class="bg-dark text-white">HOTDOGS</th>
                  <th class="bg-dark text-white">PLATANOS</th>
                  <th class="bg-dark text-white">MICHELADAS</th>
                  <th class="bg-dark text-white">TOTAL</th>
                  <th class="bg-dark text-white">FECHA</th>
                  
                 
              </tr>
            </thead>
            
        <?php
        $consulta= "SELECT * FROM registro WHERE id>='3'";
        $ejecutarconsulta= mysqli_query($db,$consulta);
        $verfilas= mysqli_num_rows($ejecutarconsulta);
        $fila= mysqli_fetch_array($ejecutarconsulta);
    echo $verfilas;
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
                            <td>'.$fila[1].'</td>
                            <td>'.$fila[2].'</td>
                            <td>'.$fila[3].'</td>
                            <td>'.$fila[4].'</td>
                            <td>'.$fila[5].'</td>
                            <td>'.$fila[6].'</td>
                            <td>'.$fila[7].'</td>
                            <td>'.$fila[8].'</td>
                                  
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
    
</body>
</html>