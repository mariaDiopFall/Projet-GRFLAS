<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runway Inventory</title>
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
    width: 50%;
    padding: 5px;
    text-align: center;
    background-color: white;
    color: black;
    }
    caption {
    font-family: sans-serif;
    }
</style>
</head>
<body>
<?php
    require "connexion.php";
    session_start();
    ?>


        <div class="header">
 <img id="logo" src="https://image.jimcdn.com/app/cms/image/transf/none/path/s411039637905c6a0/image/id0abf5d5e8cfbc09/version/1623158161/image.jpg" alt="">

    <div class="contenu">
    <form action="connexionAdmin_index.php" method="post" style="text-align:right;" >
      <button  class="btn btn-primary btn-lg px-5"  type="submit">Retour</button>
    </form>
    </div>
    </div>
    



<div class="container"> 
<h2 style="text-align:center;"><cite style="text-decoration:underline;">RUNWAY CONDITION REPORT FORM</cite></h2>
<br>
<table >
  <tr>
    <th>Aerodrome</th>
    <th>Date & Time</th>
    <th>RWY</th>
    <th>RWYCC</th>
    <th>% Coverage</th>
    <th>Depth in mm</th>
    <th>Contaminent</th>
  </tr>
  <?php
              //$req = "SELECT * FROM rapport_etat_piste_rcr WHERE rownum >= ALL ";
              $req = "SELECT * FROM rapport_etat_piste_rcr WHERE id_rapport = (SELECT MAX(id_rapport) FROM rapport_etat_piste_rcr)";
              $affiche1 = $conn->query($req);
                            $tab = $affiche1->fetch();  
               
        ?>
  <tr>
    <td>GOBD</td>
    <td><?php echo $tab['date_time'] ?></td>
    <td>01</td>
    <td><?php echo $tab['rwycc'] ?></td>
    <td><?php echo $tab['coverage'] ?></td>
    <td><?php echo $tab['depth_in_mm'] ?></td>
    <td><?php echo $tab['contaminent'] ?></td>
  </tr>
  <tr>
      <th colspan="2" style="text-align:center;">Situational Awareness Section</th>
      <th colspan="5" style="text-align:center;">Reduced lenght if applicable</th>
  </tr>
  <tr>
    <td colspan="2" align="center"><?php echo $tab['situational_awar_sectionan'] ?></td>
    <td colspan="5" align="center">...........</td>
  </tr>

</table>


</div>
<br>
<div class="container"> 
<h2 style="text-align:center;"><cite style="text-decoration:underline;">Formulaire du Rapport d'État des Pistes</cite></h2>

<br>
<table >
  <tr>
    <th>Aérodrome</th>
    <th>Date & Heure</th>
    <th>Piste</th>
    <th>Code d'État de la Piste</th>
    <th>% Couverture</th>
    <th>Épaisseur</th>
    <th>Contaminant</th>
  </tr>
        <?php
              //$req = "SELECT * FROM rapport_etat_piste_rcr WHERE rownum >= ALL ";
              $req = "SELECT * FROM rapport_etat_piste_rcr WHERE id_rapport = (SELECT MAX(id_rapport) FROM rapport_etat_piste_rcr)";
              $affiche1 = $conn->query($req);
                            $tab = $affiche1->fetch();
        ?>
  <tr>
    <td>GOBD</td>
    <td><?php echo $tab['date_time'] ?></td>
    <td>01</td>
    <td><?php echo $tab['rwycc'] ?></td>
    <td><?php echo $tab['coverage'] ?></td>
    <td><?php echo $tab['depth_in_mm'] ?></td>
    <td><?php echo $tab['contaminant'] ?></td>
  </tr>
  <tr>
    <th colspan="2" style="text-align:center;">Partie consciente de la Situation</th>
</th>
      <th colspan="5" style="text-align:center;">Longueur réduite au cas échéant</th>
  </tr>
  <tr>
    <td colspan="2" align="center"><?php echo $tab['situational_awar_section'] ?></td>
    <td colspan="5" align="center">...........</td>
  </tr>

</table>


</div>
<div style = "text-align:center;">
  <a type="button" href="pdf.php" class="btn btn-primary waves-effect waves-light" name="publier" >Publier</a>

  <a type="button" href="collecte_Admin.php"  class="btn btn-primary waves-effect waves-light" name="verifier" >Visualiser La Fiche De Collecte</a>
</div>
<br><br>
<footer class="footer text-right" style="color:white; background-color:#317eeb">
                    2022 © MARIAMA DIOP FALL 777666415 LAS\IT\GRF .
                </footer>
</body>
</html>