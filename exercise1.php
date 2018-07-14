<?php
/**
 * Created by PhpStorm.
 * User: Mahan
 * Date: 7/13/2018
 * Time: 9:37 PM
 */

function isBitten(){
    $p=rand(0,100);
    if ($p=50){
        $a= True;
    }
    else
    {
        $a= False;
    }
}

isBitten();

if ($a = True) {
    echo "Bob bit your finger";

} else {
    echo "Bob didnot bit your finger";
}
?>