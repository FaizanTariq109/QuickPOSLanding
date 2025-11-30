<?php
/**
 * QuickPOS Landing Page - Contact Form Handler
 * Jira: SPM-22 - Contact Form Backend (PHP Processing)
 * 
 * This script handles form submissions, validates input,
 * and sends email notifications.
 */

// Enable error reporting for development (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Set response headers
header('Content-Type: application/json');

// Initialize response array
$response = [
    'success' => false,
    'message' => '',
    'errors' => []
];

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response['message'] = 'Invalid request method.';
    echo json_encode($response);
    exit;
}

// Retrieve and sanitize form data
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validation
if (empty($name)) {
    $response['errors']['name'] = 'Name is required.';
}

if (empty($email)) {
    $response['errors']['email'] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['errors']['email'] = 'Invalid email format.';
}

if (empty($subject)) {
    $response['errors']['subject'] = 'Please select a subject.';
}

if (empty($message)) {
    $response['errors']['message'] = 'Message is required.';
} elseif (strlen($message) < 10) {
    $response['errors']['message'] = 'Message must be at least 10 characters.';
}

// If validation fails, return errors
if (!empty($response['errors'])) {
    $response['message'] = 'Please correct the errors below.';
    echo json_encode($response);
    exit;
}

// Sanitize input for email
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// ===========================
// EMAIL CONFIGURATION
// ===========================
$to = 'info@quickpos.com'; // Replace with your email
$email_subject = "QuickPOS Contact Form: $subject";

// Email body
$email_body = "
New contact form submission from QuickPOS Landing Page

Name: $name
Email: $email
Phone: $phone
Subject: $subject

Message:
$message

---
Submitted on: " . date('Y-m-d H:i:s') . "
IP Address: " . $_SERVER['REMOTE_ADDR'] . "
";

// Email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email
$mail_sent = @mail($to, $email_subject, $email_body, $headers);

// ===========================
// RESPONSE
// ===========================
if ($mail_sent) {
    $response['success'] = true;
    $response['message'] = 'Thank you! Your message has been sent successfully. We\'ll get back to you soon.';
} else {
    $response['message'] = 'Sorry, there was an error sending your message. Please try again or contact us directly.';
}

echo json_encode($response);
exit;
?>