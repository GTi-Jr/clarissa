<?php
	global $VISUAL_COMPOSER_EXTENSIONS;
    
	$VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                      	=> __( "TS Creative Link", "ts_visual_composer_extend" ),
		"base"                      	=> "TS_VCSC_Creative_Link",
		"icon" 	                    	=> "icon-wpb-ts_vcsc_creativelink",
		"class"                     	=> "",
		"category"                  	=> __( "VC Extensions", "ts_visual_composer_extend" ),
		"description"               	=> __("Place a creative link element", "ts_visual_composer_extend"),
		"admin_enqueue_js"            	=> "",
		"admin_enqueue_css"           	=> "",
		"params"                    	=> array(
			// Link Settings
			array(
				"type"              	=> "seperator",
				"heading"           	=> "",
				"param_name"        	=> "seperator_1",
				"value"					=> "",
				"seperator"				=> "Link + Title Settings",
				"description"       	=> ""
			),
			array(
				"type" 					=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_ParameterLinkPicker['enabled'] == "false" ? "vc_link" : "advancedlinks"),
				"heading" 				=> __("Link + Title", "ts_visual_composer_extend"),
				"param_name" 			=> "link",
				"description" 			=> __("Provide a link to another site/page for the Icon Button.", "ts_visual_composer_extend")
			),
			// Link Settings
			array(
				"type"              	=> "seperator",
				"heading"           	=> "",
				"param_name"        	=> "seperator_2",
				"value"					=> "",
				"seperator"				=> "Link Settings",
				"description"       	=> ""
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Link Effect", "ts_visual_composer_extend" ),
				"param_name"            => "link_effect",
				"width"                 => 300,
				"value"                 => array(
					__( 'Effect', "ts_visual_composer_extend" ) . ' 1'		=> "effect-1",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 2'		=> "effect-2",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 3'		=> "effect-3",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 4'		=> "effect-4",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 5'		=> "effect-5",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 6'		=> "effect-6",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 7'		=> "effect-7",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 8'		=> "effect-8",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 9'		=> "effect-9",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 10'		=> "effect-10",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 11'		=> "effect-11",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 12'		=> "effect-12",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 13'		=> "effect-13",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 14'		=> "effect-14",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 15'		=> "effect-15",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 16'		=> "effect-16",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 17'		=> "effect-17",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 18'		=> "effect-18",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 19'		=> "effect-19",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 20'		=> "effect-20",
					__( 'Effect', "ts_visual_composer_extend" ) . ' 21'		=> "effect-21",
				),
				"admin_label"           => true,
				"description"           => __( "Select the effect style for the link", "ts_visual_composer_extend" ),
				"dependency"        	=> ""
			),
			array(
				"type"					=> "switch_button",
				"heading"           	=> __( "Use Shortcodes", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_base64",
				"value"             	=> "false",
				"description"       	=> __( "Switch the toggle if you want to use a shortcode to generate (parts of) the title; ensure that the shortcode only returns a short alpha-numeric text string without any HTML code.", "ts_visual_composer_extend" ),
				"dependency"        	=> ""
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Link Text", "ts_visual_composer_extend" ),
				"param_name"            => "link_content",
				"value"                 => "Link Text",
				"description"           => __( "Enter the text string that should be used for the link; HTML code or shortcode can NOT be used.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_base64", 'value' => 'false' )
			),
			array(
				"type"              	=> "textarea_raw_html",
				"heading"           	=> __( "Link Text", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_encoded",
				"value"             	=> base64_encode(""),
				"description"      	 	=> __( "Enter the text string that should be used for the link; basic shortcodes can be used.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_base64", 'value' => "true" )
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Link Message", "ts_visual_composer_extend" ),
				"param_name"            => "link_message",
				"value"                 => "Link Message",
				"description"           => __( "Enter an optional VERY short message for the link; HTML code can NOT be used.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_effect", 'value' => array('effect-9') )
			),				
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Text Align", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_align",
				"width"             	=> 300,
				"value"             	=> array(
					__( 'Center', "ts_visual_composer_extend" )      	=> "center",
					__( 'Left', "ts_visual_composer_extend" )			=> "left",
					__( 'Right', "ts_visual_composer_extend" )  		=> "right",
				),
				"description"       	=> __( "Select how the text for the link should be aligned.", "ts_visual_composer_extend" ),
			),
			// Link Additions				
			array(
				"type"					=> "switch_button",
				"heading"           	=> __( "Add Link Data", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_additions",
				"value"             	=> "false",
				"description"       	=> __( "Switch the toggle to apply custom ID, class or attributes to the link anchor itself (NOT the overall element).", "ts_visual_composer_extend" ),
				"dependency"        	=> ""
			),
			array(
				"type"              	=> "textarea_raw_html",
				"heading"           	=> __( "Link Attributes", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_attributes",
				"value"             	=> base64_encode(""),
				"description"      	 	=> __( "Enter any attributes you might want to add to the link anchor; i.e. rel='' or data-title=''.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_additions", 'value' => "true" )
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Link ID Name", "ts_visual_composer_extend" ),
				"param_name"            => "link_id",
				"value"                 => "",
				"description"           => __( "Enter an unique ID for the link anchor itself.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_additions", 'value' => "true" )
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Link Class Name", "ts_visual_composer_extend" ),
				"param_name"            => "link_classes",
				"value"                 => "",
				"description"           => __( "Enter one ore more class name(s) for the link anchor itself.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_additions", 'value' => "true" )
			),
			// Link Styles
			array(
				"type"              	=> "seperator",
				"heading"           	=> "",
				"param_name"        	=> "seperator_3",
				"value"					=> "",
				"seperator"				=> "Link Styling",
				"description"       	=> "",
				"group" 				=> "Link Styling",
			),				
			array(
				"type"              	=> "fontsmanager",
				"heading"           	=> __( "Font Family", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_font_family",
				"value"             	=> "",
				"default"				=> "true",
				"connector"				=> "link_font_type",
				"admin_label"           => true,
				"description"       	=> __( "Select the font to be used for the title text.", "ts_visual_composer_extend" ),
				"group" 				=> "Link Styling",
			),
			array(
				"type"              	=> "hidden_input",
				"param_name"        	=> "link_font_type",
				"value"             	=> "",
				"description"       	=> "",
				"group" 				=> "Link Styling",
			),				
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Text Standard Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_text_color",
				"value"             	=> "#333333",
				"description"       	=> __( "Define the standard color of the text for the link.", "ts_visual_composer_extend" ),
				"group" 				=> "Link Styling",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Text Hover Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_text_hover",
				"value"             	=> "#333333",
				"description"       	=> __( "Define the hover color of the text for the link.", "ts_visual_composer_extend" ),
				"group" 				=> "Link Styling",
			),				
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Message Standard Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_message_color",
				"value"             	=> "#cccccc",
				"description"       	=> __( "Define the standard color of the message for the link.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_effect", 'value' => array('effect-9') ),
				"group" 				=> "Link Styling",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Message Hover Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_message_hover",
				"value"             	=> "#cccccc",
				"description"       	=> __( "Define the hover color of the message for the link.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_effect", 'value' => array() ),
				"group" 				=> "Link Styling",
			),				
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Background Standard Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_back_color",
				"value"             	=> "#ededed",
				"description"       	=> __( "Define the standard background color of the link.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_effect", 'value' => array('effect-2', 'effect-10', 'effect-19', 'effect-20') ),
				"group" 				=> "Link Styling",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Background Hover Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_back_hover",
				"value"             	=> "#cccccc",
				"description"       	=> __( "Define the hover background color of the link.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_effect", 'value' => array('effect-2', 'effect-10', 'effect-19', 'effect-20') ),
				"group" 				=> "Link Styling",
			),				
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Border Type", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_border_type",
				"width"             	=> 300,
				"value"             	=> array(						
					__( "Solid Border", "ts_visual_composer_extend" )                  => "solid",
					__( "Dotted Border", "ts_visual_composer_extend" )                 => "dotted",
					__( "Dashed Border", "ts_visual_composer_extend" )                 => "dashed",
					__( "Double Border", "ts_visual_composer_extend" )                 => "double",
					__( "Grouve Border", "ts_visual_composer_extend" )                 => "groove",
					__( "Ridge Border", "ts_visual_composer_extend" )                  => "ridge",
					__( "Inset Border", "ts_visual_composer_extend" )                  => "inset",
					__( "Outset Border", "ts_visual_composer_extend" )                 => "outset",
				),
				"description"       	=> __( "Select the type of border for the creative link.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_effect", 'value' => array('effect-3', 'effect-4', 'effect-8', 'effect-11') ),
				"group" 				=> "Link Styling",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Border Width", "ts_visual_composer_extend" ),
				"param_name"            => "link_border_width",
				"value"                 => "2",
				"min"                   => "1",
				"max"                   => "20",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"       	=> __( "Define the border width for the creative link.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_effect", 'value' => array('effect-3', 'effect-4', 'effect-6', 'effect-7', 'effect-8', 'effect-11') ),
				"group" 				=> "Link Styling",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Border Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_border_color",
				"value"             	=> "#cccccc",
				"description"       	=> __( "Define the border standard color for the creative link.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_effect", 'value' => array('effect-3', 'effect-4', 'effect-6', 'effect-7', 'effect-8', 'effect-9', 'effect-12', 'effect-13', 'effect-14', 'effect-18', 'effect-20', 'effect-21') ),
				"group" 				=> "Link Styling",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Border Hover Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_border_hover",
				"value"             	=> "#ededed",
				"description"       	=> __( "Define the border hover color for the creative link.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_effect", 'value' => array('effect-8') ),
				"group" 				=> "Link Styling",
			),
			// Tooltip Settings
			array(
				"type"              	=> "seperator",
				"heading"           	=> "",
				"param_name"        	=> "seperator_4",
				"value"					=> "",
				"seperator"				=> "Link Tooltip",
				"description"       	=> "",
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"              	=> "textarea_raw_html",
				"heading"           	=> __( "Tooltip Content", "ts_visual_composer_extend" ),
				"param_name"        	=> "tooltip_content_html",
				"value"             	=> base64_encode(""),
				"description"      	 	=> __( "Enter the tooltip content here; HTML code can be used.", "ts_visual_composer_extend" ),
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"					=> "dropdown",
				"class"					=> "",
				"heading"				=> __( "Tooltip Position", "ts_visual_composer_extend" ),
				"param_name"			=> "tooltip_position",
				"value"					=> array(
					__( "Top", "ts_visual_composer_extend" )                            => "ts-simptip-position-top",
					__( "Bottom", "ts_visual_composer_extend" )                         => "ts-simptip-position-bottom",
				),
				"description"			=> __( "Select the tooltip position in relation to the image.", "ts_visual_composer_extend" ),
				"dependency"			=> "",
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"					=> "dropdown",
				"class"					=> "",
				"heading"				=> __( "Tooltip Style", "ts_visual_composer_extend" ),
				"param_name"			=> "tooltip_style",
				"value"             	=> array(
					__( "Black", "ts_visual_composer_extend" )                          => "",
					__( "Gray", "ts_visual_composer_extend" )                           => "ts-simptip-style-gray",
					__( "Green", "ts_visual_composer_extend" )                          => "ts-simptip-style-green",
					__( "Blue", "ts_visual_composer_extend" )                           => "ts-simptip-style-blue",
					__( "Red", "ts_visual_composer_extend" )                            => "ts-simptip-style-red",
					__( "Orange", "ts_visual_composer_extend" )                         => "ts-simptip-style-orange",
					__( "Yellow", "ts_visual_composer_extend" )                         => "ts-simptip-style-yellow",
					__( "Purple", "ts_visual_composer_extend" )                         => "ts-simptip-style-purple",
					__( "Pink", "ts_visual_composer_extend" )                           => "ts-simptip-style-pink",
					__( "White", "ts_visual_composer_extend" )                          => "ts-simptip-style-white"
				),
				"description"			=> __( "Select the tooltip style.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "tooltip_css", 'value' => 'true' ),
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"					=> "nouislider",
				"heading"				=> __( "Tooltip X-Offset", "ts_visual_composer_extend" ),
				"param_name"			=> "tooltipster_offsetx",
				"value"					=> "0",
				"min"					=> "-100",
				"max"					=> "100",
				"step"					=> "1",
				"unit"					=> 'px',
				"description"			=> __( "Define an optional X-Offset for the tooltip position.", "ts_visual_composer_extend" ),
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"					=> "nouislider",
				"heading"				=> __( "Tooltip Y-Offset", "ts_visual_composer_extend" ),
				"param_name"			=> "tooltipster_offsety",
				"value"					=> "0",
				"min"					=> "-100",
				"max"					=> "100",
				"step"					=> "1",
				"unit"					=> 'px',
				"description"			=> __( "Define an optional Y-Offset for the tooltip position.", "ts_visual_composer_extend" ),
				"group" 				=> "Tooltip Settings",
			),				
			// Other Settings
			array(
				"type"				    => "seperator",
				"heading"			    => "",
				"param_name"		    => "seperator_5",
				"value"					=> "",
				"seperator"				=> "Other Settings",
				"description"		    => "",
				"group" 				=> "Other Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Margin: Top", "ts_visual_composer_extend" ),
				"param_name"            => "margin_top",
				"value"                 => "20",
				"min"                   => "0",
				"max"                   => "200",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Select the top margin for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Margin: Bottom", "ts_visual_composer_extend" ),
				"param_name"            => "margin_bottom",
				"value"                 => "20",
				"min"                   => "0",
				"max"                   => "200",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Select the bottom margin for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Define ID Name", "ts_visual_composer_extend" ),
				"param_name"            => "el_id",
				"value"                 => "",
				"description"           => __( "Enter an unique ID for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Extra Class Name", "ts_visual_composer_extend" ),
				"param_name"            => "el_class",
				"value"                 => "",
				"description"           => __( "Enter a class name for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			// Load Custom CSS/JS File
			array(
				"type"              	=> "load_file",
				"heading"           	=> "",
				"param_name"        	=> "el_file",
				"value"             	=> "",
				"file_type"         	=> "js",
				"file_path"         	=> "js/ts-visual-composer-extend-element.min.js",
				"description"       	=> ""
			),
		)
	);
	
	if ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_LeanMap == "true") {
		return $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element;
	} else {			
		vc_map($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element);
	}
?>