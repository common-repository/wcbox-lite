<?php

return array(
	'id'          => 'wcbox_widget_id',
	'types'       => array('wcbox'),
	'title'       => __('Wcbox Sidebar Options', 'wcbox'),
	'priority'    => 'low',
	'context'     => 'side',
	'template'    => array(
		array(
		'type'      => 'group',
		'repeating' => false,
		'length'    => 1,
		'name'      => 'group',
		'title'     => __('Enable Widget', 'wcbox'),
		'fields'    => array(
			 array(
					'type' => 'notebox',
					'name' => 'notebox4',
					
					'description' => __('Get the <b><a href="http://bit.ly/wcbox_link">Get Pro version</a></b> for <b>Widget option</b> ', 'vp_textdomain'),
					'status' => 'success',
					
				),
					
		),
		),

		

	),
);

/**
 * EOF
 */