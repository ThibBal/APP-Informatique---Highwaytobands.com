<meta charset="utf-8" />
<?php

require('modeles/admin.php');
$admin=mail_admin();
 
$mail=htmlspecialchars($_POST['mail']); 
$sujet=htmlspecialchars($_POST['sujet']);
$contenumail=htmlspecialchars($_POST['contenumail']);

$destinataire = $admin['mail'];
//$destinataire = 'tbalmette@gmail.com';
$headers = "From: \"$mail\"<$mail>\n";
//$headers .= "Reply-To: paulm-f@hotmail.fr\n";
$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
if(mail($destinataire,$sujet,$contenumail,$headers))
{
        $message= "L'email a bien été envoyé.";
}
else
{
        $message= "Une erreur s'est produite lors de l'envoi de l'email.";
}

 $_SESSION['temp'] = $message;

	header ('Location: index.php?page=accueil');
	
	?>