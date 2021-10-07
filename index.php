<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
    </head>
    <body bgcolor="#FF8A00">
        <style>
            div {
      
      margin: 60px;
     
      border-collapse: separate;
  }

          .div-1{
              width: 300px;
            margin: 150px;
              border: 2px solid;
          background-color: #E0DDD8
          }

          .button-1{
                background-color: #0C20D1;
                font-size: 20px;
                color:white;
                border-radius: 10px;
            }
            .div2{
                background-color: black;
            }
        
    
        </style>
        <!-- <a href="./pageHome.php">
        <button type="submit" title="Regresar al Inicio" class="button-1">Home</button>
        </a> -->
        <center>
        <div class="container">
            <div class="div-1">
                
                <form method="GET" action="index.php">
                    <p style="font-family:Garamond;"><font size="8">Usuario</font></p>
                    <input type="text" name="user" placeholder="username" required>
                    <p style="font-family:Garamond;"><font size="8">Password</font></p>
                    <input type="password" name="pass" placeholder="Password" required>
                    <br>
                    <br>
                    <br>
                    <button type="submit" name="button" class="button-1">INGRESAR</button>
                </form>
            
            <br>
            </div>
        </div>
    </center>
    <?php
    require_once "./db/conexion.php";

    if(isset($_GET["button"])==1)
    {
        $user=$_GET['user'];
        $pass=$_GET['pass'];

        $ver= "SELECT * FROM usuarios WHERE user='$user' and pass='$pass' ";
        $resultado= mysqli_query($db, $ver);
        $verfilas= mysqli_num_rows($resultado);
        if($verfilas >=1)
        {

            // session_start();
            // $_SESSION['user'] = $user;
            // $_SESSION['pass'] = $pass;
            // header("Location:./pageHome.php");
            ?>
            <script>
    window.location="./pageHome.php";
    </script> 
   
         
            <?php
        }
        else
        {
            ?>
            <center>
            <b><h3><font size="5", color="red">Usuario y/o Contraseña Incorrectos</font></h3></b>
        </center>
            <?php
        }
    }
    ?>
    </body>
</html>