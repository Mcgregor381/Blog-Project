<?php
require "required/html_config.php";
require "ui_Elements/ui_ElementList.php";

//todo get set include path working better.
//set_include_path('ui_Elements/');

$html .= generateNavigation();
echo $html;





require "ui_Elements/ui_footer.php";
?>