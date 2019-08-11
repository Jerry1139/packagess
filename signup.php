<?php
//retrieving values from sign-up.html by their name
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$password = filter_input(INPUT_POST, 'password');

//genereating their member_id
$firstSection = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"),0,2);
$secondSection = substr(str_shuffle("012345679"),0,4);


$member_id = $firstSection . $secondSection; 

//check to see if values are empty
if(!empty($firstname)){
    if(!empty($lastname)){
        if (!empty($email)){
            if (!empty($phone)){
                if(!empty($password)){

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
                        $sql = "INSERT INTO accounts (first_name, last_name, member_id, email, phone_number, password)
                        values ('$firstname', '$lastname', '$member_id','$email','$phone', '$password')";
                        
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
                    echo "password should not be empty";
                    die();
                }
            } else {
                echo "phone should not be empty";
                die();
            }

        } else {
            echo "email should not be empty";
            die();
        }

    } else {
        echo "lastname should not be empty";
        die();
    }

} else {
    echo "firstname should not be empty";
    die();
}

?>