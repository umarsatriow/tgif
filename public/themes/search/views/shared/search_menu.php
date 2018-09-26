<!doctype html>
<?php
defined('FIR') OR exit();
/**
 * The template for displaying the Search Menu
 */
?>
<div class="page-menu page-menu-left header-search-menu" id="page-menu">
    <?php foreach($data['menu'] as $key => $value): ?>
        <a href="<?=$data['url'].'/'.e($key).'?q='.e($data['query'])?>"<?=(($value[0] == $this->url[0]) ? ' class="menu-active"' : '')?>><?=$lang[$key]?></a>
    <?php endforeach ?>
</div>