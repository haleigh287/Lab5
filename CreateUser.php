<?php
$user = $_POST['user'];
//
 $mysqli = new mysqli("database_URL", "my_user", "my_password", "database_name");
 // if ($mysqli->connect_errno) {
 //     printf("Connect failed: %s\n", $mysqli->connect_error);
 //     exit();
 // }
$PreexistingUser =  "SELECT Username FROM Users
 	WHERE Username == $user";

if($user == "" )
{
 echo "Must provide valid username to enter in database <br>";

}
else if($user == $PreexistingUser )
{
 echo "User already exists in database <br>";

}
else
{

echo $user . " added to Database <br>";

  // MySQL [haleighhunt]> INSERT INTO Users (Username)

  // $sql = "INSERT INTO Users (Username)
  // VALUES (" . $user)"
  // INSERT INTO Users (Username)
  // VALUES ($user);
  echo "Welcome to the family, " . $user . "<br>";

  //echo SHOW COLUMNS FROM Posts;
  $sql = "INSERT INTO Users (Username) VALUES ('$user')";
   $mysqli->query($sql);
   // mysqli_query($sql);
    //mysqli->query($sql);
}

 ?>
