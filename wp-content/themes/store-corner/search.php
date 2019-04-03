<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Store Corner
 */

get_header(); 
get_template_part('breadcrumps'); 
$sidebar_position_home = get_theme_mod( 'store_corner_home_layout','right'); ?>
<!-- Blog Start -->
	<div class="container-fluid bs-margin bs-blogs">
		<div class="container">
			<div class="row bs-blog-page">
			<?php if($sidebar_position_home=='left'){
				get_sidebar();
			} ?>
				<div class="<?php if($sidebar_position_home=='full'){ echo 'col-md-12'; }else{ echo 'col-md-8'; } ?> right-side">
				<?php if ( have_posts() ){
				while ( have_posts() ) : the_post();
				get_template_part('post','content');
				endwhile;
				}else{
					get_template_part('no','content');
				} 
				store_corner_navigation(); ?>
				</div>
				<?php if($sidebar_position_home=='right'){
				get_sidebar();
			} ?>
			</div>
		</div>
	</div>
	<!-- Blog End -->
<?php
get_footer();
?>