<?php
//access the global array called $_POST to get the values from the text fields

$user = $_POST['user'];
$text = $_POST['text'];


echo "Welcome, Admin. Choose User from Database";


 while ($row = mysql_fetch_array ($result)){

   $sql = "DELETE FROM Posts WHERE id=selected";

$mysqli->query($sql)


<form action="DeletePosts.php" method="post">
            //for each user in USers
            <select>
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="mercedes">Mercedes</option>
              <option value="audi">Audi</option>
            </select>

            <input type="radio" name="User1" value="<?php echo $row ['Username']; ?> " >
            Username
            <input type="radio" name="User2" value="<?php echo $row ['Username']; ?> " >
            Password
            <input type="radio" name="User3" value="<?php echo $row ['Username']; ?>" >
            <input type="submit" name="submit" value="Update">
        </form>
      }

//echo SHOW COLUMNS FROM Posts;
//
// $query = "DELETE FROM Posts
// WHERE content=$text";
  //mysqli->query($query)
 ?>
