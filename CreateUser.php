<?php
$user = $_POST['user'];
//
 $mysqli = new mysqli("mysql.eecs.ku.edu", "haleighhunt", "ed9naif7", "haleighhunt");
 // if ($mysqli->connect_errno) {
 //     printf("Connect failed: %s\n", $mysqli->connect_error);
 //     exit();
 // }
$PreexistingUser =  "SELECT Username FROM Users
 	WHERE Username = $user";
$result = $mysqli->query($PreexistingUser);

if($user == "" )
{
 echo "Must provide valid username to enter in database <br>";
  echo "<a href='CreateUser.html'>Re-enter Credentials</a>";

}
else
{
$sql = "INSERT INTO Users (Username) VALUES ('$user')";
  //$sql = "INSERT INTO Users (Username) VALUES ($user)";

   if ($mysqli->query($sql) === TRUE) {

    echo $user . " added to Database <br>";
    echo "<a href='CreatePosts.html'>Wanna get Posting?</a>";
} else {
  echo "User already exists in database <br><br>";
   echo "<a href='CreatePosts.html'>Wanna Post-It?</a>";
}

}

?>
