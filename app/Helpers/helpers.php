<?php 

// define routes 
function url($url='')
{
    echo BURL.$url;
}


function dd($data =''){
    echo "</pre>";
    print_r($data);
    echo "</pre>";
    exit();

}