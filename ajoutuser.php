<?php 
include('connexion.php');                 
?>
<!DOCTYPE html> 
<html>

<head>
    <meta charset="utf-8" />
 <title>AJOUT USER</title>
 <!--<a href="profilAdmin.php" class="">HELP-DESK</a>-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="assets/images/laslogo.png">

    <link href="assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="style22.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="assets/js/modernizr.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

     <style>
          .RSCP
    {
      margin-left: 20%;
      
        }
    .ADD{
      margin-left: auto;
      width: 30%;
      text-align: center;
      


    }
     </style>   
</head>
<body class="fixed-left">
<div class="header">
    <img id="logo" src="https://image.jimcdn.com/app/cms/image/transf/none/path/s411039637905c6a0/image/id0abf5d5e8cfbc09/version/1623158161/image.jpg" alt="">
   
  </div>
  
        <!-- Begin page -->
        <div id="wrapper">
           
            

            
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Formulaire</h3></div>
                                    <div class="panel-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="commentForm3" method="POST" action="listuser.php" novalidate="novalidate" enctype="multipart/form-data">
                                                <!-- <div class="form-group"> -->

                                                <div class="form-group">
                                                    <label for="text">Profil:</label>
                                                    	<select class="form-control" name="profil">
                                                    	<option value=""> </option>
                                                    	<option value="Administrateur">Administrateur </option>
                                                    	<option value="simple_user">Utilisateur simple </option>
                                                    	
                                                    	
                                                    	</select>
                                                </div>

                                                    <div class="form-group">
                                                      <label for="text">Login:</label>
                                                       <input type="text" class="form-control" name="login" >
                                                     </div>

                                                     <div class="form-group">
                                                        <label for="text">Prénom:</label>
                                                        <input type="text" class="form-control" name="prenom"  >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="text">Nom:</label>
                                                        <input type="text" class="form-control" name="nom"  >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="text">Departement:</label>
                                                        <input type="text" class="form-control" name="departement"  >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="text">service:</label>
                                                        <input type="text" class="form-control" name="service">
                                                    </div>

                                                     
                                                    <div class="form-group">
                                                        <label for="text">Password:</label>
                                                        <input type="text" class="form-control" name="password"  >
                                                    </div>

                                                    <label for="photo" >
                                                        Ajoutez une photo (formats supportes : .png, .jpeg, .jpg, .gif
                                                        | taille maximale : 3 Mo) :<br /></label>
                                                    <input type="file" name="photo" />
<br>
                                                <div class="form-group" style="margin-left:30%;">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-primary waves-effect " name="enregistrer" type="submit">Enregistrer</button>
                                                        <button class="btn btn-default waves-effect"  name="fermer" type="submit" >Fermer</button>
                                                    </div>
                                                </div>
                                            </form>
                                           
                                            </div> <!-- .form -->
                                        </div> <!-- panel-body -->
                                    </div> <!-- panel -->
                                </div> <!-- col -->

                            </div> 
                        </div>
                    </div>
                </div>
               
            </div>
           
        </div>
        <!-- End page-->
        <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/intervention.js"></script>

    <script src="assets/js/jquery.app.js"></script>

    <!-- Examples -->
    <script src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script> 
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/pages/datatables.editable.init.js"></script>

</body>
</html>



