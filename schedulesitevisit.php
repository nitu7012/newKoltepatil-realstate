<?php
$name = $_POST['name'];
$contact = $_POST['modal_my_mobile2'];
$date_time = $_POST['date_time'];

// Multiple Emails (comma separated)
$to = "saurabhsawant327@gmail.com, harshad.bhosale4378@gmail.com, botmediadigitalmarketing@gmail.com";

$subject = "New Lead Generated from Website";

$message = "
<html>
<head>
<title>Lead Notification</title>
</head>
<body>
<h3>New Lead Details</h3>
<table border='1' cellspacing='0' cellpadding='8'>
<tr><td><strong>Name</strong></td><td>$name</td></tr>
<tr><td><strong>Phone</strong></td><td>$contact</td></tr>
<tr><td><strong>Date & Time</strong></td><td>$date_time</td></tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <no_reply@jhamtani.com>' . "\r\n";

if(mail($to,$subject,$message,$headers)) {
    // ✅ Multiple WhatsApp Numbers (redirect to first one)
    // You can duplicate this logic if you want multiple redirect options
    echo "<script>
        window.location.href='https://api.whatsapp.com/send?phone=+919226931054&text=Hi, I saw the project details and scheduled my visit to Balewadi, kindly call me back, I am interested in buying a new property.';
    </script>";
} else {
    echo "<script>
        alert('Please try again!');
        window.location.href='index.html';
    </script>";
}
?>
