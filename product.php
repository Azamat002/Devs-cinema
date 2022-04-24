<!DOCTYPE html>
<html>
<body>

<?php
session_start();

// initializing variables
$email = "";
$first_name = "";
$last_name = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cinema');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}



$sql = "SELECT id, email, img FROM users";
$result = $db->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        print "<br> id: ". $row["id"]. "<br> - First Name: " . $row["first_name"] . "<br>  Last Name: " . $row["last_name"] . "<br>Email: " . $row["email"] . "<br>";
      print "<img src=\"".$row["img"]."\">";
     
    }
} else {
    print "0 results";
}



$db->close();   
        ?>
</body>
</html>