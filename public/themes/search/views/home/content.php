<?php
defined('FIR') OR exit();
/**
 * The template for displaying Home page content
 */
?>
<div id="content" class="content content-home">
    <div class="home-center">
        <!-- <div class="search-title"><a href="<?=$data['url']?>/"><?=e($data['settings']['site_title'])?></a></div> -->
        <div class="search-tagline"><a href="<?=$data['url']?>/"><img style="height: 15vh;margin-top: 10vh;" src="<?=$data['url']?>/themes/search/assets/images/logo.png"></a></div>

        <div class="search-tagline"><?=e($data['settings']['site_tagline'])?></div>
        <?=$data['search_bar_view']?>
        <div class="page-menu home-page-menu">
            <?php foreach($data['menu'] as $value): ?>
                <div class="home-search-menu<?=($value[1] == true ? ' home-search-menu-active' : '')?>" id="path-<?=$value[0]?>" data-new-path="<?=$value[0]?>"><?=$lang[$value[0]]?></div>
            <?php endforeach ?>
        </div>
        <?=$data['settings']['ads_1']?>
    </div>
</div>