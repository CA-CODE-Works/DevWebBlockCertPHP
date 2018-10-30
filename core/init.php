<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

/*
 This is your BlockCypher token,
 Sign Up at  https://accounts.blockcypher.com/
 Verify Token at https://api.blockcypher.com/v1/tokens/<token>
 */
define("BLOCKCYPHERTOKEN", getenv('blockcyphertoken')); 
// File path to csv
define("ROSTERDIR", getenv('rosterdir') . 'roster.csv');

$generate_template_url = "odi-certtools.devblockcert.svc:9000";
$issue_cert_url = "devcertissuer.devblockcert.svc:9000";

// Include core files
include("core/users.php");

/*
  PHP Curl Options
  http://php.net/manual/en/function.curl-setopt.php
  Examples:
  - CURLOPT_POST => true
  - CURLOPT_RETURNTRANSFER => 1
  - CURLOPT_HTTPHEADER => array('Content-type: application/json; charset=UTF-8')
*/
// Add additional curl options here
$curl_options = array();

// This function makes a curl request
function makeCurl( $url , $options = array() ){

  // initialize curl
  $ch = curl_init($url);

  // Set curl request options
  curl_setopt_array ( $ch, $options );

  $resp = curl_exec($ch);

  curl_close($ch);
  return $resp;
}

?>
