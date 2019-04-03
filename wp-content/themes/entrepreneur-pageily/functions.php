<?php 
	 add_action( 'wp_enqueue_scripts', 'entrepreneur_pageily_enqueue_styles' );
	 function entrepreneur_pageily_enqueue_styles() {
 		  wp_enqueue_style( 'one-pageily-parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 

 require_once( get_stylesheet_directory() . '/inc/custom-header.php' );


function entrepreneur_pageily_remove_functions() {
    remove_action( 'entrepreneur_pageily_custom_header_setup' );
}







function entrepreneur_pageily_customize_register( $wp_customize ) {
  /***************************************************/
    /*****               Footer                     ****/
    /**************************************************/
    $wp_customize->add_section( 'one_pageily_footer_settings', array(
        'title'      => __('Footer','one-pageily'),
        'priority'   => 122,
        'capability' => 'edit_theme_options',

        ) );
    $wp_customize->add_setting( 'footer_headline_color', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_headline_color', array(
        'label'       => __( 'Headline Colors', 'one-pageily' ),
        'section'     => 'one_pageily_footer_settings',
        'priority'   => 1,
        'settings'    => 'footer_headline_color',
        ) ) );

    $wp_customize->add_setting( 'footer_text_color', array(
        'default'           => '#807e7e',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_color', array(
        'label'       => __( 'Text Colors', 'one-pageily' ),
        'section'     => 'one_pageily_footer_settings',
        'priority'   => 1,
        'settings'    => 'footer_text_color',
        ) ) );

    $wp_customize->add_setting( 'footer_link_color', array(
        'default'           => '#E2E2E2',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link_color', array(
        'label'       => __( 'Link Colors', 'one-pageily' ),
        'section'     => 'one_pageily_footer_settings',
        'priority'   => 1,
        'settings'    => 'footer_link_color',
        ) ) );


    $wp_customize->add_setting( 'footer_link_color', array(
        'default'           => '#E2E2E2',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link_color', array(
        'label'       => __( 'Link Colors', 'one-pageily' ),
        'section'     => 'one_pageily_footer_settings',
        'priority'   => 1,
        'settings'    => 'footer_link_color',
        ) ) );
    $wp_customize->add_setting( 'footer_bg_color', array(
        'default'           => '#283440',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color', array(
        'label'       => __( 'Background Color', 'one-pageily' ),
        'section'     => 'one_pageily_footer_settings',
        'priority'   => 1,
        'settings'    => 'footer_bg_color',
        ) ) );

    $wp_customize->add_setting( 'footer_copyright_bg_color', array(
        'default'           => '#283440',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_copyright_bg_color', array(
        'label'       => __( 'Copyright Background Color', 'one-pageily' ),
        'section'     => 'one_pageily_footer_settings',
        'priority'   => 1,
        'settings'    => 'footer_copyright_bg_color',
        ) ) );

}
add_action( 'customize_register', 'entrepreneur_pageily_customize_register', 999 );




if(! function_exists('entrepreneur_pageily_customizer_css_final_output' ) ):
	function entrepreneur_pageily_customizer_css_final_output(){
		?>

 <style type="text/css">

        .header-button-solid, .header-button-solid:hover, .header-button-solid:active, .header-button-solid:focus { color: <?php echo esc_attr(get_theme_mod( 'header_right_button_text_color')); ?>; }
        .header-button-solid, .header-button-solid:hover, .header-button-solid:active, .header-button-solid:focus { background: <?php echo esc_attr(get_theme_mod( 'header_right_button_bg')); ?>; }

.header-button-border, .header-button-border:hover, .header-button-border:active, .header-button-border:focus { color: <?php echo esc_attr(get_theme_mod( 'header_left_button_text_color')); ?>; }
.header-button-border, .header-button-border:hover, .header-button-border:active, .header-button-border:focus { border-color: <?php echo esc_attr(get_theme_mod( 'header_left_button_bg')); ?>; }


        .pagination a, .pagination2, .pagination .dots, .post.excerpt { background: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_bg')); ?>; }
        #content, #comments, #commentsAdd, .related-posts, .single-post .post.excerpt, .postauthor { background: <?php echo esc_attr(get_theme_mod( 'post_page_background')); ?>; }
        #sidebars .widget { background: <?php echo esc_attr(get_theme_mod( 'sidebar_background_color')); ?>; }
        .upper-widgets-grid { background: <?php echo esc_attr(get_theme_mod( 'upper_widgets_background_color')); ?>; }
        footer { background: <?php echo esc_attr(get_theme_mod( 'footer_bg_color')); ?>; }
        .copyrights { background: <?php echo esc_attr(get_theme_mod( 'footer_copyright_bg_color')); ?>; }
        #site-header { background-color: <?php echo esc_attr(get_theme_mod( 'top_header_background_color')); ?>; }
        .primary-navigation, .primary-navigation, #navigation ul ul li { background-color: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?>; }
        a#pull, #navigation .menu a, #navigation .menu a:hover, #navigation .menu .fa > a, #navigation .menu .fa > a, #navigation .toggle-caret, #navigation span.site-logo a, #navigation.mobile-menu-wrapper .site-logo a, .primary-navigation.header-activated #navigation ul ul li a { color: <?php echo esc_attr(get_theme_mod( 'navigation_link_color')); ?> }
        #sidebars .widget h3, #sidebars .widget h3 a, #sidebars h3 { color: <?php echo esc_attr(get_theme_mod( 'sidebar_headline_color')); ?>; }
        #sidebars .widget a, #sidebars a, #sidebars li a { color: <?php echo esc_attr(get_theme_mod( 'sidebar_link_color')); ?>; }
        #sidebars .widget, #sidebars, #sidebars .widget li { color: <?php echo esc_attr(get_theme_mod( 'sidebar_text_color')); ?>; }
        .post.excerpt .post-content, .pagination a, .pagination2, .pagination .dots { color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_text')); ?>; }
        .post.excerpt h2.title a { color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_headline')); ?>; }
        .pagination a, .pagination2, .pagination .dots { border-color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_text')); ?>; }
        span.entry-meta{ color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_date')); ?>; }
        .article h1, .article h2, .article h3, .article h4, .article h5, .article h6, .total-comments, .article th{ color: <?php echo esc_attr(get_theme_mod( 'post_page_headline')); ?>; }
        .article, .article p, .related-posts .title, .breadcrumb, .article #commentform textarea  { color: <?php echo esc_attr(get_theme_mod( 'post_page_text')); ?>; }
        .article a, .breadcrumb a, #commentform a { color: <?php echo esc_attr(get_theme_mod( 'post_page_link')); ?>; }
        #commentform input#submit, #commentform input#submit:hover{ background: <?php echo esc_attr(get_theme_mod( 'post_page_link')); ?>; }
        .post-date-one, .comment time { color: <?php echo esc_attr(get_theme_mod( 'post_page_date')); ?>; }
        .footer-widgets #searchform input[type='submit'],  .footer-widgets #searchform input[type='submit']:hover{ background: <?php echo esc_attr(get_theme_mod( 'footer_link_color')); ?>; }
        .footer-widgets h3:after{ background: <?php echo esc_attr(get_theme_mod( 'footer_headline_color')); ?>; }
        .footer-widgets h3, .footer-widgets h3 a, footer .widget.widget_rss h3 a { color: <?php echo esc_attr(get_theme_mod( 'footer_headline_color')); ?>; }
        .footer-widgets .widget li, .footer-widgets .widget, #copyright-note, footer p{ color: <?php echo esc_attr(get_theme_mod( 'footer_text_color')); ?>; }
        footer .widget a, #copyright-note a, #copyright-note a:hover, footer .widget a:hover, footer .widget li a:hover{ color: <?php echo esc_attr(get_theme_mod( 'footer_link_color')); ?>; }
        .top-column-widget a, .top-column-widget a:hover, .top-column-widget a:active, .top-column-widget a:focus { color: <?php echo esc_attr(get_theme_mod( 'upper_widgets_link_color')); ?>; }
        .top-column-widget, .upper-widgets-grid { color: <?php echo esc_attr(get_theme_mod( 'upper_widgets_content_color')); ?>; }
        .top-column-widget .widget.widget_rss h3 a, .upper-widgets-grid h3, .top-column-widget h3{ color: <?php echo esc_attr(get_theme_mod( 'upper_widgets_headlinke_color')); ?>; }
        @media screen and (min-width: 865px) {
            .primary-navigation.header-activated #navigation a { color: <?php echo esc_attr(get_theme_mod( 'navigation_frontpage_link_color')); ?>; }
        }
        @media screen and (max-width: 865px) {
            #navigation.mobile-menu-wrapper{ background-color: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?>; }
        }
        .site-branding { padding-top: <?php echo esc_attr(get_theme_mod( 'header_top_padding')); ?>px; }
        .site-branding { padding-bottom: <?php echo esc_attr(get_theme_mod( 'header_bottom_padding')); ?>px; }
    </style>
		<?php }
		add_action( 'wp_head', 'entrepreneur_pageily_customizer_css_final_output' );
		endif;