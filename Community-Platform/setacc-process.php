<?php
    include 'conn.php';

    if(isset($_POST['Save'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $uname = $_POST['uname'];
        $dob = $_POST['dob'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $district = $_POST['district'];
        // $community = $_POST['community'];
        $true = "1";

        // $insertquery = "INSERT into user (name,email,uname,dob,city,district,state,community,success) values('$name','$email','$uname','$dob','$city','$district','$state','$community','$true')";
        $insertquery = "UPDATE user SET dob='$dob',city='$city', district='$district', state='$state',success='$true' WHERE name='$name'";
            if(mysqli_query($con,$insertquery))
            {
                // echo '<script>alert("Account Setup Complete");</script>' ;
                header("location:feed.php");
                // $true = "1";
                // $success = "INSERT into profile (success) values ('true')";
            }else{
                echo '<script>alert("Error Setup");</script>' ;
            }
    }
?>