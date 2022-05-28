<?php
include 'dbconnect.php';   
session_start();
$tickets =explode(",",$_POST["tickets"]);

$movie=$_SESSION['selected_movie'];
$user=$_SESSION['user_id'];

foreach($tickets as $x => $val) {
  //  echo "$x = $val<br>";
    $sql = "INSERT INTO `seatselection` ( `mov_id`, 
         `userid`, `number`) VALUES ('$movie', '$user', '$val')";

      $result = mysqli_query($conn, $sql);
  }

  header("Location: redirecting.php");

    

        // $hash = md5($password);
            
        // // Password Hashing is used here. 
        // $sql = "INSERT INTO `signup` ( `username`, 
        //     `password`, `email_id`, `phonenumber`) VALUES ('$username', 
        //     '$hash', '$email',$phone)";

        // $result = mysqli_query($conn, $sql);

        // if ($result) {
        //     header("Location: user_access.php?navigate=login");
        // }
     
          



?>