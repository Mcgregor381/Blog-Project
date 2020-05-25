<?php


function generateNavigation(){

    $html ="";
    //todo page swapping
    $html .= generateSingleImageBlogPost();

    return <<<htmlPage
    <html lang="en">
    
        <body class="fixed-sn light-blue-skin">
        
        <!--Main Navigation-->
        <header>
        
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar double-nav">
        
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
                            <span class="clearfix d-none d-sm-inline-block">Contact</span>
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
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
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
                                Personal<i class="fa fa-angle-down rotate-icon"></i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="#" class="waves-effect">Character Sheet</a>
                                        </li>
                                        <li><a href="#" class="waves-effect">other 1</a>
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
                            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i>
                                Finance<i class="fa fa-angle-down rotate-icon"></i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="#" class="waves-effect">Wallet</a>
                                        </li>
                                        <li><a href="#" class="waves-effect">For authors</a>
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
                <div class="container-fluid justify-content-center">
                    <!--todo page swaping-->
                    $html

                </div>
            </main>
        </body>
</html>
htmlPage;
}