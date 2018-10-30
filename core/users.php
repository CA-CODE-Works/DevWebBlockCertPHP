<?php
$tokenuser1 = getenv('tokenuser1');
$tokenuser2 = getenv('tokenuser2');
$tokenuser3 = getenv('tokenuser3');

$allowed_users = array(
	'shamal' => password_hash($tokenuser1, PASSWORD_BCRYPT),
	'danny' => password_hash($tokenuser2, PASSWORD_BCRYPT),
	'konstantin' => password_hash($tokenuser3, PASSWORD_BCRYPT),
);

?>
