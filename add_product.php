<?php
if (isset($_POST["submit"]) &&$_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $productName = $_POST["productName"];
    $price = $_POST["price"];
    $status = $_POST["status"];
    $description = $_POST["description"];

    // Handle image upload
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
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

        // Prepare and execute SQL query
        $stmt = $conn->prepare("INSERT INTO products (productName, price, status, description, image) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sdsss", $productName, $price, $status, $description, $targetFile);
        $stmt->execute();

        // Close statement and connection
        $stmt->close();
        $conn->close();

        echo "Product added successfully!";
        header("location:home.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
