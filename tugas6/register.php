<?php
include 'config.php';

$username = "admin";
$password = password_hash("123456", PASSWORD_DEFAULT); // Hash password

$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if (mysqli_query($conn, $query)) {
    echo "User berhasil ditambahkan!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
