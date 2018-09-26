<?php
defined('FIR') OR exit();
/**
 * The template for displaying the Map Instant Answer
 */
?>
<div class="row row-card-result">
    <div class="web-ia web-ia-map">
        <div class="web-ia-content"><img src="https://maps.googleapis.com/maps/api/staticmap?center=<?=e($data['result'])?>&zoom=13&size=640x240&maptype=roadmap&sensor=false&scale=2<?=($data['cookie']['dark_mode'] ? '&style=element:geometry%7Ccolor:0x242f3e&style=element:labels.text.fill%7Ccolor:0x746855&style=element:labels.text.stroke%7Ccolor:0x242f3e&style=feature:administrative.locality%7Celement:labels.text.fill%7Ccolor:0xd59563&style=feature:poi%7Celement:labels.text.fill%7Ccolor:0xd59563&style=feature:poi.park%7Celement:geometry%7Ccolor:0x263c3f&style=feature:poi.park%7Celement:labels.text.fill%7Ccolor:0x6b9a76&style=feature:road%7Celement:geometry%7Ccolor:0x38414e&style=feature:road%7Celement:geometry.stroke%7Ccolor:0x212a37&style=feature:road%7Celement:labels.text.fill%7Ccolor:0x9ca5b3&style=feature:road.highway%7Celement:geometry%7Ccolor:0x746855&style=feature:road.highway%7Celement:geometry.stroke%7Ccolor:0x1f2835&style=feature:road.highway%7Celement:labels.text.fill%7Ccolor:0xf3d19c&style=feature:transit%7Celement:geometry%7Ccolor:0x2f3948&style=feature:transit.station%7Celement:labels.text.fill%7Ccolor:0xd59563&style=feature:water%7Celement:geometry%7Ccolor:0x17263c&style=feature:water%7Celement:labels.text.fill%7Ccolor:0x515c6d&style=feature:water%7Celement:labels.text.stroke%7Ccolor:0x17263c' : '')?>" referrerpolicy="no-referrer"></div>
        <div class="web-ia-footer"><a href="https://www.google.com/maps/dir/<?=e($data['result'])?>"<?=($data['cookie']['new_window'] > 0 ? ' target="_blank"' : '')?> data-nd><div class="button float-left"><?=$lang['directions']?></div></a></div>
    </div>
</div>