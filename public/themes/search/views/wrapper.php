<?php
defined('FIR') OR exit();
/**
 * The main template file
 * This file puts together the three main section of the software, header, content and footer
 */
?>
<!DOCTYPE html>
<html<?=$data['cookie']['dark_mode'] ? ' class="dark"' : ''?>>
<head>
    <meta charset="UTF-8" />
    <title><?=e($this->docTitle())?></title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link href="<?=$data['url']?>/<?=$data['theme_path']?>/<?=$data['settings']['site_theme']?>/assets/images/faviconnew.png" rel="icon" type="image/png">
    <?php foreach(['jquery.flex-images', 'style'] as $name): ?><link href="<?=$data['url']?>/<?=$data['theme_path']?>/<?=$data['settings']['site_theme']?>/assets/css/<?=$name?>.css" rel="stylesheet" type="text/css">
    <?php endforeach ?>
    <?php foreach(['jquery', 'jquery.flex-images', 'dragscroll', 'functions'] as $name): ?><script type="text/javascript" src="<?=$data['url']?>/<?=$data['theme_path']?>/<?=$data['settings']['site_theme']?>/assets/js/<?=$name?>.js"></script>
    <?php endforeach ?>
    <?=$data['settings']['tracking_code']?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <div id="loading-bar"></div>
    <?=$data['header_view']?>
    <?=$data['content_view']?>
    <?=$data['footer_view']?>
</body>
</html>