<?php
session_start();
if(!isset($_SESSION['name']))
{
    header('location:http://localhost/app/GitHub/PHP-projects/Registration_Form/login.php');
}
?>
<!Doctype html>
<html>
<head>
</head>
<body>
<h2>Hello <?php echo $_SESSION['name'];?></h2>
<a href="http://localhost/app/GitHub/PHP-projects/Registration_Form/logout.php"><button>Logout</button></a>
</body>
</html>