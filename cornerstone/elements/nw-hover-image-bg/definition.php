<?php

/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 1/1/2017
 * Time: 9:22 PM
 */
class NW_Hover_Image_Bg
{

	public $shortcode_name = 'nw_hib';

	public function ui()
	{
		return [
			'title' => 'Hover Image w/Text',
		];
	}

	public function update_build_shortcode_atts( $atts )
	{

		return $atts;
	}

}