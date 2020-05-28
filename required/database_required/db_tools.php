<?php


namespace required\database_required;


class db_tools{

    function loginTool($userEmail,$userPassword){

//REQUIRE CONFIG FILE


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //GATHER INPUT FROM POST DATA, VALIDATE AND SANITIZE
            $userEmail = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
            $userPassword = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

            //IF DATA INVALID
            if ($userEmail == FALSE || $userPassword == FALSE) {
                echo("{\"error\":\"Invalid username or password\"}");
                exit(0);
            }
            //VALIDATE PROVIDED LOGIN INFORMATION
            list ($check, $data) = validateLogin($userEmail, $userPassword);

            //IF SUCCESSFUL, BEGIN SESSION, STORE DATA
            if ($check) {
                # Access session.
                session_start();
                $_SESSION['user_id'] = $data['user_id'];
                $_SESSION['first_name'] = $data['first_name'];
                $_SESSION['last_name'] = $data['last_name'];
                session_write_close();
                echo("{\"success\":\"Login successful\"}");
                exit(0);
            } else {
                echo("{\"error\":\"Unknown username or password\"}");
                exit(0);
            }

        }
        echo("{\"error\":\"Login failed\"}");
        exit(0);
    }


    function validateLogin($email, $pwd = '') {
        global $pepper, $db;
        require 'PepperedPasswords.php';
        # Initialize errors array.
        $errors = array();

        $stmt = $db->prepare("SELECT user_id, first_name, last_name, pass FROM user_info WHERE email=?");
        # Check email field.
        if (!isset($email)) {
            $errors[] = 'Enter your email address.';
        } else {
            $email = trim($email);
        }

        # Check password field.
        if (!isset($pwd)) {
            $errors[] = 'Enter your password.';
        } else {
            $pwd = trim($pwd);
        }
        //todo install pepper passwords
        //$hasher = new PepperedPasswords($pepper);

        # On success retrieve user_id, first_name, and last name from 'user' database.
        if (empty($errors)) {
            $stmt->bind_param("s", $email);
            if (!$stmt->execute()) {
                $errors[] = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
            }

            $result = $stmt->get_result();

            if($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $checked = $hasher->verify($pwd, $row['pass']);
                if($checked){
                    return array(true, $row);
                }
            }

            /* free results */
            $stmt->free_result();

            /* close statement */
            $stmt->close();
        }
        # On failure retrieve error message/s.
        return array(false, $errors);
    }
}