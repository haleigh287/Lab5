<?php
//access the global array called $_POST to get the values from the text fields


//$delete = $_POST['checkbox'];

echo "Remaining database: <br>";


 $mysqli = new mysqli("mysql.eecs.ku.edu", "haleighhunt", "ed9naif7", "haleighhunt");




     $checkbox = $_POST['checkbox'];
    // $count = count($checkbox);

     for($i=0;$i<100;$i++){

         if(!empty($checkbox[$i])){ /* CHECK IF CHECKBOX IS CLICKED OR NOT */
           echo "deleting: <br>";
         // $id = mysqli_real_escape_string($connect,$checkbox[$i]); /* ESCAPE STRINGS */
         // mysqli_query($connect,"DELETE FROM Cards WHERE id = '$id'"); /* EXECUTE QUERY AND USE ' ' (apostrophe) IN YOUR VARIABLE */

         } /* END OF IF NOT EMPTY CHECKBOX */

     } /* END OF FOR LOOP */




 // if (isset($_POST['delete'])) {
 //     $checkbox = $_POST['checkbox'];
 //     $count = count($checkbox);
 //
 //     for($i = 0; $i < $count; $i++) {
 //         $id = (int) $checkbox[$i]; // Parse your value to integer
 //
 //         if ($id > 0) { // and check if it's bigger then 0
 //           echo "deleted: " . $id;
 //             //mysql_query("DELETE FROM Cards WHERE id = $id");
 //         }
 //     }
 // }
 //










//
//
//  $s = "DELETE FROM Posts
//  WHERE ssn='12345'";
// $x = $mysqli->query("SELECT * FROM Posts");
// $count = mysql_num_rows($x);
//  for($i=0;$i<$count;$i++){
//  if($i != NULL)
// {
//  echo "deleted: " . $i;
// }
// }



$sql = "SELECT author_id, content FROM Posts";
if($result = $mysqli->query($sql))
{
  while ($row = $result->fetch_assoc()) {
       echo $row["author_id"] . ": <br>" . $row["content"] . "<br><br>";
    }

    /* free result set */
    $result->free();
}
// foreach ($mysqli->query($sql) as $row){//Array or records stored in $row
// echo "<option value=$row[author_id]</option>";
// }


 //while ($row = mysql_fetch_array ($result)){

  // $sql = "DELETE FROM Posts WHERE id=selected";

//$mysqli->query($sql)


//<form action="DeletePosts.html" method="post">
            //for each user in USers
            // <select>
            //   <option value="volvo">Volvo</option>
            //   <option value="saab">Saab</option>
            //   <option value="mercedes">Mercedes</option>
            //   <option value="audi">Audi</option>
            // </select>




//echo SHOW COLUMNS FROM Posts;
//
// $query = "DELETE FROM Posts
// WHERE content=$text";
  //mysqli->query($query)
 ?>
