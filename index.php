<?php
session_start();

require "connexion.php";
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'piste';
    $conn = mysqli_connect($server,$user,$password,$db);
?>

<?php


//Récupérer les entrées du formulaire de connexion
if (!empty($_POST['login']) && !empty($_POST['password'])) {

    $login = $_POST['login'];
    $password = $_POST['password'];


//Récupérer les infos d'authentification de la BDD
    $requete = "SELECT login,passwrd,prenom,nom,profil,pwd FROM users WHERE login = '$login' AND passwrd = '$password'";




    $admin_brute = mysqli_query($conn, $requete);

    $row=mysqli_fetch_row($admin_brute);

    $_SESSION['login']=$row[0];
    $_SESSION['passwrd']=$row[1];
    $_SESSION['prenom']=$row[2];
    $_SESSION['nom']=$row[3];
    $_SESSION['profil']=$row[4];
    $_SESSION['pwd']=$row[5]; 
 
    if($_SESSION['pwd']=='0000')
    {
      header("location:authentification.php");
    }
    else{

    if ($row[0]==$_POST['login'] && $row[1]==$_POST['password'] && $row[4]=='Administrateur' )
     {
        header( "location:connexionAdmin_index.php");
     }
     else
     {
      if ($row[0]==$_POST['login'] && $row[1]==$_POST['password'] && $row[4]!='Administrateur' )
        {
          header( "location:connexion_index.php");
        }
       else {
        echo "Une erreur est survenue lors de l'authentification";
       }
        
     }
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style22.css">
    <link rel="icon" href="./Images/logo1.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="header">
 <img id="logo" src="https://image.jimcdn.com/app/cms/image/transf/none/path/s411039637905c6a0/image/id0abf5d5e8cfbc09/version/1623158161/image.jpg" alt="">


</div>
<div class="box-area">
    
    <div class="contenu">
  


    <h1 class="entete" >Welcome!!</h1>
    <h3 class="slog">Log in to access your platform</h3>
   

    <form  action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-primary text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">User Login</h2>
              <p class="text-white-50 mb-5">Enter your login and your password!</p>

              <div class="form-outline form-white mb-4">
                <input type="text" name="login" id="email" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
   
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
</form>
</div>
</div>
<br><br>
<footer class="footer text-right" style="color:white; background-color:#317eeb">
                    2022 © MARIAMA DIOP FALL 777666415 LAS\IT\GRF .
                </footer>
</body>
</html>