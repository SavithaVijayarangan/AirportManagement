<html>
<body>
<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("airport", $con);

$sql1="INSERT INTO employee(ename,essn,salary,address,phoneno,planeno,shift)
VALUES
('$_POST[ename]','$_POST[essn]','$_POST[salary]','$_POST[address]','$_POST[phoneno]','$_POST[planeno]','$_POST[shift]')";
if (!mysql_query($sql1,$con))
  {
  die('Error: ' . mysql_error());
  }

$sql2="INSERT INTO airline(planeno,model,totalseats,routeno)
VALUES
('$_POST[planeno]','$_POST[model]','$_POST[totalseats]','$POST[routeno]')";

if (!mysql_query($sql2,$con))
  {
  die('Error: ' . mysql_error());
  }

$sql3="INSERT INTO route(routeno,source,destination)
VALUES
('$_POST[routeno]','$_POST[source]','$_POST[destination]')";

if (!mysql_query($sql2,$con))
  {
  die('Error: ' . mysql_error());
  }


$sql4="INSERT INTO service(planeno,week)
VALUES
('$_POST[planeno]','$POST[week]')";

if (!mysql_query($sql2,$con))
  {
  die('Error: ' . mysql_error());
  }

echo "1 record added";
mysql_close($con)
?> 
<form action="redirect1.html" method="post">
<input type="submit" value="Back" />
</form>
</html>
