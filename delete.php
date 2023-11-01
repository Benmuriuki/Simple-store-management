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

// Retrieve all products
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
    <title>Delete Product</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
            background-image: url('images/bg-form.jpg'); 
            background-size: cover;
        }

        h2 {
            color: #ffff;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .product-form {
            flex: 0 0 30%;
            margin-bottom: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #d9534f;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        input[type="submit"]:hover {
            background-color: #c9302c;
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

        .product-details {
            text-align: left;
        }

        .product-img {
            width: 100%;
            height: 150px; /* Adjust as needed */
            border-radius: 5px;
            object-fit: cover;
        }

        .delete-btn {
            background-color: #d9534f;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }

        .delete-btn:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <!-- Navigation bar -->
    <nav>
        <div>
            <a href="home.php">Home</a>
            <a href="view.php">Products</a>
        </div>
    </nav>
    <!-- delete confirmation form -->
    <h2>Delete Product</h2>
    <div class="product-container">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <form action="delete_process.php" method="post" class="product-form">
                    <div class="product-details">
                        <strong><?php echo $row['productName']; ?></strong>
                        <img class="product-img" src="<?php echo $row['image']; ?>" alt="<?php echo $row['productName']; ?>">
                        <p>Price: KShs.<?php echo $row['price']; ?></p>
                        <p>Description: <?php echo $row['description']; ?></p>
                    </div>
                    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                    <input class="delete-btn" type="submit" name="submit" value="Delete" onclick="return confirm('Are you sure you want to delete?')">
                </form>
                <?php
            }
        } else {
            echo "No products found.";
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>
