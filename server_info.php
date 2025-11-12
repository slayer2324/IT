<!-- Build a script that shows:

The client’s IP address ($_SERVER['REMOTE_ADDR'])
The browser and OS ($_SERVER['HTTP_USER_AGENT'])
The server name ($_SERVER['SERVER_NAME']) -->
<!DOCTYPE html>
<html>
<head>
    <title>Server and Client Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .info-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
            width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            margin: 10px 0;
        }
        strong {
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="info-box">
    <h2>Server & Client Information</h2>

    <?php
        // Client's IP Address
        $ip = $_SERVER['REMOTE_ADDR'];

        // Browser and Operating System
        $browser = $_SERVER['HTTP_USER_AGENT'];

        // Server Name
        $server = $_SERVER['SERVER_NAME'];

        echo "<p><strong>Client IP Address:</strong> $ip</p>";
        echo "<p><strong>Browser / OS Info:</strong> $browser</p>";
        echo "<p><strong>Server Name:</strong> $server</p>";
    ?>
</div>

</body>
</html>
