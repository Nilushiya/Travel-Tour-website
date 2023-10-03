<?php
    $server = 'localhost:3307';
    $username = 'root';
    $password = '';
    $db_name = 'aaaa';
   
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
        $sql = "SELECT * FROM bbbb WHERE user = ?";
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

      if(isUsernameUnique($name,$connection)){

        $sql = "insert into bbbb(user, mail, password) 
        values ('$name', '$mail', '$password')";

        mysqli_query($connection,$sql);
        header('location:welcome.html');
      }
      else{
        echo '<script>alert("Username already exists. Please choose a different username.");</script>';
      }
    }
    else{
        echo 'something went to wrong...';
    }
    
?>