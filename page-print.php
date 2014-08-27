<?php
/**
 * Template Name: Print Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			

			<div id="tab-container" class="tab-container" >
				<div class="print-h3">
				<h3>WHAT WOULD YOU LIKE US TO PRINT</h3>
				<p>(select one)</p>
				</div>
			  <ul class='etabs print-tabs'>
			    <li class='tab'><a href="#shirts">Shirts</a></li>
			    <li class='tab'><a href="#sweatshirts">Sweatshirts</a></li>
			    <li class='tab'><a href="#stickers">Stickers</a></li>
			    <li class='tab'><a href="#posters">Posters</a></li>
			    <li class='tab'><a href="#questions">Questions</a></li>
			  </ul>
			 

			  <div id="shirts">
				<?php get_template_part( 'print-tshirts', 'tshirts' ); ?>			    			
			  </div>
			  <div id="sweatshirts">		    		
				<?php get_template_part( 'print-sweatshirts', 'sweatshirts' ); ?>
			  </div>
			  <div id="stickers">
			    <?php get_template_part( 'print-stickers', 'stickers' ); ?>
			  </div>
			  <div id="posters">
			    <?php get_template_part( 'print-posters', 'posters' ); ?>
			  </div>
			  <div id="questions">
			    <?php get_template_part( 'print-questions', 'questions' ); ?>
			  </div>
			 
			</div> <!-- .tab-container -->
		




			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

			<?php endwhile; ?>

			

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>