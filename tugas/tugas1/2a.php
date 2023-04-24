<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

        <?php 
    $nrp = 13;

    echo "aku adalah angka <b> $nrp </b>";
    echo "<br>Jika aku dikali 5, maka aku sekarang akan menjadi ". "<b>". $nrp*5 . "</b>";
    echo "<br>Jika aku dibagi 2, maka aku sekarang akan menjadi ". "<b>". $nrp*5/2 . "</b>";
    echo "<br>Jika aku ditambah 75, maka aku sekarang akan menjadi ". "<b>". $nrp*5/2+75 . "</b>";
    echo "<br>Jika aku dikurang 20, maka aku sekarang akan menjadi ". "<b>". $nrp*5/2+75-20 . "</b>";
    
    
    /* 
    note :

    perbaikan pada print nrp syntax nya jadi :
        $nrp = 23; bacanya : 23 itu dimasukan kedalam kotak dengan nama nrp
        $nrp *= 5; bacanya : 5 ketika akan dimasukan ke nrp, program melihad ada '*' sehingga int yang di dalam nrp sebelumnya akan dikalikan terlebih dahulu dengan 5
        $nrp /= 2; bacanya : sama seperti sebelumnya, hanya operasinya saja yang berbeda
        $nrp += 75;
        $nrp -= 20;

        (menggunakan perulangan variabel)

    penggunaan string php
        <p> email = <?=$email; ?> </p>    
    */
    ?>


</body>
</html>