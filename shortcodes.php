<?php

// override shortcode from Theme

add_action('wp_head','override_bonus_list');
function override_bonus_list() {
    remove_shortcode('bonuslist');
    add_shortcode('bonuslist', 'coinflip_child_shortcode_bonus_list');
}