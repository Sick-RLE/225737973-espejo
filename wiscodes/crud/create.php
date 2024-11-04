<?php
include 'db.php';

if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $user_Id = $_POST['user_Id'];
    $mobile = $_POST['mobile'];

    // Prepared statement to prevent SQL injection
    if (!empty($name) && !empty($user_Id) && !empty($mobile)) {
        $stmt = $conn->prepare("INSERT INTO crud (`Name`, `User ID`, `Mobile`) VALUES (?, ?, ?)");
        $stmt->bind_param("sis", $name, $user_Id, $mobile); // "s" for string, "i" for integer

        if ($stmt->execute()) {
            echo "SUCCESSFULLY ADDED";
        } else {
            echo "FAILED";
        }

        $stmt->close();
    } else {
        echo "Fill the blanks";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container my-5">
    <h1>CREATE USER</h1>
    <form method="post">
    <div class="mb-3">
        <input type="text" name="name"class="form-control" placeholder="Enter your Name(SURNAME, FIRST NAME)" required>
    </div>
    <div class="mb-3">
        <input type="number" name="user_Id"class="form-control" placeholder="Enter your user ID" required>
    </div>
    <div class="mb-3">
        <input type="number" name="mobile"class="form-control" placeholder="Enter your mobile number" name="num" required>
    </div>
    <a href="read.php" class="btn btn-danger">CANCEL</a>
    <button type="submit" name="create" class="btn btn-success">CREATE</button>
    </form>
</div>

</body>
</html>