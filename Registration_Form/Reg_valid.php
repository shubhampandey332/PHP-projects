<?php
session_start();
        $name=$_POST['name'];
        $pass=$_POST['pwd'];
        $email=$_POST['email'];
        $dob=$_POST['dob'];
        $mob=$_POST['mob'];
        $adrs=$_POST['adrs'];
        $gender=$_POST['gender'];
        
        $con=mysqli_connect('localhost','root');
        $db="create database data";
        mysqli_query($con,$db);
        mysqli_select_db($con,'data');
        $sql="create table form(name varchar(30) primary key,pass varchar(30),gender enum('Male','Female','Others'),email varchar(50),dob varchar(30), mob bigint, adrs varchar(100))";
        mysqli_query($con,$sql);
        
        $insert="insert into form(name,pass,gender,email,dob,mob,adrs) values('$name','$pass','$gender','$email','$dob',$mob,'$adrs')";
        mysqli_query($con,$insert);

        $extract="select * from form where name='$name' && pass='$pass' ";
        $res=mysqli_query($con,$extract);
        $num=mysqli_num_rows($res);
        mysqli_close($con);

        if($num==1)
        {
             $_SESSION['name']=$name;
             header("location:http://localhost/app/Registration_Form/home.php");
        }
        else{
                echo "Something is wrong...Please try again";
                header("localhost:http://localhost/app/Registration_Form/Registration.php");
        }

        