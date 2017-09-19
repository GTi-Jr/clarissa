<?php
    global $VISUAL_COMPOSER_EXTENSIONS;
	
    $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                      => __( "TS Counter Icon", "ts_visual_composer_extend" ),
		"base"                      => "TS-VCSC-Icon-Counter",
		"icon" 	                    => "icon-wpb-ts_vcsc_icon_counter",
		"class"                     => "",
		"category"                  => __( "VC Extensions", "ts_visual_composer_extend" ),
		"description"               => __("Place an icon counter element", "ts_visual_composer_extend"),
		"admin_enqueue_js"			=> "",
		"admin_enqueue_css"			=> "",
		"params"                    => array(
			// Counter Icon / Image
			array(
				"type"              => "seperator",
				"heading"           => "",
				"param_name"        => "seperator_1",
				"value"				=> "",
				"seperator"			=> "Counter Icon / Image",
				"description"       => ""
			),
			array(
				"type"              => "dropdown",
				"heading"           => __( "Icon / Image Positions", "ts_visual_composer_extend" ),
				"param_name"        => "icon_position",
				"width"             => 150,
				"value"             => array(
					__( 'Top', "ts_visual_composer_extend" )          => "top",
					__( 'Left', "ts_visual_composer_extend" )         => "left",
					__( 'Right', "ts_visual_composer_extend" )        => "right",
				),
				"description"       => __( "Select where the icon should be positioned.", "ts_visual_composer_extend" )
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Use Normal Image", "ts_visual_composer_extend" ),
				"param_name"        => "icon_replace",
				"value"             => "false",
				"description"       => __( "Switch the toggle to either use and icon or a normal image.", "ts_visual_composer_extend" )
			),
			array(
				'type' 				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorType,
				'heading' 			=> __( 'Select Icon', 'ts_visual_composer_extend' ),
				'param_name' 		=> 'icon',
				'value'				=> '',
				'source'			=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorValue,
				'settings' 			=> array(
					'emptyIcon' 			=> false,
					'type' 					=> 'extensions',
					'iconsPerPage' 			=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorPager,
					'source' 				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorSource,
				),
				"description"       => ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorVisualSelector == "true" ? __( "Select the icon you want to display.", "ts_visual_composer_extend" ) : $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorString),
				"admin_label"       => true,
				"dependency"        => array( 'element' => "icon_replace", 'value' => 'false' )
			),
			array(
				"type"              => "attach_image",
				"heading"           => __( "Image", "ts_visual_composer_extend" ),
				"param_name"        => "icon_image",
				"value"             => "false",
				"admin_label"       => true,
				"description"       => __( "Image must have equal dimensions for scaling purposes (i.e. 100x100).", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "icon_replace", 'value' => 'true' )
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Icon / Image Size", "ts_visual_composer_extend" ),
				"param_name"        => "icon_size_slide",
				"value"             => "75",
				"min"               => "16",
				"max"               => "512",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Select the icon / image size", "ts_visual_composer_extend" ),
				"dependency"        => ""
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Icon Color", "ts_visual_composer_extend" ),
				"param_name"        => "icon_color",
				"value"             => "#cccccc",
				"description"       => __( "Define the color of the icon.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "icon_replace", 'value' => 'false' )
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Icon / Image Background Color", "ts_visual_composer_extend" ),
				"param_name"        => "icon_background",
				"value"             => "",
				"description"       => __( "Define the background color for the icon / transparent image.", "ts_visual_composer_extend" ),
				"dependency"        => ""
			),
			// Icon Border Settings
			array(
				"type"              => "seperator",
				"heading"           => "",
				"param_name"        => "seperator_2",
				"value"				=> "",
				"seperator"			=> "Icon / Image Border Settings",
				"description"       => ""
			),
			array(
				"type"              => "dropdown",
				"heading"           => __( "Icon / Image Border Type", "ts_visual_composer_extend" ),
				"param_name"        => "icon_frame_type",
				"width"             => 300,
				"value"             => array(
					__( "None", "ts_visual_composer_extend" )                          => "",
					__( "Solid Border", "ts_visual_composer_extend" )                  => "solid",
					__( "Dotted Border", "ts_visual_composer_extend" )                 => "dotted",
					__( "Dashed Border", "ts_visual_composer_extend" )                 => "dashed",
					__( "Double Border", "ts_visual_composer_extend" )                 => "double",
					__( "Grouve Border", "ts_visual_composer_extend" )                 => "groove",
					__( "Ridge Border", "ts_visual_composer_extend" )                  => "ridge",
					__( "Inset Border", "ts_visual_composer_extend" )                  => "inset",
					__( "Outset Border", "ts_visual_composer_extend" )                 => "outset",
				),
				"description"       => __( "Select the type of border around the icon / image.", "ts_visual_composer_extend" ),
				"dependency"        => ""
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Icon / Image Border Thickness", "ts_visual_composer_extend" ),
				"param_name"        => "icon_frame_thick",
				"value"             => "1",
				"min"               => "1",
				"max"               => "10",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Define the thickness of the icon / image border.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "icon_frame_type", 'value' => $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Border_Type_Values )
			),
			array(
				"type"              => "dropdown",
				"heading"           => __( "Icon / Image Border Radius", "ts_visual_composer_extend" ),
				"param_name"        => "icon_frame_radius",
				"value"             => array(
					__( "None", "ts_visual_composer_extend" )                          => "",
					__( "Small Radius", "ts_visual_composer_extend" )                  => "ts-radius-small",
					__( "Medium Radius", "ts_visual_composer_extend" )                 => "ts-radius-medium",
					__( "Large Radius", "ts_visual_composer_extend" )                  => "ts-radius-large",
					__( "Full Circle", "ts_visual_composer_extend" )                   => "ts-radius-full"
				),
				"description"       => __( "Define the radius of the icon / image border.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "icon_frame_type", 'value' => $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Border_Type_Values )
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Icon / Image Frame Border Color", "ts_visual_composer_extend" ),
				"param_name"        => "icon_frame_color",
				"value"             => "#000000",
				"description"       => __( "Define the color of the icon / image border.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "icon_frame_type", 'value' => $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Border_Type_Values )
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Apply Padding to Icon / Image", "ts_visual_composer_extend" ),
				"param_name"        => "padding",
				"value"             => "false",
				"description"       => __( "Switch the toggle if you want to apply a padding to the icon / image.", "ts_visual_composer_extend" )
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Icon / Image Padding", "ts_visual_composer_extend" ),
				"param_name"        => "icon_padding",
				"value"             => "0",
				"min"               => "0",
				"max"               => "50",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "If image instead of icon, increase the image size by padding value.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "padding", 'value' => 'true' )
			),
			// Main Counter Settings
			array(
				"type"              => "seperator",
				"heading"           => "",
				"param_name"        => "seperator_3",
				"value"				=> "",
				"seperator"			=> "Counter Values",
				"description"       => "",
				"group" 			=> "Value Settings",
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Trigger on Viewport", "ts_visual_composer_extend" ),
				"param_name"        => "counter_viewport",
				"value"             => "true",
				"description"       => __( "Switch the toggle to trigger the counter on viewport or on pageload.", "ts_visual_composer_extend" ),
				"group" 			=> "Value Settings",
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Counter Start Number", "ts_visual_composer_extend" ),
				"param_name"        => "counter_value_start",
				"value"             => 0,
				"admin_label"       => true,
				"description"       => __( "Enter the number to start counting from.", "ts_visual_composer_extend" ),
				"group" 			=> "Value Settings",
			),				
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Use Shortcode for Counter End Number", "ts_visual_composer_extend" ),
				"param_name"        => "counter_value_by_shortcode",
				"value"             => "false",
				"description"       => __( "Switch the toggle if you want to use a shortcode to generate the end value for the counter.", "ts_visual_composer_extend" ),
				"group" 			=> "Value Settings",
			),				
			array(
				"type"              => "textfield",
				"heading"           => __( "Counter End Number", "ts_visual_composer_extend" ),
				"param_name"        => "counter_value_end",
				"value"             => "",
				"admin_label"       => true,
				"description"       => __( "Enter the number to count up to.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "counter_value_by_shortcode", 'value' => 'false' ),
				"group" 			=> "Value Settings",
			),
			array(
				"type"              => "textarea_raw_html",
				"heading"           => __( "Counter End Number", "ts_visual_composer_extend" ),
				"param_name"        => "counter_value_end_shortcode",
				"value"             => base64_encode(""),
				"description"       => __( "Enter the shortcode that will dynamically generate the counter end value.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "counter_value_by_shortcode", 'value' => 'true' ),
				"group" 			=> "Value Settings",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Counter Number Font Size", "ts_visual_composer_extend" ),
				"param_name"        => "counter_value_size",
				"value"             => "30",
				"min"               => "12",
				"max"               => "200",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Select the font size for the counter number.", "ts_visual_composer_extend" ),
				"dependency"        => "",
				"group" 			=> "Value Settings",
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Counter Number Font Color", "ts_visual_composer_extend" ),
				"param_name"        => "counter_value_color",
				"value"             => "#000000",
				"description"       => __( "Define the font color for counter number.", "ts_visual_composer_extend" ),
				"dependency"        => "",
				"group" 			=> "Value Settings",
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Format Finished Number", "ts_visual_composer_extend" ),
				"param_name"        => "counter_value_format",
				"value"             => "false",
				"description"       => __( "Switch the toggle to add some formatting to the number once the count has finished.", "ts_visual_composer_extend" ),
				"group" 			=> "Value Settings",
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Add '+' Sign to Number", "ts_visual_composer_extend" ),
				"param_name"        => "counter_value_plus",
				"value"             => "false",
				"description"       => __( "Switch the toggle to either show or hide a '+' sign after the number once the count has finished.", "ts_visual_composer_extend" ),
				"dependency"		=> array( 'element' => "counter_value_format", 'value' => 'true' ),
				"group" 			=> "Value Settings",
			),
			array(
				"type"              => "dropdown",
				"heading"           => __( "Thousand Seperator", "ts_visual_composer_extend" ),
				"param_name"        => "counter_value_seperator",
				"width"             => 150,
				"value"             => array(
					__( 'None', "ts_visual_composer_extend" )         => "",
					__( 'Comma', "ts_visual_composer_extend" )        => ",",
					__( 'Dot', "ts_visual_composer_extend" )          => ".",
					__( 'Space', "ts_visual_composer_extend" )        => " ",
				),
				"description"       => __( "Select a character to seperate thousands in the end number.", "ts_visual_composer_extend" ),
				"dependency"		=> array( 'element' => "counter_value_format", 'value' => 'true' ),
				"group" 			=> "Value Settings",
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Character(s) before Number", "ts_visual_composer_extend" ),
				"param_name"        => "counter_value_before",
				"value"             => "",
				"description"       => __( "Enter any character to be shown before the nunber (i.e. $).", "ts_visual_composer_extend" ),
				"dependency"		=> array( 'element' => "counter_value_format", 'value' => 'true' ),
				"group" 			=> "Value Settings",
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Character(s) after Number", "ts_visual_composer_extend" ),
				"param_name"        => "counter_value_after",
				"value"             => "",
				"description"       => __( "Enter any character to be shown after the nunber (i.e. %).", "ts_visual_composer_extend" ),
				"dependency"		=> array( 'element' => "counter_value_format", 'value' => 'true' ),
				"group" 			=> "Value Settings",
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Seperator Line", "ts_visual_composer_extend" ),
				"param_name"        => "counter_seperator",
				"value"             => "false",
				"description"       => __( "Switch the toggle to either show or hide a seperator.", "ts_visual_composer_extend" ),
				"group" 			=> "Value Settings",
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Counter Note", "ts_visual_composer_extend" ),
				"param_name"        => "counter_note",
				"value"             => "",
				"admin_label"       => true,
				"description"       => __( "Enter a note about what you are counting.", "ts_visual_composer_extend" ),
				"group" 			=> "Value Settings",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Counter Note Font Size", "ts_visual_composer_extend" ),
				"param_name"        => "counter_note_size",
				"value"             => "15",
				"min"               => "12",
				"max"               => "200",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Select the font size for the counter note.", "ts_visual_composer_extend" ),
				"dependency"        => "",
				"group" 			=> "Value Settings",
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Counter Note Font Color", "ts_visual_composer_extend" ),
				"param_name"        => "counter_note_color",
				"value"             => "#000000",
				"description"       => __( "Define the font color for counter note.", "ts_visual_composer_extend" ),
				"dependency"        => "",
				"group" 			=> "Value Settings",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Counter Speed", "ts_visual_composer_extend" ),
				"param_name"        => "counter_speed",
				"value"             => "2000",
				"min"               => "500",
				"max"               => "30000",
				"step"              => "100",
				"unit"              => 'ms',
				"description"       => __( "Select the speed in ms for the counter to finish.", "ts_visual_composer_extend" ),
				"dependency"        => "",
				"group" 			=> "Value Settings",
			),
			// Counter Tooltip
			array(
				"type"				=> "seperator",
				"heading"			=> "",
				"param_name"		=> "seperator_4",
				"value"				=> "",
				"seperator"			=> "Icon Tooltip",
				"description"		=> "",
				"group" 			=> "Tooltip Settings",
			),
			array(
				"type"              => "switch_button",
				"heading"           => __( "Use HTML Tooltip", "ts_visual_composer_extend" ),
				"param_name"        => "tooltip_html",
				"value"             => "false",
				"description"		=> __( "Switch the toggle if you want to apply a tooltip with HTML code to the element.", "ts_visual_composer_extend" ),
				"group" 			=> "Tooltip Settings",
			),
			array(
				"type"				=> "textarea",
				"class"				=> "",
				"heading"			=> __( "Tooltip Content", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltip_content",
				"value"				=> "",
				"description"		=> __( "Enter the tooltip content here (do not use quotation marks).", "ts_visual_composer_extend" ),
				"dependency"		=> array( 'element' => "tooltip_html", 'value' => 'false' ),
				"group" 			=> "Tooltip Settings",
			),
			array(
				"type"              => "textarea_raw_html",
				"heading"           => __( "Tooltip Content", "ts_visual_composer_extend" ),
				"param_name"        => "tooltip_encoded",
				"value"             => base64_encode(""),
				"description"      	 => __( "Enter the tooltip content here (HTML code can be used).", "ts_visual_composer_extend" ),
				"dependency"           => array( 'element' => "tooltip_html", 'value' => "true" ),
				"group" 			=> "Tooltip Settings",
			),
			array(
				"type"				=> "dropdown",
				"class"				=> "",
				"heading"			=> __( "Tooltip Position", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltip_position",
				"value"					=> array(
					__( "Top", "ts_visual_composer_extend" )                            => "ts-simptip-position-top",
					__( "Bottom", "ts_visual_composer_extend" )                         => "ts-simptip-position-bottom",
				),
				"description"		=> __( "Select the tooltip position in relation to the image.", "ts_visual_composer_extend" ),
				"group" 			=> "Tooltip Settings",
			),
			array(
				"type"				=> "dropdown",
				"class"				=> "",
				"heading"			=> __( "Tooltip Style", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltip_style",
				"value"             => array(
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
				"description"		=> __( "Select the tooltip style.", "ts_visual_composer_extend" ),
				"group" 			=> "Tooltip Settings",
			),
			array(
				"type"				=> "nouislider",
				"heading"			=> __( "Tooltip X-Offset", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltipster_offsetx",
				"value"				=> "0",
				"min"				=> "-100",
				"max"				=> "100",
				"step"				=> "1",
				"unit"				=> 'px',
				"description"		=> __( "Define an optional X-Offset for the tooltip position.", "ts_visual_composer_extend" ),
				"group" 			=> "Tooltip Settings",
			),
			array(
				"type"				=> "nouislider",
				"heading"			=> __( "Tooltip Y-Offset", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltipster_offsety",
				"value"				=> "0",
				"min"				=> "-100",
				"max"				=> "100",
				"step"				=> "1",
				"unit"				=> 'px',
				"description"		=> __( "Define an optional Y-Offset for the tooltip position.", "ts_visual_composer_extend" ),
				"group" 			=> "Tooltip Settings",
			),
			// Link Settings
			array(
				"type"              => "seperator",
				"heading"           => "",
				"param_name"        => "seperator_5",
				"value"				=> "",
				"seperator"			=> "Link Settings",
				"description"       => "",
				"group" 			=> "Link Settings",
			),
			array(
				"type"				=> "dropdown",
				"class"				=> "",
				"heading"			=> __( "Link Holder", "ts_visual_composer_extend" ),
				"param_name"		=> "link_counter",
				"value"             => array(
					__( "No Link", "ts_visual_composer_extend" )                          	=> "",
					__( "Link On Icon / Image", "ts_visual_composer_extend" )				=> "icon",
					__( "Link On Content", "ts_visual_composer_extend" )					=> "content",
					__( "Link On Button", "ts_visual_composer_extend" )						=> "flat",
					__( "Link On Full Element", "ts_visual_composer_extend" )				=> "element",
				),
				"description"		=> __( "Select where the link should be attached to.", "ts_visual_composer_extend" ),
				"group" 			=> "Link Settings",
			),
			array(
				"type" 				=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_ParameterLinkPicker['enabled'] == "false" ? "vc_link" : "advancedlinks"),
				"heading" 			=> __("Link + Title", "ts_visual_composer_extend"),
				"param_name" 		=> "link_data",
				"description" 		=> __("Provide a link to another site/page for the Icon Counter.", "ts_visual_composer_extend"),
				"dependency"        => array( 'element' => "link_counter", 'value' => array('icon', 'content', 'flat', 'element') ),
				"group"				=> "Link Settings",
			),
			array(
				"type"				=> "dropdown",
				"heading"			=> __( "Button Color Style", "ts_visual_composer_extend" ),
				"param_name"		=> "link_buttonstyle",
				"width"				=> 300,
				"value"				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Flat_Button_Default_Colors,
				"description"		=> __( "Select the general color style for button.", "ts_visual_composer_extend" ),
				"dependency"		=> array( 'element' => "link_counter", 'value' => array('flat') ),
				"group"				=> "Link Settings",
			),
			array(
				"type"				=> "dropdown",
				"heading"			=> __( "Button Hover Style", "ts_visual_composer_extend" ),
				"param_name"		=> "link_buttonhover",
				"width"				=> 300,
				"value"				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Flat_Button_Hover_Colors,
				"description"		=> __( "Select the general hover style for button.", "ts_visual_composer_extend" ),
				"dependency"		=> array( 'element' => "link_counter", 'value' => array('flat') ),
				"group"				=> "Link Settings",
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __( "Button Text", "ts_visual_composer_extend" ),
				"param_name"		=> "link_buttontext",
				"value"				=> "Learn More",
				"description"		=> __( "Enter the text for the button.", "ts_visual_composer_extend" ),
				"dependency"		=> array( 'element' => "link_counter", 'value' => array('flat') ),
				"group"				=> "Link Settings",
			),
			array(
				"type"				=> "nouislider",
				"heading"			=> __( "Button Text Size", "ts_visual_composer_extend" ),
				"param_name"		=> "link_buttonsize",
				"value"				=> "16",
				"min"				=> "12",
				"max"				=> "20",
				"step"				=> "1",
				"unit"				=> 'px',
				"description"		=> __( "Select the font size for the trigger button.", "ts_visual_composer_extend" ),
				"dependency"		=> array( 'element' => "link_counter", 'value' => array('flat') ),
				"group"				=> "Link Settings",
			),				
			// Animation
			array(
				"type"              => "seperator",
				"heading"           => "",
				"param_name"        => "seperator_6",
				"value"				=> "",
				"seperator"			=> "Icon / Image Animation",
				"description"       => "",
				"group" 			=> "Other Settings",
			),
			array(
				"type"				=> "css3animations",
				"class"				=> "",
				"heading"			=> __("Icon / Image Animation", "ts_visual_composer_extend"),
				"param_name"		=> "animation_icon",
				"standard"			=> "false",
				"prefix"			=> "",
				"connector"			=> "css3animations_in",
				"noneselect"		=> "true",
				"default"			=> "",
				"value"				=> "",
				"admin_label"		=> false,
				"description"		=> __("Select the animation for the icon / image.", "ts_visual_composer_extend"),
				"group" 			=> "Other Settings",
			),
			array(
				"type"				=> "hidden_input",
				"heading"			=> __( "Icon / Image Animation", "ts_visual_composer_extend" ),
				"param_name"		=> "css3animations_in",
				"value"				=> "",
				"admin_label"		=> true,
				"description"		=> "",
				"group" 			=> "Other Settings",
			),
			// Other Icon Settings
			array(
				"type"              => "seperator",
				"heading"           => "",
				"param_name"        => "seperator_7",
				"value"				=> "",
				"seperator"			=> "Other Settings",
				"description"       => "",
				"group" 			=> "Other Settings",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Margin: Top", "ts_visual_composer_extend" ),
				"param_name"        => "margin_top",
				"value"             => "0",
				"min"               => "-50",
				"max"               => "500",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Select the top margin for the element.", "ts_visual_composer_extend" ),
				"group" 			=> "Other Settings",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Margin: Bottom", "ts_visual_composer_extend" ),
				"param_name"        => "margin_bottom",
				"value"             => "0",
				"min"               => "-50",
				"max"               => "500",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Select the bottom margin for the element.", "ts_visual_composer_extend" ),
				"group" 			=> "Other Settings",
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Define ID Name", "ts_visual_composer_extend" ),
				"param_name"        => "el_id",
				"value"             => "",
				"description"       => __( "Enter an unique ID for the element.", "ts_visual_composer_extend" ),
				"group" 			=> "Other Settings",
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Extra Class Name", "ts_visual_composer_extend" ),
				"param_name"        => "el_class",
				"value"             => "",
				"description"       => __( "Enter a class name for the element.", "ts_visual_composer_extend" ),
				"group" 			=> "Other Settings",
			),
			// Load Custom CSS/JS File
			array(
				"type"				=> "load_file",
				"heading"			=> "",
				"value"				=> "",
				"param_name"		=> "el_file1",
				"file_type"			=> "js",
				"file_path"			=> "js/ts-visual-composer-extend-element.min.js",
				"description"		=> ""
			),
			array(
				"type"				=> "load_file",
				"heading"			=> "",
				"value"				=> "",
				"param_name"		=> "el_file2",
				"file_type"			=> "css",
				"file_id"			=> "ts-extend-animations",
				"file_path"			=> "css/ts-visual-composer-extend-animations.min.css",
				"description"		=> ""
			),
		)
	);
		
	if ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_LeanMap == "true") {
		return $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element;
	} else {			
		vc_map($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element);
	}
?>