<?php
if (isset($_COOKIE["username"])) {
   $username = $_COOKIE["kopr3660"];
   $password = $_COOKIE["aes4shohZ1"];

   $conn = new mysqli("vconroy.cs.uleth.ca", kopr3660, aes4shohZ1, kopr3660);
   $sql = "update employee set idnumber='$_POST[idnumber]',salary='$_POST[salary]',name='$_POST[name]' where name='$_POST[old_id]'";
   if ($conn->query($sql)) {
      echo "<h3> Employee updated!</h3>";
   } else {
      $err = $conn->errno();
      if ($err == 1062) {
         echo "<p>Employee name $_POST[idnumber] already exists!</p>";
      } else {
         echo "error code $err";
      }
   }

   echo "<a href=\"main.php\">Return</a> to Home Page.";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
}

?>