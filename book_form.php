<?php 
$server = 'localhost:3307';
$user = 'root';
$password = 'nilushiya';
$databse_name = 'book_db';
$connection = '';

$connection = mysqli_connect($server,$user, $password, $databse_name);
    if(isset($_POST('send'))){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $request = "insert into book_form(name,email,phone,address,location,guests,arrivals,leaving) values
        ('$name','$email','$phone','$address','$location','$guests',' $arrivals',' $leaving')";
        
    }
?>