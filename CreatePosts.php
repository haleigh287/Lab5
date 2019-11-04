<?php
//access the global array called $_POST to get the values from the text fields

$user = $_POST['user'];
$text = $_POST['text'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "haleighhunt", "ed9naif7", "haleighhunt");


if($user == "" || $text =="")//blank
{
echo "All fields must be filled in<br> ";
echo "<a href='CreatePosts.html'>Go back</a>";

}
else//not blank
{

    $s = "SELECT Username FROM Users";
    $bool = "false";

    if($result = $mysqli->query($s))
    {
      while ($row = $result->fetch_assoc()) {
           if($user == $row["Username"])
           {
             $bool = "true";
           }
        }
      }
  if($bool == "true")
  {
    $sql = "INSERT INTO Posts (author_id, content)
    VALUES ('$user', '$text')";
      //$sql = "INSERT INTO Users (Username) VALUES ($user)";

       if ($mysqli->query($sql) === TRUE) {
       echo $user . " added a post! <br>";
       echo $text;
  }

  }
  else
  {
    echo "<br><br>Not a User yet. Refer to link: <br>";
    echo "<a href='CreateUser.html' >Click here to Sign-Up</a>";
  }
}



//
//
//
//   echo "<br><br>Not a User yet. Refer to link: <br>";
//
//    echo "<a href='CreateUser.html' >Click here to Sign-Up</a>";
//
//    if ($mysqli->query($sql) === TRUE) {
//
//      echo $user . " added a post! <br>";
//      echo $text
//  }
//
// else {
//   $sql = "INSERT INTO Posts (author_id, content)
//   VALUES ('$user', '$text')";
//
// }
//
// }

// // old stuff
// $sql2 = "SELECT Username FROM Users";
// //$mysql->query($sql);
//
// if($result = $mysqli->query($sql2))
// {
//   while ($row = $result->fetch_assoc()) {
//        if($row["Username"] == $user)
//        {
//              if($text != "" && $user !="")
//              {
//
//              $sql = "INSERT INTO Posts (author_id, content)
//              VALUES ('$user', '$text')";
//              if ($mysqli->query($sql) === TRUE) {
//                echo $user . " added a post! <br>";
//                echo $text;
//              } else {
//              echo "failed: " . $sql . "<br>" . $mysqli->error;
//              }
//              }
//              else //is empty
//              {
//                echo "All fields must be filled in<br> ";
//                echo "<a href='CreatePosts.html'>Go back</a>";
//              }
//
//        }
//        else{
//          echo "<br><br>Not a User yet. Refer to link: <br>";
//
//           echo "<a href='CreateUser.html' >Click here to Sign-Up</a>";
//        }
//
//
//     }












// if($user != "" || $user != "boo") //if not in empy or already in existence
// {
//   // MySQL [haleighhunt]> INSERT INTO Users (Username)
//
//   // $sql = "INSERT INTO Posts ( author_id, content)
//   // VALUES ('$user', '$text')"
//   // INSERT INTO Users (Username)
//   // VALUES ($user);
//   echo "Welcome to the family, " . $user . "<br>";
//
//   //echo SHOW COLUMNS FROM Posts;
//   $sql = "INSERT INTO Posts (author_id, content)
//  	 VALUES ('$user', '$text')";
//    mysqli_query($sql);
// }


 ?>
