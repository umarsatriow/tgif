<?php
defined('FIR') OR exit();
/**
 * The template for displaying the Admin Panel Search Settings section
 */
?>
<?=$this->message()?>
<form action="<?=$data['url']?>/admin/search" method="post">
    <?=$this->token()?>
    <label for="i_search_api_key"><?=$lang['search_api_key']?></label>
    <input type="text" name="search_api_key" id="i_search_api_key" placeholder="<?=$lang['search_api_key']?>" value="<?=e($data['site_settings']['search_api_key'])?>" maxlength="64">

    <label for="i_search_market"><?=$lang['default_region']?></label>
    <select name="search_market" id="i_search_market">
        <?php foreach($data['markets'] as $key => $value): ?>
            <option value="<?=e($key)?>"<?=($data['site_settings']['search_market'] == $key ? ' selected' : '')?>><?=e($value[0].' ('.$value[1].')')?></option>
        <?php endforeach ?>
    </select>

    <label for="i_web_per_page"><?=$lang['web_per_page']?></label>
    <input type="text" name="web_per_page" id="i_web_per_page" placeholder="<?=$lang['web_per_page']?>" value="<?=e($data['site_settings']['web_per_page'])?>" maxlength="64">

    <label for="i_images_per_page"><?=$lang['images_per_page']?></label>
    <input type="text" name="images_per_page" id="i_images_per_page" placeholder="<?=$lang['images_per_page']?>" value="<?=e($data['site_settings']['images_per_page'])?>" maxlength="64">

    <label for="i_videos_per_page"><?=$lang['videos_per_page']?></label>
    <input type="text" name="videos_per_page" id="i_videos_per_page" placeholder="<?=$lang['videos_per_page']?>" value="<?=e($data['site_settings']['videos_per_page'])?>" maxlength="64">

    <label for="i_news_per_page"><?=$lang['news_per_page']?></label>
    <input type="text" name="news_per_page" id="i_news_per_page" placeholder="<?=$lang['news_per_page']?>" value="<?=e($data['site_settings']['news_per_page'])?>" maxlength="64">

    <label for="i_search_per_ip"><?=$lang['searches_per_ip']?></label>
    <input type="text" name="search_per_ip" id="i_search_per_ip" placeholder="<?=$lang['searches_per_ip']?>" value="<?=e($data['site_settings']['search_per_ip'])?>" maxlength="64">

    <label for="i_search_answers"><?=$lang['search_answers']?></label>
    <select name="search_answers" id="i_search_answers">
        <option value="0"<?=($data['site_settings']['search_answers'] == 0 ? ' selected' : '')?>><?=$lang['off']?></option>
        <option value="1"<?=($data['site_settings']['search_answers'] > 0 ? ' selected' : '')?>><?=$lang['on']?></option>
    </select>

    <label for="i_search_related"><?=$lang['related_searches']?></label>
    <select name="search_related" id="i_search_related">
        <option value="0"<?=($data['site_settings']['search_related'] == 0 ? ' selected' : '')?>><?=$lang['off']?></option>
        <option value="1"<?=($data['site_settings']['search_related'] > 0 ? ' selected' : '')?>><?=$lang['on']?></option>
    </select>

    <div class="divider"></div>

    <label for="i_search_suggestions"><?=$lang['search_suggestions']?></label>
    <select name="search_suggestions" id="i_search_suggestions">
        <option value="0"<?=($data['site_settings']['search_suggestions'] == 0 ? ' selected' : '')?>><?=$lang['off']?></option>
        <option value="1"<?=($data['site_settings']['search_suggestions'] > 0 ? ' selected' : '')?>><?=$lang['on']?></option>
    </select>

    <label for="i_suggestions_per_ip"><?=$lang['suggestions_per_ip']?></label>
    <input type="text" name="suggestions_per_ip" id="i_suggestions_per_ip" placeholder="<?=$lang['suggestions_per_ip']?>" value="<?=e($data['site_settings']['suggestions_per_ip'])?>" maxlength="64">

    <div class="divider"></div>

    <label for="i_search_sites"><?=$lang['search_specific_sites']?></label>
    <textarea name="search_sites" id="i_search_sites" placeholder="<?=$lang['one_domain_line']?>"><?=e(isset($data['site_settings']['search_sites']) ? $data['site_settings']['search_sites'] : '')?></textarea>

    <button type="submit" name="submit"><?=$lang['save']?></button>
</form>