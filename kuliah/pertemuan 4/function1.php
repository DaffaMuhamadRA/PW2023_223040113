<?php 

function varstatis(){
    static $x=1;
    echo $x;
    $x++;
    echo"</br>";
}

varstatis();
varstatis();
?>