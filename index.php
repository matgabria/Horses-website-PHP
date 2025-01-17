<?php
session_start();
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horses for Sale</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Horses for Sale</h1>

    <?php if (isset($_SESSION['username'])): ?>
        <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>! <a href="logout.php">Logout</a></p>
    <?php else: ?>
        <p><a href="login.php">Login</a></p>
    <?php endif; ?>

    <ul>
        <?php foreach ($horses as $id => $horse): ?>
            <li>
                <h2><?php echo htmlspecialchars($horse['name']); ?></h2>
                <p>Breed: <?php echo htmlspecialchars($horse['breed']); ?></p>
                <p>Price: $<?php echo htmlspecialchars($horse['price']); ?></p>
                <a href="horse.php?id=<?php echo $id; ?>">View Details</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
