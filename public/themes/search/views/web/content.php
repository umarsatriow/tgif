<?php
defined('FIR') OR exit();
/**
 * The template for displaying Web page content
 */
?>
<div id="content" class="content content-<?=e($this->url[0])?>">
    <?=$data['filters_view']?>
    <?=$data['result_ia_view']?>
    <?=$data['search_results_view']?>
</div>