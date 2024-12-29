
<?php
include 'index.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $thumbnail = $_POST['thumbnail'];

    $sql = "INSERT INTO courses (name, category, price, thumbnail) VALUES ('$name', '$category', $price, '$thumbnail')";

    if ($conn->query($sql) === TRUE) {
        echo "New course added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    header("Location: index.php");
    exit;
}
?>
