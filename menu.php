<!-- Design a menu page (menu.php) with 3 links:

?page=home
?page=about
?page=contact
Using $_GET['page'], display the respective content dynamically (without multiple files). -->
<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Menu Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .content {
            margin: 30px;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <!-- Navigation Menu -->
    <nav>
        <a href="menu.php?page=home">Home</a>
        <a href="menu.php?page=about">About</a>
        <a href="menu.php?page=contact">Contact</a>
    </nav>

    <div class="content">
        <?php
        // Check if 'page' parameter exists
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            // Display content based on page value
            if ($page == "home") {
                echo "<h2>Welcome to the Home Page</h2>";
                echo "<p>This is the homepage of our dynamic PHP website.</p>";
            } 
            elseif ($page == "about") {
                echo "<h2>About Us</h2>";
                echo "<p>We are a team of developers learning PHP and web development.</p>";
            } 
            elseif ($page == "contact") {
                echo "<h2>Contact Us</h2>";
                echo "<p>Email: contact@example.com<br>Phone: +977-9800000000</p>";
            } 
            else {
                echo "<h2>404 Error</h2>";
                echo "<p>Sorry, the page you are looking for does not exist.</p>";
            }
        } 
        else {
            // Default page (when no parameter is set)
            echo "<h2>Welcome!</h2>";
            echo "<p>Please select a page from the menu above.</p>";
        }
        ?>
    </div>

</body>
</html>
