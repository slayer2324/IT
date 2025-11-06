<!-- 9. Comment Censor -->
 <?php
$comment = "This is a damn good product but the service is hell";
$badWords = ["damn", "hell"];
$censoredCount = 0;
$censored = $comment;

foreach ($badWords as $word) {
    if (stripos($censored, $word) !== false) {
        $censored = str_ireplace($word, "****", $censored);
        $censoredCount++;
    }
}

echo "Original: $comment<br>";
echo "Censored: $censored<br>";
echo "Words censored: $censoredCount";
?>
