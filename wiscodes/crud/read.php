<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
    <h2>CONTACTS</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">User ID</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
        include 'db.php';
        
        $sql = "SELECT * FROM crud";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['User ID'] . "</td>";
                echo "<td>" . $row['Mobile'] . "</td>";
                echo "<td><a href='update.php?id=" . $row['User ID'] ."'>Edit</a>  </td>";
                echo "<td><a href='del.php?id=" . $row['User ID'] . "'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No contacts found.</td></tr>";
        }
        
        $conn->close();
        ?>
    </tbody>
</table>
<a href="create.php" class="btn btn-primary">Add New Contact</a>
</div>
</body>
</html>