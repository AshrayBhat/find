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
$b=$_POST["age"];
$c=$_POST["gender"];
$d=$_POST["lastloc"];
$e=$_POST["lastpin"];
$f=$_POST["description"];
$g=$_POST["otherinfo"];
$h=$_POST["contactinfo"];
$image = addslashes(file_get_contents($_FILE['photo']['tmp_name'])); //SQL Injection defence!
$image_name = addslashes($_FILES['photo']['name']);

if (!$a||!$b||!$c||!$d||!$e||!$f||!$h||!$image||!$image_name)
{
  echo "Some info is missing";
   exit();
}
$str="INSERT INTO missing VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$image','$image_name')";
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
