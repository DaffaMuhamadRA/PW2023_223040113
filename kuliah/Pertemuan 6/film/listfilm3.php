<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>List Film</title>
</head>

<body>
<div class="container">
<?php
$films = [
    "<img src='horror.jpg'>" => [],
    "title 2" => [
        "sutradara" =>["1","2","3"],
        "genre" => ["horror","thriller","komedi"],
        "tahun"=> ["2001"],
        "pemain" => ["asep","andi","caca"],
    ],
    "<img src='romance.jpg'>" => [],
    "title 1" => [
        "sutradara" =>["1","3"],
        "genre" => ["romance","fantasy"],
        "tahun"=> ["2040"],
        "pemain" => ["andi"],
    ],
    "<img src='action.jpg'>" => [],
    "title 3" => [
        "sutradara" =>["1","2","3"],
        "genre" => ["action"],
        "tahun"=> ["2013"],
        "pemain" => ["asep","budi"],
    ],
    "<img src='komedi.jpg'>" => [],
    "title 4" => [
        "sutradara" =>["1","2","3","4"],
        "genre" => ["horror","komedi"],
        "tahun"=> ["2015"],
        "pemain" => ["budi","caca"],
    ],
    "<img src='horror2.jpg'>" => [],
    "title 5" => [
        "sutradara" =>["1","2"],
        "genre" => ["horror"],
        "tahun"=> ["2080"],
        "pemain" => ["asep","andi","budi","caca"],
    ],
];

foreach ($films as $index => $film) {
    echo  "{$index}";
    echo "<ul>";
        foreach ($film as $key => $value) {
            $newLangsComma = implode(",",$value);
            echo "<li> {$key} : {$newLangsComma}</li>";
        }
    echo "</ul>";
}

?>

</div>

</td>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>