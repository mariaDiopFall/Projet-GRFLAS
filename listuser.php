<?php 
//require('index.php');             //pour s'assurer que l'utilisateur s'est deja authentifi� avant d'acc�der � cet page
/*if ($_SESSION['profil'] != 'administrateur')
{
    header('Location:deconnect.php');
}*/
//include('connect_desk.php');                 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche de Collecte</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
  table {
    border: none;
    border-collapse: none;
    width: 100%;

    }
    th {
    font-family: monospace;
    border: thin solid #6495ed;
    width: 50%;
    padding: 5px;
    background-color: rgb(61, 54, 255);
    
    }
    td {
    font-family: sans-serif;
    border: thin solid #6495ed;
    width: auto;
    padding: 5px;
    text-align: center;
    background-color: white;
    color: black;
    }
    caption {
    font-family: sans-serif;
    }
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

<?php
require "connexion.php";

//include_once('entete.php');

if (isset($_POST['enregistrer'])){
                // header('Location:listuser.php');
                $profil = $_POST['profil'];
                $login = $_POST['login']; 
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $departement = $_POST['departement'];
                $service = $_POST['service'];
                $password = ($_POST['password']);
              
                $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE login = '$login'");
                $stmt->execute(array($_POST['login']));

                if ($stmt->fetchColumn() != 0) 
                {
                   ?> <script>
                     alert("Désolé ! Cet utilisateur existe déjà dans notre base de données.") ;
                     </script>
                     <?php
                  // header('Location:listuser.php');
                } 
                
                else {
                    
                    
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['photo']['size'] <= 3145728)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['photo']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        
                      $rnam = basename( rename($_FILES['photo']['name'],$prenom));
                        move_uploaded_file($_FILES['photo']['tmp_name'], "img/".$prenom.'.'.$extension_upload);
                        //echo "L'envoi a bien été effectué !";
                }
                else
                {
                    echo 'extention non-autorisee';
                }
        }
        else
        {
            echo 'image trop grosse';
        }
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_NO_FILE)
{
    echo 'fichier inexistant';
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_PARTIAL)
{
    echo 'fichier uploadé que partiellement';
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_INI_SIZE)
{
    echo 'fichier trop gros';
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_FORM_SIZE)
{
    echo 'fichier trop gros';
}
elseif (!isset($_FILES['photo']))
{
    echo 'pas de variable';
}
else
{
    echo 'probleme a l\'envoi';
}
                $req1 = "INSERT INTO users (nom, prenom, login, passwrd, departement, profil, service) VALUES ('$nom', '$prenom', '$login', '$password','$departement', '$profil', '$service')";
               // header('Location:listuser.php');
                //echo "$req";
        ?>
                <br><br> 
<?php
                //echo "$nbjours";          
                $result3 = $conn->query($req1); 
                //si l'enregistrement a fonctionner
              
               
                if($result3)
                    {
                       ?> <script>
                     alert("Enregistrement effectué avec succès") ;
                     </script>
                     <?php
                    }
                    else
                    {
                        ?> <script>
                        alert("Enregistrement a echoué, veuiller reessayer!") ;
                        </script>
                        <?php
                    }
                   

           
                } 
            }
?>

<body>
<div class="header">
    <img id="logo" src="https://image.jimcdn.com/app/cms/image/transf/none/path/s411039637905c6a0/image/id0abf5d5e8cfbc09/version/1623158161/image.jpg" alt="">
    <div class="contenu">
    <form action="connexionAdmin_index.php" method="post" style="text-align:right;" >
      <button  class="btn btn-primary btn-lg px-5"  type="submit">Retour</button>
    </form>
    </div>

  </div>
  
        <!-- Begin page -->
        <div id="wrapper">
            <?php
            //include_once('topbar.php'); 
            //include_once('leftsidebar.php'); 
            ?>
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                       


                        <div class="panel">
                            
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="m-b-30">
                                            <br><br><br><br>
                                        <a href="ajoutuser.php"><button type="button" id="addToTable" class="btn btn-primary waves-effect waves-light">Ajouter <i class="fa fa-plus"></i></button></a>
                                        </div>
                                    </div>
                                </div>
                                <div id="list_de_trucs" class="table-responsive">
                                <table class="table table-bordered table-striped" id="datatable-editable">
                                    <thead>
                                        <tr>
                                            <th>id</th>
					                        <th>Profil</th> 
         				                    <th>Login</th>
					                        <th>Prenom</th>
					                        <th>Nom</th>
                                            <th>Téléphone</th>
					                        
                                            <th>Service</th>
                                            <th>password</th> 
                                            <th>Signature</th>	
                                            <th>Actions</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $req6 = "SELECT * FROM users  ORDER BY id_user ASC ";
                                        $affiche6 = $conn->query($req6);
                
                                            while ($tab = $affiche6->fetch())
                                            {?>
                                                <tr>
                                                <td><?php echo $tab['id_user'] ?></td>
                                                <td><?php echo $tab['profil'] ?></td>
                                                <td><?php echo $tab['login'] ?></td>
                                                <td><?php echo $tab['prenom'] ?></td>
                                                <td><?php echo $tab['nom'] ?></td>
                                                <td><?php echo $tab['departement'] ?></td>
                                                
                                                <td><?php echo $tab['service'] ?></td>
                                                <td><?php echo ($tab['passwrd']) ?></td>
                                                <td>signature</td>     
                                               
                                                <td class="actions">
                                                <form method="GET" action="test.php">
                                                        
                                                        <a href="modif_user.php?id=<?php echo $tab['user_id']; ?>"  ><i class="fa fa-pencil"></i></a>

                                                    <a href="supprim_user.php?id=<?php echo $tab['user_id']; ?>" ><i class="fa fa-trash-o" ></i></a>
                                                    
                                                </form>
                                                    </td>
                                                </tr>
                                            <?php } ?>

                        
                        
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                
                
                
            </div>
            <?php
            //include_once('rightsidebar.php'); 
            ?>
            <!-- MODAL -->
            <!--<div id="dialog" class="modal-block mfp-hide">
                <section class="panel panel-info panel-color">
                    <header class="panel-heading">
                        <h2 class="panel-title">Are you sure?</h2>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-text">
                                <p>Are you sure that you want to delete this row?</p>
                            </div>
                        </div>

                        <div class="m-t-20">
                            <div class="text-right">
                                <button type="button" id="dialogConfirm" class="btn btn-primary waves-effect waves-light">Confirm</button>
                                <button type="button" id="dialogCancel" class="btn btn-default waves-effect">Cancel</button>
                            </div>
                        </div>
                    </div>
                    
                </section>
            </div>-->
            <!-- end Modal -->
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

    <script src="assets/js/jquery.app.js"></script>

    <!-- Examples -->
    <script src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script> 
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/pages/datatables.editable.init.js"></script>

    <footer class="footer text-right" style="color:white; background-color:#317eeb">
                    2022 © MARIAMA DIOP FALL 777666415 LAS\IT\GRF .
                </footer>

</body>
</html>