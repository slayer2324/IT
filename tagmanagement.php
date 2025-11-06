<?php
$tags = ["PHP", "Web Development", "Programming", "MySQL", "Backend"];

echo "Tags as array: ";
print_r($tags);

$tagString = implode(", ", $tags);
echo "<br><br>Tags as string: $tagString<br><br>";

if (in_array("PHP", $tags))
    echo "\"PHP\" tag exists<br>";
else
    echo "\"PHP\" tag not found<br>";

if (in_array("JavaScript", $tags))
    echo "\"JavaScript\" tag exists<br>";
else
    echo "\"JavaScript\" tag not found<br>";

sort($tags);
echo "<br>Sorted tags: " . implode(", ", $tags) . "<br>";
echo "Total tags: " . count($tags);
?>
