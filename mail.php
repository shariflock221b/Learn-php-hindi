<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Email: <input name="email" type="text" autocapitalize="off"/><br><br>
        Subject: <input name="subject" type="text" /><br><br>
        Message : <br>
        <textarea name="message" rows="15" cols="40"></textarea><br><br>
        <input name="esubmit" type="submit" />
    </form>    
</body>
</html>



<?php

if(isset($_POST['esubmit'])) {
    $to = "sharif200453@gmai.com";
    $subject = "Test Mail";
    $message = "this is simple email from me";
    $from = "helloyahoobaba@gmail.net";
    $headers = "From : $from";
    mail($to, $subject, $message, $headers);
    echo "Mail Sent";

}

// $to = "sharif200453@gmai.com";
// $subject = "Test Mail";
// $message = "this is simple email from me";
// $from = "helloyahoobaba@gmail.net";
// $headers  = [
    
//     "MIME-Version : 1.0",
//     "Content-type : text/plain; charset-utf-8",
//     "From : hello@yahoobaba.net",
//     "Cc : findjquery@gmail.com",
//     "Bcc : abc@gmail.com"


// ];

// $headers = implode("\r\n", $headers);


// if(mail($to, $subject, $message, $headers)){
//     echo "Mail sent";
// }else {
//     echo "Mail not sent";
// }


