<?php
 
// Email address verification
function isEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
 
if($_POST) {
 
    // Enter the email where you want to receive the message
    $emailTo = 'nima.maghooli.97@gmail.com';
 
    $name = addslashes(trim($_POST['name']));
    $clientEmail = addslashes(trim($_POST['email']));
    $profession = addslashes(trim($_POST['profession']));
    $subject = addslashes(trim($_POST['subject']));
    $message = addslashes(trim($_POST['message']));
 
    $array = array('nameMessage' => '', 
                   'emailMessage' => '', 
                   'professionMessage' => '', 
                   'subjectMessage' => '', 
                   'messageMessage' => ''
                  );
 
    if($name == '') {
        $array['nameMessage'] = 'Empty name!';
    }
    if(!isEmail($clientEmail)) {
        $array['emailMessage'] = 'Invalid email!';
    }
    if($profession == 'Your profession...') {
        $array['professionMessage'] = 'Choose a profession!';
    }
    if($subject == '') {
        $array['subjectMessage'] = 'Empty subject!';
    }
    if($message == '') {
        $array['messageMessage'] = 'Empty message!';
    }
     
    if($name!='' && isEmail($clientEmail) && $profession!='Your profession...' && $subject!='' && $message!='') {
        // Send email
        $message = "Message from: " . $name . "\r\n" . "Profession: " . $profession . "\r\n" . $message;
        $headers = "From: " . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
        mail($emailTo, $subject . " (contact form template dropdown)", $message, $headers);
    }
 
    echo json_encode($array);
 
}
 
?>
<?php
 
// Email address verification
function isEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
 
if($_POST) {
 
    // Enter the email where you want to receive the message
    $emailTo = 'contact.azmind@gmail.com';
 
    $name = addslashes(trim($_POST['name']));
    $clientEmail = addslashes(trim($_POST['email']));
    $profession = addslashes(trim($_POST['profession']));
    $subject = addslashes(trim($_POST['subject']));
    $message = addslashes(trim($_POST['message']));
 
    $array = array('nameMessage' => '', 
                   'emailMessage' => '', 
                   'professionMessage' => '', 
                   'subjectMessage' => '', 
                   'messageMessage' => ''
                  );
 
    if($name == '') {
        $array['nameMessage'] = 'Empty name!';
    }
    if(!isEmail($clientEmail)) {
        $array['emailMessage'] = 'Invalid email!';
    }
    if($profession == 'Your profession...') {
        $array['professionMessage'] = 'Choose a profession!';
    }
    if($subject == '') {
        $array['subjectMessage'] = 'Empty subject!';
    }
    if($message == '') {
        $array['messageMessage'] = 'Empty message!';
    }
     
    if($name!='' && isEmail($clientEmail) && $profession!='Your profession...' && $subject!='' && $message!='') {
        // Send email
        $message = "Message from: " . $name . "\r\n" . "Profession: " . $profession . "\r\n" . $message;
        $headers = "From: " . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
        mail($emailTo, $subject . " (contact form template dropdown)", $message, $headers);
    }
 
    echo json_encode($array);
 
}
 
?>
