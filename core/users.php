<?php 
$tokenuser = getenv('tokenuser');

$allowed_users = array(
	'admin' => password_hash($tokenuser, PASSWORD_BCRYPT), 
);

?>


