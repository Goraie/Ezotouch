<?php

function render_card_template($deck_data)
{
	extract($deck_data);
	include_once locate_template('layout/block/card.php');
}

?>