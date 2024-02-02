<?php
$server = 'localhost:3307';
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

    file_put_contents('place_data.json', $json_data);

    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($connection);
}

mysqli_close($connection);
?>




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display JSON Data</title>
</head>
<body>

    <h1>JSON Data Example</h1>

    <script>
        // Fetch JSON data using Fetch API
        fetch('student_data.json')
            .then(response => response.json())
            .then(data => {
                // Use the data as needed
                console.log(data);

                // Example: Display data in a table
                const table = document.createElement('table');
                table.innerHTML = '<tr><th>Name</th><th>Marks</th><th>Grade</th><th>Year</th></tr>';

                data.forEach(item => {
                    const row = table.insertRow();
                    row.insertCell(0).textContent = item.name;
                    row.insertCell(1).textContent = item.marks;
                    row.insertCell(2).textContent = item.grade;
                    row.insertCell(3).textContent = item.year;
                });

                document.body.appendChild(table);
            })
            .catch(error => console.error('Error fetching JSON:', error));
    </script>

</body>
</html> -->
