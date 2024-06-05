<?php
include 'config.php';

$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Library Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Library Management System</h1>

<a href="add.php">Add New Book</a>

<h2>Book List</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Published Year</th>
        <th>Genre</th>
        <th>Actions</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td>" . $row["author"] . "</td>";
            echo "<td>" . $row["published_year"] . "</td>";
            echo "<td>" . $row["genre"] . "</td>";
            echo '<td>
                    <a href="edit.php?id=' . $row["id"] . '">Edit</a> | 
                    <a href="delete.php?id=' . $row["id"] . '">Delete</a>
                  </td>';
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No books found</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
$conn->close();
?>
