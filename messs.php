<?php
//ini_set('SMTP','smtp.gmail.com');
//ini_set('smtp_port',25);
     /*$to      = 'mariama.diop@dakaraeroport.com';
     $subject = 'le sujet';
     $message = 'C:\xampp\htdocs\Projet_Piste\pdf.php';
     $headers = 'From:mariama.diop@dakaraeroport.com';
     mail($to, $subject, $message, $headers);
     echo  phpversion();*/


// random hash necessary to send mixed content
$separator = md5(time());

$eol = PHP_EOL;

// attachment name
$filename = "_Desiredfilename.pdf";

// encode data (puts attachment in proper format)
$pdfdoc = $pdf->Output("", "S");
$attachment = chunk_split(base64_encode($pdfdoc));

///////////HEADERS INFORMATION////////////
// main header (multipart mandatory) message
$headers  = "From: Sender_Name<sender@domain.com>".$eol;
$headers .= "Bcc: email@domain.com".$eol;
$headers .= "MIME-Version: 1.0".$eol; 
$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"".$eol.$eol; 
$headers .= "Content-Transfer-Encoding: 7bit".$eol;
$headers .= "This is a MIME encoded message.".$eol.$eol;

// message
$headers .= "--".$separator.$eol;
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
$headers .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
$headers .= $message.$eol.$eol;

// attachment
$headers .= "--".$separator.$eol;
$headers .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
$headers .= "Content-Transfer-Encoding: base64".$eol;
$headers .= "Content-Disposition: attachment".$eol.$eol;
$headers .= $attachment.$eol.$eol;
$headers .= "--".$separator."--";


//Email message
mail($emailto, $emailsubject, $emailbody, $headers);
 ?>