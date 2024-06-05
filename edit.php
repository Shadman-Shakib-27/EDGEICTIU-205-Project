<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM books WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No book found with ID $id";
        exit;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Edit Book</h1>

<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>" required><br><br>
    <label for="author">Author:</label>
    <input type="text" id="author" name="author" value="<?php echo $row['author']; ?>" required><br><br>
    <label for="published_year">Published Year:</label>
    <input type="number" id="published_year" name="published_year" value="<?php echo $row['published_year']; ?>" required><br><br>
    <label for="genre">Genre:</label>
    <input type="text" id="genre" name="genre" value="<?php echo $row['genre']; ?>"><br><br>
    <input type="submit" value="Update Book">
</form>

</body>
</html>
