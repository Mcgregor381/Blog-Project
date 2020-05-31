<?php

//error reporting local
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Config file
require './required/config.php';
//todo build and desidatabse for blog and account cms
require "ui_Elements/ui_ElementList.php";

//Session Details
//session_start();
//SETUP VARIABLES
//$isLoggedIn = isset($_SESSION['user_id']);
//CLOSE SESSION
//session_write_close();

//GRAB FILE CONTENTS FROM PRE-GENERATED HTML TEMPLATE
//todo get set include path working better.
$pageHTML = file_get_contents($templatesDir.'mainTemplate.html');

$html .= generateNavigation();
$pageHTML = str_replace('$MAIN_BODY', $html, $pageHTML);

//ECHO HTML TO PAGE
echo $pageHTML;
exit();
?>