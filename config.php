<?php
$dbhost = "localhost";
$dbname = "efiction";
$dbuser= "efiction";
$dbpass = "efiction";
$sitekey = "Z6rTjKix6u";
$settingsprefix = "";

include_once("includes/dbfunctions.php");
if(!empty($sitekey)) $dbconnect = dbconnect($dbhost, $dbuser,$dbpass, $dbname);

?>