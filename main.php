<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPHPHPHP</title>
</head>
<body>
<?php
if (isset($_POST["username"]) && isset($_POST["userage"])) {

    $username = $_POST["username"];
    $userage = $_POST["userage"];
    $conn = new PDO("mysql:host=127.0.0.1; port=3305; dbname=phphp", "root", "root");
    
    $sqlInsert = "INSERT INTO Users (name, age) VALUES ('$username', $userage)";
    $resultInsert = $conn->exec($sqlInsert); 
};

function outputDataFromDB()
{
    $conn = new PDO("mysql:host=127.0.0.1; port=3305; dbname=phphp", "root", "root");
    $sqlSelect = "SELECT * FROM Users WHERE age > 18";
    $resultSelect = $conn->query($sqlSelect); 
    echo "<table><tr><th>ID</th><th>Name</th><th>Age</th></tr>";
    while($row = $resultSelect->fetch()){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
        echo "</tr>";
    }
}

outputDataFromDB();
?>
<h3>Create a new User</h3>
<form method="post">
    <p>User Name:
    <input type="text" name="username" /></p>
    <p>User Age:
    <input type="number" name="userage" /></p>
    <input type="submit" value="Save">
</form>
</body>
</html>
