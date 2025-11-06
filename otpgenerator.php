<?php
echo "<b>OTP Generator</b><br><br>";

for ($i = 1; $i <= 4; $i++) {
    $otp = rand(100000, 999999);
    echo "OTP $i: $otp<br>";
}
?>
