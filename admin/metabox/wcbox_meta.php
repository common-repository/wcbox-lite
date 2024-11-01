<?php
return array(
	'id'          => 'wcbox_meta',
	'types'       => array('wcbox'),
	'title'       => __('WCBox', 'wcbox'),
	'priority'    => 'high',
	'template'    => array(
		
	array(
    'type'      => 'group',
    'repeating' => false,
    
    'name'      => 'wcbox_get_q',
    'title'     => __('Wcbox Select Products Categories or Query', 'wcbox'),
    'fields'    => array(
      
        /* more controls fields or even nested group ... */
				array(
					'type' => 'radiobutton',
					'name' => 'filter_type',
					'label' => __('Select', 'wcbox'),
					
					'items' => array(
						array(
							'value' => 'query',
							'label' => __('Querys', 'wcbox'),
						),
						array(
							'value' => 'category',
							'label' => __('Categories', 'wcbox'),
						),
						array(
							'value' => 'tags',
							'label' => __('Tags', 'wcbox'),
						),
						array(
							'value' => 'specific_id',
							'label' => __('Specific Products', 'wcbox'),
						),
					),
				),
								array(
					'type' => 'notebox',
					'name' => 'notebox1',
					
					'description' => __('Get the <b><a href="http://bit.ly/wcbox_link">Pro version</a></b> for <b>Best Selling & Most View product Query</b> ', 'vp_textdomain'),
					'status' => 'info',
					'dependency' => array(
						'field'    => 'filter_type',
						'function' => 'vp_dep_is_query',
					),
				),
				array(
					'type' => 'multiselect',
					'name' => 'filter_query',
					'label' => __('Choose Query(s)', 'wcbox'),
					'items' => array(
						array(
							'value' => 'recent_products',
							'label' => __('Recent Products', 'wcbox'),
						),
						array(
							'value' => 'sale_products',
							'label' => __('Sales Products', 'wcbox'),
						),
						array(
							'value' => 'best_selling_products',
							'label' => __('Best Selling Products', 'wcbox'),
						),
						array(
							'value' => 'top_rated_products',
							'label' => __('Top Rated Products', 'wcbox'),
						),
						array(
							'value' => 'most_viewed_products',
							'label' => __('Most Viewed Products', 'wcbox'),
						),
						array(
							'value' => 'featured_products',
							'label' => __('Featured Products', 'wcbox'),
						),
						
					),
					'dependency' => array(
						'field'    => 'filter_type',
						'function' => 'vp_dep_is_query',
					),
				),

				array(
					'type' => 'multiselect',
					'name' => 'filter_category',
					'label' => __('Choose Categories', 'wcbox'),
					
					'items' => array(
						'data' => array(
							array(
								'source' => 'function',
								'value'  => 'wcbox_get_woo_categories',
							),
						),
					),
					'dependency' => array(
						'field'    => 'filter_type',
						'function' => 'vp_dep_is_categories',
					),
				),	
				
				array(
					'type' => 'notebox',
					'name' => 'notebox3',
					
					'description' => __('Get the <b><a href="http://bit.ly/wcbox_link">Pro version</a></b> Specific IDs</b> ', 'vp_textdomain'),
					'status' => 'info',
					'dependency' => array(
						'field'    => 'filter_type',
						'function' => 'vp_dep_is_spacific_products',
					),
				),				
								array(
					'type' => 'notebox',
					'name' => 'notebox2',
					
					'description' => __('Get the <b><a href="http://bit.ly/wcbox_link">Pro version</a></b> for <b>TAGS</b> ', 'vp_textdomain'),
					'status' => 'info',
					'dependency' => array(
						'field'    => 'filter_type',
						'function' => 'vp_dep_is_tags',
					),
				),	
						
				array(
					'type' => 'textbox',
					'name' => 'wcbox_categories_1',
					'label' => __('Product Per Page', 'wcbox'),
					'description' => __('How many product you want to show on each Page', 'wcbox'),
					'default' => '12',
					'validation' => 'numeric',
					'dependency' => array(
						'field'    => 'filter_type',
						'function' => 'vp_dep_is_categories',
					),
				),		
				
				array(
					'type' => 'textbox',
					'name' => 'wcbox_ppp_cat',
					'label' => __('Product Per Page', 'wcbox'),
					'description' => __('How many product you want to show on each Page', 'wcbox'),
					'default' => '12',
					'validation' => 'numeric',
					'dependency' => array(
						'field'    => 'filter_type',
						'function' => 'vp_dep_is_query',
					),
				),				
		),
	),
/* Tab Options */
 
	array(
    'type'      => 'group',
    'repeating' => false,
    
    'name'      => 'wcbox_tav',
    'title'     => __('Tab options', 'wcbox'),
    'fields'    => array(

		array(
			'type' => 'select',
			'name' => 'wcbox_cl_2',
			'label' => __('Active Text Color', 'wcbox'),
			'description' => __('Default is \'Light\'', 'wcbox'),
			'items' => array(
				array(
					'value' => '#fff',
					'label' => __('Light', 'wcbox'),
				),
				array(
					'value' => '#2e2e2e',
					'label' => __('Dark', 'wcbox'),
				),
				
			),
			'default' => '#fff',
			
		),
		array(
			'type' => 'color',
			'name' => 'wcbox_cl_1',
			'label' => __('Active Tab Background Color', 'wcbox'),
			
			'default' => '#ddd',
		
		),	

			array(
				'type' => 'select',
				'name' => 'wcbox_ss_1',
				'label' => __('Tab Text Color', 'wcbox'),
				'description' => __('Default is \'Light\'', 'wcbox'),
				'items' => array(
					array(
						'value' => '#fff',
						'label' => __('Light', 'wcbox'),
					),
					array(
						'value' => '#2e2e2e',
						'label' => __('Dark', 'wcbox'),
					),
					
				),
				'default' => '#2e2e2e',
				
			),
	
			array(
					'type' => 'select',
					'name' => 'wcbox_effect',
					'label' => __('Select Animation', 'wcbox'),
					
					'items' => array(
						'data' => array(
							array(
								'source' => 'function',
								'value'  => 'wcbox_get_effect',
							),
						),
					),
					'default' => '{{first}}',
					
				),

		),
	),
		

 /* Product Options */
	array(
    'type'      => 'group',
    'repeating' => false,
    
    'name'      => 'wcbox_product_option',
    'title'     => __('Product options', 'wcbox'),
    'fields'    => array(
      
       array(
					'type' => 'notebox',
					'name' => 'notebox4',
					
					'description' => __('Get the <b><a href="http://bit.ly/wcbox_link">Pro version</a></b> for <b>Product  option</b> ', 'vp_textdomain'),
					'status' => 'info',
					
				),

		),
	),
 /* Carousel Options */
	array(
    'type'      => 'group',
    'repeating' => false,
    
    'name'      => 'wcbox_carousel_option',
    'title'     => __('Carousel options', 'wcbox'),
    'fields'    => array(
		array(
		'type'    => 'slider',
		'name'    => 'wcbox_product_margin',
		'label'   => __('Margin', 'wcbox'),
		'description' => __('margin-right(px) on each Product','wcbox'),
		'default' => '10'
								
		),
		array(
			'type' => 'radiobutton',
			'name' => 'wcbox_rb_1',
			'label' => __('Product Loop', 'wcbox'),
			'description' => __('Duplicate last and first Products to get loop illusion.','wcbox'),
			
			'items' => array(
				array(
					'value' => 'true',
					'label' => __('Yes', 'wcbox'),
				),
				array(
					'value' => 'false',
					'label' => __('No', 'wcbox'),
				),
			
			),
			'default' => array(
				'false',
			),
		),
		array(
			'type'    => 'slider',
			'name'    => 'wcbox_padding_satge',
			'label'   => __('Stage Padding', 'wcbox'),
			'description' => __('Padding left and right on stage','wcbox'),
			'min'     => '0',
			'max'     => '100',	
			'step'    => '10',			
		),

		array(
			'type' => 'radiobutton',
			'name' => 'wcbox_nav_2',
			'label' => __('Navigation', 'wcbox'),
			'description' => __('Show next/prev Icons.','wcbox'),
			
			'items' => array(
				array(
					'value' => 'true',
					'label' => __('Yes', 'wcbox'),
				),
				array(
					'value' => 'false',
					'label' => __('No', 'wcbox'),
				),
			
			),
			'default' => array(
				'true',
			),
		),
		array(
			'type' => 'radiobutton',
			'name' => 'wcbox_dots_2',
			'label' => __('Dots', 'wcbox'),
			'description' => __('Show dots navigation','wcbox'),
			
			'items' => array(
				array(
					'value' => 'true',
					'label' => __('Yes', 'wcbox'),
				),
				array(
					'value' => 'false',
					'label' => __('No', 'wcbox'),
				),
			
			),
			'default' => array(
				'false',
			),
		),
		array(
			'type' => 'radiobutton',
			'name' => 'wcbox_autoplay',
			'label' => __('Autoplay', 'wcbox'),
			'description' => __('AutoPlay','wcbox'),
			
			'items' => array(
				array(
					'value' => 'true',
					'label' => __('Yes', 'wcbox'),
				),
				array(
					'value' => 'false',
					'label' => __('No', 'wcbox'),
				),
			
			),
			'default' => array(
				'false',
			),
		),
		array(
			'type'    => 'slider',
			'name'    => 'wcbox_autoplayTimeout',
			'label'   => __('Autoplay Timeout', 'wcbox'),
			'description' => __('Autoplay interval timeout. 1000 = 1s ','wcbox'),
			'min'     => '1000',
			'max'     => '10000',	
			'step'    => '1000',			
		),


		array(
			'type' => 'textbox',
			'name' => 'wcbox_cl_1',
			'label' => __('Colums', 'wcbox'),
			'description' => __('The number of products you want to see on the Desktop Layout.', 'wcbox'),
			'default' => '5',
			'validation' => 'numeric',
		),			  

		array(
			'type' => 'textbox',
			'name' => 'wcbox_cl_2',
			'label' => __('Colums : Tablet', 'wcbox'),
			'description' => __('The number of products you want to see on the Tablet Layout', 'wcbox'),
			'default' => '3',
			'validation' => 'numeric',
		),			  
			array(
				'type' => 'textbox',
				'name' => 'wcbox_cl_3',
				'label' => __('Colums : Mobile', 'wcbox'),
				'description' => __('The number of products you want to see on the Mobile Layout', 'wcbox'),
				'default' => '1',
				'validation' => 'numeric',
			),	
		
		

		
		),
	),
		

	


		
	),
);

/**
 * EOF
 */