<html>
<body style= "background-color: blue; color:white; text-align: center;font-size:30; ">
<?php

if(isset($_COOKIE["username"])) {
   $username = $_COOKIE["kopr3660"];
   $password = $_COOKIE["aes4shohZ1"];

   $conn = new mysqli("vconroy.cs.uleth.ca",kopr3660,aes4shohZ1,kopr3660);

   $sql = "select * from HAS where seatnumber=$_POST[seatnumber]";

   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "<table
      border='1px';
      width='20%'
      height='10%'
      style='margin-left:auto; margin-right:auto;border-color: white;'>";

  echo"<p> Fan is attending games on: </p>";

      while($rec = $result->fetch_assoc()) {


    echo "<tr align='center'>";
    echo "<th>Date </th>";
    echo "<td>$rec[date]</td>";
    echo "</tr>";

      }
      echo "</table>";


   } else {

      echo "<p>Game does not have any fans.</p>";

   }

}
else
{
  echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";

}

echo "<a href=\"main.php\">Return</a> to Home Page.";

?>
