<?php

namespace Fir\Models;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 
class User extends Model {

    public function register()
    {
        $firstname = $param['firstname'];
        $lastname = $param['lastname'];
        $email = $param['email'];
        $telp = $param['telp'];
        $password = $param['password'];
        $copassword = $param['copassword'];
        $sql = "SElECT * FROM user WHERE firstname = '$firstname'";
        $query = $db->query($sql);
        var_dump($param);
    }

    public function proceedRegister($param){
        $link_activation_email = 'http://localhost/tgif/preferences/confirm?email='.urlencode($param);
        if(sendConfirmationEmail($param['email'], 'third2014project@gmail.com', 'Multazam Arorihan', 'No-Reply Email activation link', 'please click the following link to activate your tgif account, thanks for joining us! '.$link_activation_email) == true){
            $query = $this->db->prepare("INSERT INTO `user` VALUES('','".$params['firstname']."','".$params['lastname']."','".$params['email']."','".$params['telp']."','".$params['password']."')");
            $query->execute();
            $query->close();
            echo "<script>alert('Registrasi Success klik Oke untuk melanjutkan'); location.href='preferences/home'</script>";
        }
    }

    function sendConfirmationEmail($to, $from, $from_name, $subject, $body){
        $mail = new PHPMailer();
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true;  // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465; 
        $mail->Username = "EMAIL_GMAIL_MU";  
        $mail->Password = "PASSWORD_GMAIL_MU";
        $mail->SetFrom($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send()) {
            $error = 'Mail error: '.$mail->ErrorInfo; 
            return false;
        } else {
            $error = 'Message sent!';
            return true;
        }
    }
    
    public function checkEmailAvaibility($email){
        $querySelectEmail = $this->db->prepare("SELECT * FROM `user` WHERE `email`='$email'");
        $querySelectEmail->execute();
        $queryCount = $querySelectEmail->get_result()->num_rows;
        $querySelectEmail->close();
        if($queryCount == 0){
            return true;
        }else{
            return false;
        }
        //output: true -> email belum terdaftar; false -> email sudah terdaftar;
    }

    public function checkEmailActiveValue($email){
        $querySelectActiveColumn = $this->db->prepare("SELECT * FROM `user` WHERE `email`='$email'");
        $querySelectActiveColumn->execute();
        $result = $querySelectActiveColumn->get_result()->fetch_assoc();
        $querySelectActiveColumn->close();
        return $result['active'];
    }

    public function updateEmailActiveValue($email){
        $query = $this->db->prepare("UPDATE `user` SET `active` = 1 WHERE `email`='$email'");
        $query->execute();
        $query->close();
    }
}
?>