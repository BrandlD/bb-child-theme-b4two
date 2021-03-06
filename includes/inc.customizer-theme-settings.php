<?php
	
add_filter( 'fl_theme_add_panel_data', function( $data, $key ) {
        if ( 'fl-general' === $key ) {
	        
	        	/*
		        ===========================
		        fl-heading-font
		        ===========================
		        */
	        	
	        	// Heading Divider
	        	$data['sections']['fl-heading-font']['options']['b42s__fl-heading-font__line1'] = array(
					'control' => array(
						'class'			=> 'FLCustomizerControl',
						'type'			=> 'line',
					)
				);
	        	
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
	        	
	        	// H2: Font Weight
	        	$data['sections']['fl-heading-font']['options']['b42s__h2__font_weight'] = array(
		        	'setting' => array(
			        	'default'		=> 'inherit',
		        	),
		        	'control' => array(
			        	'class'			=> 'WP_Customize_Control',
						'label'			=> __( 'H2 Font Weight', 'fl-automator' ),
						'type'			=> 'select',
						'choices' => array(
							'inherit'	=> 'Default (Set Above)',
							'200'		=> 'Thin',
							'300'		=> 'Light',
							'400'		=> 'Regular',
							'500'		=> 'Medium',
							'600'		=> 'Semi-Bold',
							'700'		=> 'Bold',
							'900'		=> 'Heavy'
						)
		        	)
	        	);
	        	
	        	$data['sections']['fl-heading-font']['options']['b42s__h2__font_format'] = array(
	              	'setting' => array(
		              	'default'		=> 'inherit'
	              	),
	              	'control' => array(
		              	'class'			=> 'WP_Customize_Control',
		              	'type'			=> 'select',
		              	'label'			=> __('H2 Font Format', 'b42s'),
		              	'choices' => array(
			              	'inherit'	=> __('Default (Set Above)', 'b42s'),
			              	'none'		=> __('Regular', 'b42s'),
			              	'capitalize'=> __('Capitalize', 'b42s'),
			              	'uppercase'	=> __('Uppercase', 'b42s'),
			              	'lowercase'	=> __('Lowercase', 'b42s')
		              	),	
	              	),
                );
	        	
	        	// Heading Divider
	        	$data['sections']['fl-heading-font']['options']['b42s__fl-heading-font__line2'] = array(
					'control' => array(
						'class'			=> 'FLCustomizerControl',
						'type'			=> 'line',
					)
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
	        	
	        	// H3: Font Weight
	        	$data['sections']['fl-heading-font']['options']['b42s__h3__font_weight'] = array(
		        	'setting' => array(
			        	'default'		=> 'inherit',
		        	),
		        	'control' => array(
			        	'class'			=> 'WP_Customize_Control',
						'label'			=> __( 'H3 Font Weight', 'fl-automator' ),
						'type'			=> 'select',
						'choices' => array(
							'inherit'	=> 'Default (Set Above)',
							'200'		=> 'Thin',
							'300'		=> 'Light',
							'400'		=> 'Regular',
							'500'		=> 'Medium',
							'600'		=> 'Semi-Bold',
							'700'		=> 'Bold',
							'900'		=> 'Heavy'
						)
		        	)
	        	);
	        	
	        	$data['sections']['fl-heading-font']['options']['b42s__h3__font_format'] = array(
	              	'setting' => array(
		              	'default'		=> 'inherit'
	              	),
	              	'control' => array(
		              	'class'			=> 'WP_Customize_Control',
		              	'type'			=> 'select',
		              	'label'			=> __('H3 Font Format', 'b42s'),
		              	'choices' => array(
			              	'inherit'	=> __('Default (Set Above)', 'b42s'),
			              	'none'		=> __('Regular', 'b42s'),
			              	'capitalize'=> __('Capitalize', 'b42s'),
			              	'uppercase'	=> __('Uppercase', 'b42s'),
			              	'lowercase'	=> __('Lowercase', 'b42s')
		              	),	
	              	),
                );
	        	
	        	// Heading Divider
	        	$data['sections']['fl-heading-font']['options']['b42s__fl-heading-font__line3'] = array(
					'control' => array(
						'class'			=> 'FLCustomizerControl',
						'type'			=> 'line',
					)
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
	        	
	        	// H4: Font Weight
	        	$data['sections']['fl-heading-font']['options']['b42s__h4__font_weight'] = array(
		        	'setting' => array(
			        	'default'		=> 'inherit',
		        	),
		        	'control' => array(
			        	'class'			=> 'WP_Customize_Control',
						'label'			=> __( 'H4 Font Weight', 'fl-automator' ),
						'type'			=> 'select',
						'choices' => array(
							'inherit'	=> 'Default (Set Above)',
							'200'		=> 'Thin',
							'300'		=> 'Light',
							'400'		=> 'Regular',
							'500'		=> 'Medium',
							'600'		=> 'Semi-Bold',
							'700'		=> 'Bold',
							'900'		=> 'Heavy'
						)
		        	)
	        	);
	        	
	        	$data['sections']['fl-heading-font']['options']['b42s__h4__font_format'] = array(
	              	'setting' => array(
		              	'default'		=> 'inherit'
	              	),
	              	'control' => array(
		              	'class'			=> 'WP_Customize_Control',
		              	'type'			=> 'select',
		              	'label'			=> __('H4 Font Format', 'b42s'),
		              	'choices' => array(
			              	'inherit'	=> __('Default (Set Above)', 'b42s'),
			              	'none'		=> __('Regular', 'b42s'),
			              	'capitalize'=> __('Capitalize', 'b42s'),
			              	'uppercase'	=> __('Uppercase', 'b42s'),
			              	'lowercase'	=> __('Lowercase', 'b42s')
		              	),	
	              	),
                );
	        	
	        	// Heading Divider
	        	$data['sections']['fl-heading-font']['options']['b42s__fl-heading-font__line4'] = array(
					'control' => array(
						'class'			=> 'FLCustomizerControl',
						'type'			=> 'line',
					)
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
	        	
	        	// H5: Font Weight
	        	$data['sections']['fl-heading-font']['options']['b42s__h5__font_weight'] = array(
		        	'setting' => array(
			        	'default'		=> 'inherit',
		        	),
		        	'control' => array(
			        	'class'			=> 'WP_Customize_Control',
						'label'			=> __( 'H5 Font Weight', 'fl-automator' ),
						'type'			=> 'select',
						'choices' => array(
							'inherit'	=> 'Default (Set Above)',
							'200'		=> 'Thin',
							'300'		=> 'Light',
							'400'		=> 'Regular',
							'500'		=> 'Medium',
							'600'		=> 'Semi-Bold',
							'700'		=> 'Bold',
							'900'		=> 'Heavy'
						)
		        	)
	        	);
	        	
	        	$data['sections']['fl-heading-font']['options']['b42s__h5__font_format'] = array(
	              	'setting' => array(
		              	'default'		=> 'inherit'
	              	),
	              	'control' => array(
		              	'class'			=> 'WP_Customize_Control',
		              	'type'			=> 'select',
		              	'label'			=> __('H5 Font Format', 'b42s'),
		              	'choices' => array(
			              	'inherit'	=> __('Default (Set Above)', 'b42s'),
			              	'none'		=> __('Regular', 'b42s'),
			              	'capitalize'=> __('Capitalize', 'b42s'),
			              	'uppercase'	=> __('Uppercase', 'b42s'),
			              	'lowercase'	=> __('Lowercase', 'b42s')
		              	),	
	              	),
                );
	        	
	        	// Heading Divider
	        	$data['sections']['fl-heading-font']['options']['b42s__fl-heading-font__line5'] = array(
					'control' => array(
						'class'			=> 'FLCustomizerControl',
						'type'			=> 'line',
					)
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
	        	
	        	// H3: Font Weight
	        	$data['sections']['fl-heading-font']['options']['b42s__h6__font_weight'] = array(
		        	'setting' => array(
			        	'default'		=> 'inherit',
		        	),
		        	'control' => array(
			        	'class'			=> 'WP_Customize_Control',
						'label'			=> __( 'H6 Font Weight', 'fl-automator' ),
						'type'			=> 'select',
						'choices' => array(
							'inherit'	=> 'Default (Set Above)',
							'200'		=> 'Thin',
							'300'		=> 'Light',
							'400'		=> 'Regular',
							'500'		=> 'Medium',
							'600'		=> 'Semi-Bold',
							'700'		=> 'Bold',
							'900'		=> 'Heavy'
						)
		        	)
	        	);
	        	
	        	$data['sections']['fl-heading-font']['options']['b42s__h6__font_format'] = array(
	              	'setting' => array(
		              	'default'		=> 'inherit'
	              	),
	              	'control' => array(
		              	'class'			=> 'WP_Customize_Control',
		              	'type'			=> 'select',
		              	'label'			=> __('H6 Font Format', 'b42s'),
		              	'choices' => array(
			              	'inherit'	=> __('Default (Set Above)', 'b42s'),
			              	'none'		=> __('Regular', 'b42s'),
			              	'capitalize'=> __('Capitalize', 'b42s'),
			              	'uppercase'	=> __('Uppercase', 'b42s'),
			              	'lowercase'	=> __('Lowercase', 'b42s')
		              	),	
	              	),
                );
                
                // Heading Divider
	        	$data['sections']['fl-heading-font']['options']['b42s__fl-heading-font__line6'] = array(
					'control' => array(
						'class'			=> 'FLCustomizerControl',
						'type'			=> 'line',
					)
				);
                
                
                /*
	            ===
	            BLOCK QUOTE
	            ===
	            */
	            
	            // Blockquote: Color
	            $data['sections']['fl-heading-font']['options']['b42s__blockquote__color'] = array(
		        	'setting' => array(
			        	'default'		=> '#4a4a4a',
		        	),
		        	'control' => array(
			        	'class'			=> 'WP_Customize_Color_Control',
			        	'label'			=> __('Quote Color', 'b42s')	
		        	),	
	        	);
	            
	            // Blockquote: Font Size
	            $data['sections']['fl-heading-font']['options']['b42s__blockquote__font_size'] = array(
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
                $data['sections']['fl-heading-font']['options']['b42s__blockquote__line_height'] = array(
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
                $data['sections']['fl-heading-font']['options']['b42s__blockquote__margin_bottom'] = array(
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
                
                
                // Heading Divider
	        	$data['sections']['fl-heading-font']['options']['b42s__fl-heading-font__line7'] = array(
					'control' => array(
						'class'			=> 'FLCustomizerControl',
						'type'			=> 'line',
					)
				);
                
                
                /*
	            ===
	            INTRO TEXT
				===
				*/
	        
                // Intro: Font Size
                $data['sections']['fl-heading-font']['options']['b42s__intro_text__font_size'] = array(
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
                $data['sections']['fl-heading-font']['options']['b42s__intro_text__line_height'] = array(
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
                $data['sections']['fl-heading-font']['options']['b42s__intro_text__margin_bottom'] = array(
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
                
                // Intro: Font Style
                $data['sections']['fl-heading-font']['options']['b42s__intro_text__font_style'] = array(
	            	'setting' => array(
		            	'normal' 	
	            	),
	            	'control' => array(
		            	'class'			=> 'WP_Customize_Control',
		            	'type'			=> 'select',
		            	'label'			=> __('Intro: Font Style', 'b42s'),
		            	'choices' => array(
			            	'normal'	=> 'Normal',
			            	'italic'	=> 'Italic'	
		            	),	
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
                
                // Intro [Alt]: Font Style
                $data['sections']['fl-body-font']['options']['b42s__intro_text_alt__font_style'] = array(
	            	'setting' => array(
		            	'normal' 	
	            	),
	            	'control' => array(
		            	'class'			=> 'WP_Customize_Control',
		            	'type'			=> 'select',
		            	'label'			=> __('Intro: Font Style', 'b42s'),
		            	'choices' => array(
			            	'normal'	=> 'Normal',
			            	'italic'	=> 'Italic'	
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
	            HEADER NAV
	            ===
	            */
	            
	            // Header Nav: Font Size
	            $data['sections']['fl-body-font']['options']['b42s__header_nav__font_size'] = array(
					'setting' => array(
                    	'default'		=> '16',
                    ),
                    'control' => array(
                        'class'			=> 'FLCustomizerControl',
                        'type'			=> 'slider',
                        'label'			=> __( 'Header Nav: Font Size', 'b42s' ),
                        'responsive'	=> true,
                        'choices' => array(
                            'min'		=> 10,
                            'max'		=> 72,
                            'step'		=> 1,
                        ),
                    ),
                );
                
                // Header Nav: Line Height
                $data['sections']['fl-body-font']['options']['b42s__header_nav__line_height'] = array(
	                'setting' => array(
		                'default'		=> '1.4'
	                ),
	                'control' => array(
		                'class'			=> 'FLCustomizerControl',
		                'type'			=> 'slider',
		                'label'			=> __('Header Nav: Line Height', 'b42s'),
		                'responsive'	=> true,
		                'choices' => array(
			            	'min'		=> 1,
			            	'max'		=> 2.5,
			            	'step'		=> 0.05
		                ),
	                ),
                );
                
                // Header Nav: Margin Bottom
                $data['sections']['fl-body-font']['options']['b42s__header_nav__letter_spacing'] = array(
	              	'setting' => array(
		              	'default'		=> '.7'
	              	),
	              	'control' => array(
		              	'class'			=> 'FLCustomizerControl',
		              	'type'			=> 'slider',
		              	'label'			=> __('Header Nav: Letter Spacing', 'b42s'),
		              	'responsive'	=> true,
		              	'choices' => array(
			            	'min'		=> 0,
			            	'max'		=> 3,
			            	'step'		=> .1	
		              	),
	              	),
                );
                
                // H3: Font Weight
	        	$data['sections']['fl-body-font']['options']['b42s__header_nav__font_weight'] = array(
		        	'setting' => array(
			        	'default'		=> 'inherit',
		        	),
		        	'control' => array(
			        	'class'			=> 'WP_Customize_Control',
						'label'			=> __( 'Header Nav: Font Weight', 'fl-automator' ),
						'type'			=> 'select',
						'choices' => array(
							'inherit'	=> 'Default',
							'200'		=> 'Thin',
							'300'		=> 'Light',
							'400'		=> 'Regular',
							'500'		=> 'Medium',
							'600'		=> 'Semi-Bold',
							'700'		=> 'Bold',
							'900'		=> 'Heavy'
						)
		        	)
	        	);
                
                $data['sections']['fl-body-font']['options']['b42s__header_nav__font_format'] = array(
	              	'setting' => array(
		              	'default'		=> 'Uppercase'
	              	),
	              	'control' => array(
		              	'class'			=> 'WP_Customize_Control',
		              	'type'			=> 'select',
		              	'label'			=> __('Header Nav: Font Format', 'b42s'),
		              	'choices' => array(
			              	'none'		=> __('Regular', 'b42s'),
			              	'capitalize'=> __('Capitalize', 'b42s'),
			              	'uppercase'	=> __('Uppercase', 'b42s'),
			              	'lowercase'	=> __('Lowercase', 'b42s')
		              	),	
	              	),
                );
        }
        return $data;
}, 10, 2 );
