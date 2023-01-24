<?php
    // Connect database
    $connect = mysqli_connect('localhost', 'golosgeo', 'webove aplikace', 'golosgeo');

    // Check connection
    if (!$connect) {
        die('Error: cannot connect to database');
    }