<?php
/**
 * The template for displaying category pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Store Corner
 */

get_header();

<!-- Blog Start -->
hello
	<div class="container-fluid bs-margin bs-blogs">
		<div class="container">
			<div class="row bs-blog-page">
			<?php if($sidebar_position_home=='left'){
				get_sidebar();
			} ?>
				<div class="<?php if($sidebar_position_home=='full'){ echo 'col-md-12'; }else{ echo 'col-md-8'; } ?> right-side">
				<?php if ( have_posts() ){ ?>
				
				<?php while ( have_posts() ) : the_post();
				get_template_part('post','content');
				endwhile; ?>
				
				<?php }else{
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