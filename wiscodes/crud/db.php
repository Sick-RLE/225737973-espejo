<?php

    $db_Server="localhost";
    $db_User="root";
    $db_Password="";
    $db_Name="contactdb";

    $conn=new mysqli($db_Server, $db_User, $db_Password, $db_Name);

    if($conn->connect_error){
        die ("Connection Failded".$conn->connect_error);
    }

?>