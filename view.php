<?php
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

// Prepare and execute SQL query to fetch all products
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-image: url('images/bg3.jpg'); /* Replace 'your-background-image.jpg' with the actual image URL */
            background-size: cover;
        }

        header {
            background-color: #333;
            padding: 10px;
            text-align: center;
            color: white;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav {
            display: flex;
            justify-content: space-between;
            background-color: whitesmoke;
            padding: 20px;
            border: 1px solid;
            border-radius: 5px;
            border-color: yellow;
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 100;
        }

        nav a {
            color: black;
            text-decoration: none;
            padding: 10px 20px;
            margin-right: 10px;
            border-radius: 5px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: blue;
        }

        nav a.active {
            color: blue;
        }

        .right-corner {
            margin-left: auto;
        }

        .product-container {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin: 10px;
            width: 30%;
            max-width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-container img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }

        .product-description {
            display: none;
            color: #555;
        }

        .view-details-btn {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin-top: 10px;
            cursor: pointer;
        }

        .view-details-btn:hover {
            background-color: #45a049;
        }
        h2{
            color: black;
            top: 5px;
        }
    </style>
</head>
<body>
    <!-- Navigation bar -->
    <nav>
        <div>
            <a href="home.php">Home</a>
            <a href="view.php" class="active">Products</a>
        </div>
    </nav>
    <h2>View Products</h2>

    <?php
    // Check if there are any products
    if ($result->num_rows > 0) {
        echo "<div style='display: flex; flex-wrap: wrap; justify-content: center;'>";
        $count = 0;
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product-container'>";
            echo "<h2 style='color: #333;'>" . $row["productName"] . "</h2>";
            echo "<img src='" . $row["image"] . "' alt='Product Image'>";
            echo "<p style='color: #777;'>Price: KShs " . $row["price"] . "</p>";
            echo "<p style='color: #777;'>Status: " . $row["status"] . "</p>";
            echo "<p class='product-description'>" . $row["description"] . "</p>";
            echo "<a href='product_detail.php?product_id=" . $row["id"] . "' class='view-details-btn'>View Product Details</a>";
            echo "</div>";

            $count++;
            // Start a new row after every 5 products
            if ($count % 5 == 0) {
                echo "</div><div style='display: flex; flex-wrap: wrap; justify-content: center;'>";
            }
        }
        echo "</div>";
    } else {
        echo "No products found.";
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.view-details-btn').on('click', function(){
                $(this).siblings('.product-description').toggle();
            });
        });
    </script>
</body>
</html>
