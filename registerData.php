<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'travel';
   
    $connection = '';

    //duplicate user name
    // function isUsernameUnique($username, $conn) {
    //     $sql = "SELECT * FROM usersname WHERE username = ?";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bind_param("s", $username);
    //     $stmt->execute();
    //     $result = $stmt->get_result();
    //     return $result->num_rows === 0;
    // }
    function isUsernameUnique($username, $conn) {
        $sql = "SELECT * FROM data WHERE username = ?";
        $stmt = $conn->prepare($sql);
    
        if (!$stmt) {
            die("Error: " . $conn->error); // Handle the error
        }
    
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows === 0;
    }
    $connection = mysqli_connect($server,$username,$password,$db_name);
    if(isset($_POST['submit'])){
        $name = $_POST['FullName'];
        $mail = $_POST['mail'];
        $password = $_POST['Password'];

        $secure_pass = password_hash($pass, PASSWORD_BCRYPT);
      if(isUsernameUnique($name,$connection)){

        $sql = "insert into data(username, mail, password) 
        values ('$name', '$mail', '$secure_pass')";

        mysqli_query($connection,$sql);
        header('location:index.html');
      }
      else{
        //header('location:index.html');
        echo '<script>alert("Username already exists. Please choose a different username.");</script>';
        //header('location:index.html');
        echo '<script>window.location.href = "index.html";</script>';
      }
    }
    else{
        echo 'something went to wrong...';
    }
    
?>