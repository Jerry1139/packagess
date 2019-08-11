<?php

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$memberId = filter_input(INPUT_POST, 'memberid');
$postal = filter_input(INPUT_POST, 'postal');
$date = date("Y/m/d");
$digits = 3;
$pickupCode = rand(pow(10, $digits-1), pow(10, $digits)-1);



if(!empty($firstname)){
    if(!empty($lastname)){
        if (!empty($memberId)){
            if (!empty($postal)){
      
                //this is for personal localhost database 
                    //will change later in later stages
                    $host = "localhost";
                    $dbusername = "root";
                    $dbpassword = "NorthHigh2015";
                    $dbname = "packagess";

                    //Creating connection
                    $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

                    //check to see if there is an error 
                    if (mysqli_connect_error()){
                        die('Connect Error ('. mysqli_connect_errno().')'.mysqli_connect_error());
                    } else {
                        $sql = "INSERT INTO pending_packages (first_name, last_name, member_id, postal_service, pickup_code, date_delivered)
                        values ('$firstname','$lastname', '$memberId', '$postal', '$pickupCode','$date')";
                        
                        //check if the query is working
                        if ($conn->query($sql)){
                            echo "New Record is inserted successfully";
                        } else {
                            echo "Error: " . $sql . "<br>". $conn->error;
                        }

                        //close connection to database
                        $conn->close(); 
                    }
            } else {
                echo "postal is empty";
                die();  
            }
        } else {
            echo "member ID is empty";
            die();
        }
    } else {
        echo "last name is empty";
        die();
    }
}else{
    echo "first name is empty";
    die(); 
} 

?>