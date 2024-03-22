<?php
<<<<<<< HEAD
include"connect.php";
if(isset($_POST['submit'])) {
    $username=$_POST['user'];
=======
include("connect.php");
if(isset($_POST)) {
    $username=$_POST['name'];
>>>>>>> 74ae08cf5a5265020949dd4a81ad5c928e99b506
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['confirmpassword'];

    $sql="SELECT * FROM shuka WHERE username='$username'";
    $result =mysqli_query($conn,$sql);
    $count_user=mysqli_num_rows($result);
    $mysql="SELECT * FROM shuka WHERE email='$email'";
    $myresult=mysqli_query($conn,$mysql);
    $count_email=mysqli_num_rows($myresult);


if($count_user==0 && $count_email==0){ 
     if($password==$cpassword){
        $hash=password_hash($password,PASSWORD_DEFAULT);
<<<<<<< HEAD
        $sql="INSERT INTO shuka (username,email,password) VALUES ('$username', '$email', '$hash')";
=======
        $sql="INSERT INTO shuka(username,email,password) VALUES ('$username', '$email', '$password')";
>>>>>>> 74ae08cf5a5265020949dd4a81ad5c928e99b506
        $result=mysqli_query($conn,$sql);
        
         if($result){
            header("location:LOGIN.php");
            exit();
         }
     }
     }
    else{
        if($count_user>0){
            echo"<script>
            window.location.href='index.php';
            alert('Username already exists!!');
            </script>";
        }
        if($count_email>0){
            echo"<script>
            window.location.href='index.php';
            alert('Email already exists!!');
            </script>";
        }
    }

}
echo'done';
?>
