<?php
$pickup_code = filter_input(INPUT_POST,'pickup_code');
$date = date("Y/m/d");

if(!empty($pickup_code)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "NorthHigh2015";
    $dbname = "packagess";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno(). ')' . mysqli_connect_errror());
    } else {
        //adding the entry from pending_packages to picked_up_packages
        $sql1 = "INSERT INTO picked_up_packages (first_name, last_name, member_id, postal_service, pickup_code, date_delivered, date_picked_up)
                SELECT first_name, last_name, member_id, postal_service, pickup_code, date_delivered,'$date'
                FROM pending_packages
                WHERE pickup_code = '$pickup_code';";
        $sql2 = "DELETE FROM pending_packages WHERE pickup_code = '$pickup_code';";

        //check if the query is working     
        if ($conn -> query($sql1) && $conn -> query($sql2)){
            echo "New Record is inserted successfully";
        } else {
            echo "Error ". $sql . "<br>". $conn->error;
        }


    }

} else {
    echo "Code not entered";
    die();
}




?>