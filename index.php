<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = 'From: MyWebsiteForm';
	$to = 'stephen_gibbstesting@hotmail.com';
	$subject 'Hello';
	$honeypot = $_POST['honeypot'];

	$body = "From: $name\n Email: $email\n Message:\n $message";


	if ($_POST['submit']) {
		if ($name != '' && $email != '') {
			if($honeypot) {
				echo '<p>Get off my website you damn dirty robot!</p>'
			}
			else {
				if (mail ($to, $subject, $body, $from)) {
					echo '<p>Your message has been sent</p>';
				}
				else {
					echo '<p>An Error has occurred, please go back and try again</p>';
				}
			}
		}
		else {
			echo '<p>You must fill in all required fields!!</p>';
		}
	}
?>