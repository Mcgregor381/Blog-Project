<?php


function generateContent($content){

    $html ="";
    $html .= generateContent($content);
    echo $html;

    return <<<htmlPage
<html lang="en">
    <div class="container-fluid justify-content-center">
    $content
    </div>
</html>

htmlPage;


};