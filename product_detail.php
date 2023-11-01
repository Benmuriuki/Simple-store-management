<!-- product_detail.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link rel="stylesheet" href="style.css"> <!-- Include your stylesheet -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
            background-image: url('images/bg-detail.jpg'); /* Replace 'your-background-image.jpg' with the actual image URL */
            background-size: cover;
            color: #333;
        }

        h2 {
            color: #fff;
            background-color: #333;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .product-container {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            width: 50%;
            margin: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-container img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .product-description {
            color: #555;
            margin-bottom: 20px;
        }

        .back-btn {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .back-btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h2>Product Detail</h2>

    <?php
    if (isset($_GET["product_id"])) {
        $product_id = $_GET["product_id"];

        // Database connection (you can reuse this part)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "store";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve product details by ID
        $sql = "SELECT * FROM products WHERE id = $product_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<div class='product-container'>";
            echo "<img src='" . $row["image"] . "' alt='Product Image'>";
            echo "<h2>" . $row["productName"] . "</h2>";
            echo "<p>Price: KShs " . $row["price"] . "</p>";
            echo "<p>Status: " . $row["status"] . "</p>";
            echo "<p class='product-description'>" . $row["description"] . "</p>";
            echo "<a href='view.php' class='back-btn'>Back to Product List</a>";
            echo "</div>";
        } else {
            echo "Product not found.";
        }

        $conn->close();
    } else {
        echo "Invalid request.";
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Add any additional scripts needed for the product detail page -->
</body>
</html>
