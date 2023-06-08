<?php
require('functions.php');

$title = 'Home';


if(isset($_GET["btn-search"])){

    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM mahasiswa 
                 WHERE
                nama LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                    ";
    $students = query($query);
    


} else{
    $students = query("SELECT * FROM mahasiswa");
}


require('views/index.view.php');
