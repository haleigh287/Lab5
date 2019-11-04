
<?php
//access the global array called $_POST to get the values from the text fields
$user = $_POST['user'];

echo $user . "'s posts: <br><br>";

 $mysqli = new mysqli("mysql.eecs.ku.edu", "haleighhunt", "ed9naif7", "haleighhunt");
$sql = "SELECT author_id, content FROM Posts WHERE author_id = '$user' ORDER BY post_id";
//$mysql->query($sql);

if($result = $mysqli->query($sql))
{
  while ($row = $result->fetch_assoc()) {
       echo $row["author_id"] . ": <br>" . $row["content"] . "<br><br>";
    }

    /* free result set */
    $result->free();
}
else
{
  echo "No posts from this user";
}
// $mysqli->close();
//
//  $mysqli = new mysqli("mysql.eecs.ku.edu", "haleighhunt", "ed9naif7", "haleighhunt");
// // if ($mysqli->connect_errno) {
// //     printf("Connect failed: %s\n", $mysqli->connect_error);
// //     exit();
// // }
//
// //SHOW COLUMNS FROM Users
// //echo "Welcome, Admin. List of " . $user . "'s Posts: <br>";
// // $sql = 'SELECT post_id, author_id, content FROM Posts';
// //   $retval = mysql_query( $sql );
// //
// //   while($row = mysql_fetch_array($retval, MYSQL_NUM)) {
// //      echo "Post # :{$row['post_id']}  <br> ".
// //         "User : {$row['author_id']} <br> ".
// //         "Posted : {$row['content']} <br> ".
// //         "--------------------------------<br>";
// //       }
// echo "Welcome, Admin.  <br>  Select from list of Users: <br>";
// $sql = "SELECT Username FROM Users";
// $result = $mysqli->query($sql);
//
// echo "<form action='ViewUserPosts.html' method='post'>";
//
// echo "<select name=user_list value=''>Users:</option>"; // list box select command
//
// while ($row = $result->fetch_assoc()) {
//      echo "<option value=$row[Username]>$row[Username]</option>";
//
//
//   }
// // foreach ($mysqli->query($sql) as $row){//Array or records stored in $row
// // echo "<option value=$row[author_id]</option>";
// // }
// echo "</select>";
//
// echo "<input type='submit'>";
//$query=$mysqli->query("SELECT author_id, content FROM Posts ORDER by post_id")
//$mysql->query($sql);
//
// if($result = $mysqli->query($sql))
// {
//   while ($row = $result->fetch_assoc()) {
//        echo $row["author_id"] . ": " . $row["content"];
//     }
//
//     /* free result set */
//     $result->free();
// }
// $mysqli->close();
 ?>
