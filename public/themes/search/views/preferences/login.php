<?php
defined('FIR') OR exit();
/**
 * The template for displaying the Language selector for Preferences Page
 */
?>
<?=$this->message()?>
<form action="<?=$data['url']?>/preferences/proses_login" method="post">
    <?=$this->token()?>

	<label for="i_login"><?=$lang['login']?></label>
<input type="text" name="email" placeholder="Email" required></input>
<input type="password" name="password" placeholder="Password" required></input>

<button type="submit" name="submit" class="float-left"><?=$lang['login']?></button>
</form>