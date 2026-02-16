<?php

function tarot_breadcrumbs()
{
	$breadcrumb = '<div class="breadcrumbs">';

	$breadcrumb .= '<a href="' . home_url() . '">Главная</a>';

	if (is_tax('deck-type')) {
		$term = get_queried_object();
		$breadcrumb .= '<span>' . $term->name . '</span>';

	} elseif (is_singular('deck')) {
		$deck_type = wp_get_post_terms(get_queried_object_id(), 'deck-type');
		if ($deck_type) {
			$breadcrumb .= '<a href="' . get_term_link($deck_type[0]) . '">' . $deck_type[0]->name . '</a>';
		}
		$breadcrumb .= '<span>' . get_the_title() . '</span>';

	} elseif (is_singular('card')) {
		$deck = get_field('card-relation');
		if ($deck) {
			$deck_type = wp_get_post_terms($deck->ID, 'deck-type');
			if ($deck_type) {
				$breadcrumb .= '<a href="' . get_term_link($deck_type[0]) . '">' . $deck_type[0]->name . '</a>';
			}
			$breadcrumb .= '<a href="' . get_permalink($deck->ID) . '">' . $deck->post_title . '</a>';
		}
		$breadcrumb .= '<span>' . get_the_title() . '</span>';
	}

	$breadcrumb .= '</div>';
	return $breadcrumb;
}

?>