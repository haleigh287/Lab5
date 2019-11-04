<?php
//access the global array called $_POST to get the values from the text fields

$user = $_POST['user'];

 $mysqli = new mysqli("mysql.eecs.ku.edu", "haleighhunt", "ed9naif7", "haleighhunt");
// if ($mysqli->connect_errno) {
//     printf("Connect failed: %s\n", $mysqli->connect_error);
//     exit();
// }

//SHOW COLUMNS FROM Users
echo "Welcome, Admin. List of all current Users: <br>";

// $sql = 'SELECT post_id, author_id, content FROM Posts';
//   $retval = mysql_query( $sql );
//
//   while($row = mysql_fetch_array($retval, MYSQL_NUM)) {
//      echo "Post # :{$row['post_id']}  <br> ".
//         "User : {$row['author_id']} <br> ".
//         "Posted : {$row['content']} <br> ".
//         "--------------------------------<br>";
//       }
$sql = "SELECT Username FROM Users";
//$mysql->query($sql);
$user =1;

if($result = $mysqli->query($sql))
{
  while ($row = $result->fetch_assoc()) {
       echo $user . ". " . $row["Username"] . "<br>";
	$user++;
    }

    /* free result set */
    $result->free();
}
$mysqli->close();


//       while($row = $result->fetch_assoc()) {
//           echo "id: " . $row["post_id"]. " - Name: " . $row["author_id"]. " " . $row["content"]. "<br>";
//       }
//   } else {
//       echo "0 results";
//   }
// }
 ?>

 <!-- mysql> CREATE TABLE Users
(
Username varchar(255) NOT NULL,

);


mysql> CREATE TABLE Posts
(
Posts varchar(255),
Post_num int  AUTO_INCREMENT

); -->
