
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>
            <link rel="icon" href="./Images/logo1.ico">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="style22.css">
            <title>Authentification</title>
        </head>
        <body>
        <div class="header">
 <img id="logo" src="https://image.jimcdn.com/app/cms/image/transf/none/path/s411039637905c6a0/image/id0abf5d5e8cfbc09/version/1623158161/image.jpg" alt="">


</div>
        <div class="login-form">

            <form action="authentification_traitement.php" method="post">
            <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-primary text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Changement Mot de Passe</h2>
              <p class="text-white-50 mb-5">Entrez votre nouveau mot de passe!</p>      
                
                       
                              <div class="form-outline form-white mb-4">

                    <input type="password" name="mdp" id='mdp' class="form-control form-control-lg" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                              <div class="form-outline form-white mb-4">

                    <input onfocusout='getAction1()' type="password" id='password' name="passwrd" class="form-control form-control-lg" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                              <div class="form-outline form-white mb-4">
                                <p id='alerte'></p>

                    <button disabled  type="submit" id="button"  class="btn btn-outline-light btn-lg px-5">Effectuer</button>
                </div>   
            </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        
</section>
</form>
<script type="text/javascript">
  function getAction1(){
    var mdp=document.getElementById("mdp").value
    var password=document.getElementById("password").value
    if(mdp == password)
    {
        document.getElementById("button").disabled=false;
    } else{   
      document.getElementById("alerte").innerHTML="Les mots de passe sont differents";
      document.getElementById("alerte").style.fontSize="15px";
      document.getElementById("alerte").style.color="red";
      document.getElementById("password").style.border="1px solid red";
      
 
    }
  }
  </script>
         
        </body>
</html>