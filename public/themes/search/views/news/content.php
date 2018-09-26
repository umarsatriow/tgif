<?php
defined('FIR') OR exit();
/**
 * The template for displaying News page content
 */
?>
<div id="content" class="content content-<?=e($this->url[0])?>">
    <?=$data['filters_view']?>
    <?=$data['search_results_view']?>
</div>