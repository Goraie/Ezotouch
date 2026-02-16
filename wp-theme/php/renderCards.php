<?php

/**
 * @param array $deck_data Must include 'title', 'description'. Optional 'permalink' for card "Подробнее" link (fallback: /pack).
 */
function render_card_template($deck_data)
{
	extract($deck_data);
	include_once locate_template('layout/block/card.php');
}

?>