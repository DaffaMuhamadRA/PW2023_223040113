<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3a</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            line-height:0;
        }
        .kotak {
            background-color:orange ;
            width: 50px;
            height: 50px;
            border:2px solid black;
            font-size:20px;
            font-weight:bold;
            line-height:50px; 
            text-align:center;
            display:inline-flex;
        }
    </style>
</head>
<body>
    
    <div>
        <div class="kotak">1</div>
        <div>
            <div class="kotak">2</div>
            <div class="kotak">2</div>
        </div>
        <div>
            <div class="kotak">3</div>
            <div class="kotak">3</div>
            <div class="kotak">3</div>
        </div>
    </div>
</body>
</html>