<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "travel";
 
$connect ="";

$connect = mysqli_connect($server,$username,$password,$database);
echo "Hi";
if(isset($_POST['reset'])){
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $secure_pass = password_hash($pass, PASSWORD_BCRYPT);
        $sql1 = "UPDATE data SET password = '$secure_pass' Where mail = '$mail'";
        $result = mysqli_query($connect,$sql1);
        if ($result) {
            header('location: login.html');
            exit(); // Ensure script stops execution after redirect
        } else {
            echo "Error updating password: " . mysqli_error($connect);
        }
    }
else{
    echo "something wrong";
}

?>

