<?php
if ($_POST) {
	session_start();

	$errors = array();

	var_dump($_POST);

	if (!empty($_POST['name']) && !preg_match('/^[a-zA-Z]{3,25}+$/', $_POST['name'])) {
		$errors['name'] = 'Votre nom doit compter entre 3 et 25 caractères !';
	}
	if (!empty($_POST['mail']) && !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
		$errors['mail'] = 'Veuillez renseigner un email valide !';
	}
	if (!empty($_POST['subject']) && strlen($_POST['subject']) <= 3 && strlen($_POST['subject']) >= 100) {
		$errors['subject'] = 'L\'object doit compter entre 3 et 100 caractères !';
	}
	if (!empty($_POST['message']) && strlen($_POST['message']) <= 3 && strlen($_POST['message']) >= 500) {
		$errors['message'] = 'Votre message doit compter entre 3 et 500 caractères !';
	}

	if (!empty($errors)) {
		$_SESSION['errors'] = $errors;
		$_SESSION['inputs'] = $_POST;
		header('Location: ../index.php?#contact');

	}else {
		$to      = 'stiwy@caritey-developpement.fr';
	    $subject = $_POST['subject'];
	    $message = 'De :' . $_POST['name']  . "\r\n" . $_POST['message'];
	    $message = wordwrap($message, 70, "\r\n");
	    $headers = 'From: ' . $_POST['mail'] . "\r\n" .
	     'Reply-To: ' . $_POST['mail'] . "\r\n" .
	     'X-Mailer: PHP/' . phpversion();

     	mail($to, $subject, $message, $headers);

		$_SESSION['success'] = 'Votre email à bien été envoyé !';
		header('Location: ../index.php?#contact');
	}
}else {
	header('Location: index.php');
}
	
?>