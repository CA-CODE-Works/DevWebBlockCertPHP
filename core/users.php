<?php 
$tokenuser = getenv('usertoken');

$allowed_users = array(
	'admin' => password_hash($tokenuser, PASSWORD_BCRYPT), 
);

?>


