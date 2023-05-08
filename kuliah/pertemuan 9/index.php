<?php 

    require('function.php');
    
    $tittle = "Home";
    $students = [
        [
            "nama" => "Daffa Muhamad",
            "npm" => "223040113",
            "email"=> "Daffamuhamadra@.gmail.com"
        ],
        [
            "nama" => "Omtimum Pride",
            "npm" => "2230401113",
            "email"=> "PutangInaSiOmtimumPride@.gmail.com"
        ]
    ];

    // echo $_SERVER ["REQUEST_URI"];  
    // /pw2023_223040113/kuliah/pertemuan%209/index.php
    require('views/index.view.php');
?>

