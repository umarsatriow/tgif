<?php
defined('FIR') OR exit();
/**
 * The template for displaying the Language selector for Preferences Page
 */
include "captcha.php";
?>
<?=$this->message()?>
	<div>
		<?php if (isset($success)) {
	                if ($success==true) { ?>
	                <div class="alert alert-success"><?php echo "Terima Kasih, komentar anda akan muncul setelah mendapatkan persetujuan dari Admin"; ?></div>
	            <? } else { ?>
	            <div class="alert alert-danger"><?php echo "Gagal!, Mohon lengkapi form dan Captcha yang tersedia"; ?></div>
	            <?php } } ?>
    </div>

<form action="<?=$data['url']?>/preferences/proses_register" method="post">
    <?=$this->token()?>

	<label for="i_register"><?=$lang['register']?></label>
<input type="text" name="firstname" placeholder="Firstname" required></input>
<input type="text" name="lastname" placeholder="Lastname" required></input>
<input type="text" name="email" placeholder="Email" required></input>
<input type="text" name="telp" placeholder="No Telp" required></input>
<input type="password" name="password" placeholder="Password" required></input>
<input type="password" name="copassword" placeholder="Confirm password" required></input>

<div class="g-recaptcha" data-sitekey="6Lck3nAUAAAAAJRHmD29k4kjQKuk0WTBxUz7R51W"></div>

<button type="submit" name="submit" class="float-left"><?=$lang['save']?></button>
</form>

 <!-- Memuat API Google reCaptcha -->
 <script src='https://www.google.com/recaptcha/api.js'></script>