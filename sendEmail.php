<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if(isset($_POST['name']) && isset($_POST['email'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        
        $mail = new PHPMailer();

        //smtp settings 

        $mail-> isSMTP();
        $mail->Host ="smtp.gmail.com";
        $mail->SMTPAuth=true;
        $mail->Username ="mohamedali.bahri@sesame.com.tn";
        $mail->Password = 'Pc34zZ9Sp';
        $mail->Port = 465;
        $mail->SMTPSecure ="ss1";
    
        //email settings 
        mail->isHTML(true);
        mail->setFrom($email, $name);
        mail->addAdress("mohamedali.bahri@sesame.com.tn");
        mail->Subject= ("$email($subject)");
        mail->body = $body;

        if($mail->send()){
            $status ="success";
            $response ="Email is sent";
        }
        
        else {
            $status ="failed ";
            $response ="Email is NOT sent" . $mail->ErrorInfo;
        
        }
        exit (json_encode(array("status" => $status, "response" => $response)));
        
    }

?>
