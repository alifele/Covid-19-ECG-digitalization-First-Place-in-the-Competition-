<?php
	
	$medical_hospital_theme_color = get_theme_mod('medical_hospital_theme_color');

	$medical_hospital_custom_css = '';

	if($medical_hospital_theme_color != false){
		$medical_hospital_custom_css .='input[type="submit"], a.button, #footer input[type="submit"], #comments input[type="submit"].submit, #comments a.comment-reply-link:hover, #sidebar .tagcloud a:hover, span.page-number,span.page-links-title, .nav-menu ul ul a, .social-media i:hover, #contact-us, h1.page-title, h1.search-title, .textbox a , .blogbtn a , .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .inner, .footerinner .tagcloud a, .bradcrumbs a , .readbutton a, #sidebar h3::before,  .pagination .current , span.meta-nav , .title-box, #sidebar input[type="submit"], .tags a:hover, #comments a.comment-reply-link, .main-service-box:nth-child(odd), .main-service-box:nth-child(even), .topbar .nav li a:hover, .back-to-top, .woocommerce-product-search button, .woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{';
			$medical_hospital_custom_css .='background-color: '.esc_html($medical_hospital_theme_color).';';
		$medical_hospital_custom_css .='}';
	}
	if($medical_hospital_theme_color != false){
		$medical_hospital_custom_css .='a, .nav-menu ul li a:active, #sidebar ul li a:hover, .nav-menu ul ul a:hover, .logo h1 a, .logo p.site-title a, .blog-sec h2 a, .main-service-box a i, .footerinner ul li a:hover, #sidebar h3 , span.post-title, .entry-content a,  .nav-menu .current_page_ancestor > a , .post-info i, #wrapper h1, .tags a i, .comment-meta.commentmetadata a,.nav-menu ul li a:hover, #wrapper .related-posts h3 a {';
			$medical_hospital_custom_css .='color: '.esc_html($medical_hospital_theme_color).';';
		$medical_hospital_custom_css .='}';
	}
	if($medical_hospital_theme_color != false){
		$medical_hospital_custom_css .=' a.button, #sidebar form,  #sidebar aside, .nav-menu ul ul, .tags a:hover, .pagination a:hover, .pagination .current,.nav-menu ul ul a:hover{';
			$medical_hospital_custom_css .='border-color: '.esc_html($medical_hospital_theme_color).';';
		$medical_hospital_custom_css .='}';
	}
	if($medical_hospital_theme_color != false){
		$medical_hospital_custom_css .=' .back-to-top::before{';
			$medical_hospital_custom_css .='border-bottom-color: '.esc_html($medical_hospital_theme_color).';';
		$medical_hospital_custom_css .='}';
	}

	// Layout Options
	$medical_hospital_theme_layout = get_theme_mod( 'medical_hospital_theme_layout_options','Default Theme');
    if($medical_hospital_theme_layout == 'Default Theme'){
		$medical_hospital_custom_css .='body{';
			$medical_hospital_custom_css .='max-width: 100%;';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_theme_layout == 'Container Theme'){
		$medical_hospital_custom_css .='body{';
			$medical_hospital_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$medical_hospital_custom_css .='}';
		$medical_hospital_custom_css .='#contact-us{';
			$medical_hospital_custom_css .='position:static;';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_theme_layout == 'Box Container Theme'){
		$medical_hospital_custom_css .='body{';
			$medical_hospital_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$medical_hospital_custom_css .='}';
		$medical_hospital_custom_css .='#contact-us{';
			$medical_hospital_custom_css .='position:static;';
		$medical_hospital_custom_css .='}';
	}


	/*------------------ Slider Opacity -------------------*/

	$medical_hospital_slider_layout = get_theme_mod( 'medical_hospital_slider_opacity_color','0.7');
	if($medical_hospital_slider_layout == '0'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.1'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.1';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.2'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.2';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.3'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.3';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.4'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.4';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.5'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.5';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.6'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.6';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.7'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.7';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.8'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.8';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.9'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.9';
		$medical_hospital_custom_css .='}';
	}

	/*---------------Slider Content Layout -------------------*/

	$medical_hospital_slider_layout = get_theme_mod( 'medical_hospital_slider_alignment_option','Center Align');
    if($medical_hospital_slider_layout == 'Left Align'){
		$medical_hospital_custom_css .='#slider .carousel-caption{';
			$medical_hospital_custom_css .='text-align:left;';
		$medical_hospital_custom_css .='}';
		$medical_hospital_custom_css .='#slider .carousel-caption{';
		$medical_hospital_custom_css .='left:15%; right:25%;';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == 'Center Align'){
		$medical_hospital_custom_css .='#slider .carousel-caption{';
			$medical_hospital_custom_css .='text-align:center;';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == 'Right Align'){
		$medical_hospital_custom_css .='#slider .carousel-caption{';
			$medical_hospital_custom_css .='text-align:right;';
		$medical_hospital_custom_css .='}';
		$medical_hospital_custom_css .='#slider .carousel-caption{';
		$medical_hospital_custom_css .='left:25%; right:15%;';
		$medical_hospital_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$medical_hospital_preloader_color = get_theme_mod('medical_hospital_preloader_color');

	if($medical_hospital_preloader_color != false){
		$medical_hospital_custom_css .=' .tg-loader{';
			$medical_hospital_custom_css .='border-color: '.esc_html($medical_hospital_preloader_color).';';
		$medical_hospital_custom_css .='} ';
		$medical_hospital_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$medical_hospital_custom_css .='background-color: '.esc_html($medical_hospital_preloader_color).';';
		$medical_hospital_custom_css .='} ';
	}

	$medical_hospital_preloader_bg_color = get_theme_mod('medical_hospital_preloader_bg_color');

	if($medical_hospital_preloader_bg_color != false){
		$medical_hospital_custom_css .=' #overlayer, .preloader{';
			$medical_hospital_custom_css .='background-color: '.esc_html($medical_hospital_preloader_bg_color).';';
		$medical_hospital_custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/

	$medical_hospital_top_button_padding = get_theme_mod('medical_hospital_top_button_padding');
	$medical_hospital_bottom_button_padding = get_theme_mod('medical_hospital_bottom_button_padding');
	$medical_hospital_left_button_padding = get_theme_mod('medical_hospital_left_button_padding');
	$medical_hospital_right_button_padding = get_theme_mod('medical_hospital_right_button_padding');
	if($medical_hospital_top_button_padding != false || $medical_hospital_bottom_button_padding != false || $medical_hospital_left_button_padding != false || $medical_hospital_right_button_padding != false){
		$medical_hospital_custom_css .='.blogbtn a, .readbutton a, .textbox a, #comments input[type="submit"].submit{';
			$medical_hospital_custom_css .='padding-top: '.esc_html($medical_hospital_top_button_padding).'px; padding-bottom: '.esc_html($medical_hospital_bottom_button_padding).'px; padding-left: '.esc_html($medical_hospital_left_button_padding).'px; padding-right: '.esc_html($medical_hospital_right_button_padding).'px; display:inline-block;';
		$medical_hospital_custom_css .='}';
	}

	$medical_hospital_button_border_radius = get_theme_mod('medical_hospital_button_border_radius');
	$medical_hospital_custom_css .='.blogbtn a, .readbutton a, .textbox a, #comments input[type="submit"].submit, .hvr-sweep-to-right:before{';
		$medical_hospital_custom_css .='border-radius: '.esc_html($medical_hospital_button_border_radius).'px;';
	$medical_hospital_custom_css .='}';

	/*----------- Copyright css -----*/
	$medical_hospital_copyright_top_padding = get_theme_mod('medical_hospital_top_copyright_padding');
	$medical_hospital_copyright_bottom_padding = get_theme_mod('medical_hospital_top_copyright_padding');
	if($medical_hospital_copyright_top_padding != false || $medical_hospital_copyright_bottom_padding != false){
		$medical_hospital_custom_css .='.inner{';
			$medical_hospital_custom_css .='padding-top: '.esc_html($medical_hospital_copyright_top_padding).'px; padding-bottom: '.esc_html($medical_hospital_copyright_bottom_padding).'px; ';
		$medical_hospital_custom_css .='}';
	} 

	$medical_hospital_copyright_alignment = get_theme_mod('medical_hospital_copyright_alignment', 'center');
	if($medical_hospital_copyright_alignment == 'center' ){
		$medical_hospital_custom_css .='#footer .copyright p{';
			$medical_hospital_custom_css .='text-align: '. $medical_hospital_copyright_alignment .';';
		$medical_hospital_custom_css .='}';
	}elseif($medical_hospital_copyright_alignment == 'left' ){
		$medical_hospital_custom_css .='#footer .copyright p{';
			$medical_hospital_custom_css .=' text-align: '. $medical_hospital_copyright_alignment .';';
		$medical_hospital_custom_css .='}';
	}elseif($medical_hospital_copyright_alignment == 'right' ){
		$medical_hospital_custom_css .='#footer .copyright p{';
			$medical_hospital_custom_css .='text-align: '. $medical_hospital_copyright_alignment .';';
		$medical_hospital_custom_css .='}';
	}

	$medical_hospital_copyright_font_size = get_theme_mod('medical_hospital_copyright_font_size');
	$medical_hospital_custom_css .='#footer .copyright p{';
		$medical_hospital_custom_css .='font-size: '.esc_html($medical_hospital_copyright_font_size).'px;';
	$medical_hospital_custom_css .='}';

	/*------ Topbar padding ------*/
	$medical_hospital_top_topbar_padding = get_theme_mod('medical_hospital_top_topbar_padding');
	$medical_hospital_bottom_topbar_padding = get_theme_mod('medical_hospital_bottom_topbar_padding');
	if($medical_hospital_top_topbar_padding != false || $medical_hospital_bottom_topbar_padding != false){
		$medical_hospital_custom_css .='#contact-us{';
			$medical_hospital_custom_css .='padding-top: '.esc_html($medical_hospital_top_topbar_padding).'px; padding-bottom: '.esc_html($medical_hospital_bottom_topbar_padding).'px; ';
		$medical_hospital_custom_css .='}';
	}