<?php
// Include configuration and helper functions
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['site_title']; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <!-- Header Section -->
        <?php include 'sections/header.php'; ?>

        <!-- Personal Info Section -->
        <?php include 'sections/personal.php'; ?>

        <!-- Skills Section -->
        <?php include 'sections/skills.php'; ?>

        <!-- Practices/Experience Section -->
        <?php include 'sections/experience.php'; ?>

        <!-- Education Section -->
        <?php include 'sections/education.php'; ?>

        <!-- Projects Section -->
        <?php include 'sections/projects.php'; ?>

        <!-- Contact Section -->
        <?php include 'sections/contact.php'; ?>

        <!-- Footer Section -->
        <?php include 'sections/footer.php'; ?>
    </div>

    <script src="js/main.js"></script>
</body>
</html>