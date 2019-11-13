 <?php
 session_start();
 $name=$_POST['name'];
 $pass=$_POST['pass'];
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'data');
 $q="select * from form where name='$name' and pass='$pass'";
 $res=mysqli_query($con,$q);
 $num=mysqli_num_rows($res);
 if($num==1)
 {
   $_SESSION['name']=$name;
   header('location:http://localhost/app/GitHub/PHP-projects/Registration_Form/home.php');;
 }
 else{
     header('location:http://localhost/app/GitHub/PHP-projects/Registration_Form/login.php');;
 }
 ?>