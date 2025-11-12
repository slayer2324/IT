<!-- Create a feedback form with fields: name, rating (1–5), and comment.

On submission:

Show the submitted data.
Use $_SERVER['REQUEST_METHOD'] to check if the form was posted. -->
<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f9fb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form, .output {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 350px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], textarea, select {
            width: 100%;
            padding: 8px;
            margin: 6px 0 12px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    // Display submitted data
    echo "<div class='output'>";
    echo "<h2>Feedback Received</h2>";
    echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
    echo "<p><strong>Rating:</strong> " . htmlspecialchars($rating) . "/5</p>";
    echo "<p><strong>Comment:</strong><br>" . nl2br(htmlspecialchars($comment)) . "</p>";
    echo "<a href='feedback.php'>Go Back</a>";
    echo "</div>";
} 
else {
?>

<form method="POST" action="feedback.php">
    <h2>Feedback Form</h2>

    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <label for="rating">Rating (1–5):</label>
    <select name="rating" required>
        <option value="">--Select--</option>
        <option value="1">1 - Poor</option>
        <option value="2">2 - Fair</option>
        <option value="3">3 - Good</option>
        <option value="4">4 - Very Good</option>
        <option value="5">5 - Excellent</option>
    </select>

    <label for="comment">Comment:</label>
    <textarea name="comment" rows="4" required></textarea>

    <input type="submit" value="Submit Feedback">
</form>

<?php
}
?>

</body>
</html>
