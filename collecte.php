<!DOCTYPE html>
<html lang="en">
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
</style>
</head>
<body>
<?php
    require "connexion.php";
    ?>


  <div class="header">
 <img id="logo" src="https://image.jimcdn.com/app/cms/image/transf/none/path/s411039637905c6a0/image/id0abf5d5e8cfbc09/version/1623158161/image.jpg" alt="">

    <div class="contenu">
    <form action="etatpiste.php" method="post" style="text-align:right;" >
      <button  class="btn btn-primary btn-lg px-5"  type="submit">Retour au Rapport</button>
    </form>
    </div>
    </div>

    <div class="container"> 
<h2 style="text-align:center;"><cite style="text-decoration:underline;">Fiche de Collecte des Données</cite></h2>
<br><br><br><br>
<table >
  
    <tr>
        <td class="table-info">Caractéristiques</td>
        <td class="table-primary">Épaisseur de chaque Tiers</td>
        <td class="table-info">Distances Contaminées de chaque Tiers</td>
        <td class="table-primary">CFL de chaque Tiers</td>
        <td class="table-info">Informations Supplémentaires de chaque Tiers</td>
    </tr>

 
        <?php
              //$req = "SELECT * FROM rapport_etat_piste_rcr WHERE rownum >= ALL ";
              $req = "SELECT * FROM caracteristique_piste WHERE id_caract = (SELECT MAX(id_caract) FROM caracteristique_piste)";
              $affiche1 = $conn->query($req);
                            $tab = $affiche1->fetch();
        ?>
  <tr>
    <td class="table-info">Données</td>
    <td class="table-primary"><?php echo $tab['epaisseur1'].' / '.$tab['epaisseur2'].' / '.$tab['epaisseur3']?></td>
    <td class="table-info"><?php echo $tab['distance1'].' / '.$tab['distance2'].' / '.$tab['distance3']?></td>
    <td class="table-primary"><?php echo $tab['CFL1'].' / '.$tab['CFL2'].' / '.$tab['CFL3']?></td>
    <td class="table-info"><?php echo 'TIERS 1: '.$tab['informations_compl1'].'/</br> '.'TIERS 2: '.$tab['informations_compl2'].'/</br> '.'TIERS 3: '.$tab['informations_compl3'].'/'?></td>

  </tr>


</table>


</div>

</body>
</html>