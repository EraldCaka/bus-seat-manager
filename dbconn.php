<?php
        $servername = "localhost";
        $username="root";
        $password = "alesio1234";
        $dbname = "bus";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
        //  echo "Connected successfully";
?>