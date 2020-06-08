<?php
require "required/config_file.php";
//todo build and desidatabse for blog and blog cms
require "ui_Elements/ui_ElementList.php";

//todo change content?
$html = generate_Navigation(generate_Content());
echo $html;

require "ui_Elements/ui_footer.php";


function generate_Content(){
    //GET URL ACTION
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    } else{
        $action = '';
    }

    $html = '';
    //ADD NAVIGATION TO THE TOP OF THE PAGE

    //CHECK IF THE USER HAS NOT SETUP A HUB YET. IF THEY HAVE NOT SETUP A HUB, NAVIGATE TO THE ADD DEVICE PAGE.
    //THIS IS FORCED, AS THE MAIN TAB PAGES WOULD HAVE NO INFO ON THEM ANYWAY
    //Todo implment Hass Acount  func


    //SWITCH DEPENDING ON URL ACTION
    /**
     * SWITCH BASED ON ACTION.
     * INCLUDE REQUIRED FILE, THEN CALL FUNCTION DEFINED INSIDE PHP FILE
     * THIS ALLOWS US TO GENERATE THE CONTENT THROUGH PHP, THEN INSERT THAT CONTENT INTO THE PREGENERATED HTML-TEMPLATE
     */
    switch($action){
        case 'logout':
            //include './required/action_logout.php';
            //$html .= generateLogout();
            break;
        case 'account':
            //include './ui_Elements/inner_ui_Elements/modal_Account_Login&Reg.php';
            //$html .= generateAccount();
            break;
        case 'access':
            //include './uiAssets/content_access.php';
            //$html .= generateAccessPage();
            break;
        case 'help':
            //include './ui_Elements/inner_ui_Elements/modal_contact_us.php';
            //$html .= generateHelpPage();
            break;
        default:
            $x=0;
            while($x<5){
                $html .= generate_BlogPost_Testing();
                $x++;
            }


            break;
    }
    return $html;
}