<?php

 namespace Fir\Models;
 
class Login extends Model {

    public function login($params) {
        $query = $this->db->prepare("SELECT * FROM `user` WHERE `email` = '".$params['email']."' AND `password` = '".$params['password']."'");
        $query->execute();
        $result = $query->get_result()->num_rows;
        $query->close();
        // return $result;
        if($result>0){
        	return true;
        }else{
    		return false;
    	}
   	}
}
?>