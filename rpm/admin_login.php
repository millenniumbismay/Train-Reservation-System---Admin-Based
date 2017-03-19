<html>
<body bgcolor="#16EGFA">

<?php 
session_start();
error_reporting(0);
if($_POST["uid"]=='admin' AND $_POST["password"]=='12345' )
{
$_SESSION["admin_login"]=True;
}
else
{
	$_SESSION["admin_login"]=False;
}

if($_POST["logout"])
{
$_SESSION["admin_login"] = False;
echo("
	<script>
	window.open('index.htm','_self');
	</script>
");
}

if($_SESSION["admin_login"]==True)
{
echo " <br><a href=\"insert_into_stations.php\"> Show All Stations </a><br> ";
echo " <br><a href=\"show_trains.php\"> Show All Trains </a><br> ";
echo " <br><a href=\"show_users.php\"> Show All Users </a><br> ";
echo " <br><a href=\"insert_into_train_3.php\"> Enter New Train </a><br> ";
echo " <br><a href=\"insert_into_classseats_3.php\"> Enter Train Schedule </a><br> ";
echo " <br><a href=\"booked.php\"> View all booked tickets </a><br> ";
echo " <br><a href=\"cancelled.php\"> View all cancelled tickets </a><br> ";

echo"
<form action=\"admin_login.php\" method=\"POST\">
<input type=\"SUBMIT\" name=\"logout\" value=\"Log Out\">
</form>";
//echo " <br><a href=\"http://localhost/railway/logout.php\"> Logout </a><br> ";
}
else 
{
echo "
<form action=\"admin_login.php\" method=\"post\">
User ID: <input type=\"text\" name=\"uid\" required><br>
Password: <input type=\"password\" name=\"password\" required><br>
<input type=\"submit\">
</form>
";
}

?>
<br><a href="index.htm">Go to Home Page!!!</a>

</body>
</html>
