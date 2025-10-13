<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .welcome {
            background: #f4f4f4;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .logout {
            background: #2c3e50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
        .logout:hover {
            background: #34495e;
        }
    </style>
</head>
<body>
    <script>
        alert('Welcome, <?php echo addslashes($_SESSION['user']); ?>!');
    </script>
    <div class="container">
        <div class="welcome">
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>
            <p>You have successfully logged in.</p>
        </div>
        <a href="logout.php" class="logout">Logout</a>
    </div>
</body>
</html>
