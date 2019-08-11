<?php
      $conn = mysqli_connect("localhost","root","NorthHigh2015","packagess");
      if($conn-> connect_error){
         die("Connection failed:". $conn-> connect_error);
      }
         $sql = "SELECT first_name, last_name FROM accounts";
         $result = $conn-> query($sql);

        if($result-> num_rows > 0){
            while ($row = $result -> fetch_assoc()){
                echo $row["first_name"] .$row["last_name"];
            }
        } else {
            echo "Error";
        }
        $conn -> close();

      

     ?>