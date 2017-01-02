<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 1/1/2017
 * Time: 9:22 PM
 */

return [
	'heading'     => [
		'type'    => 'text',
		'ui'      => [
			'title' => 'Heading',
		],
		'context' => 'content',
		'suggest' => 'Heading',
	],
	'image'       => [
		'type' => 'image',
		'ui'   => [
			'title' => 'Image Background',
		],
	],
	'image_thumb' => [
		'type' => 'image',
		'ui'   => [
			'title' => 'Image Thumb',
		],
	],
	'image_alt'   => [
		'type' => 'text',
		'ui'   => [
			'title' => 'Image alt',
		],
	],
	'link_href'   => [
		'type'    => 'text',
		'ui'      => [
			'title' => 'Link Url',
		],
		'options' => [
			'monospace' => 'true',
		],
	],
	'link_title'  => [
		'type' => 'text',
		'ui'   => [
			'title' => 'Link Title',
		],
	],
	'link_class'  => [
		'type' => 'text',
		'ui'   => [
			'title' => 'Link Class',
		],
	],
	'new_window'  => [
		'type' => 'toggle',
		'ui'   => [
			'title' => 'Open link in new window',
		],
	],
];