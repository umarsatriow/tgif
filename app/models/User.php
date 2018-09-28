<?php

namespace Fir\Models;
 
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

    public function tes($params) {
        $insData = array(
            'id' => null,
            'firstname' => $params['firstname'],
            'lastname' => $params['lastname'],
            'email' => $params['email'],
            'telp' => $params['telp'],
            'password' => md5($params['password'])
        );

        $sql = "INSERT INTO user (firstname, lastname, email, telp, password)
        VALUES ('John', 'Doe', 'john@example.com', 'email', 'telp')";

        $query = $this->db->prepare($sql);
        $hm = $query->execute();
        $query->close();
        if($hm){
            echo $hm->get_result();
        }else{
            $hm->error;
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