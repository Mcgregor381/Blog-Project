<?php

//todo fix sidnav slide/hide
function generateNavigation(){

    $html ="";
    //todo page swapping
    $html .= generateSingleImageBlogPost();

    $loginModal ="";
    //todo page swapping
    $loginModal .= generate_LoginModal();


    $placeHolder ="";
    //todo page swapping
    $placeHolder .= generatePlaceHolder();
    $contactUs ="";
    $contactUs .=generate_Contact_Form();


    return <<<htmlPage
    <html lang="en">
    
        <body class="fixed-sn light-blue-skin">
        
        <!--Main Navigation-->
        <header>
        
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar double-nav">
        
                <!-- SideNav slide-out button -->
                <div class="float-left">
                    <a href="#" data-activates="slide-out" class="button-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
        
                <!-- Breadcrumb-->
                <div class="breadcrumb-dn mr-auto">
                    <p>Tiny-Projects</p>
                </div>
        
                <!-- Links -->
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item">
                        <a class="nav-link">
                            <i class="fa fa-envelope"></i>
                            <span class="clearfix d-none d-sm-inline-block" data-toggle="modal" data-target="#modalContactForm">Contact us</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            <i class="fa fa-gear"></i>
                            <span class="clearfix d-none d-sm-inline-block">Settings</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>
                            <span class="clearfix d-none d-sm-inline-block">Account</span>
                        </a>
                        
                         <!--Todo implement login  -->
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" data-toggle="modal" data-target="#modalLRForm">LogIn/Register</a>
                        </div>
                    </li>
                </ul>
        
            </nav>
            <!--/.Navbar-->
        
            <!-- Sidebar navigation -->
            <div id="slide-out" class="side-nav navbar-dark fixed sn-bg-4">
                <ul class="custom-scrollbar">
                    <!-- Logo -->
                    <li class="logo-sn waves-effect"> 
                    
                        <div class=" text-center">
                            <a href="#" class="pl-0">
                                <img src="../img/Placeholeder/SVG/PlaceHolder-v1-smallBanner.svg" class="" alt="logo img" style="max-height: 40px; max-width: 200px">
                            </a>
                        </div>
                    </li>
                    <!--/. Logo -->
                    <!--Search Form-->
                    <li>
                        <form class="search-form" role="search">
                            <div class="form-group md-form mt-0 pt-1 waves-light">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>
                    </li>
                    <!--/.Search Form-->
                    
                    <!-- Side navigation links -->
                    <li>
                        <ul class="collapsible collapsible-accordion">
                            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i>
                                live Projects<i class="fa fa-angle-down rotate-icon"></i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="www.tiny-project.com" class="waves-effect">Blog</a>
                                        </li>
                                        <li><a href="www.eve.tiny-project.com" class="waves-effect">eve-app</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!--todo long to gits with php-->
                            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i>
                                My gits<i class="fa fa-angle-down rotate-icon"></i></a>
                                <di class="collapsible-body">
                                    <ul>
                                        <li><a href="#" class="waves-effect">Github</a>
                                        </li>
                                        <li><a href="#" class="waves-effect">gitlab</a>
                                        </li>
                                        <li><a href="#" class="waves-effect">gitlab uni</a>
                                        </li>
                                    </ul>
                                </di>
                            </li>
                            <li><a class="collapsible-header waves-effect arrow-r">
                                Web Projects<i class="fa fa-angle-down rotate-icon"></i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="#" class="waves-effect">blog</a>
                                        </li>
                                        <li><a href="#" class="waves-effect">Eve Online Api Proect</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Contact
                                me<i class="fa fa-angle-down rotate-icon"></i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="#" class="waves-effect">FAQ</a>
                                        </li>
                                        <li><a href="#" class="waves-effect">Write a message</a>
                                        </li>
                                        <li><a href="#" class="waves-effect">FAQ</a>
                                        </li>
                                        <li><a href="#" class="waves-effect">Write a message</a>
                                        </li>
                                        <li><a href="#" class="waves-effect">FAQ</a>
                                        </li>
                                        <li><a href="#" class="waves-effect">Write a message</a>
                                        </li>
                                        <li><a href="#" class="waves-effect">FAQ</a>
                                        </li>
                                        <li><a href="#" class="waves-effect">Write a message</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!--/. Side navigation links -->
                </ul>
                <div class="sidenav-bg rgba-blue-strong"></div>
            </div>
            <!--/. Sidebar navigation -->
        
        </header>
        <!--Main Navigation-->
            <main>
                <div class="container-fluid justify-content-center" style="padding-top: 10%;padding-bottom: 10%"> 
                    
                    $placeHolder
                    
                    $placeHolder
                </div>
            </main>
            
            <!-- collections of modals-->
            $contactUs
            $loginModal
        </body>
</html>
htmlPage;
}