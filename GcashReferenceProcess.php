<?php

$referenceNumber = $_POST['referenceNumber'];


$conn = new mysqli('localhost', 'root', '', 'referencenumber');

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO number_reference(referenceNumber)
                            VALUES(?)");
    $stmt->bind_param("s", $referenceNumber);
    $stmt->execute();

    $stmt->close();
    $conn->close();

}

?>
