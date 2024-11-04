<?php
include 'db.php';

if (isset($_GET['id'])) {
    $idd = $_GET['id'];
    $sql = "SELECT * FROM crud WHERE `User ID` = $idd";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $user_Id = $_POST['user_Id'];
    $mobile = $_POST['mobile'];

    $stmt = $conn->prepare("UPDATE crud SET `Name` = ?, `Mobile` = ? WHERE `User ID` = ?");
    $stmt->bind_param("ssi", $name, $mobile, $user_Id);

    if ($stmt->execute()) {
        echo "Record updated successfully";
        header("Location: read.php");
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container my-5">
    <h1>CREATE USER</h1>
    <form method="post">
    <div class="mb-3">
        <input type="text" name="name"class="form-control" placeholder="Enter your Name(SURNAME, FIRST NAME)" value="<?php echo $row['Name']; ?>" required>
    </div>
    <div class="mb-3">
        <input type="number" name="user_Id"class="form-control" placeholder="Enter your user ID" value="<?php echo $row['User ID']; ?>" required>
    </div>
    <div class="mb-3">
        <input type="number" name="mobile"class="form-control" placeholder="Enter your mobile number" value="<?php echo $row['Mobile']; ?>" required>
    </div>
    <a href="read.php" class="btn btn-danger">CANCEL</a>
    <button type="submit" name="update" class="btn btn-success">UPDATE</button>
</div>

</body>
</html>