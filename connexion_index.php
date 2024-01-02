<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Runway Inventory</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="style11.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    table,
    th,
    tr,
    td {
      border: 1px solid black;
      border-collapse: collapse;

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
<body>
  <?php
  require "connexion.php";
  session_start();



  ?>
  <div class="header">
    <img id="logo" src="https://image.jimcdn.com/app/cms/image/transf/none/path/s411039637905c6a0/image/id0abf5d5e8cfbc09/version/1623158161/image.jpg" alt="">
    <div style="text-align:right">
      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <a type="button" href="etatpiste.php" class="btn btn-primary btn-lg  px-5 RSCP" type="submit">
          Rapport Sur L'État des Surfaces de Pistes</a>
        <a onclick="document.getElementById('id01').style.display='block'" 
        class="btn btn-primary  btn-lg px-5 ADD">Ajouter fiche de collecte +</a>
      </div>
    </div>
  </div>



  <div class="container1">
    <div class="btn-holder">
      <form action="deconnexion.php" method="post" style="text-align:center;">
        <button class="btn btn-primary btn-lg px-5" type="submit">Deconnexion</button>
      </form>
    </div>
  </div>
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-blue">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <h2 style="text-align:center;">Formulaire de collecte de données</h2>
      </header>

      <div class="w3-container">

        <div class="container">
          <form method='post' action="traitement_donnee.php" href="etatpiste.php">
            <div class="col-15">
              <label for="TIERS1">
                <h1 style="text-align:center;">Tiers1</h1>
              </label>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="epais1">Epaisseur</label>
              </div>
              <div class="col-75">
                <input type="text" id="epais1" name="epais1" placeholder="05,1" required>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="distCont1">Distance Contaminée</label>
              </div>
              <div class="col-75">
                <input type="text" id="distCont1" name="distCont1" placeholder="584" required>
              </div>
            </div>
            
            <div class="row">
              <div class="col-25">
                <label for="cfl1">CFL</label>
              </div>
              <div class="col-75">
                <input type="text" id="cfl1" name="cfl1" placeholder="cfl" onfocusout="getAction1()">
                <p id='cf1alerteValue'></p>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="info1">Informations Complémentaires</label>
              </div>
              <div class="col-75">
                <textarea id="info1" name="info1" placeholder="Write something.." style="height:100px" ></textarea>
                <p id='cfl1alerte'></p>
              
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="info1an">Additional information</label>
              </div>
              <div class="col-75">
                <textarea id="info1an" name="info1an" placeholder="Write something.." style="height:100px" ></textarea>
                <p id='cfl1alerte'></p>              
              </div>
            </div>

            <div class="container">
              <div class="col-15">
                <label for="TIERS2">
                  <h1 style="text-align:center;">Tiers2</h1>
                </label>

                <div class="row">
                  <div class="col-25">
                    <label for="epais2">Epaisseur</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="epais2" name="epais2" placeholder="05,1" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="distCont2">Distance Contaminée</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="distCont2" name="distCont2" placeholder="584" required>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-25">
                    <label for="cfl2">CFL</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="cfl2" name="cfl2" placeholder="cfl"  onfocusout="getAction2()">
                    <p id='cf2alerteValue'></p>

                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="info2">Informations Complémentaires</label>
                  </div>
                  <div class="col-75">
                    <textarea id="info2" name="info2" placeholder="Write something.." style="height:100px" ></textarea>
                    <p id='cfl2alerte'></p>
                  </div>
                </div>
                <div class="row">
                      <div class="col-25">
                         <label for="info2an">Additional information</label>
                      </div>
                  <div class="col-75">
                    <textarea id="info2an" name="info2an" placeholder="Write something.." style="height:100px" ></textarea>
                    <p id='cfl2alerte'></p>              
                  </div>
           
                </div>

                <div class="col-15">
                  <label for="TIERS3">
                    <h1 style="text-align:center;">Tiers3</h1>
                  </label>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="epais3">Epaisseur</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="epais3" name="epais3" placeholder="05,1" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="distCont3">Distance Contaminée</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="distCont3" name="distCont3" placeholder="584" required>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-25">
                    <label for="cfl3">CFL</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="cfl3" name="cfl3" placeholder="cfl"  onfocusout="getAction3()">
                    <p id='cf3alerteValue'></p>

                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="info3">Informations Complémentaires</label>
                  </div>
                  <div class="col-75">
                    <textarea id="info3" name="info3" placeholder="Write something.." style="height:100px" ></textarea>
                    <p id='cfl3alerte'></p>
                  </div>
                </div>

                <div class="row">
                      <div class="col-25">
                         <label for="info3an">Additional information</label>
                      </div>
                  <div class="col-75">
                    <textarea id="info3an" name="info3an" placeholder="Write something.." style="height:100px" ></textarea>
                    <p id='cfl3alerte'></p>              
                  </div>
           
                </div>

                <div class="col-15">
                  <label for="airmanœuvre">
                    <h1 style="text-align:center;">Informations sur l'aire de manœuvre</h1>
                  </label>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="vide"></label>
                  </div>
                <div class="col-75">
                    <textarea id="manœuvre" name="manœuvre" placeholder="Write something.." style="height:100px" ></textarea>
                    
                  </div>
                  </div>

                <div class="row">
                  <button onclick="getAction()" class="btn btn-primary waves-effect waves-light" name="enregistrer" type="submit">Enregistrer</button>

                </div>
                

              </div>

            </div>
        </div>
        <br><br><br>
        <footer class="footer text-right" style="color:white; background-color:#317eeb">
                    2022 © MARIAMA DIOP FALL 777666415 LAS\IT\GRF .
                </footer>

      </div>
    </div>
<script type="text/javascript">
  function getAction1(){
    var cfl1=document.getElementById("cfl1").value
    if(cfl1<=0.5)
    {
      document.getElementById("cfl1alerte").innerHTML="Le champ est obligatoire";
      document.getElementById("cfl1alerte").style.fontSize="15px";
      document.getElementById("cfl1alerte").style.color="red";
      document.getElementById("info1").style.border="1px solid red";
    }
  }
  function getAction2(){
    var cfl2=document.getElementById("cfl2").value
    if(cfl2<=0.5)
    {
      document.getElementById("cfl2alerte").innerHTML="Le champ est obligatoire";
      document.getElementById("cfl2alerte").style.fontSize="15px";
      document.getElementById("cfl2alerte").style.color="red";
      document.getElementById("info2").style.border="1px solid red";
    }
  }
  function getAction3(){
    var cfl3=document.getElementById("cfl3").value
    if(cfl3<=0.5)
    {
      document.getElementById("cfl3alerte").innerHTML="Le champ est obligatoire";
      document.getElementById("cfl3alerte").style.fontSize="15px";
      document.getElementById("cfl3alerte").style.color="red";
      document.getElementById("info3").style.border="1px solid red";
    }
  }
  function getAction(){
    var cfl1=document.getElementById("cfl1").value
    var cfl2=document.getElementById("cfl2").value
    var cfl3=document.getElementById("cfl3").value
    var info1=document.getElementById("info1").value
    var info2=document.getElementById("info2").value
    var info3=document.getElementById("info3").value

    if((info1=='' && cfl1<=0.5) || (info2=='' && cfl2<=0.5) || (info3=='' && cfl3<=0.5) )
    {
      alert("Tous les champs obligatoires ne sont pas remplis!!")
    }
  }

  /*function getActionNB(){
    var epais1 = document.getElementById("epais1").style.width;
      if(epais1 < 2){
        document.getElementById("epais1alerte").innerHTML="la valeur de epaiseur s'ecrit avec 2 chiffres";
        document.getElementById("epais1alerte").style.fontSize="15px";
        document.getElementById("epais1alerte").style.color="red";
        document.getElementById("epais1").style.border="1px solid red";
      }
  }
  function getActionNB2(){
    var epais2 = document.getElementById("epais2").style.width;
      if(epais2 < 2){
        document.getElementById("epais2alerte").innerHTML="la valeur de epaiseur s'ecrit avec 2 chiffres";
        document.getElementById("epais2alerte").style.fontSize="15px";
        document.getElementById("epais2alerte").style.color="red";
        document.getElementById("epais2").style.border="1px solid red";
      }
  }
  function getActionNB3(){
    var epais3 = document.getElementById("epais3").style.width;
      if(epais3 < 2){
        document.getElementById("epais3alerte").innerHTML="la valeur de epaiseur s'ecrit avec 2 chiffres";
        document.getElementById("epais3alerte").style.fontSize="15px";
        document.getElementById("epais3alerte").style.color="red";
        document.getElementById("epais3").style.border="1px solid red";
      }
  }
*/


</script>

</body>

</html>