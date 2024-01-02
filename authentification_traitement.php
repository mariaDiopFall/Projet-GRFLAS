<?php 
 session_start(); 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "piste";
 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
 } 
 
    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['mdp']) && !empty($_POST['passwrd']))
    {
      
       
     
        $mdp = $_POST['mdp'];
        $passwrd = $_POST['passwrd'];

        

                  

                        
                            // On insère dans la base de données
                            $pr=$_SESSION['login'];
                            $exe=mysqli_query($conn,"UPDATE users SET passwrd = '$passwrd' , pwd = 'OK' WHERE login = '$pr' ");
                            // On redirige avec le message de succès
                           
                                if($_SESSION['profil']=='Administrateur')
                                    header('location:connexionAdmin_index.php');
                                else
                                    header('location:connexion_index.php');

                                
                        die();
                  
}
?>