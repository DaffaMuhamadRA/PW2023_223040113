<?php

require '../../../../partials/functions/functions.php';

$kategori = $_GET['kategori'] ?? '';

$query = "SELECT * FROM item WHERE kategori_obat = '$kategori'";

$result = mysqli_query($conn, $query);

$obat = mysqli_fetch_assoc($result);
