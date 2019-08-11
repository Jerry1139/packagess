<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "NorthHigh2015";
$dbname = "packagess";

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if (mysqli_connect_error()){
    die('COnnect Error with database');
}

mysqli_select_db("packagess");
$results = "SELECT * FROM pending_pickup";
while( $row = mysqli_fetch_array($results)){
?>
<tr>
<td><?php  echo $row['first_name']    ?></td>
<td><?php  echo $row['last_name']   ?></td>
<td><?php  echo $row['date_delivered']    ?></td>
</tr>

<?php
}

?>