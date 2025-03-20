<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
$name = $_POST['name'];
$email = $_POST['email'];
if(isset($_POST['hiddencountry'])){
    $country = $_POST['hiddencountry'];
}else{
  $country = '';  
}
if(isset($_POST['canonical'])){
    $canonical = $_POST['canonical'];
}else{
    $canonical = '';
}

// if(isset($_POST['contactno'])){
//     $contactno = $_POST['contactno'];
// }else{
//     $contactno = '';
// }

if (isset($_POST['contactno'])) {
    $contactno = trim($_POST['contactno']);
    if (!ctype_digit($contactno)) {
        $contactno = ''; 
         $ErrMsg = '<span class="error-red"><i class="fa-solid fa-circle-xmark"></i>Invalid contact number. Only numbers are allowed.</span>';  
            echo $ErrMsg;  
    }
} else {
    $contactno = ''; // Default value if not set
}

if(isset($_POST['code'])){
    $countrycode = $_POST['code'];
}else if(isset($_POST['country'])){
    $countrycode = $_POST['country'];
}else{
    $countrycode = '';
}
$msg = $_POST['message'];
$contactid = $_POST['social_contact'];
$contacttype = $_POST['contact_type'];
$check = $_POST['true'];
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  

if(!preg_match ($pattern, $email)){
    $ErrMsg = '<span class="error-red"><i class="fa-solid fa-circle-xmark"></i>Email is not valid.</span>';  
            echo $ErrMsg;  
            return false;
} elseif(!preg_match ("/^[a-zA-Z\\s]+$/", $name)){
    
     $ErrMsg = '<span class="error-red"><i class="fa-solid fa-circle-xmark"></i>Alphabets only accepted.</span>';  
             echo $ErrMsg; 
             return false; 
} else {
    $message ="Name = ". $name ."\r\n  Email = ". $email ."\r\n ContactType = ". $contacttype ."\r\n Contact ID = ". $contactid."\r\n Country = ". $country ."\r\n Project Requirement = ". $msg ; 
}
    $to = "sales@opris.exchange";
    $subject = 'Opris - Contact Form';
    $from = $email;
     
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n"; 
     
    // Create email headers
    $headers .= 'From: '.$name.'<'.$email.'>'."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    
    $message = '<html><body>';
    $message .= '<p style="font-weight:bold">Dear sales Team,</p>';
    $message .= '<p>New user submit contact form.</p>';
    $message .= "<table><tbody>";
    $message .= "<tr><td>Name:</td><td>$name</td></tr>";
    $message .= "<tr><td>Email:</td><td>$email</td></tr>";
    $message .= "<tr><td>Country:</td><td>$country</td></tr>";
    $message .= "<tr><td>Code:</td><td>$countrycode</td></tr>";
    $message .= "<tr><td>Contact Number:</td><td>$contactno</td></tr>";
    $message .= "<tr><td>Contact Type:</td><td>$contacttype</td></tr>";
    $message .= "<tr><td>Contact ID:</td><td>$contactid</td></tr>";
    $message .= "<tr><td>Project Requirement:</td><td>$msg</td></tr>";
    $message .= "<tr><td>Slug URL:</td><td>$canonical</td></tr>";
    $message .= "<tr><td></td><td></td></tr>";
    $message .= "</tbody></table>";
    $message .= "<p>&nbsp;</p>";
    $message .= "<p>Regards,</p>";
    $message .= "<p>Opris Tech Team</p>";
    $message .= '</body></html>';

if(mail($to, $subject, $message, $headers)){
    echo 'Please Check Your email inbox or spam folder for contact.';
} else {
    echo 'Unable to send email. Please try again.';
}
if(mail("info@opris.exchange", $subject, $message, $headers)){
    echo 'Please Check Your email inbox or spam folder for contact.';
}

if(mail("vinoth.alpharive@gmail.com", $subject, $message, $headers)){
  echo "Mail Sent Successfully<br>";
}else{
  echo "Mail Not Sent<br>";
}

?>
<script type="text/javascript">location.href = 'https://https://www.opris.exchange/success/';</script>