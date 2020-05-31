<?php

function generatePlaceHolder(){

    return <<<htmlPage
<body class="text-dark">
    <!--Post Card-->
    <div class="card text-dark" style="margin: 50px">
        <!--Post Header-->
        <div class="card-header text-dark">
            <h1> Currently not implemented</h1>
        </div>
        
        <!--Post Body-->
        <div class="card-body">
            <!--Post Row-->
            <div class="row text-dark justify-content-lg-between">
                <!--img-col-->
                <div class="d-flex col-md text-dark">
                    <img src="../img/Placeholeder/PNG/PlaceHolder-v2-square.png" class="img-fluid" alt="PlaceHolder">
                </div>
                <!--Text-col-->
                <div class="d-flex col-md text-dark">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad<br>
                     minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in<br> 
                     voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui<br>
                     officia deserunt mollit anim id est laborum."<br>
                </div>
            </div>
        </div>

    </div>

</body>

htmlPage;
}