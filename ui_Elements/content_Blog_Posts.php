<?php
include_once dirname(__DIR__).'/required/config_file.php';

//todo implment db for blog post set default to place holder untill url prams are done
//todo build/refactor function to get one or more images and display them in there respective elaments.
function generate_BlogPost_Testing(){
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
                         officia deserunt mollit anim id est laborum."<br>
                    </div>
                </div>
            
            </div>
       
        </div>
htmlPage;
}

//live vesion

function generate_BlogPost_Live(){
    global $conn;
    $html='';
    //todo get blog from url
    //todo change to user name
    $user_name = '';
    //database querry
    $stmt_GetBlogPost = $conn->prepare("SELECT post_header, img_bach_num, post_content FROM blog_post WHERE user_id = ? ORDER BY post_id");//todo update to user name
    $stmt_GetBlogPost->bind_param("i",$user_name);
    $stmt_GetBlogPost->execute();
    $blogPosts = $stmt_GetBlogPost->get_result();
    $allPosts = $blogPosts->fetch_all(MYSQLI_ASSOC);
        //if returens more than 0 posts return all post
        //todo implement url user identification

    $allPosts=1;

    $array = ["post_header1","post_header2","post_header3","post_header4","post_header5"];

    $header='test';
    $imgSource='PlaceHolder-v2-square.png';
    $imgDir='../img/Placeholeder/PNG';
    $post_Content='test';

    generate_BlogPost_Content($header,$imgDir,$imgSource,$post_Content);

}
//header is the posted titel
//imgdir is the directory that imige files shold be kept in and uploaded to
//imige todo build altarneating struture for imgs
//$post_content is the boday test
//todo add post footer
function generate_BlogPost_Content($header,$imgDir,$imgSet,$post_Content){

//basic error handaling if no content was added
    if (!isset($header)||$header=""){
        $header="error";
        if (!isset($imgSet)||$imgSet=""){
            $imgSet= "$imgDir/$imgSet";
            if (!isset($post_Content)||$post_Content=""){
                $post_Content = "no content found";
            }
        }
    }
    return <<<htmlPage
        <!--Post Card-->
        <div class="card " style="margin: 50px">
            <!--Post Header-->
            <div class="card-header">
            
                <h1> $header</h1>
            
            </div>
            <!--Post Body-->
            <div class="card-body">
                <!--Post Row-->
                <div class="row justify-content-lg-between">
                    <!--img-col-->
                    <div class="d-flex col-md">
                        <div class="col vertical-center">
                            <img src="$imgDir.=$imgSet" class="img-fluid" alt="PlaceHolder">
                        </div>
                       
                    </div>
                    <!--Text-col-->
                    <div class="d-flex col-md">
                        $post_Content
                    </div>
                </div>
            
            </div>
       
        </div>
htmlPage;
}

