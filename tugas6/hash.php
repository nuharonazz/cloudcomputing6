<?php
$password = "admin123"; // Ganti dengan password yang ingin dihash
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
echo "Hashed Password: " . $hashed_password;
?>
