<?php

 namespace Fir\Models;
 
class ConfirmEmail extends Model {

	$query2 = $this->db->prepare("SELECT * FROM `user` WHERE `email`='".$params['email']."'");

}
?>