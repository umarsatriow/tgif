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
         
		
		// $firstname = $params['firstname'];
  //       $lastname = $params['lastname'];
  //       $email = $params['email'];
  //       $telp = $params['telp'];
  //       $password = $params['password'];
    $query1 = $this->db->prepare("SELECT * FROM `user` WHERE `email`='".$params['email']."'");
        //$query->bind_param('sssss', $params['firstname'], $params['lastname'], $params['email'], $params['telp'], $params['password']);

      
        $query1->execute();
        $result = $query1->get_result()->num_rows;
        $query1->close();

        if($result>0){
            echo "<script>alert('sudah ada'); location.href='preferences/register'; </script>";
        return;
        }
        
 //    $tes_email=mysqli_query($konek,"SELECT * FROM `user` WHERE `email`='$email'");

	// $cek_email=mysqli_num_rows($tes_email);
	// if ($cek_email==1) {
	// 	echo "<script>alert('Email sudah digunakan'); location.href='preferences/daftar'</script>";
	// }
	// else
	// 	if($cek_email==0){
$hash = md5($params['password']);
        $query = $this->db->prepare("INSERT INTO `user` VALUES('','".$params['firstname']."','".$params['lastname']."','".$params['email']."','".$params['telp']."','".$hash."')");
        
        //$query->bind_param('sssss', $params['firstname'], $params['lastname'], $params['email'], $params['telp'], $params['password']);
        $query->execute();
        $query->close();
        //return;
           

		echo "<script>alert('Registrasi Success klik Oke untuk melanjutkan'); location.href='preferences/home'</script>";
		}
	}

    // public function confirmemail($email){
    //     $query = $this->db->prepare("SELECT * FROM `user` WHERE `email`='".$email."'");
    //     $query->execute();
    //     $result = $query->get_result();
    //     echo json_encode($result);
    // }

?>