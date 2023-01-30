<?php

$conn = new PDO("mysql:host=localhost; dbname=phphp", "root", "root");
$sqlDelete = "DELETE FROM Users WHERE id = 5";
$affefctedRowsNumber = $conn->exec($sqlDelete);
echo "Deleted pages: $affectedRowsNumber";

?>