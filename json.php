<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'travel';

$connection = mysqli_connect($server, $username, $password, $db_name);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM places_details";
$result = mysqli_query($connection, $sql);

if ($result) {
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $json_data = json_encode($data, JSON_PRETTY_PRINT);

    file_put_contents('place.json', $json_data);

    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($connection);
}

mysqli_close($connection);
?>




