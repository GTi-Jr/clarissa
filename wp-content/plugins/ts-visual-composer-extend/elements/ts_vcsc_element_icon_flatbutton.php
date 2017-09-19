<?php
    global $VISUAL_COMPOSER_EXTENSIONS;
	
    $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                      	=> __( "TS Icon Flat Button", "ts_visual_composer_extend" ),
		"base"                      	=> "TS_VCSC_Icon_Flat_Button",
		"icon" 	                    	=> "icon-wpb-ts_vcsc_icon_flat_button",
		"class"                     	=> "",
		"category"                  	=> __( "VC Extensions", "ts_visual_composer_extend" ),
		"description"               	=> __("Place a flat icon button element", "ts_visual_composer_extend"),
		"js_view"     					=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorLivePreview == "true" ? "TS_VCSC_IconFlatButtonViewCustom" : ""),
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
			// Button Settings
			array(
				"type"              	=> "seperator",
				"heading"           	=> "",
				"param_name"        	=> "seperator_2",
				"value"					=> "",
				"seperator"				=> "Button Settings",
				"description"       	=> ""
			),
			array(
				"type"					=> "switch_button",
				"heading"           	=> __( "Use Dual Style", "ts_visual_composer_extend" ),
				"param_name"        	=> "button_switch",
				"value"             	=> "false",
				"description"       	=> __( "Switch the toggle if you want to use two different styles (general + hover) with the button.", "ts_visual_composer_extend" ),
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Button: Global Style", "ts_visual_composer_extend" ),
				"param_name"            => "button_style",
				"width"                 => 300,
				"value"                 => array(
					__( 'Sun Flower Flat', "ts_visual_composer_extend" )		=> "ts-color-button-sun-flower",
					__( 'Orange Flat', "ts_visual_composer_extend" )			=> "ts-color-button-orange-flat",
					__( 'Carot Flat', "ts_visual_composer_extend" )     		=> "ts-color-button-carrot-flat",
					__( 'Pumpkin Flat', "ts_visual_composer_extend" )			=> "ts-color-button-pumpkin-flat",
					__( 'Alizarin Flat', "ts_visual_composer_extend" )			=> "ts-color-button-alizarin-flat",
					__( 'Pomegranate Flat', "ts_visual_composer_extend" )		=> "ts-color-button-pomegranate-flat",
					__( 'Turquoise Flat', "ts_visual_composer_extend" )			=> "ts-color-button-turquoise-flat",
					__( 'Green Sea Flat', "ts_visual_composer_extend" )			=> "ts-color-button-green-sea-flat",
					__( 'Emerald Flat', "ts_visual_composer_extend" )			=> "ts-color-button-emerald-flat",
					__( 'Nephritis Flat', "ts_visual_composer_extend" )			=> "ts-color-button-nephritis-flat",
					__( 'Peter River Flat', "ts_visual_composer_extend" )		=> "ts-color-button-peter-river-flat",
					__( 'Belize Hole Flat', "ts_visual_composer_extend" )		=> "ts-color-button-belize-hole-flat",
					__( 'Amethyst Flat', "ts_visual_composer_extend" )			=> "ts-color-button-amethyst-flat",
					__( 'Wisteria Flat', "ts_visual_composer_extend" )			=> "ts-color-button-wisteria-flat",
					__( 'Wet Asphalt Flat', "ts_visual_composer_extend" )		=> "ts-color-button-wet-asphalt-flat",
					__( 'Midnight Blue Flat', "ts_visual_composer_extend" )		=> "ts-color-button-midnight-blue-flat",
					__( 'Clouds Flat', "ts_visual_composer_extend" )			=> "ts-color-button-clouds-flat",
					__( 'Silver Flat', "ts_visual_composer_extend" )			=> "ts-color-button-silver-flat",
					__( 'Concrete Flat', "ts_visual_composer_extend" )			=> "ts-color-button-concrete-flat",
					__( 'Asbestos Flat', "ts_visual_composer_extend" )			=> "ts-color-button-asbestos-flat",
					__( 'Graphite Flat', "ts_visual_composer_extend" )			=> "ts-color-button-graphite-flat",
					__( 'Custom Color Style', "ts_visual_composer_extend" )		=> "ts-color-button-custom-flat",
				),
				"admin_label"           => true,
				"description"           => __( "Select the general style for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_switch", 'value' => 'false' )
			),				
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Button: General Style", "ts_visual_composer_extend" ),
				"param_name"            => "button_style1",
				"width"                 => 300,
				"value"                 => array_merge($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Flat_Button_Default_Colors, $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Flat_Button_Default_Custom),
				"admin_label"           => true,
				"description"           => __( "Select the general style for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_switch", 'value' => 'true' )
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Button: Hover Style", "ts_visual_composer_extend" ),
				"param_name"            => "button_hover1",
				"width"                 => 300,
				"value"                 => array_merge($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Flat_Button_Hover_Colors, $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Flat_Button_Hover_Custom),
				"description"           => __( "Select the hover style for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_switch", 'value' => 'true' )
			),				
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Button: Alignment", "ts_visual_composer_extend" ),
				"param_name"        	=> "button_align",
				"width"             	=> 300,
				"value"             	=> array(
					__( 'Center', "ts_visual_composer_extend" )      	=> "center",
					__( 'Left', "ts_visual_composer_extend" )			=> "left",
					__( 'Right', "ts_visual_composer_extend" )  		=> "right",
				),
				"description"       	=> __( "Select how the icon button should be aligned.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              	=> "textfield",
				"heading"           	=> __( "Button: Text String", "ts_visual_composer_extend" ),
				"param_name"        	=> "button_text",
				"value"             	=> "Read More",
				"description"       	=> __( "Enter a text for the 'Read More' button.", "ts_visual_composer_extend" ),
				"dependency"        	=> ""
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Button Width", "ts_visual_composer_extend" ),
				"param_name"            => "button_width",
				"value"                 => "100",
				"min"                   => "0",
				"max"                   => "100",
				"step"                  => "1",
				"unit"                  => '%',
				"description"       	=> __( "Define the button width in percent (responsive).", "ts_visual_composer_extend" ),
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Button Height", "ts_visual_composer_extend" ),
				"param_name"            => "button_height",
				"value"                 => "50",
				"min"                   => "50",
				"max"                   => "100",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"       	=> __( "Define the minimum button height in pixels.", "ts_visual_composer_extend" ),
			),
			// Button Styling
			array(
				"type"              	=> "seperator",
				"heading"           	=> "",
				"param_name"        	=> "seperator_3",
				"value"					=> "",
				"seperator"				=> "Button Styling",
				"description"       	=> ""
			),
			array(
				"type"					=> "dropdown",
				"class"					=> "",
				"heading"				=> __( "Button: Radius", "ts_visual_composer_extend" ),
				"param_name"			=> "button_radius",
				"value"					=> array(
					__( "None", "ts_visual_composer_extend" )			=> "ts-flat-buttons-radius-none",
					__( "Large", "ts_visual_composer_extend" )			=> "ts-flat-buttons-radius-large",
					__( "Medium", "ts_visual_composer_extend" )			=> "ts-flat-buttons-radius-medium",
					__( "Small", "ts_visual_composer_extend" )			=> "ts-flat-buttons-radius-small",
					
				),
				"description"			=> __( "Select the border radius that should be applied to the button.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button: Global Background Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom_single_color",
				"value"             	=> "#f9f9f9",
				"description"       	=> __( "Define the background color for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_style", 'value' => 'ts-color-button-custom-flat' )
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button: Global Shadow Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom_single_shadow",
				"value"             	=> "#dadedf",
				"description"       	=> __( "Define the shadow color for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_style", 'value' => 'ts-color-button-custom-flat' )
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button: Global Text Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom_single_text",
				"value"             	=> "#454545",
				"description"       	=> __( "Define the color of the text for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_style", 'value' => 'ts-color-button-custom-flat' )
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button: General Background Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom_dual_color1",
				"value"             	=> "#f9f9f9",
				"description"       	=> __( "Define the general background color for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_style1", 'value' => 'ts-dual-buttons-color-custom-flat' )
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button: General Shadow Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom_dual_shadow1",
				"value"             	=> "#dadedf",
				"description"       	=> __( "Define the general background color for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_style1", 'value' => 'ts-dual-buttons-color-custom-flat' )
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button: General Text Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom_dual_text1",
				"value"             	=> "#454545",
				"description"       	=> __( "Define the color of the text for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_style1", 'value' => 'ts-dual-buttons-color-custom-flat' )
			),			
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button: Hover Background Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom_dual_color2",
				"value"             	=> "#f9f9f9",
				"description"       	=> __( "Define the hover background color for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_hover1", 'value' => 'ts-dual-buttons-preview-custom-flat ts-dual-buttons-hover-custom-flat' )
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button: Hover Shadow Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom_dual_shadow2",
				"value"             	=> "#dadedf",
				"description"       	=> __( "Define the hover shadow color for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_hover1", 'value' => 'ts-dual-buttons-preview-custom-flat ts-dual-buttons-hover-custom-flat' )
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button: Hover Text Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom_dual_text2",
				"value"             	=> "#454545",
				"description"       	=> __( "Define the color of the text for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_hover1", 'value' => 'ts-dual-buttons-preview-custom-flat ts-dual-buttons-hover-custom-flat' )
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Button: Font / Icon Size", "ts_visual_composer_extend" ),
				"param_name"            => "font_size",
				"value"                 => "18",
				"min"                   => "4",
				"max"                   => "100",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"       	=> __( "Define the font size for the icon / text in the button.", "ts_visual_composer_extend" ),
			),
			// Icon Settings
			array(
				"type"              	=> "seperator",
				"heading"           	=> "",
				"param_name"        	=> "seperator_4",
				"value"					=> "",
				"seperator"				=> "Icon Settings",
				"description"       	=> "",
			),
			array(
				'type' 					=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorType,
				'heading' 				=> __( 'Button: Icon', 'ts_visual_composer_extend' ),
				'param_name' 			=> 'icon',
				'value'					=> '',
				'source'				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorValue,
				'settings' 				=> array(
					'emptyIcon' 				=> true,
					'type' 						=> 'extensions',
					'iconsPerPage' 				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorPager,
					'source' 					=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorSource,
				),
				"admin_label"       	=> true,
				"description"       	=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorVisualSelector == "true" ? __( "Select the icon you want to display in button.", "ts_visual_composer_extend" ) : $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorString),
				"dependency"        	=> "",
			),	
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button: Global Icon Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom_single_icon",
				"value"             	=> "#454545",
				"description"       	=> __( "Define the color of the icon for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_style", 'value' => 'ts-color-button-custom-flat' )
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button: General Icon Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom_dual_icon1",
				"value"             	=> "#454545",
				"description"       	=> __( "Define the general color of the icon for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_hover1", 'value' => 'ts-dual-buttons-preview-custom-flat ts-dual-buttons-hover-custom-flat' )
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button: Hover Icon Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom_dual_icon2",
				"value"             	=> "#454545",
				"description"       	=> __( "Define the hover color of the icon for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_hover1", 'value' => 'ts-dual-buttons-preview-custom-flat ts-dual-buttons-hover-custom-flat' )
			),
			// Tooltip Settings
			array(
				"type"                  => "switch_button",
				"heading"			    => __( "Use HTML in Tooltip", "ts_visual_composer_extend" ),
				"param_name"		    => "tooltip_html",
				"value"                 => "false",
				"description"		    => __( "Switch the toggle if you want to allow basic HTML code for the tooltip content.", "ts_visual_composer_extend" ),
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"				    => "textarea",
				"class"				    => "",
				"heading"			    => __( "Tooltip Content", "ts_visual_composer_extend" ),
				"param_name"		    => "tooltip_content",
				"value"				    => "",
				"description"		    => __( "Enter the tooltip content here (do not use quotation marks or HTML code).", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "tooltip_html", 'value' => 'false' ),
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"              	=> "textarea_raw_html",
				"heading"           	=> __( "Tooltip Content", "ts_visual_composer_extend" ),
				"param_name"        	=> "tooltip_content_html",
				"value"             	=> base64_encode(""),
				"description"      	 	=> __( "Enter the tooltip content here; HTML code can be used.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "tooltip_html", 'value' => 'true' ),
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