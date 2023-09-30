<!DOCTYPE html>
<html>
<body>

<!--inserting values in a table using form-->

<form action="insert.php" method="post">
<br>
employee ssn: <input type="text" name="ssn"><br><br>
name: <input type="text" name="name"><br><br>
address: <br><textarea rows='4' cols='50' name="address"></textarea><br><br>
salary    : <input type="text" name="sal"><br><br>
age: <input type="text" name="age"><br><br>
shift: <input type="text" name="shift"><br><br>
Phone Number: <input type="text" name="phone"><br><br>
<input type="submit" value="add">
</form>

<br>
<br>
<hr width=50% noshade>
<center>displaying results in a Table</d>
<hr width=50% noshade>



<?php
$con=mysqli_connect("localhost","root","","air india");


// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }




// display results in a table

$result = mysqli_query($con,"SELECT * from emp_info");

echo "<table border='1'>
<tr>
<th>Ssn</th>
<th>name</th>

<th>address</th>
<th>salary</th>
<th>age</th>
<th>shift</th>
<th>Ph no</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['emp_ssn'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['salary'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['shift'] . "</td>";
  echo "<td>" . $row['phone_number'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>

</body>
</html>