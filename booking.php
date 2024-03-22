<?php
include("connect2.php");

if(isset($_POST)) {
    $name = $_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $hairstyle = $_POST['hairstyle'];
    $haircolor = $_POST['haircolor'];
    $hairlength = $_POST['hairlength'];
    $day = $_POST['day'];
    $time = $_POST['time'];

    // Check if the username exists in the shuka table
    $sql = "SELECT * FROM shuka WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    if($count_user == 0) {
        // Username exists, proceed with insertion
        $sql = "INSERT INTO bookings(name, phonenumber, hairstyle, haircolor, hairlength, day, time) 
                VALUES ('$name', '$phonenumber', '$hairstyle', '$haircolor', '$hairlength', '$day', '$time')";
        $result = mysqli_query($conn, $sql);

        if($result) {
            // Redirect to success page
            header("location:about.html");
            exit();
        } else {
            // Handle insertion error
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Username does not exist in shuka table, show error
        echo "Error: Username does not exist";
    }
}
var_dump($result);
?>
