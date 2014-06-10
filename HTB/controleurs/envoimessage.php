<meta charset="utf-8" />
<?php

 
$mail=$_POST['mail']; 
$sujet=$_POST['sujet'];
$contenumail=$_POST['contenumail'];




$destinataire = 'paulm-f@hotmail.fr';
$headers = "From: \"expediteur moi\"<paulm-f@hotmail.fr>\n";
$headers .= "Reply-To: paulm-f@hotmail.fr\n";
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