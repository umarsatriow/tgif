<?php
defined('FIR') OR exit();
/**
 * The template for displaying the Videos Results rows
 */
?>
<div class="videos-results">
    <?php foreach($data['results'] as $result): ?>
        <div class="video-container">
            <a href="<?=$result['contentUrl']?>"<?=($data['cookie']['new_window'] > 0 ? ' target="_blank"' : '')?> data-nd>
                <div class="video-frame">
                    <div style="background-image: url('<?=$result['thumbnailUrl']?>');" class="video-thumbnail"><div class="thumb-icon"><div class="video-play"></div></div><div class="video-title"><?=$result['name']?></div></div>
                    <div class="video-description">
                        <div class="video-publisher">
                            <?=$result['publisher'][0]['name']?><span class="video-views"><?php if(isset($result['viewCount']['count']) && $result['viewCount']['count'] > 0): ?><?=$result['viewCount']['count']?><?=$lang['views_'.$result['viewCount']['decimals']]?><?php endif ?></span>
                        </div>
                        <div class="video-date">
                            <?=$result['datePublished']?>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach ?>
</div>
