

 <?php 
 include ('intervention.php');
        /*echo "Bonjour";
         $sup=($_GET['id']);
        
         //$rqt="DELETE FROM intervention  where id_intervention =.$sup;
         
        mysql_query("DELETE FROM intervention  where id_intervention =".$sup);
        //$result = $db->query($rqt);*/
         //mysql_query($rqt)or die('Erreur sql!'.$rqt.'<br/>'.mysql_error());
        //Tu recuperes l'id du contact
        
        echo "<script language='Javascript'>
               if(confirm('Voulez vous vraiment supprimer la fiche?')){
               
                $id = $_GET["id"];
                //Requete SQL pour supprimer le contact dans la base
                $req="DELETE FROM intervention WHERE id_intervention = ".$id;
                $result = $db->query($req);
                echo '<body onLoad="alert(Suppression effectuée...)">';
                echo '<meta http-equiv="refresh" content="0;URL=intervention.php">';

                mysql_close();          
               }
               else{
                alert('NON');
               } 
                </script>";
     ?>
          