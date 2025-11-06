<!-- 7. Username Validator -->
 <?php
$username = "  Ram123  ";
$username = trim($username); // remove spaces

$length = strlen($username);

echo "Username: $username<br>";
echo "Length: $length characters<br>";

if ($length >= 5 && $length <= 15) {
    echo "Username is valid (5-15 characters)";
} else {
    echo "Invalid username length!";
}
?>
