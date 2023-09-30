<html>
<body>


<?php
$con=mysqli_connect("localhost","root","","air india");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO emp_info (emp_ssn, name, address, salary, age, shift, phone_number)
VALUES
('$_POST[ssn]','$_POST[name]','$_POST[address]','$_POST[sal]','$_POST[age]','$_POST[shift]','$_POST[phone]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "1 record added";

mysqli_close($con);
?>




<br>
<h3><tt>
<a href="employee_edit.php">Click Here</a>
</h3>
</tt>

</body>
</html>