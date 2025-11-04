<?php 
    $servername = "localhost";
    $username ="root";
    $userpsswrd = "";
    $dbname = "portfolio";
    $conn = mysqli_connect($servername,$username,$userpsswrd,$dbname);

    if(!$conn)
    {
        echo "not connected";
    }
    ?>