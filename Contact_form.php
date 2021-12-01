<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

session_start();

function function_alert($message) {
	
	// Display the alert box
	echo "<script>alert('$message');</script>";
}


$con = mysqli_connect('sql203.epizy.com','epiz_30339123','HpYjkfiyyp');

mysqli_select_db($con,'epiz_30339123_Maverick');

$email = $_POST['email'];
$subject = $_POST['subject'];


$s = " select * from Contact_form where email = '$email'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	
	$message = "You Response was already submited";
    echo "<script>
    alert('$message');
    window.location.href='app.php';
    </script>";
}else
{
	$reg="insert into Contact_form(email,subject) values ('$email','$subject')";
	mysqli_query($con, $reg);
	$message = "Thanku For Your Response";
    echo "<script>
    alert('$message');
    window.location.href='app.php';
    </script>";
}

?>

</body>
</html>
