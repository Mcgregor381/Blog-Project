<?php
require "required/config_file.php";
//todo build and desidatabse for blog and blog cms
//require "required/database_config.php";
require "ui_Elements/ui_ElementList.php";

//todo get set include path working better.
//set_include_path('ui_Elements/');


//todo change content?
$html = generateNavigation();
echo $html;


require "ui_Elements/ui_footer.php";
