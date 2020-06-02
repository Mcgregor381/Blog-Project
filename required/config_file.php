<?php
//SETUP DIRECTORIES
$libDir = "./required/";
$templatesDir = "./html/";

//SALTING AND PEPPERING
$pepper = hex2bin('012345679ABCDEF012345679ABCDEF012345679ABCDEF012345679ABCDEF');

//REQUIRE VARIOUS DB CONNECTION COMPONENTS
require "html_required/header.php";
require "html_required/scripts.php";

require 'database_required';
require 'database_required/db_tools.php';
require "email/action_email_mailer.php";


?>

