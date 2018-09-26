<?php
defined('FIR') OR exit();
/**
 * The template for displaying the Videos Results page
 */
?>
<?=($data['show_ads'] ? $data['settings']['ads_2'] : false)?>
<div class="row row-videos">
    <?=$this->render(['results' => $data['response']['value']], 'videos/rows')?>
</div>
<?=($data['show_ads'] ? $data['settings']['ads_3'] : false)?>
<div class="row">
    <?=$data['pagination_view']?>
</div>