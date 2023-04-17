<?php
$act = "forgetps";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'forgetps':
        include "./View/forgetpassword.php";
        break;

    case 'forgetps_action':

        if (isset($_POST['submit_email'])) {
            $email = $_POST['email'];
            $_SESSION['email'] = array();

            $urs = new user();
            $checkemail = $urs->getEmail($email);

            if ($checkemail != false) {
                // tao code ngau nhien
                $code = random_int(10, 100);
                // tao doi tuong
                $item = array(
                    'id' => $code,
                    'email' => $email,
                );
                $_SESSION['email'][] = $item;
                // gui mail di
                $mail = new PHPMailer;
                $mail->IsSMTP();                                //Sets Mailer to send message using SMTP
                $mail->Host = 'smtp.gmail.com';        //Sets the SMTP hosts of your Email hosting, this for Godaddy
                $mail->Port = 587;                                //Sets the default SMTP server port
                $mail->SMTPAuth = true;                            //Sets SMTP authentication. Utilizes the Username and Password variables
                $mail->Username = 'thuan3652@gmail.com';                    //Sets SMTP username
                $mail->Password = 'wjzdyfshbaxwjabq'; //Phplytest20@php					//Sets SMTP password
                $mail->SMTPSecure = 'tls';                            //Sets connection prefix. Options are "", "ssl" or "tls"
                $mail->From = 'thuan3652@gmail.com';                    //Sets the From email address for the message
                $mail->FromName = 'Thuan';     
                           //Sets the From name of the message
                $mail->AddAddress($email,'reciever_name');        //Adds a "To" address
                //$mail->AddCC($_POST["email"], $_POST["name"]);	//Adds a "Cc" address
                // $mail->WordWrap = 50;                            //Sets word wrapping on the body of the message to a given number of characters
                $mail->IsHTML(true);                            //Sets message type to HTML				
                $mail->Subject = 'Reset Password';                //Sets the Subject of the message
                $mail->Body = 'Cấp lại mã code '.$code.'';                //An HTML or plain text message body
                if ($mail->Send())                                //Send an Email. Return true on success or false on error
                {
                    echo '<script> alert("Check Your Email and Click on the link sent to your email");</script>';
                    include "./View/resetpw.php";
                } else {
                    echo "Mail Error -> ".$mail-> ErrorInfo;
                    include "./View/forgetpassword.php";
                }
            }
            else{
                echo '<script> alert("Địa chỉ mail không tồn tại");</script>';
                include "./View/forgetpassword.php";
            }
        }
        
        break;
    
    case 'resetps':
        if (isset($_POST['submit_password'])) {
            $codeold=$_POST['password'];
            foreach($_SESSION['email'] as $key => $item){
                if ($item['id']==$codeold) {
                    $passnew=md5($codeold);
                    $emailold=$item['email'];

                    $urs=new user();
                    $urs->UpdateEmail($emailold,$passnew);
                }
            }
            include "./View/login.php";
        }
        break;
}
?>
