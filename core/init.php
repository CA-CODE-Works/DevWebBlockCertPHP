<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

/*
 This is your BlockCypher token, 
 Sign Up at  https://accounts.blockcypher.com/
 Verify Token at https://api.blockcypher.com/v1/tokens/<token>
 */
$token = getenv('blockcyphertoken');
define("BLOCKCYPHERTOKEN", "2eee7613a99749bcbd725e51c4b125ca"); // getenv('blockcyphertoken'));
// File path to csv 
$dir = getenv('rosterdir') . 'roster.csv';
define("ROSTERDIR", 'roster.csv'); //getenv('rosterdir') . 'roster.csv');


// Include core files
include("core/users.php");

?>
