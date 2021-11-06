<?php

use PitouFW\Core\Alert;
use PitouFW\Core\Persist;
use PitouFW\Entity\Banned;

function sendNotif($message) {
	$api_url = 'https://api.telegram.org/bot';
	$token = 'xxxxx';
	$method = 'sendMessage';
	$chat_id = 111107564;
	$text_msg = '*Contact depuis peter.cauty.fr*' . "\n\n" . $message;

	$params = [
		'chat_id' => $chat_id,
		'text' => $text_msg,
		'parse_mode' => 'Markdown',
		'disable_web_page_preview' => true
	];

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $api_url . $token . '/' . $method);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = json_decode(curl_exec($ch));
	curl_close($ch);
}

if (!CONTACT_ENABLED) {
    Alert::error('Le formulaire de contact est temporairement désactivé. Merci de votre compréhension');
	header('location: ' . WEBROOT);
	die;
}

if ($_POST['company'] !== '') {
    $banned = new Banned(
        0,
        $_SERVER['REMOTE_ADDR']
    );
    Persist::create($banned);
}

if (Persist::exists('Banned', 'ip', $_SERVER['REMOTE_ADDR'])) {
	header('HTTP/1.1 403 Fordibben');

	echo '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
	<html><head>
	<title>403 Forbidden</title>
	</head><body>
	<h1>Forbidden</h1>
	<p>You don\'t have permission to access this resource.</p>
	<hr>
	<address>Apache/2.4.38 (Debian) Server at peter.cauty.fr Port 80</address>
	</body></html>';
	die;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || $_POST['name'] === '' || $_POST['email'] === '' || $_POST['message'] === '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	Alert::error('Tous les champs doivent être remplis.');
    header('location: ' . WEBROOT);
	die;
}

$message = 'De: ' . $_POST['name'] . ' <' . $_POST['email'] . '>
À: Peter Cauty <peter@cauty.fr>

' . $_POST['message'];

sendNotif($message);

Alert::success('Votre message a été envoyé avec succès !');
header('location: ' . WEBROOT);
die;