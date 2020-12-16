<?php
if($_POST)
{
    include 'login/auth/config.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sUser=mysqli_real_escape_string($conn,$username);
    $sPass=mysqli_real_escape_string($conn,$password);
    $query="SELECT email,contraseña FROM Usuarios WHERE email='".$sUser."' AND contraseña='".$sPass."'";
    $result=mysqli_query($conn,$query);
    $rolrow=mysqli_fetch_array($result);
    $numrows = mysqli_num_rows($result);

    if($numrows >0)
    {
  
        session_start();
        $_SESSION['anything']='something';
    
            header('location:home.php');
       
        
    } else {

             ?>
                  <div class="card mt-4 col-lg-6 bg-danger text-center text-white" style=" margin-left:23%">
                    <div class="card-body">
                       Usuario no existe.
                    </div>
                  </div>
             <?php

           }

}

?>
<!DOCTYPE html>
<html lang="en">


    <head>
      <?php include "genericos/head.php" ?>
      <?php include "genericos/Style.php" ?>
  </head>

<body style="background-image: url(productos_imagen/backg.jpg) ">




      <div class="container">
        <div class="row">
                <div class="col-lg-4 bg-warning" style="margin-top: 5%; margin-left:30%; ">

                <form id="formLogin" method="POST" class="formLogin">    
               
                
                    <label class="text-white mt-2">Mail:</label>
                    <input type="text" class="form-control" id="username" name="username">
                  
                  
                    <label class="text-white mt-2" >Contraseña:</label>
                    <input type="text" class="form-control" id="password" name="password">

               
                      <button type="submit " id="" class="btn  mt-2 mb-4 ml-2 text-white btn-secondary">Iniciar Sesion</button>   
           
                </form> 

            </div>
        </div>
    </div>


  
</body>
</html>