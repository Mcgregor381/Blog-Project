<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';
include_once dirname(__DIR__).'/config.php';


function sendBaseEmail($userEmail, $userName, $emailSubject, $emailBody){
    //todo setup gmail for tiny-projects .com and enable emails.
    //SETUP BASIC PHP MAILER ENGINE
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'blog.tinyprojects@gmail.com';
    $mail->Password = 'myPassword';
    $mail->setFrom('bubblehome.care@gmail.com', 'Andrew McGregor');
    $mail->addAddress($userEmail, $userName);
    $mail->Subject = $emailSubject;
    $mail->isHTML(true);
    $mail->AddEmbeddedImage('../../img/favicon.png', 'logo');
    
    //Set up welcome email
    $logo = "<img src='cid:logo' style='width:100px'>";//todo replace with blogs logo
    $email_welcome = "<h3 style='font-weight:400'>Dear $userName,<h3>";
    $email_body = $emailBody;
    $email_signoff = "<h4 style='font-weight:400'>Kind regards,<br>Tiny-Projects Team</h4>";
    $email_signature = "Andrew MacGregor - Source Developer";
    $email_content = "<div style='font-family:arial'>$email_welcome $email_body $email_signoff</div> <hr><div style='text-align:center'> $logo <br> $email_signature</div>";
    
    $mail->Body = (string) $email_content;

    if (!$mail->send()) {
        //ERROR THROW
    } 

}

function sendBaseEmailFromUserID($userID, $emailSubject, $emailBody){
    global $db;

    $stmt = $db->prepare("SELECT user_id, user_email, first_name FROM user_info_test WHERE user_id = ?");
    $stmt->bind_param("i", $userID);
    if(!$stmt->execute()){
        //ERROR
    }
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $userEmail = $row['email'];
    $userFirstName = $row['first_name'];
    $stmt->close();
    sendBaseEmail($userEmail, $userFirstName, $emailSubject, $emailBody);

}


?>