<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #A5D6A7;
        }
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .btn-custom {
            background-color: #4CAF50;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #388E3C;
        }
    </style>
</head>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card p-4 text-center" style="width: 400px;">
            <h2 class="text-success">Selamat Datang, <?php echo htmlspecialchars($username); ?>!</h2>
            <p class="text-muted">Anda berhasil login ke sistem.</p>
            <a href="logout.php" class="btn btn-custom w-100">Logout</a>
        </div>
    </div>
</body>
</html>
