<?php
session_start();
include 'dbconnect.php';   

$password = $_POST["password"]; 
$email = $_POST["email"];

$hash = md5($password);   

$sql = "Select * from signup where email_id='$email' and password='$hash'";

$result = mysqli_query($conn, $sql);
$row  = mysqli_fetch_array($result);
$num = mysqli_num_rows($result); 

// This sql query is use to check if
// the username is already present 
// or not in our Database
if($num ==1) {
    $_SESSION["user_id"] = $row['userid'];
    $_SESSION["user_name"] = $row['username'];

    if(isset($_SESSION['selected_movie']) && !empty($_SESSION['selected_movie'])){
    echo "<script>
alert('Logged In successfully');
window.location.href='seatui.php';
</script>";
    }
    else{
        echo "<script>
        alert('Logged In successfully');
        window.location.href='index.php';
        </script>";   
    }
         
}// end if 

else
{
    echo "<script>
alert('Login Failed');
window.location.href='user_access.php?navigate=login';
</script>";
} 

?>