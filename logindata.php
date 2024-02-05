<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "travel";
 
$connect ="";

$connect = mysqli_connect($server,$username,$password,$database);
if(isset($_POST['login'])){
    $username = $_POST['FullName'];
    $password = $_POST['password'];

    $sql = "select * from data where username = '$username'";

    $result = mysqli_query($connect,$sql);
    $fetchRow = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $fetchRow['password']){
            header("location:index.html");
        }
        else{
            echo "username or password wrong";
        }
    }
    else{
        echo "username or password wrong";
    }
}
else{
    echo "something wrong";
}

?>