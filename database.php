<?php
    $servername = "db4free.net";
    $dBUsername = "dottech";
    $dBPassword = "dottech2017";
    $dBName = "dottech";

    $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

    if (!$conn) {
        die("Connection Failed: ".mysqli_connect_error());
    }