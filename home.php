<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: black;
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
            background-color: #ffff;
            padding: 20px;
            border: 1px solid;
            border-radius: 5px;
            border-color: yellow;
            position: sticky;
            top: 0px;
            z-index: 100;
        }

        nav a {
            color: black;
            text-decoration: none;
            padding: 10px 10px; /* Adjusted padding */
            margin-right: 10px; /* Added margin for spacing */
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

        /* Responsive Design */
        @media only screen and (max-width: 768px) {
            nav {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            nav a {
                margin: 10px 0;
            }

            .right-corner {
                margin-left: 0; /* Adjusting margin for responsiveness */
                margin-top: 10px;
            }
        }

        section {
            padding: 20px;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        
        .first-section {
            position: relative;
            color: white;
            height: 100vh;
            background-image: url('images/bg.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .first-section .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .first-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .first-section h2 {
            font-size: 24px;
            margin-top: 200px;
            color: white;
            position: center;
        }

        .first-section p {
            font-size: 16px;
            margin-bottom: 20px;
            color: white;
        }

        .first-section .action-buttons {
            display: flex;
            justify-content: center;
        }

        .first-section .action-buttons a,
        .first-section .action-buttons button {
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .first-section .action-buttons a:hover,
        .first-section .action-buttons button:hover {
            background-color: #ADD8E6;
        }

        .add-product-link {
            display: inline-block;
            color: white;
            text-decoration: none;
            background-color: blue;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .add-product-link:hover {
            background-color: darkgreen;
        }
    </style>
</head>
<body>
    <!-- Navigation bar -->
    <nav>
        <div>
            <a href="#home">Home</a>
            <a href="view.php">Products</a>
        </div>
        
    </nav>

    <!-- First Section -->
    <section class="first-section" id="home" style="background-image: url('images/bg.jpg'); background-size: cover; background-position: center;">
        <div class="overlay">
            <div class="container text-center text-white">
                <h2>Welcome to our Simple Store Management</h2>
                <p>This is a simple store management where user can:</p>
                <div class="action-buttons">
                    <a href="product.html" class="add-product-link">Add Product</a>
                    <a href="view.php" class="add-product-link">View Products</a>
                    <a href="update_products.php" class="add-product-link">Update Products</a>
                    <a href="delete.php" class="add-product-link">Delete Products</a>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <p>&copy; 2023 Store Management </p>
    </footer>

</body>
</html>
