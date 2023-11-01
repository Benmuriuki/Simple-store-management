<?php
// update.php

if (isset($_GET["product_id"])) {
    $product_id = $_GET["product_id"];

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

    // Retrieve product details by ID
    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = $conn->query($sql);

    // Close connection
    $conn->close();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Product not found.";
    }
} else {
    echo "Invalid request.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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

    form {
        max-width: 600px;
        margin: 0 auto;
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

    input,
    select,
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    select {
        appearance: none;
        background: #fff url('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/core/src.png') no-repeat right 10px center;
        background-size: 20px;
        padding-right: 30px;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
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
    <!-- Add your update form here -->
    <h2>Edit Product</h2>
    <form action="update_process.php" method="post" enctype="multipart/form-data">
        <!-- Include form fields with the existing product details -->
        <label for="productName">Product Name:</label>
        <input type="text" name="productName" value="<?php echo $row['productName']; ?>" required>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" value="<?php echo $row['price']; ?>" required>

        <label for="image">Product Image:</label>
        <input type="file" name="image" accept="image/*">

        <label for="status">Stock Status:</label>
        <select name="status">
            <option value="instock" <?php echo ($row['status'] == 'instock') ? 'selected' : ''; ?>>In Stock</option>
            <option value="outofstock" <?php echo ($row['status'] == 'outofstock') ? 'selected' : ''; ?>>Out of Stock</option>
        </select>

        <label for="description">Product Description:</label>
        <textarea name="description" rows="4" cols="50" required><?php echo $row['description']; ?></textarea>

        <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
        <input type="submit" name="submit" value="Update Product">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>
</html>
