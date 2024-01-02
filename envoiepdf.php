
<?php
session_start();
//error_reporting(-1);
require 'C:\xampp\htdocs\GRFLAS\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\GRFLAS\PHPMailer\src\SMTP.php';
//require 'C:\xampp\htdocs\GRFLAS\PHPMailer\src\Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
$mail = new PHPMailer;
//$mail = new PHPMailer(True);
// Connexion à la BDD (à personnaliser)
$link = mysqli_connect('localhost','root','','piste');
// Si base de données en UTF-8, utiliser la fonction utf8_decode pour tous les champs de texte à afficher
// extraction des données à afficher dans le sous-titre (nom du voyageur et dates de son voyage)
$requete = "SELECT * FROM rapport_etat_piste_rcr WHERE id_rapport = (SELECT MAX(id_rapport) FROM rapport_etat_piste_rcr)";
$result = mysqli_query($link, $requete);
// tableau des résultats de la ligne > $data_voyageur['nom_champ']
mysqli_free_result($result);
// Appel de la librairie FPDF
require('C:\xampp\htdocs\GRFLAS\fpdf.php');

// Création de la class PDF
class PDF extends FPDF {
	// Header
	function Header() {
		// Logo : 8 >position à gauche du document (en mm), 2 >position en haut du document, 80 >largeur de l'image en mm). La hauteur est calculée automatiquement.
		$this->Image('https://image.jimcdn.com/app/cms/image/transf/none/path/s411039637905c6a0/image/id0abf5d5e8cfbc09/version/1623158161/image.jpg',8,2,70);
		// Saut de ligne 30 mm
		$this->Ln(30);
		$this->SetFont('Helvetica','B',14);
	// fond de couleur gris (valeurs en RGB)
	$this->setFillColor(255, 255, 255);
	 // position du coin supérieur gauche par rapport à la marge gauche (mm)
	 $this->SetY(245);

	$this->SetX(110);
	// Texte : 90 >largeur ligne, 8 >hauteur ligne. Premier 0 >pas de bordure, 1 >retour à la ligneensuite, C >centrer texte, 1> couleur de fond ok	
	$this->Cell(100,10,$_SESSION['prenom'].' '.$_SESSION['nom'],0,1,'C',1);
	// Saut de ligne 10 mm
	$this->Ln(10);		
	//$result=query($_SESSION['signature']);

	$this->Image('img/'.$_SESSION['prenom'].'.png',130,255,70);

		// Titre gras (B) police Helbetica de 14
		$this->SetFont('Helvetica','B',14);
		// fond de couleur gris (valeurs en RGB)
		$this->setFillColor(0,150,230);
 		// position du coin supérieur gauche par rapport à la marge gauche (mm)
		 $this->SetY(50);

		$this->SetX(55);
		// Texte : 90 >largeur ligne, 8 >hauteur ligne. Premier 0 >pas de bordure, 1 >retour à la ligneensuite, C >centrer texte, 1> couleur de fond ok	
		$this->Cell(100,10,"RUNWAY CONDITION REPORT FORM ",0,1,'C',1);
		// Saut de ligne 10 mm
		$this->Ln(10);		

    		// Titre gras (B) police Helbetica de 14
		$this->SetFont('Helvetica','B',14);
		// fond de couleur gris (valeurs en RGB)
		$this->setFillColor(0,150,230);
 		// position du coin supérieur gauche par rapport à la marge gauche (mm)
     $this->SetY(155);
     $this->SetX(55);
     // Texte : 90 >largeur ligne, 8 >hauteur ligne. Premier 0 >pas de bordure, 1 >retour à la ligneensuite, C >centrer texte, 1> couleur de fond ok	
     $this->Cell(100,10,"FORMULAIRE D'ETAT DE PISTE",0,1,'C',1);
   
		// Saut de ligne 10 mm
		$this->Ln(10);	
	}
	// Footer
	function Footer() {
		// Positionnement à 1,5 cm du bas
		$this->SetY(-15);
		// Police Arial italique 8
		$this->SetFont('Helvetica','I',9);
		// Numéro de page, centré (C)
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}


// On active la classe une fois pour toutes les pages suivantes
// Format portrait (>P) ou paysage (>L), en mm (ou en points > pts), A4 (ou A5, etc.)
$pdf = new PDF('P','mm','A4');

// Nouvelle page A4 (incluant ici logo, titre et pied de page)
$pdf->AddPage();
// Polices par défaut : Helvetica taille 9
$pdf->SetFont('Helvetica','',9);
// Couleur par défaut : noir
$pdf->SetTextColor(0);
// Compteur de pages {nb}
$pdf->AliasNbPages();


/* Sous-titre calées à gauche, texte gras (Bold), police de caractère 11
$pdf->SetFont('Helvetica','B',11);
// couleur de fond de la cellule : gris clair
$pdf->setFillColor(230,230,230);
// Cellule avec les données du sous-titre sur 2 lignes, pas de bordure mais couleur de fond grise
$pdf->Cell(75,6,'DU '.$data_voyageur['date_deb'].' AU '.$data_voyageur['date_fin'],0,1,'L',1);		
$pdf->Cell(75,6,strtoupper(utf8_decode($data_voyageur['prenom'].' '.$data_voyageur['nom'])),0,1,'L',1);				
$pdf->Ln(10); // saut de ligne 10mm	*/



// Fonction en-tête des tableaux en 3 colonnes de largeurs variables
function entete_table($position_entete) {
	global $pdf;
	$pdf->SetDrawColor(116, 208, 241); // Couleur du fond RVB
	$pdf->SetFillColor(169, 234, 254); // Couleur des filets RVB
	$pdf->SetTextColor(0); // Couleur du texte noir
	$pdf->SetY($position_entete);
	// position de colonne 1 (10mm à gauche)	
	$pdf->SetX(10);
	$pdf->Cell(25,8,'AERODROME',1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne
	// position de la colonne 2 (70 = 10+60)
	$pdf->SetX(35); 
	$pdf->Cell(25,8,'DATE&TIME',1,0,'C',1);
	// position de la colonne 3 (130 = 70+60)
	$pdf->SetX(60); 
	$pdf->Cell(10,8,'RWY',1,0,'C',1);

  $pdf->SetX(70); 
  $pdf->Cell(15,8,'RWYCC',1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne
	// position de la colonne 2 (70 = 10+60)
	$pdf->SetX(85); 
	$pdf->Cell(25,8,'%COVERAGE',1,0,'C',1);
	// position de la colonne 3 (130 = 70+60)
	$pdf->SetX(110); 
	$pdf->Cell(25,8,'DEPTH IN MM',1,0,'C',1);
	// position de la colonne 3 (130 = 70+60)
	$pdf->SetX(135); 
	$pdf->Cell(70,8,'CONTAMINENT',1,0,'C',1);

	$pdf->Ln(); // Retour à la ligne
}
// AFFICHAGE EN-TÊTE DU TABLEAU
// Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (60 mm)
$position_entete = 70;
// police des caractères
$pdf->SetFont('Helvetica','',9);
$pdf->SetTextColor(0);
// on affiche les en-têtes du tableau
entete_table($position_entete);


$position_detail = 78; // Position ordonnée = $position_entete+hauteur de la cellule d'en-tête (60+8)
/*$requete2 = "SELECT * FROM gastro WHERE id_voyageur='1'";
$result2 = mysqli_query($link, $requete2);*/
$requete = "SELECT * FROM rapport_etat_piste_rcr WHERE id_rapport = (SELECT MAX(id_rapport) FROM rapport_etat_piste_rcr)";
$result = mysqli_query($link, $requete);

while ($data_rapport = mysqli_fetch_array($result)) {
	// position abcisse de la colonne 1 (10mm du bord)
	$pdf->SetY($position_detail);
	$pdf->SetX(10);
	$pdf->MultiCell(25,10,'GOBD',1,'C');
    // position abcisse de la colonne 2 (70 = 10 + 60)	
	$pdf->SetY($position_detail);
	$pdf->SetX(35); 
	$pdf->MultiCell(25,10,utf8_decode($data_rapport['date_time']),1,'C');
	// position abcisse de la colonne 3 (130 = 70+ 60)
	$pdf->SetY($position_detail);
	$pdf->SetX(60); 
	$pdf->MultiCell(10,10,$data_rapport['rwy'],1,'C');
  $pdf->SetY($position_detail);
	$pdf->SetX(70); 
	$pdf->MultiCell(15,10,$data_rapport['rwycc'],1,'C');
  $pdf->SetY($position_detail);
	$pdf->SetX(85); 
	$pdf->MultiCell(25,10,$data_rapport['coverage'],1,'C');
  $pdf->SetY($position_detail);
	$pdf->SetX(110); 
	$pdf->MultiCell(25,10,$data_rapport['depth_in_mm'],1,'C');
  $pdf->SetY($position_detail);
	$pdf->SetX(135); 
	$pdf->MultiCell(70,10,$data_rapport['contaminent'],1,'C');



	// on incrémente la position ordonnée de la ligne suivante (+8mm = hauteur des cellules)	
	$position_detail += 10; 
}
mysqli_free_result($result);

// Fonction en-tête des tableaux en 3 colonnes de largeurs variables
function entete2_table($position_entete) {
	global $pdf;
	$pdf->SetDrawColor(116, 208, 241); // Couleur du fond RVB
	$pdf->SetFillColor(169, 234, 254); // Couleur des filets RVB
	$pdf->SetTextColor(0); // Couleur du texte noir
	$pdf->SetY($position_entete);
	// position de colonne 1 (10mm à gauche)	
	$pdf->SetX(10);
	$pdf->Cell(100,10,'Situation Awareness Section',1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne
	// position de la colonne 2 (70 = 10+60)
	$pdf->SetX(110); 
	$pdf->Cell(95,10,'Reduced lenght if applicable',1,0,'C',1);
	

	$pdf->Ln(); // Retour à la ligne
}
// AFFICHAGE EN-TÊTE DU TABLEAU
// Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (60 mm)
$position_entete = 88;
// police des caractères
$pdf->SetFont('Helvetica','',9);
$pdf->SetTextColor(0);
// on affiche les en-têtes du tableau
entete2_table($position_entete);


$position_detail = 98; // Position ordonnée = $position_entete+hauteur de la cellule d'en-tête (60+8)
/*$requete2 = "SELECT * FROM gastro WHERE id_voyageur='1'";
$result2 = mysqli_query($link, $requete2);*/
$requete = "SELECT * FROM rapport_etat_piste_rcr WHERE id_rapport = (SELECT MAX(id_rapport) FROM rapport_etat_piste_rcr)";
$result = mysqli_query($link, $requete);

while ($data_rapport = mysqli_fetch_array($result)) {
	// position abcisse de la colonne 1 (10mm du bord)
	$pdf->SetY($position_detail);
	$pdf->SetX(10);
	$pdf->MultiCell(100,10,utf8_decode($data_rapport['situational_awar_sectionan1']).". ".utf8_decode($data_rapport['situational_awar_sectionan2']).". ".utf8_decode($data_rapport['situational_awar_sectionan3']).".".utf8_decode($data_rapport['manoeuvrean']),1,'C');
	/*$pdf->SetY(108);
	$pdf->SetX(10);
	$pdf->MultiCell(100,10,utf8_decode('Tiers2:'.$data_rapport['situational_awar_sectionan2']),1,'C');
	$pdf->SetY(118);
	$pdf->SetX(10);
	$pdf->MultiCell(100,10,utf8_decode('Tiers3:'.$data_rapport['situational_awar_sectionan3']),1,'C');*/
    // position abcisse de la colonne 2 (70 = 10 + 60)	
	$pdf->SetY($position_detail);
	$pdf->SetX(110); 
	$pdf->MultiCell(95,30,'..............',1,'C');
	// position abcisse de la colonne 3 (130 = 70+ 60)
	


	// on incrémente la position ordonnée de la ligne suivante (+8mm = hauteur des cellules)	
	$position_detail += 10; 
}
mysqli_free_result($result);






// Fonction en-tête des tableaux en 3 colonnes de largeurs variables
function entete3_table($position_entete2) {
	global $pdf;
	$pdf->SetDrawColor(116, 208, 241); // Couleur du fond RVB
	$pdf->SetFillColor(169, 234, 254); // Couleur des filets RVB
	$pdf->SetTextColor(0); // Couleur du texte noir

 /* $pdf->SetY(160);

*$pdf->SetX(60);
	$pdf->Cell(90,8,"RAPPORT D'ETAT DE PISTES",1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne*/

	$pdf->SetY($position_entete2);


	// position de colonne 1 (10mm à gauche)	
	$pdf->SetX(10);
	$pdf->Cell(25,8,'AERODROME',1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne
	// position de la colonne 2 (70 = 10+60)
	$pdf->SetX(35); 
	$pdf->Cell(25,8,'DATE&HEURE',1,0,'C',1);
	// position de la colonne 3 (130 = 70+60)
	$pdf->SetX(60); 
	$pdf->Cell(10,8,'PISTE',1,0,'C',1);

  $pdf->SetX(70); 
  $pdf->Cell(15,8,"CODE",1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne
	// position de la colonne 2 (70 = 10+60)
	$pdf->SetX(85); 
	$pdf->Cell(25,8,'COUVERTURE',1,0,'C',1);
	// position de la colonne 3 (130 = 70+60)
	$pdf->SetX(110); 
	$pdf->Cell(25,8,'EPAISSEUR',1,0,'C',1);
	// position de la colonne 3 (130 = 70+60)
	$pdf->SetX(135); 
	$pdf->Cell(70,8,'CONTAMINANT',1,0,'C',1);

	$pdf->Ln(); // Retour à la ligne
}
// AFFICHAGE EN-TÊTE DU TABLEAU
// Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (60 mm)
$position_entete2 = 180;
// police des caractères
$pdf->SetFont('Helvetica','',9);
$pdf->SetTextColor(0);
// on affiche les en-têtes du tableau
entete3_table($position_entete2);


$position_detail = 188; // Position ordonnée = $position_entete+hauteur de la cellule d'en-tête (60+8)
/*$requete2 = "SELECT * FROM gastro WHERE id_voyageur='1'";
$result2 = mysqli_query($link, $requete2);*/
$requete = "SELECT * FROM rapport_etat_piste_rcr WHERE id_rapport = (SELECT MAX(id_rapport) FROM rapport_etat_piste_rcr)";
$result = mysqli_query($link, $requete);

while ($data_rapport = mysqli_fetch_array($result)) {
	// position abcisse de la colonne 1 (10mm du bord)
	$pdf->SetY($position_detail);
	$pdf->SetX(10);
	$pdf->MultiCell(25,10,'GOBD',1,'C');
    // position abcisse de la colonne 2 (70 = 10 + 60)	
	$pdf->SetY($position_detail);
	$pdf->SetX(35); 
	$pdf->MultiCell(25,10,utf8_decode($data_rapport['date_time']),1,'C');
	$date= utf8_decode($data_rapport['date_time']);
	// position abcisse de la colonne 3 (130 = 70+ 60)
	$pdf->SetY($position_detail);
	$pdf->SetX(60); 
	$pdf->MultiCell(10,10,$data_rapport['rwy'],1,'C');
  $pdf->SetY($position_detail);
	$pdf->SetX(70); 
	$pdf->MultiCell(15,10,$data_rapport['rwycc'],1,'C');
  $pdf->SetY($position_detail);
	$pdf->SetX(85); 
	$pdf->MultiCell(25,10,$data_rapport['coverage'],1,'C');
  $pdf->SetY($position_detail);
	$pdf->SetX(110); 
	$pdf->MultiCell(25,10,$data_rapport['depth_in_mm'],1,'C');
  $pdf->SetY($position_detail);
	$pdf->SetX(135); 
	$pdf->MultiCell(70,10,$data_rapport['contaminant'],1,'C');



	// on incrémente la position ordonnée de la ligne suivante (+8mm = hauteur des cellules)	
	$position_detail += 10; 
}
mysqli_free_result($result);

// Fonction en-tête des tableaux en 3 colonnes de largeurs variables
function entete_table2($position_entete3) {
	global $pdf;
	$pdf->SetDrawColor(116, 208, 241); // Couleur du fond RVB
	$pdf->SetFillColor(169, 234, 254); // Couleur des filets RVB
	$pdf->SetTextColor(0); // Couleur du texte noir
	$pdf->SetY($position_entete3);
	// position de colonne 1 (10mm à gauche)	
	$pdf->SetX(10);
	$pdf->Cell(100,10,'Section de la Connaissance de la Situation',1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne
	// position de la colonne 2 (70 = 10+60)
	$pdf->SetX(110); 
	$pdf->Cell(95,10,'Longueur Reduite au Cas Echeant',1,0,'C',1);
	

	$pdf->Ln(); // Retour à la ligne
}

// AFFICHAGE EN-TÊTE DU TABLEAU
// Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (60 mm)
$position_entete3 = 198;
// police des caractères
$pdf->SetFont('Helvetica','',9);
$pdf->SetTextColor(0);
// on affiche les en-têtes du tableau
entete_table2($position_entete3);


$position_detail = 208; // Position ordonnée = $position_entete+hauteur de la cellule d'en-tête (60+8)
/*$requete2 = "SELECT * FROM gastro WHERE id_voyageur='1'";
$result2 = mysqli_query($link, $requete2);*/
$requete = "SELECT * FROM rapport_etat_piste_rcr WHERE id_rapport = (SELECT MAX(id_rapport) FROM rapport_etat_piste_rcr)";
$result = mysqli_query($link, $requete);

while ($data_rapport = mysqli_fetch_array($result)) {
	// position abcisse de la colonne 1 (10mm du bord)
	$pdf->SetY($position_detail);
	$pdf->SetX(10);
	$pdf->MultiCell(100,10,utf8_decode($data_rapport['situational_awar_section1']).".".utf8_decode($data_rapport['situational_awar_section2']).".".utf8_decode($data_rapport['situational_awar_section3']).".".utf8_decode($data_rapport['manoeuvre']),1,'C');
	/*$pdf->SetY(218);
	$pdf->SetX(10);
	$pdf->MultiCell(100,10,utf8_decode('Tiers2:'.$data_rapport['situational_awar_section2']),1,'C');
	$pdf->SetY(228);
	$pdf->SetX(10);
	$pdf->MultiCell(100,10,utf8_decode('Tiers3:'.$data_rapport['situational_awar_section3']),1,'C');*/
    // position abcisse de la colonne 2 (70 = 10 + 60)	
	$pdf->SetY($position_detail);
	$pdf->SetX(110); 
	$pdf->MultiCell(95,30,'..............',1,'C');
	// position abcisse de la colonne 3 (130 = 70+ 60)
	


	// on incrémente la position ordonnée de la ligne suivante (+8mm = hauteur des cellules)	
	$position_detail += 10; 
}
mysqli_free_result($result);



//$pdf->Output('RapportPiste.pdf','D'); // affichage à l'écran
//Ou export sur le serveur
 $pdf->Output('C:\RapportPiste'.$date.'.pdf', 'F');





  /*//documentation for Output method here: http://www.fpdf.org/en/doc/output.htm
	$attach_pdf_multipart = AddAttachment(  $pdf->Output( 'pdf.php', 'S' ) );


	//define the receiver of the email 
	$to = 'mariama.diop@dakaraeroport.com';

	//define the subject of the email 
	$subject = 'Test Invoice'; 
	//create a boundary string. It must be unique 
	//so we use the MD5 algorithm to generate a random hash 
	$random_hash = md5(date('r', time())); 
	//define the headers we want passed. Note that they are separated with \r\n 
	$headers = "From: mariama.diop@dakaraeroport.com\r\nReply-To: mariama.diop@dakaraeroport.com"; 
	//add boundary string and mime type specification 
	$headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\"";       



	$msg = "Content-Type: application/octet-stream; name=\"attachment.pdf\"\r\n";
	//$msg .= "Content-Transfer-Encoding: base64\r\n";
	$msg .= "Content-Disposition: attachment\r\n";
	$msg .= $attach_pdf_multipart . "\r\n";

	$msg .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n";
	//$msg .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
	$msg .= "<p>This is text message from shohag</p>\r\n\r\n";  

	global $message;
	$message = '';
	//$mail_sent = @mail( $to, $subject, $msg, $headers );
	@mail( $to, $subject, $msg, $headers );
	if(!empty($mail_sent)):
		$message = "Invoice sent succuessfully";
	else:
		$message = "Error occured. Please try again.";
	endif;*/



	/*$mail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP 
$mail->Host = 'dakaraeroport-com.mail.protection.outlook.com'; // Spécifier le serveur SMTP
$mail->SMTPAuth = true; // Activer authentication SMTP
$mail->Username = 'mariama.diop@dakaraeroport.com'; // Votre adresse email d'envoi
$mail->Password = 'secret'; // Le mot de passe de cette adresse email
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Accepter SSL
$mail->Port = 25;*/

$mail->setFrom('mariamadiop07@gmail.com', 'AirSide'); // Personnaliser l'envoyeur
$mail->addAddress('mariama.diop@dakaraeroport.com', 'Mariama Diop'); // Ajouter le destinataire
$mail->addAddress('assane.bousso@dakaraeroport.com'); 
/*$mail->addAddress('AoccRampTwr@dakaraeroport.com'); 
$mail->addAddress('dutymanager@dakaraeroport.com');
$mail->addAddress('evenementsecurite@dakaraeroport.com'); */ 
//$mail->addAddress('notifications@anacim.sn');
//$mail->addCC('mariama.diop@dakaraeroport.com', 'Mariama Diop'); 
/*$mail->addCC('thier2000@hotmail.com', 'Thierno Yoro Diagne');
$mail->addCC('laminesamb2017@gmail.com', 'Mamadou Nicolas Samb');*/

//$mail->addCC('Seynabou.Dieye@dakaraeroport.com', 'Mariama Diop');
//$mail->addAddress('mariamadiop@esp.sn'); 
/*$mail->addReplyTo('info@example.com', 'Information'); // L'adresse de réponse
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');*/

$mail->addAttachment('C:\RapportPiste'.$date.'.pdf'); // Ajouter un attachement
/*$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */
$mail->isHTML(true); // Paramétrer le format des emails en HTML ou non

$mail->Subject = 'Rapport GRF';
$mail->Body = 'Veuillez Trouver en piece jointe le RCR genere';
$mail->AltBody = 'Bonne réception';
//Envoyer votre email comme suit :
if(!$mail->send()) {
   echo 'Erreur, message non envoyé.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
echo '<script type="text/javascript" >

alert("	Message Envoye")
if(true)
location.replace("etatpiste.php")

</script>';


}
header( "location:etatpiste.php");





?>


