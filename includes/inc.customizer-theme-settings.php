<?php
	
add_filter( 'fl_theme_add_panel_data', function( $data, $key ) {
        if ( 'fl-general' === $key ) {
	        
	        	/*
		        ===========================
		        fl-heading-font
		        ===========================
		        */
	        	
	        	// H2: Color
	        	$data['sections']['fl-heading-font']['options']['b42s__h2__color'] = array(
		        	'setting' => array(
			        	'default'		=> '#4a4a4a',
		        	),
		        	'control' => array(
			        	'class'			=> 'WP_Customize_Color_Control',
			        	'label'			=> __('H2 Color', 'b42s')	
		        	),	
	        	);
	        	
	        	// H3: Color
	        	$data['sections']['fl-heading-font']['options']['b42s__h3__color'] = array(
		        	'setting' => array(
			        	'default'		=> '#4a4a4a',
		        	),
		        	'control' => array(
			        	'class'			=> 'WP_Customize_Color_Control',
			        	'label'			=> __('H3 Color', 'b42s')	
		        	),	
	        	);
	        	
	        	// H4: Color
	        	$data['sections']['fl-heading-font']['options']['b42s__h4__color'] = array(
		        	'setting' => array(
			        	'default'		=> '#4a4a4a',
		        	),
		        	'control' => array(
			        	'class'			=> 'WP_Customize_Color_Control',
			        	'label'			=> __('H4 Color', 'b42s')	
		        	),	
	        	);
	        	
	        	// H5: Color
	        	$data['sections']['fl-heading-font']['options']['b42s__h5__color'] = array(
		        	'setting' => array(
			        	'default'		=> '#4a4a4a',
		        	),
		        	'control' => array(
			        	'class'			=> 'WP_Customize_Color_Control',
			        	'label'			=> __('H5 Color', 'b42s')	
		        	),	
	        	);
	        	
	        	// H6: Color
	        	$data['sections']['fl-heading-font']['options']['b42s__h6__color'] = array(
		        	'setting' => array(
			        	'default'		=> '#4a4a4a',
		        	),
		        	'control' => array(
			        	'class'			=> 'WP_Customize_Color_Control',
			        	'label'			=> __('H6 Color', 'b42s')	
		        	),	
	        	);
	        	
	        	
	        	/*
		        ===========================
		        fl-body-font
		        ===========================
		        */
	        	
	        	/*
		        ===
		        PARAGRAPH
		        ===
		        */
	        	
	        	// Paragraph: Margin Bottom
                $data['sections']['fl-body-font']['options']['b42s__body_font__margin_bottom'] = array(
	              	'setting' => array(
		              	'default'		=> '10',
	              	),
	              	'control' => array(
		              	'class'			=> 'FLCustomizerControl',
		              	'type'			=> 'slider',
		              	'label'			=> __('P: Margin Bottom', 'b42s' ),
		              	'responsive'	=> true,
		              	'choices' => array(
			            	'min'		=> 0,
							'max'		=> 100,
							'step'		=> 1
		              	),
	              	),
                );
                
                /*
	            ===
	            INTRO TEXT
				===
				*/
	        
                // Intro: Font Size
                $data['sections']['fl-body-font']['options']['b42s__intro_text__font_size'] = array(
					'setting' => array(
                    	'default'		=> '27',
                    ),
                    'control' => array(
                        'class'			=> 'FLCustomizerControl',
                        'type'			=> 'slider',
                        'label'			=> __( 'Intro: Font Size', 'b42s' ),
                        'responsive'	=> true,
                        'choices' => array(
                            'min'		=> 10,
                            'max'		=> 72,
                            'step'		=> 1,
                        ),
                    ),
                );
                
                // Intro: Line Height
                $data['sections']['fl-body-font']['options']['b42s__intro_text__line_height'] = array(
	                'setting' => array(
		                'default'		=> '1.6'
	                ),
	                'control' => array(
		                'class'			=> 'FLCustomizerControl',
		                'type'			=> 'slider',
		                'label'			=> __('Intro: Line Height', 'b42s'),
		                'responsive'	=> true,
		                'choices' => array(
			            	'min'		=> 1,
			            	'max'		=> 2.5,
			            	'step'		=> 0.05
		                ),
	                ),
                );
                
                // Intro: Margin Bottom
                $data['sections']['fl-body-font']['options']['b42s__intro_text__margin_bottom'] = array(
	              	'setting' => array(
		              	'default'		=> '37'
	              	),
	              	'control' => array(
		              	'class'			=> 'FLCustomizerControl',
		              	'type'			=> 'slider',
		              	'label'			=> __('Intro: Margin Bottom', 'b42s'),
		              	'responsive'	=> true,
		              	'choices' => array(
			            	'min'		=> 0,
			            	'max'		=> 100,
			            	'step'		=> 1	
		              	),
	              	),
                );
                
                /*
	            ===
	            INTRO (ALT) TEXT
	            ===
	            */
	            
	            // Intro [Alt]: Font Size
	            $data['sections']['fl-body-font']['options']['b42s__intro_text_alt__font_size'] = array(
					'setting' => array(
                    	'default'		=> '23',
                    ),
                    'control' => array(
                        'class'			=> 'FLCustomizerControl',
                        'type'			=> 'slider',
                        'label'			=> __( 'Intro [Alt]: Font Size', 'b42s' ),
                        'responsive'	=> true,
                        'choices' => array(
                            'min'		=> 10,
                            'max'		=> 72,
                            'step'		=> 1,
                        ),
                    ),
                );
                
                // Intro [Alt]: Line Height
                $data['sections']['fl-body-font']['options']['b42s__intro_text_alt__line_height'] = array(
	                'setting' => array(
		                'default'		=> '1.6'
	                ),
	                'control' => array(
		                'class'			=> 'FLCustomizerControl',
		                'type'			=> 'slider',
		                'label'			=> __('Intro [Alt]: Line Height', 'b42s'),
		                'responsive'	=> true,
		                'choices' => array(
			            	'min'		=> 1,
			            	'max'		=> 2.5,
			            	'step'		=> 0.05
		                ),
	                ),
                );
                
                // Intro [Alt]: Margin Bottom
                $data['sections']['fl-body-font']['options']['b42s__intro_text_alt__margin_bottom'] = array(
	              	'setting' => array(
		              	'default'		=> '37'
	              	),
	              	'control' => array(
		              	'class'			=> 'FLCustomizerControl',
		              	'type'			=> 'slider',
		              	'label'			=> __('Intro [Alt]: Margin Bottom', 'b42s'),
		              	'responsive'	=> true,
		              	'choices' => array(
			            	'min'		=> 0,
			            	'max'		=> 100,
			            	'step'		=> 1	
		              	),
	              	),
                );
                
                /*
	            ===
	            SMALL TEXT
	            ===
	            */
	            
	            // Small: Font Size
	            $data['sections']['fl-body-font']['options']['b42s__small_text__font_size'] = array(
					'setting' => array(
                    	'default'		=> '14',
                    ),
                    'control' => array(
                        'class'			=> 'FLCustomizerControl',
                        'type'			=> 'slider',
                        'label'			=> __( 'Small: Font Size', 'b42s' ),
                        'responsive'	=> true,
                        'choices' => array(
                            'min'		=> 10,
                            'max'		=> 72,
                            'step'		=> 1,
                        ),
                    ),
                );
                
                // Small: Line Height
                $data['sections']['fl-body-font']['options']['b42s__small_text__line_height'] = array(
	                'setting' => array(
		                'default'		=> '1.2'
	                ),
	                'control' => array(
		                'class'			=> 'FLCustomizerControl',
		                'type'			=> 'slider',
		                'label'			=> __('Small: Line Height', 'b42s'),
		                'responsive'	=> true,
		                'choices' => array(
			            	'min'		=> 1,
			            	'max'		=> 2.5,
			            	'step'		=> 0.05
		                ),
	                ),
                );
                
                // Small: Margin Bottom
                $data['sections']['fl-body-font']['options']['b42s__small_text__margin_bottom'] = array(
	              	'setting' => array(
		              	'default'		=> '22'
	              	),
	              	'control' => array(
		              	'class'			=> 'FLCustomizerControl',
		              	'type'			=> 'slider',
		              	'label'			=> __('Small: Margin Bottom', 'b42s'),
		              	'responsive'	=> true,
		              	'choices' => array(
			            	'min'		=> 0,
			            	'max'		=> 100,
			            	'step'		=> 1	
		              	),
	              	),
                );
                
                
                /*
	            ===
	            BLOCK QUOTE
	            ===
	            */
	            
	            // Blockquote: Color
	            $data['sections']['fl-body-font']['options']['b42s__blockquote__color'] = array(
		        	'setting' => array(
			        	'default'		=> '#4a4a4a',
		        	),
		        	'control' => array(
			        	'class'			=> 'WP_Customize_Color_Control',
			        	'label'			=> __('Quote Color', 'b42s')	
		        	),	
	        	);
	            
	            // Blockquote: Font Size
	            $data['sections']['fl-body-font']['options']['b42s__blockquote__font_size'] = array(
					'setting' => array(
                    	'default'		=> '22',
                    ),
                    'control' => array(
                        'class'			=> 'FLCustomizerControl',
                        'type'			=> 'slider',
                        'label'			=> __( 'Quote: Font Size', 'b42s' ),
                        'responsive'	=> true,
                        'choices' => array(
                            'min'		=> 10,
                            'max'		=> 72,
                            'step'		=> 1,
                        ),
                    ),
                );
                
                // Blockquote: Line Height
                $data['sections']['fl-body-font']['options']['b42s__blockquote__line_height'] = array(
	                'setting' => array(
		                'default'		=> '1.6'
	                ),
	                'control' => array(
		                'class'			=> 'FLCustomizerControl',
		                'type'			=> 'slider',
		                'label'			=> __('Quote: Line Height', 'b42s'),
		                'responsive'	=> true,
		                'choices' => array(
			            	'min'		=> 1,
			            	'max'		=> 2.5,
			            	'step'		=> 0.05
		                ),
	                ),
                );
                
                // Blockquote: Margin Bottom
                $data['sections']['fl-body-font']['options']['b42s__blockquote__margin_bottom'] = array(
	              	'setting' => array(
		              	'default'		=> '35'
	              	),
	              	'control' => array(
		              	'class'			=> 'FLCustomizerControl',
		              	'type'			=> 'slider',
		              	'label'			=> __('Quote: Margin Bottom', 'b42s'),
		              	'responsive'	=> true,
		              	'choices' => array(
			            	'min'		=> 0,
			            	'max'		=> 100,
			            	'step'		=> 1	
		              	),
	              	),
                );
        }
        return $data;
}, 10, 2 );