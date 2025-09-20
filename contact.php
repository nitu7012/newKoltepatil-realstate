<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $project = $_POST['project'] ?? '';
    $fullname = $_POST['fullname'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';

    $to = "harshad.bhosale4378@gmail.com, botmediadigitalmarketing@gmail.com, nitukumari251001@gmail.com";
    $subject = "New Lead Notification - Website";

    $message = "
    <html>
    <head><title>New Lead</title></head>
    <body>
    <h3>Lead Details</h3>
    <table border='1' cellspacing='0' cellpadding='6'>
        <tr><td><strong>Project</strong></td><td>$project</td></tr>
        <tr><td><strong>Name</strong></td><td>$fullname</td></tr>
        <tr><td><strong>Phone</strong></td><td>$phone</td></tr>
        <tr><td><strong>Email</strong></td><td>$email</td></tr>
    </table>
    </body>
    </html>
    ";

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: <no_reply@jhamtani.com>\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to thank you page
        header("Location: thankyou.html");
        exit();
    } else {
        echo "<script>alert('Error sending email.'); window.location.href='index.html';</script>";
    }
} else {
    // If accessed directly via GET
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
