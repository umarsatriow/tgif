<?php
defined('FIR') OR exit();
/**
 * The template for displaying the Language selector for Preferences Page
 */
include "captcha.php";
?>
<?=$this->message()?>
	<div>
		
    </div>

<form action="<?=$data['url']?>/preferences/proses_register" method="post">
    <?=$this->token()?>

	<label for="i_register"><?=$lang['register']?></label>
<input type="text" name="firstname" placeholder="Firstname" required></input>
<input type="text" name="lastname" placeholder="Lastname" required></input>
<input type="text" name="email" placeholder="Email" pattern="[^ @]*@[^ @]*.[a-zA-Z]{2,}" title="example@impresix.com" required></input>
<input type="text" name="telp" placeholder="No Telp" required></input>
<input type="password" name="password" placeholder="Password" id="pw1" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password minimal 8 karakter dan harus menggunakan format huruf besar, huruf kecil dan angka." required></input>
<input type="password" name="copassword" placeholder="Confirm password" id="pw2" required></input>

<div class="g-recaptcha" data-sitekey="6Lck3nAUAAAAAJRHmD29k4kjQKuk0WTBxUz7R51W"></div>

<button type="submit" name="submit" class="float-left"><?=$lang['save']?></button>
</form>

 <!-- Memuat API Google reCaptcha -->
 <script src='https://www.google.com/recaptcha/api.js'></script>

 <script type="text/javascript">
            window.onload = function () {
                document.getElementById("pw1").onchange = validatePassword;
                document.getElementById("pw2").onchange = validatePassword;
            }
            function validatePassword(){
                var pass2=document.getElementById("pw2").value;
                var pass1=document.getElementById("pw1").value;
                if(pass1!=pass2)
                    document.getElementById("pw2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
                else
                    document.getElementById("pw2").setCustomValidity('');
            }
        </script>