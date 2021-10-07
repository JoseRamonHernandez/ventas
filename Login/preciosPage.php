<DOCTYPE html>
    <html>
        <head>
            <title>PRECIOS</title>
        </head>
    <body bgcolor="#FF8A00">
    <style>
            
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
             background-color:black;
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
            background-color: white;
            vertical-align: 1px;
            text-align: center;
            }
            
            
            
                </style>
              
    <?php
   
   require_once "../db/conexion.php"; 

   
?>

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

    <center>
        
        
            <?php
            
            $consulta= "SELECT * FROM precios ";
            $ejecutarconsulta= mysqli_query($db,$consulta);
            $verfilas= mysqli_num_rows($ejecutarconsulta);
            $fila= mysqli_fetch_array($ejecutarconsulta);
            ?>
    <div class="container">
    <h1>Precios:</h1>
    <div class="div-1">
    <form method="GET" action="preciosPage.php">
                <p style="font-family:Brush Script MT;"><font size="5">Alitas:   
                    <input type="number" name="alitas" value="<?php echo $fila[1]; ?>">
                                  Papas:  
                    <input type="number" name="papas" value="<?php echo $fila[2]; ?>"></font>
                </p>
    
                <p style="font-family:Brush Script MT;"><font size="5">Hotcakes:   
                    <input type="number" name="hotcakes" value="<?php echo $fila[3]; ?>">
                                  Hotdogs:  
                    <input type="number" name="hotdogs" value="<?php echo $fila[4]; ?>"></font>
                </p>
                
                <p style="font-family:Brush Script MT;"><font size="5">Platanos:   
                    <input type="number" name="platanos" value="<?php echo $fila[5]; ?>">
                                  Micheladas:  
                    <input type="number" name="micheladas" value="<?php echo $fila[6]; ?>"></font>
                </p>
                <button type="submit" name="button" class="button-1">Save Changes
</form>
    </div>
    </div>
</center>
<?php
if(isset($_GET["button"])==1)
{
    $alitas= $_GET['alitas'];
    $papas= $_GET['papas'];
    $hotcakes= $_GET['hot$hotcakes'];
    $hotdogs= $_GET['ho$hotdogs'];
    $platanos= $_GET['pla$platanos'];
    $micheladas= $_GET['mi$micheladas'];

    $actualizar= 
}
    </body>
    </html>