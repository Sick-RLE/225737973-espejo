<?php
include 'db.php';

if (isset($_GET['id'])) {
    $user_Id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM crud WHERE `User ID` = ?");
    $stmt->bind_param("i", $user_Id);

    if ($stmt->execute()) {
        echo "Record deleted successfully";
        header("Location: read.php");
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
}
?>
