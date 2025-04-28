<?php
/**
 * Contact form processing script
 */

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Include configuration file
    require_once 'includes/config.php';
    
    // Get form data and sanitize
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    // Validate data
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }
    
    if (empty($subject)) {
        $errors[] = "Subject is required.";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required.";
    }
    
    // Process if no errors
    if (empty($errors)) {
        // Recipient email (your email from config)
        $to = $config['email']['gmail']; // Using Gmail as default
        
        // Email headers
        $headers = "From: $name <$email>" . "\r\n";
        $headers .= "Reply-To: $email" . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
        
        // Email body
        $emailBody = "
            <html>
            <head>
                <title>New Contact Form Submission</title>
            </head>
            <body>
                <h2>New Contact Form Submission</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Subject:</strong> $subject</p>
                <p><strong>Message:</strong></p>
                <p>" . nl2br($message) . "</p>
            </body>
            </html>
        ";
        
        // Send email (in production, this would be configured with proper email settings)
        // Note: For demonstration only; in a real-world scenario, you'd need configured mail settings
        // mail($to, "Contact Form: $subject", $emailBody, $headers);
        
        // For this example, we'll just simulate success
        $success = true;
        
        // Redirect back to contact with success message
        header('Location: index.php?contact=success#contact');
        exit;
    } else {
        // Redirect back with errors
        $errorString = implode('|', $errors);
        header("Location: index.php?contact=error&errors=$errorString#contact");
        exit;
    }
} else {
    // Not a POST request, redirect to homepage
    header('Location: index.php');
    exit;
}