<?php
//access the global array called $_POST to get the values from the text fields
$user = $_POST['user'];

echo $user . "'s posts:";

//SHOW COLUMNS FROM Posts
//
// SELECT * FROM Posts WHERE author_id = $user;
//ORDER BY post_id;
 ?>
