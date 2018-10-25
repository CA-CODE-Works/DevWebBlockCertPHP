<?php

if(! isset($fname, $lname, $email ) ){return false;}

// Use BlockCypher Classes
require 'php-client/cmd/bootstrap.php';

use BlockCypher\Auth\SimpleTokenCredential;
use BlockCypher\Rest\ApiContext;

// ... other classes
use BlockCypher\Api\Address;
use BlockCypher\Client\AddressClient;

$credentials = new SimpleTokenCredential(BLOCKCYPHERTOKEN);

$config = array(
	'log.LogEnabled' => true,
	'log.FileName' => 'BlockCypher.log',
	'log.LogLevel' => 'DEBUG', // PLEASE USE `FINE` LEVEL FOR LOGGING IN LIVE ENVIRONMENTS
	'validation.level' => 'log',
	// 'http.CURLOPT_CONNECTTIMEOUT' => 30
);

$apiContext = ApiContext::create(
	'main', 'btc', 'v1',
	$credentials,
	$config
);

$addressClient = new AddressClient($apiContext);
$addressPublicKey = $addressClient->generateAddress($apiContext)->getPublic();

$headers = "name,pubkey,identity" . PHP_EOL;
file_put_contents(ROSTERDIR, "$headers$fname $lname,ecdsa-koblitz-pubkey:$addressPublicKey,$email" . PHP_EOL, FILE_APPEND );


?>
