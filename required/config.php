<?php

//SETUP DIRECTORIES
$libDir = "./required/";
$templatesDir = "./html/";

//SALTING AND PEPPERING
$pepper = hex2bin('012345679ABCDEF012345679ABCDEF012345679ABCDEF012345679ABCDEF');

//REQUIRE VARIOUS DB CONNECTION COMPONENTS
require "database_required/db_connect.php";
require "database_required/db_config.php";

require "email/action_email_mailer.php";


