<?php
defined('FIR') OR exit();
/**
 * The template for displaying the News Results page
 */
?>
<?=($data['show_ads'] ? $data['settings']['ads_2'] : false)?>
<div class="row row-news">
    <?=$this->render(['results' => $data['response']['value']], 'news/rows')?>
</div>
<?=($data['show_ads'] ? $data['settings']['ads_3'] : false)?>
<div class="row">
    <?=$data['pagination_view']?>
</div>