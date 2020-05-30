<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

			<div id="content" role="main">
			<div class="clearfloat"></div>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<?php if ( in_category('Media') || in_category('featured-media') ) { ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="postdate"><?php the_time('F jS, Y'); ?></div> 
			<div class="newspaper"><?php get_custom_field_value('newspaper'); ?></div>
			<div class="entry-content"><?php the_content(); ?></div>
			<h2 class="entry-title"><a href="<?php get_custom_field_value('page-link'); ?>" target="_blank" ><?php the_title(); ?></a></h2>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '<div class="entry-utility"><span class="edit-link">', '</span></div>' ); ?>
			
<?php /* How to display News and Upcoming Events posts */ ?>			
			
	<?php } elseif ( in_category('upcoming-events') ) { ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="clearfloat"></div>
			<div class="date">
				<div class="month"><?php get_custom_field_value('month'); ?></div>
				<div class="day"><?php get_custom_field_value('day'); ?></div>
				<div class="year"><?php get_custom_field_value('year'); ?></div>
			</div>
			<div class="postcontent">
				<div class="subtitle"><?php get_custom_field_value('subtitle'); ?></div>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry-content"><?php the_content(); ?></div>
		 		<div class="entry-utility">
	 		<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
	 			</div>
			</div>
			<div class="clearfloat"></div>

	<?php } else { ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="postdate"><?php the_time('F jS, Y'); ?></div> 	
	<?php if (in_category('Reviews') || in_category('featured-reviews')) {
	if (post_custom('newspaper')) { ?>
	<h1 class="entry-title"><?php get_custom_field_value('newspaper'); ?></h1>
		<?php } else { ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php } if (post_custom('page-link')) { ?><div class="custompage-link"><a href="<?php get_custom_field_value('page-link'); ?>">Click Here to View On the Original Website</a></div>
	<?php } } else { ?>
<?php if (post_custom('newspaper')) { ?><div class="newspaper"><?php get_custom_field_value('newspaper'); ?></div><?php } ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php } ?>							
					
<div class="subtitle"><?php get_custom_field_value('subtitle'); ?></div>
					<div class="authorcustom"><?php get_custom_field_value('authorcustom'); ?></div>
					<div class="entry-meta">
						<!-- <?php twentyten_posted_on(); ?> -->
					</div><!-- .entry-meta -->
   <?php if ( in_category( 'opinion' ) ) { ?><div class="subtitle"><?php
      get_custom_field_value('subtitle'); ?></div> <?php } ?>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->
					
	<?php } ?>

				</div><!-- #post-## -->

				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_post_link('%link', 'Previous: %title', TRUE); ?></div>
					
					<div class="nav-next"><?php previous_post_link('%link', 'Next: %title', TRUE); ?></div>
				</div><!-- #nav-below -->

<?php endwhile; // end of the loop. ?>

		</div>
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
