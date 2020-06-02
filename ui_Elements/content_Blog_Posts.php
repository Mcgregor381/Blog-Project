<?php
include_once dirname(__DIR__).'/required/config.php';
//todo implment db for blog post
//todo build/refactor function to get one or more images and display them in there respective elaments.




function generate_BlogPost(){

    //BEGIN SESSION
    session_start();
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    } else {
        echo("{\"error\":\"User is not logged in\"}");
        session_write_close();
        exit(0);
    }
    //END SESSION
    session_write_close();

    return <<<htmlPage
        <!--Post Card-->
        <div class="card " style="margin: 50px">
            <!--Post Header-->
            <div class="card-header">
            
                <h1> Currently not implemented</h1>
            
            </div>
            <!--Post Body-->
            <div class="card-body">
                <!--Post Row-->
                <div class="row justify-content-lg-between">
                    <!--img-col-->
                    <div class="d-flex col-md">
                        <div class="col vertical-center">
                            <img src="../img/Placeholeder/PNG/PlaceHolder-v2-square.png" class="img-fluid" alt="PlaceHolder">
                        </div>
                       
                    </div>
                    <!--Text-col-->
                    <div class="d-flex col-md">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad<br>
                         minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in<br> 
                         voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui<br>
                         officia deserunt mollit anim id est laborum."<br>    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad<br>
                         minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in<br> 
                         voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui<br>
                         officia deserunt mollit anim id est laborum."<br>    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad<br>
                         minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in<br> 
                         voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui<br>
                         officia deserunt mollit anim id est laborum."<br>    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad<br>
                         minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in<br> 
                         voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui<br>
                         officia deserunt mollit anim id est laborum."<br>    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad<br>
                         minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in<br> 
                         voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui<br>
                         officia deserunt mollit anim id est laborum."<br>    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad<br>
                         minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in<br> 
                         voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui<br>
                         officia deserunt mollit anim id est laborum."<br>    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad<br>
                         minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in<br> 
                         voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui<br>
                         officia deserunt mollit anim id est laborum."<br>    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad<br>
                         minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in<br> 
                         voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui<br>
                         officia deserunt mollit anim id est laborum."<br>    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad<br>
                         minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in<br> 
                         voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui<br>
                         officia deserunt mollit anim id est laborum."<br>
                    </div>
                </div>
            
            </div>
       
        </div>
htmlPage;
}