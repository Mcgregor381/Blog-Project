<?php

//CONNECT TO DATABASE BACKEND
require 'config.php';
require 'PepperedPasswords.php';

//ENSURE REQUEST HAS BEEN DELIVERED OVER POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //INTITALISE ERRORS ARRAY
    $errors = array();
    $stmt = $db->prepare("INSERT INTO user_info (email, pass, first_name, last_name, allow_emails) VALUES ( ?, ?, ?, ?, ?)");

    //GET VALID EMAIL ADDRESS
    $userEmail = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    if ($userEmail == FALSE) {
        $errors[] = 'Please enter a valid email address';
    }

    //GET VALID FIRST NAME
    $userFirstName = filter_input(INPUT_POST, "first_name", FILTER_SANITIZE_STRING);
    if ($userFirstName == FALSE) {
        $errors[] = 'Please enter a First Name';
    }

    //GET VALID LAST NAME
    $userLastName = filter_input(INPUT_POST, "last_name", FILTER_SANITIZE_STRING);
    if ($userLastName == FALSE) {
        $errors[] = 'Please enter a Last Name';
    }


    //GET VALID PASSWORDS AND ENSURE MATCHING
    $userPassword1 = filter_input(INPUT_POST, "pass1", FILTER_SANITIZE_STRING);
    $userPassword2 = filter_input(INPUT_POST, "pass2", FILTER_SANITIZE_STRING);
    if ($userPassword1 == FALSE || $userPassword2 == FALSE) {
        $errors[] = 'Please enter a valid password';
    }
    if ($userPassword2 != $userPassword1) {
        $errors[] = 'Please enter matching passwords';
    }


    //GET ALLOW EMAILS FLAG
    $userAllowEmails = filter_input(INPUT_POST, "allow_emails", FILTER_SANITIZE_STRING);
    if ($userAllowEmails == FALSE) {
        $errors[] = 'Unexpected error, please refresh the page';
    }

    //IF NO ERRORS THROWN SO FAR
    if (empty($errors)) {
        //ENSURE EMAIL ADDRESS ISNT ALREADY REGISTERED.
        $stmt2 = $db->prepare("SELECT * FROM user_info WHERE email = ?");
        $stmt2->bind_param("s", $userEmail);
        $stmt2->execute();
        $result = $stmt2->get_result();
        if ($result->num_rows != 0) {
            echo("{\"error\":\"Email address already registered. <a href=\\\"../index.php\\\">Login</a>\"}");
            $stmt2->close();
            exit(0);
        }
        $stmt2->close();

        //USE PEPPERED PASSWORDS, GENERATE PASSWORD THAT HAS BEEN SALTED AND PEPPERED.
        $hasher = new PepperedPasswords($pepper);
        $userHashedPassword = $hasher->hash($userPassword1);

        //BIND PARAMETERS TO QUERY
        $stmt->bind_param("sssss", $userEmail, $userHashedPassword, $userFirstName, $userLastName, $userAllowEmails);

        //EXECUTE QUERY
        if (!$stmt->execute()) {
            echo("{\"error\":\"Registration failed, try again!\"}");
        }

        //SUCCESS OR FAIL REGISTRATION
        if ($stmt->affected_rows === 1) {
            echo("{\"success\":\"Registration successful\"}");
            //SEND REGISTRATION EMAIL
            sendBaseEmail($userEmail, $userFirstName, "Welcome to Bubble!", "<h4 style='font-weight:400'>Welcome to tiny-Projects.com, we hope you enjoy creating a blog with us.<br>Happy Blogging!</h4>");
        } else {
            echo("{\"error\":\"Registration failed, try again!\"}");
        }
        $stmt->close();

        exit(0);
    } else {
        //RETURN ERRORS TO CLIENT, EXPLAIN WHAT WENT WRONG
        echo("{\"error\":\"");
        foreach ($errors as $msg) {
            echo " - $msg<br>";
        }
        echo("\"}");

        $stmt->close();
        exit(0);
    }
}

