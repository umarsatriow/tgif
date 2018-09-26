<?php
defined('FIR') OR exit();
/**
 * The template for displaying the News Results rows
 */
?>
<div class="news-results">
    <?php foreach($data['results'] as $result): ?>
        <div class="site-result">
            <?php if(isset($result['image']['thumbnail']['contentUrl'])): ?>
                <a href="<?=$result['url']?>"<?=($data['cookie']['new_window'] > 0 ? ' target="_blank"' : '')?> class="site-thumbnail" style="background-image: url('<?=$result['image']['thumbnail']['contentUrl']?>');" data-nd></a>
            <?php endif ?>
            <div class="site-content">
                <div class="site-title"><a href="<?=$result['url']?>"<?=($data['cookie']['new_window'] > 0 ? ' target="_blank"' : '')?> data-nd><?=$result['name']?></a></div>
                <div class="site-url"><a href="<?=$result['url']?>"<?=($data['cookie']['new_window'] > 0 ? ' target="_blank"' : '')?> data-nd><?=$result['provider'][0]['name']?></a> - <?=$result['datePublished']?></div>
                <div class="site-description"><?=$result['description']?></div>
            </div>
        </div>
    <?php endforeach ?>
</div>
