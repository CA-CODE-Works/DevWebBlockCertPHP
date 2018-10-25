<?php
//$tokenuser = getenv('tokenuser');

$allowed_users = array(
	'shamal' => password_hash('siwan', PASSWORD_BCRYPT),
	'danny' => password_hash('guzman', PASSWORD_BCRYPT),
	'konstantin' => password_hash('koryaka', PASSWORD_BCRYPT),
);

?>
