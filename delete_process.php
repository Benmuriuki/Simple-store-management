<?php
if (isset($_POST["submit"])) {
    $product_id = $_POST["product_id"];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "store";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Delete the product from the database
    $sql = "DELETE FROM products WHERE id = $product_id";
    if ($conn->query($sql) === TRUE) {
        echo "Product deleted successfully!";
        header("Location: view.php");
    } else {
        echo "Error deleting product: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
