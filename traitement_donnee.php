
<?php

require "connexion.php";
session_start();

//s'il clik sur le bouton enregistrer(dont le name=enregistrer)
            if (isset($_POST['enregistrer'])){
                $manœuvre = $_POST['manœuvre'];
                //pour tiers 1
                $tiers1 = 1; 
                $epais1 = $_POST['epais1'];
                
                $distCont1 = $_POST['distCont1'];               
                $cfl1 = $_POST['cfl1'];
                $info1 = $_POST['info1'];
                $info1an = $_POST['info1an'];

                $tiers2 = 2; 
                $epais2 = $_POST['epais2'];
                
                $distCont2 = $_POST['distCont2'];
                $cfl2 = $_POST['cfl2'];
                $info2 = $_POST['info2'];
                $info2an  = $_POST['info2an'];
                $tiers3 = 3; 
                $epais3 = $_POST['epais3'];
                
                $distCont3 = $_POST['distCont3'];
                $cfl3 = $_POST['cfl3'];
                $info3 = $_POST['info3'];
                $info3an = $_POST['info3an'];
        
            
            
                 // convertir la valeur de la distance contaminée en entier
                 $distCont1 = (float)$distCont1;
                 // echo $float; // Sortie: 5.21
                $couv1 =  ($distCont1 / 1167) * 100 ;
                //pour tiers 2
               
                 // convertir la valeur de la distance contaminée en entier
                 $distCont2 = (float)$distCont2;
                 // echo $float; // Sortie: 5.21
                $couv2 =  ($distCont2 / 1167) * 100 ;
                //pour tiers 3
                
                 // convertir la valeur de la distance contaminée en entier
                 $distCont3 = (float)$distCont3;
                 // echo $float; // Sortie: 5.21
                $couv3 =  ($distCont3 / 1167) * 100 ;

                echo $epais1;


                $req = "INSERT INTO caracteristique_piste (
                    epaisseur1,couverture1, CFL1, informations_compl1, id_niveau_FK1,
                    epaisseur2, couverture2, CFL2, informations_compl2, id_niveau_FK2,
                    epaisseur3,couverture3, CFL3, informations_compl3, id_niveau_FK3, distance1, distance2, distance3)
                 VALUES ('$epais1', '$couv1', '$cfl1', '$info1', '$tiers1',
                         '$epais2', '$couv2', '$cfl2', '$info2', '$tiers2',
                         '$epais3', '$couv3', '$cfl3', '$info3', '$tiers3', '$distCont1', '$distCont2', '$distCont3')";

                          
                $result = $conn->query($req); 
                //si l'enregistrement a fonctionner
                if($result)
                    {
                        if($_SESSION['profil']=='Administrateur'){
                            header("location:connexionAdmin_index.php");
                        }
                        else{
                            header("location:connexion_index.php");

                        }
                    }
                    else
                    {
                        echo "<b><span style='color:red;'>L'enregistrement a échoué, veuillez réessayer</span></b>";
                    }
        
                  echo $dateJour = date("Y-m-d"); 
    
              $reqDate = "SELECT * FROM caracteristique_piste WHERE date_evaluation  = '$dateJour'";
              $result1 = $conn->query($reqDate);


      
              // Test de la fonction
    
              while ($row=$result1->fetch()){
    
                       //echo '</br>num TIERS= ' ,$row['id_niveau_FK'] ,'     et</br>   ';  
                       //echo '</br>date evaluation= ' ,$row['date_evaluation'] ,'     et</br>   ';
                       //echo '</br>heure evaluation= ' ,$row['heure_evaluation'] ,'     et</br>   ';
                      //echo '</br>epaisseur= ' ,$row['epaisseur'] ,'     et</br>   ';
                        //echo '</br>%couverture= ' ,$row['couverture'] ,'     </br>   ';

      $datenormal = $row['date_evaluation'];
      $heurenormal = $row['heure_evaluation'];  
      $aerodrome = 'GOBD';
      //on récupère le mois le jour l'heure et les minutes
      $mois = substr($row['date_evaluation'],5,2);
      $jour = substr($row['date_evaluation'],8,2);
      $heure = substr($row['heure_evaluation'],0,2);
      $min = substr($row['heure_evaluation'],3,2);
      //on concatène
      echo '</br>';
      echo $dateTime =  $mois.$jour.$heure.$min;
      //numéro de la piste 
      $rwy = '01';


        if($row['id_niveau_FK1'] == 1 && $row['epaisseur1']<=3 && $row['couverture1']<=25 ){
           
            $rwycc1 = 6;
            if($row['couverture1']>=0 && $row['couverture1']<=9){
                $couverture1 = 'NR';
            }
            if($row['couverture1']>9 && $row['couverture1']<=25){
                $couverture1 = 25;
            }
            $depthinmm1 =  'NR';
            $contaminent1 = 'DRY';
            $contaminent1fr = 'SECHE';
            //$situational_awar_section1 = $info1;
            $situational_awar_section1 = $info1;
            $situational_awar_section1an= $info1an;


        echo 'Bien';

      }
      
      if($row['id_niveau_FK2'] == 2 && $row['epaisseur2']<=3 && $row['couverture2']<=25 ){
        
        $rwycc2 = 6;
        if($row['couverture2']>=0 && $row['couverture2']<=9){
            $couverture2 = 'NR';
        }
        if($row['couverture2']>9 && $row['couverture2']<=25){
            $couverture2 = 25;
        }
        $depthinmm2 =  'NR';
        $contaminent2 = 'DRY';
        $contaminent2fr = 'SECHE';
        //$situational_awar_section2 = $info2;
        $situational_awar_section2 = $info2;
        $situational_awar_section2an= $info2an;


        echo 'Bien';

    }
    if($row['id_niveau_FK3'] == 3 && $row['epaisseur3']<=3 && $row['couverture3']<=25 ){
       
        $rwycc3 = 6;
        if($row['couverture3']>=0 && $row['couverture3']<=9){
            $couverture3 = 'NR';
        }
        if($row['couverture3']>9 && $row['couverture3']<=25){
            $couverture3 = 25;
        }
        $depthinmm3 =  'NR';
        $contaminent3 = 'DRY';
        $contaminent3fr = 'SECHE';
        //$situational_awar_section3 = $info3;
        $situational_awar_section3 = $info3;
        $situational_awar_section3an= $info3an;


        echo 'Bien';

    }

    if($row['id_niveau_FK1'] == 1 && $row['epaisseur1']>3 && $row['couverture1']>25 ){
       
        $rwycc1 = 2;
        if($row['couverture1']>25 && $row['couverture1']<=50){
            $couverture1 = 50;
        }
        if($row['couverture1']>50 && $row['couverture1']<=75){
            $couverture1 = 75;
        }
        if($row['couverture1']>75 && $row['couverture1']<=100){
            $couverture1 = 100;
        }
        $depthinmm1 =  $row['epaisseur1'];
        $contaminent1 = 'STANDING WATER';
        $contaminent1fr = 'EAU STAGNANTE';
        //$situational_awar_section1 = $info1;
        $situational_awar_section1 = $info1;
        $situational_awar_section1an= $info1an;


    echo 'Bien';

  }  

  if($row['id_niveau_FK2'] == 2 && $row['epaisseur2']>3 && $row['couverture2']>25 ){

    $rwycc2 = 2;
    if($row['couverture2']>25 && $row['couverture2']<=50){
        $couverture2 = 50;
    }
    if($row['couverture2']>50 && $row['couverture2']<=75){
        $couverture2 = 75;
    }
    if($row['couverture2']>75 && $row['couverture2']<=100){
        $couverture2 = 100;
    }
    $depthinmm2 =  $row['epaisseur2'];
    $contaminent2 = 'STANDING WATER';
    $contaminent2fr = 'EAU STAGNANTE';
    //$situational_awar_section2 = $info2;
    $situational_awar_section2 = $info2;
    $situational_awar_section2an= $info2an;

echo 'Bien';

}

if($row['id_niveau_FK3'] == 3 && $row['epaisseur3']>3 && $row['couverture3']>25 ){
   
    $rwycc3 = 2;
    if($row['couverture3']>25 && $row['couverture3']<=50){
        $couverture3 = 50;
    }
    if($row['couverture3']>50 && $row['couverture3']<=75){
        $couverture3 = 75;
    }
    if($row['couverture3']>75 && $row['couverture3']<=100){
        $couverture3 = 100;
    }
    $depthinmm3 =  $row['epaisseur3'];
    $contaminent3 = 'STANDING WATER';
    $contaminent3fr = 'EAU STAGNANTE';
   $situational_awar_section3 = $info3;
   $situational_awar_section3an= $info3an;


    echo 'Bien';

}

if($row['id_niveau_FK1'] == 1 && $row['epaisseur1']<=3 && $row['couverture1']>25 && $row['CFL1']>0.5){
   
    $rwycc1 = 5;
    if($row['couverture1']>=26 && $row['couverture1']<=50){
        $couverture1 = 50;
    }
    if($row['couverture1']>51 && $row['couverture1']<=75){
        $couverture1 = 75;
    }
    if($row['couverture1']>76 && $row['couverture1']<=100){
        $couverture1 = 100;
    }
    $depthinmm1 =  'NR';
    $contaminent1 = 'WET';
    $contaminent1fr = 'MOUILLEE';
    $situational_awar_section1 = $info1;
    $situational_awar_section1an= $info1an;



echo 'Bien';

}
//Gérer le coefficient de frottement 
if($row['id_niveau_FK1'] == 1 && $row['epaisseur1']<=3 && $row['couverture1']>25 && $row['CFL1']<=0.5 ){
   
    $rwycc1 = 3;
    if($row['couverture1']>=26 && $row['couverture1']<=50){
        $couverture1 = 50;
    }
    if($row['couverture1']>51 && $row['couverture1']<=75){
        $couverture1 = 75;
    }
    if($row['couverture1']>76 && $row['couverture1']<=100){
        $couverture1 = 100;
    }
    $depthinmm1 =  'NR';
    $contaminent1 = 'WET';
    $contaminent1fr = 'MOUILLEE';
    if($row['informations_compl1'] != ''){

        $situational_awar_section1 = $info1;
        $situational_awar_section1an = $info1an;
    }
    
    

echo 'Bien';

}

if($row['id_niveau_FK2'] == 2 && $row['epaisseur2']<=3 && $row['couverture2']>25  && $row['CFL2']>0.5 ){
    
    $rwycc2 = 5;
    if($row['couverture2']>=26 && $row['couverture2']<=50){
        $couverture2 = 50;
    }
    if($row['couverture2']>51 && $row['couverture2']<=75){
        $couverture2 = 75;
    }
    if($row['couverture2']>76 && $row['couverture2']<=100){
        $couverture2 = 100;
    }
    $depthinmm2 =  'NR';
    $contaminent2 = 'WET';
    $contaminent2fr = 'MOUILLEE';
   $situational_awar_section2 = $info2;
   $situational_awar_section2an= $info2an;

echo 'Bien';

}

//Gérer le coefficient de frottement 
if($row['id_niveau_FK2'] == 2 && $row['epaisseur2']<=3 && $row['couverture2']>25 && $row['CFL2']<=0.5){
    
    $rwycc2 = 3;
    if($row['couverture2']>=26 && $row['couverture2']<=50){
        $couverture2 = 50;
    }
    if($row['couverture2']>51 && $row['couverture2']<=75){
        $couverture2 = 75;
    }
    if($row['couverture2']>76 && $row['couverture2']<=100){
        $couverture2 = 100;
    }
    $depthinmm2 =  'NR';
    $contaminent2 = 'WET';
    $contaminent2fr = 'MOUILLEE';

    if($row['informations_compl2'] != ''){
        
        $situational_awar_section2 = $info2;
        $situational_awar_section2an = $info2an;


}
echo 'Bien';

}

//Gérer le coefficient de frottement 
if($row['id_niveau_FK3'] == 3  && $row['epaisseur3']<=3 && $row['couverture3']>25 && $row['CFL3']<=0.5){
   
    $rwycc3 = 3;
    if($row['couverture3']>=26 && $row['couverture3']<=50){
        $couverture3 = 50;
    }
    if($row['couverture3']>51 && $row['couverture3']<=75){
        $couverture3 = 75;
    }
    if($row['couverture3']>76 && $row['couverture3']<=100){
        $couverture3 = 100;
    }
    $depthinmm3 =  'NR';
    $contaminent3 = 'WET';
    $contaminent3fr = 'MOUILLEE';
      
    if($row['informations_compl3'] != ''){
        $situational_awar_section3 = $info3;
        $situational_awar_section3an = $info3an;
    }
echo 'Bien';


}

if($row['id_niveau_FK3'] == 3 && $row['epaisseur3']<=3 && $row['couverture3']>25 && $row['CFL3']>0.5){
   
    $rwycc3 = 5;
    if($row['couverture3']>=26 && $row['couverture3']<=50){
        $couverture3 = 50;
    }
    if($row['couverture3']>51 && $row['couverture3']<=75){
        $couverture3 = 75;
    }
    if($row['couverture3']>76 && $row['couverture3']<=100){
        $couverture3 = 100;
    }
    $depthinmm3 =  'NR';
    $contaminent3 = 'WET';
    $contaminent3fr = 'MOUILLEE';
    $situational_awar_section3 = $info3;
    $situational_awar_section3an= $info3an;



echo 'Bien';

}    

}

function test($n)
{
    if($n == 'NR')
        {
                return $n='NR';
        }
	if($n<10)
	{
		return(int) '0'.$n;
	}
	else
	{     
      return $n;		
	}
}


    echo  '</br>',$rwycc = $rwycc1.'/'.$rwycc2.'/'.$rwycc3, '</br>' ;
    echo $couverture = $couverture1.'/'.$couverture2.'/'.$couverture3, '</br>';
    echo $depthinmm = test($depthinmm1).'/'.test($depthinmm2).'/'.test($depthinmm3),  '</br>';
    echo $contaminent = $contaminent1.'/'.$contaminent2.'/'.$contaminent3, '</br>';
    echo $contaminentfr = $contaminent1fr.'/'.$contaminent2fr.'/'.$contaminent3fr, '</br>';

    if($situational_awar_section1 == '' && $situational_awar_section2=='' && $situational_awar_section3== ''){
        $situational_awar_section = $manœuvre ;
        $situational_awar_sectionan = $manœuvre ;   
     }
    if($situational_awar_section1 == '' && $situational_awar_section2=='' && $situational_awar_section3!= ''){
        $situational_awar_section = $situational_awar_section3.'</br> '.$manœuvre ;   
        $situational_awar_sectionan = $situational_awar_section3an.'</br> '.$manœuvre ;
     } 
    if($situational_awar_section1 == '' && $situational_awar_section2!='' && $situational_awar_section3!= ''){
        $situational_awar_section = $situational_awar_section2.'</br> '.$situational_awar_section3.'</br> '.$manœuvre ;
        $situational_awar_sectionan = $situational_awar_section2an.'</br> '.$situational_awar_section3an.'</br> '.$manœuvre ;
     }
     if($situational_awar_section1 != '' && $situational_awar_section2!='' && $situational_awar_section3!= ''){
        $situational_awar_section = $situational_awar_section1.'</br> '.$situational_awar_section2.'</br>'.$situational_awar_section3.'</br> '.$manœuvre ;
        $situational_awar_sectionan = $situational_awar_sectionan1.'</br> '.$situational_awar_section2an.'</br> '.$situational_awar_section3an.'</br> '.$manœuvre ;
     }
     if($situational_awar_section1 != '' && $situational_awar_section2=='' && $situational_awar_section3!= ''){
        $situational_awar_section = $situational_awar_section1.'</br>  '.$situational_awar_section3.'</br> '.$manœuvre ;
        $situational_awar_sectionan = $situational_awar_section1an.'</br> '.$situational_awar_section3an.'</br> '.$manœuvre ;
     }
     if($situational_awar_section1 != '' && $situational_awar_section2!='' && $situational_awar_section3== ''){
        $situational_awar_section = $situational_awar_section1.'</br> '.$situational_awar_section2.'</br> '.$manœuvre ;
        $situational_awar_sectionan = $situational_awar_section1an.'</br> '.$situational_awar_section2an.'</br> '.$manœuvre ;
     }
     if($situational_awar_section1 != '' && $situational_awar_section2=='' && $situational_awar_section3== ''){
        $situational_awar_section = $situational_awar_section1.'</br> '.$manœuvre ;
        $situational_awar_sectionan = $situational_awar_section1an.'</br> '.$manœuvre ;
     }


    //echo $situational_awar_section ='TIERS1: ' .$situational_awar_section1.'</br> TIERS2: '.$situational_awar_section2.'</br> TIERS3: '.$situational_awar_section3 ;
    //echo $situational_awar_sectionan ='TIERS1: ' .$situational_awar_section1an.'</br> TIERS2: '.$situational_awar_section2an.'</br> TIERS3: '.$situational_awar_section3an ;
    
    //Fonction pour la reference
    //$reqref = "SELECT * FROM rapport_etat_piste_rcr WHERE id_rapport =  (SELECT MAX(id_rapport) FROM rapport_etat_piste_rcr)";
    //$result = $conn->query($reqref);

    $req = "SELECT * FROM rapport_etat_piste_rcr WHERE id_rapport =  (SELECT MAX(id_rapport) FROM rapport_etat_piste_rcr)";
                        $result = $conn->query($req);
    $Date_Du_Jour = date("y-m-d");
                         
    $Annee = substr($Date_Du_Jour, 0, 2);
    $Mois = substr($Date_Du_Jour, 3,2);
    $Jour = substr($Date_Du_Jour, 6,2);
    $M_Recherche = $result -> fetch();
                         $Numero_Reg_Big = intval($M_Recherche['id_rapport']);
                        //echo 'ET';
                        while ($Ma_Recherche = $result -> fetch())
                        {                      
                                                    // Je regarde désormais si je retrouve l'année
                                                     
                                                    $Annee_Reg = substr($Ma_Recherche['date_normal'],0,2);
                                                     
                                                    if ($Annee_Reg == $Annee)
                                                    {
                                                        //Si je trouve l'année je recherche le mois
                                                     
                                                        $Mois_Reg = substr($Ma_Recherche['date_normal'],3,2);
                                                     
                                                        if ($Mois_Reg == $Mois)
                                                        {
                                                            //Si je trouve le mois je recherche le jour
                                                     
                                                           echo $Jour_Reg = substr($Ma_Recherche['date_normal'],6,2);
                                                             
                                                                // Si je trouve les paramètres précédents, une référence a été créé ce jour
                                                                // Je regarde donc le dernier numéro créé dans la journée
                                                            if ($Jour_Reg == $Jour)
                                                            {
                                                                //$Numero_Reg = substr($Ma_Recherche['num_rapport'],9,4);
                                                                $Numero_Reg = ($Ma_Recherche['num_rapport']);
                                                                    // Je garde en mémoire le numéro le plus grand
                                                                     
                                                                    if($Numero_Reg > $Numero_Reg_Big)
                                                                    {
                                                                        $Numero_Reg_Big = $Numero_Reg;
                                                                    }
                                                            }
                                                             
                                                        }
                                                    }  
                            }
                               $Numero_Reg_Big = $Numero_Reg_Big + 1;
                            //echo 'ET';

                       if ($Numero_Reg_Big < 10)
                        {
                            $Numero_Reg_Big = '000' . $Numero_Reg_Big;
                        }
                        elseif ($Numero_Reg_Big <100)
                        {
                            $Numero_Reg_Big = '00' . $Numero_Reg_Big;
                        }
                        elseif ($Numero_Reg_Big <1000)
                        {
                            $Numero_Reg_Big = '0' . $Numero_Reg_Big;
                        }
                        else
                        {
                            $Numero_Reg_Big = $Numero_Reg_Big;
                        }
                        echo $Numero_Reg_Big;
                        $ref = $dateTime.$Numero_Reg_Big;
    //Fin de fonction pour la reference
    

    if($aerodrome != '' && $dateTime != '' && $rwy != '' &&  $rwycc != ''  && $couverture != '' &&  $depthinmm !='' && $contaminent!=''){
        $reqPiste = "INSERT INTO rapport_etat_piste_rcr (
            num_rapport, aerodrome_Rapp, date_time, rwy, rwycc, 
            coverage, depth_in_mm, contaminent, contaminant, situational_awar_section,situational_awar_section1,
            situational_awar_section2, situational_awar_section3,  situational_awar_sectionan,
            situational_awar_sectionan1,  situational_awar_sectionan2,  situational_awar_sectionan3, date_normal, heure_normal,manoeuvre,manoeuvrean)
        VALUES ('$ref','$aerodrome', '$dateTime', '$rwy', '$rwycc', '$couverture', 
        '$depthinmm', '$contaminent', '$contaminentfr', '$situational_awar_section', 
        '$situational_awar_section1','$situational_awar_section2','$situational_awar_section3', 
        '$situational_awar_sectionan', '$situational_awar_section1an', '$situational_awar_section2an', 
        '$situational_awar_section3an', '$datenormal', '$heurenormal', '$manœuvre', '$manœuvre' ) ";   
        $resultPiste = $conn->query($reqPiste);
        if($resultPiste)
                       {
                           echo "<b><span style='color:red;'>ok Piste</span></b>";
                       }
                       else
                       {
                           echo "<b><span style='color:red;'>L'enregistrement a échoué, veuillez réessayer</span></b>";
                       }
   
   
       
       if($result1)
                       {
                           echo "<b><span style='color:red;'>ok</span></b>";
                       }
                       else
                       {
                           echo "<b><span style='color:red;'>L'enregistrement a échoué, veuillez réessayer</span></b>";
                       }

        

    }
    else
       {
        echo "<b><span style='color:red;'>L'un des champ est vide, veuillez réessayer</span></b>";
       }
    

}

?>

