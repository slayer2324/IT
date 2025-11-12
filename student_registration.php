<!-- Create a PHP page called student_registration.php that contains the following form:

Form Requirements:

Full Name – (Text field)
Gender – (Radio buttons: Male, Female, Other)
Hobbies – (Checkboxes: Reading, Sports, Music, Traveling)
Country – (Single-select dropdown: Nepal, India, USA, UK)
Subjects – (Multi-select list: PHP, Java, Database, Networking, AI)
Submit button – Submits data to the same page. -->
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 45%;
            margin: 50px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], select {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border-radius: 4px;
            border: 1px solid #aaa;
        }
        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #45a049;
        }
        .result {
            background-color: #f9f9f9;
            padding: 15px;
            margin-top: 20px;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Registration Form</h2>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <!-- Full Name -->
            <label>Full Name:</label>
            <input type="text" name="fullname" required>

            <!-- Gender -->
            <label>Gender:</label><br>
            <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other
            <br><br>

            <!-- Hobbies -->
            <label>Hobbies:</label><br>
            <input type="checkbox" name="hobbies[]" value="Reading"> Reading
            <input type="checkbox" name="hobbies[]" value="Sports"> Sports
            <input type="checkbox" name="hobbies[]" value="Music"> Music
            <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling
            <br><br>

            <!-- Country -->
            <label>Country:</label>
            <select name="country" required>
                <option value="">--Select--</option>
                <option value="Nepal">Nepal</option>
                <option value="India">India</option>
                <option value="USA">USA</option>
                <option value="UK">UK</option>
            </select>

            <!-- Subjects -->
            <label>Subjects:</label><br>
            <select name="subjects[]" multiple size="5">
                <option value="PHP">PHP</option>
                <option value="Java">Java</option>
                <option value="Database">Database</option>
                <option value="Networking">Networking</option>
                <option value="AI">AI</option>
            </select>
            <br><br>

            <!-- Submit Button -->
            <input type="submit" class="submit-btn" value="Submit">
        </form>

        <?php
        // Display submitted data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullname = htmlspecialchars($_POST['fullname']);
            $gender = htmlspecialchars($_POST['gender']);
            $country = htmlspecialchars($_POST['country']);
            $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
            $subjects = isset($_POST['subjects']) ? $_POST['subjects'] : [];

            echo "<div class='result'>";
            echo "<h3>Submitted Information</h3>";
            echo "<strong>Full Name:</strong> $fullname<br>";
            echo "<strong>Gender:</strong> $gender<br>";
            echo "<strong>Hobbies:</strong> " . implode(", ", $hobbies) . "<br>";
            echo "<strong>Country:</strong> $country<br>";
            echo "<strong>Subjects:</strong> " . implode(", ", $subjects) . "<br>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
