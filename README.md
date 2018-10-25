# DevWebBlockCertPHP

## Make the following changes to the core/init.php file

**On line 11, Add your BlockCypher Token**

define("BLOCKCYPHERTOKEN", getenv('blockcyphertoken'));

**On line 13, Enter the path to where you want the CSV written to.**

define("ROSTERDIR", getenv('rosterdir') . 'roster.csv');

**On line 15, Enter the generate template url.**

$generate_template_url = "odi-certtools.devblockcert.svc";

**On line 16, Enter the issue cert url.**

$issue_cert_url = "devcertissuer.devblockcert.svc";

**On line, 30, add additional PHP Curl Options** http://php.net/manual/en/function.curl-setopt.php

Examples:
  - CURLOPT_POST => true
  - CURLOPT_RETURNTRANSFER => 1
  - CURLOPT_HTTPHEADER => array('Content-type: application/json;')

$curl_options = array(  CURLOPT_POST => true, );
