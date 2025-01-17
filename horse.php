<?php
session_start();
include 'db.php';

$id = $_GET['id'] ?? null;

if (!$id || !isset($horses[$id])) {
    echo "Horse not found!";
    exit;
}

$horse = $horses[$id];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($horse['name']); ?></title>
</head>
<body>
    <h1><?php echo htmlspecialchars($horse['name']); ?></h1>
    <p>Breed: <?php echo htmlspecialchars($horse['breed']); ?></p>
    <p>Price: $<?php echo htmlspecialchars($horse['price']); ?></p>
    <p>Description: <?php echo htmlspecialchars($horse['description']); ?></p>
    
    <a href="contact.php?id=<?php echo $id; ?>">Contact Seller</a>
    <p><a href="index.php">Back to Homepage</a></p>
</body>
</html>
