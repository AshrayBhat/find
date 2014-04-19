<html>
<body>
welcome

<?php
$dbserver="localhost";
$username="root";
$password=""; // if it is exist in your database other wise it will be null($password="")
$connection=mysql_connect("$dbserver","$username","$password")or die("could not connect to the server");
$databasename="find";
mysql_select_db("$databasename", $connection)or die("could not select database");
$a=$_POST["name"];
$b=$_POST["full_address"];
$c=$_POST["city"];
$d=$_POST["pin"];
$e=$_POST["email"];
$f=$_POST["password"];
$g=$_POST["confirmpassword"];
if ($f != $g)
{
  echo "Passwords Donot match";
   exit();
}
$str="INSERT INTO registration VALUES('$a','$b','$c','$d','$e','$f')";
$sql=mysql_query("$str");
if (mysql_errno() == 1062) {
    print 'Already Registered';
}elseif(!$sql)
{
  echo"Invalid values";
}else
echo "Registered sucessfully";
?>
</html>
</body>
