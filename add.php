<!DOCTYPE html>
<html>
<head>
    <title>Add New Book</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Add New Book</h1>

<form method="post" action="index.php">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required><br><br>
    <label for="author">Author:</label>
    <input type="text" id="author" name="author" required><br><br>
    <label for="published_year">Published Year:</label>
    <input type="number" id="published_year" name="published_year" required><br><br>
    <label for="genre">Genre:</label>
    <input type="text" id="genre" name="genre"><br><br>
    <input type="submit" value="Add Book">
</form>

</body>
</html>
