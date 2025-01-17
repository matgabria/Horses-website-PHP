<?php
include 'db.php';

$id = $_GET['id'] ?? $_POST['horse_id'] ?? null;

if (!$id || !isset($horses[$id])) {
    echo "Horse not found!";
    exit;
}

$horse = $horses[$id];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $horse_id = $_POST['horse_id'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color: red;'>Invalid email format. Please try again.</p>";
    } else {
        echo "<p>Thank you, $name! Your message about " . $horses[$horse_id]['name'] . " has been sent.</p>";
}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Seller</title>
</head>
<body>
    <h1>Contact Seller for <?php echo htmlspecialchars($horse['name']); ?></h1>
    
    <form action="contact.php" method="POST">
        <input type="hidden" name="horse_id" value="<?php echo $id; ?>">
        <label for="name">Your Name:</label>
        <input type="text" name="name" required><br><br>
        <label for="email">Your Email:</label>
        <input type="text" name="email" required><br><br>
        <label for="message">Message:</label>
        <textarea name="message" required></textarea><br><br>
        <button type="submit">Send Message</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        $horse_id = $_POST['horse_id'];

        echo "<p>Thank you, $name! Your message about " . htmlspecialchars($horses[$horse_id]['name']) . " has been sent.</p>";
    }
    ?>
</body>
</html>
