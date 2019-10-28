<?php
//access the global array called $_POST to get the values from the text fields

$user = $_POST['user'];
$text = $_POST['text'];

if( $user == "boo")//User exists
  {
    if($text != "")
    {
    echo $user . " added a post! <br>";
    echo $text;
    $sql = "INSERT INTO Posts ( author_id, content)
    VALUES ('$user', '$text')";
    mysqli_query($sql);
    }
    else //is empty
    {
      echo "Unable to add blank paragraph. ";
    }
  }
else {
  echo "Not a User yet. Refer to:";

   echo "<a href='CreateUser.html' target='_blank'>Click here to Sign-Up</a>";
//
 $link = "<a href='CreateUser.html' target='_blank'>Click here to Sign-Up</a>";
}




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
