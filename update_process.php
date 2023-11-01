<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Get form data
    $product_id = $_POST["product_id"];
    $productName = $_POST["productName"];
    $price = $_POST["price"];
    $status = $_POST["status"];
    $description = $_POST["description"];

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

    // Prepare and execute SQL query for updating the product
    $stmt = $conn->prepare("UPDATE products SET productName=?, price=?, status=?, description=? WHERE id=?");
    $stmt->bind_param("sdssi", $productName, $price, $status, $description, $product_id);
    
    if ($stmt->execute()) {
        echo "Product updated successfully!";
        header("Location: view.php");
    } else {
        echo "Error updating product: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
