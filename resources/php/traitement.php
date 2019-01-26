<?php  if ( isset($_POST['title']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['textarea']) ) {


	$title = $_POST['title'];
	$nom = $_POST['nom'];
	$mail = $_POST['email'];
	$textarea = $_POST['textarea'];
	$to = 'clknature@gmail.com';
	$subject = 'Formulaire CLK Nature&Palette';
	$body = '<html>
				<body>
					<h2> Formulaire Rempli </h2>
					<hr>
					<p> Titre : '.$title.'</p>
					<p> Nom : '.$nom.' </p>
					<p> Mail : '.$mail.' </p>
					<p> Message : '.$textarea.' </p>
				</body>
			</html>';

		// Headers 
		$headers .= 'From: CLK Nature et Palette <cedric@clknatureetpalette.fr>' . "\n";
		$headers .= "Reply_To :".$mail."\n";
		$headers .= "MIME-Version: 1.0"."\n";
		$headers .= "Content-type: text/html; charset=utf8;";

		// send 
		$send = mail($to, $subject, $body, $headers);
		if ($send) {
			echo '<br>';
			echo 'Votre message est envoyé';
		} else {
			echo 'erreur';
		}
	}
?>

<!DOCTYPE html>
<html>
<body>
	<p id="retour"> <a href="index.html"> <i class="fas fa-arrow-left"></i> Retour au site </a></p> 
</body>
</html>