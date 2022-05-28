<?php
include 'dbconnect.php';   
$username = $_POST["username"]; 
$password = $_POST["password"]; 
$email = $_POST["email"];
$phone = $_POST["phone"];
        

$sql = "Select * from signup where username='$username'";

$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result); 

// This sql query is use to check if
// the username is already present 
// or not in our Database
if($num == 0) {
    

        $hash = md5($password);
            
        // Password Hashing is used here. 
        $sql = "INSERT INTO `signup` ( `username`, 
            `password`, `email_id`, `phonenumber`) VALUES ('$username', 
            '$hash', '$email',$phone)";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: user_access.php?navigate=login");
        }
     
         
}// end if 

if($num>0) 
{
    echo "<script>
alert('user Exists');
window.location.href='user_access.php?navigate=signup';
</script>";
} 

?>