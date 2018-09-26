<!doctype html>
<?php
defined('FIR') OR exit();
/**
 * The template for displaying the Footer section
 */
?>
<footer id="footer" class="footer">
    <div class="footer-content">
        <div class="footer-menu">
        <?php foreach($data['info_pages'] as $value): ?>
            <a href="<?=$data['url']?>/info/<?=e($value['url'])?>"<?=((isset($this->url[1]) && $this->url[1] == $value['url'] && $this->url[0] == 'info') ? ' class="menu-active"' : '')?>><?=e($value['title'])?></a>
        <?php endforeach ?>
           <!-- <a href="<?=$data['url']?>/admin"<?=((isset($this->url[0]) && $this->url[0] == 'admin') ? ' class="menu-active"' : '')?>><?=e($lang['admin'])?></a> -->
        </div>
        <?=sprintf($lang['copyright'], $data['year'], e($data['settings']['site_title']))?> <?=$lang['all_rights_reserved']?> <?=sprintf($lang['powered_by'], '<a href="'.SOFTWARE_URL.'" target="_blank" data-nd>'.SOFTWARE_NAME.'</a>')?>
    </div>
</footer>