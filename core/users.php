<?php
//$tokenuser = getenv('tokenuser');

$allowed_users = array(
	'admin' => password_hash('koryaka', PASSWORD_BCRYPT),
);

?>
