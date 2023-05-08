<?php 
    define('BASE_URL','/pw2023_223040113/kuliah/pertemuan%209/');

    function checkActive($uri) {
        return ($_SERVER ['REQUEST_URI'] === BASE_URL . $uri) ? 'active' : '';
    }
?>