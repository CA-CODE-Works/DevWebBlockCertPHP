<?php
//$tokenuser = getenv('tokenuser');

$allowed_users = array(
	'admin' => password_hash('guzman', PASSWORD_BCRYPT),
);

?>
