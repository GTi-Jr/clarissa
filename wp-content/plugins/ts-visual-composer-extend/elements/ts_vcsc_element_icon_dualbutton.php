<?php
    global $VISUAL_COMPOSER_EXTENSIONS;
	
    $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                      	=> __( "TS Icon Dual Button", "ts_visual_composer_extend" ),
		"base"                      	=> "TS_VCSC_Icon_Dual_Button",
		"icon" 	                    	=> "icon-wpb-ts_vcsc_icon_dual_button",
		"class"                     	=> "",
		"category"                  	=> __( "VC Extensions", "ts_visual_composer_extend" ),
		"description"               	=> __("Place a dual button with icon", "ts_visual_composer_extend"),
		"js_view"     					=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorLivePreview == "true" ? "TS_VCSC_IconDualButtonsViewCustom" : ""),
		"admin_enqueue_js"            	=> "",
		"admin_enqueue_css"           	=> "",
		"params"                    	=> array(
			// General Settings
			array(
				"type"              	=> "seperator",
				"heading"           	=> "",
				"param_name"        	=> "seperator_1",
				"value"					=> "",
				"seperator"             => "General Settings",
				"description"       	=> ""
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Button Align", "ts_visual_composer_extend" ),
				"param_name"        	=> "button_align",
				"width"             	=> 300,
				"value"             	=> array(
					__( 'Center', "ts_visual_composer_extend" )      	=> "ts-dual-buttons-center",
					__( 'Left', "ts_visual_composer_extend" )			=> "ts-dual-buttons-left",
					__( 'Right', "ts_visual_composer_extend" )  		=> "ts-dual-buttons-right",
				),
				"description"       	=> __( "Select how the dual buttons should be aligned.", "ts_visual_composer_extend" ),
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
				"type"					=> "dropdown",
				"class"					=> "",
				"heading"				=> __( "Button Radius", "ts_visual_composer_extend" ),
				"param_name"			=> "button_radius",
				"value"					=> array(
					__( "Large", "ts_visual_composer_extend" )			=> "ts-dual-buttons-radius-large",
					__( "Medium", "ts_visual_composer_extend" )			=> "ts-dual-buttons-radius-medium",
					__( "Small", "ts_visual_composer_extend" )			=> "ts-dual-buttons-radius-small",
					__( "None", "ts_visual_composer_extend" )			=> "ts-dual-buttons-radius-none",
				),
				"description"			=> __( "Select the border radius that should be applied to the dual buttons.", "ts_visual_composer_extend" ),
			),
			// Separator Settings
			array(
				"type"              	=> "seperator",
				"heading"           	=> "",
				"param_name"        	=> "seperator_2",
				"value"					=> "",
				"seperator"             => "Separator Settings",
				"description"       	=> "",
			),
			array(
				"type"					=> "dropdown",
				"class"					=> "",
				"heading"				=> __( "Separator Content", "ts_visual_composer_extend" ),
				"param_name"			=> "separator_content",
				"value"					=> array(
					__( "Text", "ts_visual_composer_extend" )				=> "text",
					__( "Icon", "ts_visual_composer_extend" )				=> "icon",
					__( "Empty", "ts_visual_composer_extend" )				=> "empty",
					__( "No Separator", "ts_visual_composer_extend" )		=> "none",
				),
				"admin_label"       	=> true,
				"description"			=> __( "Select the content for the button separator.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Icon / Text Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "separator_color",
				"value"             	=> "#444444",
				"description"       	=> __( "Define the color of the icon or text for the button separator.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "separator_content", 'value' => array('icon', 'text') ),
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Background Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "separator_background",
				"value"             	=> "#ffffff",
				"description"       	=> __( "Define the background color for the button separator.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "separator_content", 'value' => array('icon', 'text', 'empty') ),
			),			
			array(
				'type' 					=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorType,
				'heading' 				=> __( 'Button Icon', 'ts_visual_composer_extend' ),
				'param_name' 			=> 'separator_icon',
				'value'					=> '',
				'source'				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorValue,
				'settings' 				=> array(
					'emptyIcon' 				=> false,
					'type' 						=> 'extensions',
					'iconsPerPage' 				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorPager,
					'source' 					=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorSource,
				),
				"description"       	=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorVisualSelector == "true" ? __( "Select the icon you want to display in the button separator.", "ts_visual_composer_extend" ) : $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorString),
				"dependency"			=> array( 'element' => "separator_content", 'value' => 'icon' ),
			),				
			array(
				"type"                  => "textfield",
				"heading"               => __( "Text", "ts_visual_composer_extend" ),
				"param_name"            => "separator_text",
				"value"                 => "or",
				"description"           => __( "Enter a SHORT text string to be used for the separator.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "separator_content", 'value' => 'text' ),
			),
			// Button #1 Settings
			array(
				"type"              	=> "seperator",
				"heading"           	=> "",
				"param_name"        	=> "seperator_3",
				"value"					=> "",
				"seperator"            	=> "Button #1 Settings",
				"description"       	=> "",
				"group" 				=> "Button #1",
			),
			array(
				"type" 					=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_ParameterLinkPicker['enabled'] == "false" ? "vc_link" : "advancedlinks"),
				"heading" 				=> __("Link + Title #1", "ts_visual_composer_extend"),
				"param_name" 			=> "button_link1",
				"description" 			=> __("Provide a link to another site/page for Button #1.", "ts_visual_composer_extend"),
				"group" 				=> "Button #1",
			),
			array(
				"type"              	=> "textfield",
				"heading"           	=> __( "Button #1: Text", "ts_visual_composer_extend" ),
				"param_name"        	=> "button_text1",
				"value"             	=> "Read More 1",
				"description"       	=> __( "Enter a text for button #1.", "ts_visual_composer_extend" ),
				"group" 				=> "Button #1",
			),
			array(
				"type"              	=> "textarea_raw_html",
				"heading"           	=> __( "Button #1: Tooltip Content", "ts_visual_composer_extend" ),
				"param_name"        	=> "tooltip_content1",
				"value"             	=> base64_encode(""),
				"description"      	 	=> __( "Enter the tooltip content for button #1 here; HTML code can be used.", "ts_visual_composer_extend" ),
				"group" 				=> "Button #1",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Button #1: General Style", "ts_visual_composer_extend" ),
				"param_name"            => "button_style1",
				"width"                 => 300,
				"value"                 => array_merge($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Flat_Button_Default_Colors, $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Flat_Button_Default_Custom),
				"admin_label"           => true,
				"description"           => __( "Select the general color style for button #1.", "ts_visual_composer_extend" ),
				"group" 				=> "Button #1",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Button #1: Hover Style", "ts_visual_composer_extend" ),
				"param_name"            => "button_hover1",
				"width"                 => 300,
				"value"                 => array_merge($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Flat_Button_Hover_Colors, $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Flat_Button_Hover_Custom),
				"description"           => __( "Select the general hover style for button #1.", "ts_visual_composer_extend" ),
				"group" 				=> "Button #1",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button #1: General Background Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom1_dual_color1",
				"value"             	=> "#f9f9f9",
				"description"       	=> __( "Define the general background color for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_style1", 'value' => 'ts-dual-buttons-color-custom-flat' ),
				"group" 				=> "Button #1",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button #1: General Shadow Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom1_dual_shadow1",
				"value"             	=> "#dadedf",
				"description"       	=> __( "Define the general background color for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_style1", 'value' => 'ts-dual-buttons-color-custom-flat' ),
				"group" 				=> "Button #1",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button #1: General Text Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom1_dual_text1",
				"value"             	=> "#454545",
				"description"       	=> __( "Define the color of the text for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_style1", 'value' => 'ts-dual-buttons-color-custom-flat' ),
				"group" 				=> "Button #1",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button #1: Hover Background Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom1_dual_color2",
				"value"             	=> "#f9f9f9",
				"description"       	=> __( "Define the hover background color for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_hover1", 'value' => 'ts-dual-buttons-preview-custom-flat ts-dual-buttons-hover-custom-flat' ),
				"group" 				=> "Button #1",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button #1: Hover Shadow Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom1_dual_shadow2",
				"value"             	=> "#dadedf",
				"description"       	=> __( "Define the hover shadow color for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_hover1", 'value' => 'ts-dual-buttons-preview-custom-flat ts-dual-buttons-hover-custom-flat' ),
				"group" 				=> "Button #1",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button #1: Hover Text Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom1_dual_text2",
				"value"             	=> "#454545",
				"description"       	=> __( "Define the color of the text for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_hover1", 'value' => 'ts-dual-buttons-preview-custom-flat ts-dual-buttons-hover-custom-flat' ),
				"group" 				=> "Button #1",
			),
			// Button #2 Settings
			array(
				"type"              	=> "seperator",
				"heading"           	=> "",
				"param_name"        	=> "seperator_4",
				"value"					=> "",
				"seperator"            	=> "Button #2 Settings",
				"description"       	=> "",
				"group" 				=> "Button #2",
			),
			array(
				"type" 					=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_ParameterLinkPicker['enabled'] == "false" ? "vc_link" : "advancedlinks"),
				"heading" 				=> __("Link + Title #2", "ts_visual_composer_extend"),
				"param_name" 			=> "button_link2",
				"description" 			=> __("Provide a link to another site/page for Button #2.", "ts_visual_composer_extend"),
				"group" 				=> "Button #2",
			),
			array(
				"type"              	=> "textfield",
				"heading"           	=> __( "Button #2: Text", "ts_visual_composer_extend" ),
				"param_name"        	=> "button_text2",
				"value"             	=> "Read More 2",
				"description"       	=> __( "Enter a text for button #2.", "ts_visual_composer_extend" ),
				"group" 				=> "Button #2",
			),
			array(
				"type"              	=> "textarea_raw_html",
				"heading"           	=> __( "Button #2: Tooltip Content", "ts_visual_composer_extend" ),
				"param_name"        	=> "tooltip_content2",
				"value"             	=> base64_encode(""),
				"description"      	 	=> __( "Enter the tooltip content for button #1  here; HTML code can be used.", "ts_visual_composer_extend" ),
				"group" 				=> "Button #2",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Button #2: General Style", "ts_visual_composer_extend" ),
				"param_name"            => "button_style2",
				"width"                 => 300,
				"value"                 => array_merge($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Flat_Button_Default_Colors, $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Flat_Button_Default_Custom),
				"admin_label"           => true,
				"description"           => __( "Select the general color style for button #2.", "ts_visual_composer_extend" ),
				"group" 				=> "Button #2",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Button #2: Hover Style", "ts_visual_composer_extend" ),
				"param_name"            => "button_hover2",
				"width"                 => 300,
				"value"                 => array_merge($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Flat_Button_Hover_Colors, $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Flat_Button_Hover_Custom),
				"description"           => __( "Select the general hover style for button #2.", "ts_visual_composer_extend" ),
				"group" 				=> "Button #2",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button #2: General Background Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom2_dual_color1",
				"value"             	=> "#f9f9f9",
				"description"       	=> __( "Define the general background color for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_style2", 'value' => 'ts-dual-buttons-color-custom-flat' ),
				"group" 				=> "Button #2",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button #2: General Shadow Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom2_dual_shadow1",
				"value"             	=> "#dadedf",
				"description"       	=> __( "Define the general background color for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_style2", 'value' => 'ts-dual-buttons-color-custom-flat' ),
				"group" 				=> "Button #2",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button #2: General Text Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom2_dual_text1",
				"value"             	=> "#454545",
				"description"       	=> __( "Define the color of the text for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_style2", 'value' => 'ts-dual-buttons-color-custom-flat' ),
				"group" 				=> "Button #2",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button #2: Hover Background Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom2_dual_color2",
				"value"             	=> "#f9f9f9",
				"description"       	=> __( "Define the hover background color for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_hover2", 'value' => 'ts-dual-buttons-preview-custom-flat ts-dual-buttons-hover-custom-flat' ),
				"group" 				=> "Button #2",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button #2: Hover Shadow Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom2_dual_shadow2",
				"value"             	=> "#dadedf",
				"description"       	=> __( "Define the hover shadow color for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_hover2", 'value' => 'ts-dual-buttons-preview-custom-flat ts-dual-buttons-hover-custom-flat' ),
				"group" 				=> "Button #2",
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Button #2: Hover Text Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "custom2_dual_text2",
				"value"             	=> "#454545",
				"description"       	=> __( "Define the color of the text for the button.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "button_hover2", 'value' => 'ts-dual-buttons-preview-custom-flat ts-dual-buttons-hover-custom-flat' ),
				"group" 				=> "Button #2",
			),
			// Tooltip Settings
			array(
				"type"              	=> "seperator",
				"heading"           	=> "",
				"param_name"        	=> "seperator_5",
				"value"					=> "",
				"seperator"            	=> "Tooltip Settings",
				"description"       	=> "",
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
				"param_name"		    => "seperator_6",
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