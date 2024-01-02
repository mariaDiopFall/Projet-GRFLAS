<?php
require "connexion.php";
session_start();
                     
//DEBUT PROGRAMME - CREATION REFERENCE EN AUTOMATIQUE - DEBUT PROGRAMME
                     
// Ici je souhaite créer la référence
// La première étape consiste à me donner accès à la base de données
                         
                        //$Acces_Registre_RefPDP = $Bdd -> query('SELECT * FROM MaTable');
                        //SELECT MAX(id) FROM table
                        $req = "SELECT * FROM rapport_etat_piste_rcr WHERE id_rapport =  (SELECT MAX(id_rapport) FROM rapport_etat_piste_rcr)";
                        $result = $conn->query($req);  
// Je veux créer une référence
// Cette dernière commence par la date
// Je regarde dans un premier temps si aucune référence n'a été fait ce jour
                         
// Je récupère la date du jour et la découpe en AA MM et JJ
                         
                        $Date_Du_Jour = date("y-m-d");
                         
$Annee = substr($Date_Du_Jour, 0, 2);
$Mois = substr($Date_Du_Jour, 3,2);
$Jour = substr($Date_Du_Jour, 6,2);
$M_Recherche = $result -> fetch();
                        echo $Numero_Reg_Big = intval($M_Recherche['id_rapport']);
                        echo 'ET';
                         
// Je regarde désormais dans ma table dans l'ordre suivant Si AA => MM => JJ
// Pour cela je parcours toute ma table avec un while
                         
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
                         
                       echo   $Numero_Reg_Big = $Numero_Reg_Big + 1;
                       echo 'ET';
                         
                        // NOus allons maintenant faire en sorte de toujours avoir 4 numéros pour notre
                        // Numero_Reg_Big
                         
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

                        /*$reqPiste = "INSERT INTO rapport_etat_piste_rcr (
                            num_rapport)
                        VALUES ('$Numero_Reg_Big' ) ";   
                        $resultPiste = $conn->query($reqPiste);

                        if($resultPiste)
                       {
                           echo "<b><span style='color:red;'>ok reference</span></b>";
                       }
                       else
                       {
                           echo "<b><span style='color:red;'>L'enregistrement a échoué, veuillez réessayer</span></b>";
                       }*/
                    // FIN PROGRAMME - CREATION REFERENCE EN AUTOMATIQUE - FIN PROGRAMME
                     
                    ?>