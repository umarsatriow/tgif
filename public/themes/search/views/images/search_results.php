<?php
defined('FIR') OR exit();
/**
 * The template for displaying the Images Results page
 */
?>
<?=($data['show_ads'] ? $data['settings']['ads_2'] : false)?>
<div class="row-images">
    <?=$this->render(['results' => $data['response']['value']], 'images/rows')?>
</div>
<?=($data['show_ads'] ? $data['settings']['ads_3'] : false)?>
<div class="row">
    <?=$data['pagination_view']?>
</div>