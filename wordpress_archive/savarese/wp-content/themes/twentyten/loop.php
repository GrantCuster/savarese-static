<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>

<?php
	/* Start the Loop.
	 *
	 * In Twenty Ten we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>

<?php if ( is_category('reviews-reasonable-people') )  { ?>
<div id="featuredpostlabel">Featured Reviews:</div>
<div id="featuredpostcontainer">
<?php $my_query = new WP_Query('category_name="Featured Reviews"');
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate = $post->ID; ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="postdate"><?php the_time('F jS, Y'); ?></div> 
		<?php if (post_custom('newspaper')) { ?>
	<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php get_custom_field_value('newspaper'); ?></a></h2>		
		<?php } else { ?>
	<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<?php } ?>
<div class="subtitle"><?php get_custom_field_value('subtitle'); ?></div>
					<div class="authorcustom"><?php get_custom_field_value('authorcustom'); ?></div>
			<div class="entry-meta">
			</div><!-- .entry-meta -->
	<?php if ( is_archive() && ! in_category ('Media') && ! in_category('djs-writings') || is_search() || is_front_page() && ! in_category ('Media') && ! in_category('djs-writings') ) : // Only display excerpts for archives and search. ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
	<?php else : ?>
			<div class="entry-content">
		<?php the_content('Read More'); ?>
			</div><!-- .entry-content -->
	<?php endif; ?>
			<?php edit_post_link( __( 'Edit', 'twentyten' ), '<div class="entry-utility"></span> <span class="edit-link">', '</div></span>' ); ?>		</div><!-- #post-## -->
<?php endwhile; ?>
</div>
<?php } ?>

<?php if ( is_category('media-reasonable-people') ) { ?>
<div id="featuredpostlabel">Featured Media:</div>
<div id="featuredpostcontainer">
<?php $my_query = new WP_Query('category_name="Featured Media"');
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate = $post->ID; ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="postdate"><?php the_time('F jS, Y'); ?></div> 
			<div class="newspaper"><?php get_custom_field_value('newspaper'); ?></div>
			<div class="entry-content"><?php the_content(); ?></div>
			<h2 class="entry-title"><a href="<?php get_custom_field_value('page-link'); ?>" target="_blank" ><?php the_title(); ?></a></h2>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '<div class="entry-utility"><span class="edit-link">', '</span></div>' ); ?>
			</div><!-- End post div -->
<?php endwhile; ?>
</div>
<?php } ?>

<?php while ( have_posts() ) : the_post(); ?>
		
<?php /* How to display media posts */ ?>
	<?php if ( in_category(array('media-reasonable-people','media-autism-and-the-concept-of-neurodiversity','featured-media', 'media-papa-phd')) ) : ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="postdate"><?php the_time('F jS, Y'); ?></div> 
			<div class="newspaper"><?php get_custom_field_value('newspaper'); ?></div>
			<div class="entry-content"><?php the_content(); ?></div>
			<h2 class="entry-title"><a href="<?php get_custom_field_value('page-link'); ?>" target="_blank" ><?php the_title(); ?></a></h2>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '<div class="entry-utility"><span class="edit-link">', '</span></div>' ); ?>
			</div><!-- End post div -->
	
<?php /* How to display praise posts */ ?>

	<?php elseif ( in_category('praise') ) : ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
			<?php the_content(); ?>
			</div>
			<h2 class="entry-title"><?php the_title(); ?></h2>
	 		<div class="authorcustom"><?php get_custom_field_value('authorcustom'); ?></div>
	 		<div class="entry-utility">
	 		<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
			</div>

			</div><!-- End post div -->
			
<?php /* How to display Readers Write Us posts */ ?>

	<?php elseif ( in_category('readers-write-us') ) : ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
			<?php the_content(); ?>
			</div>
			<h2 class="entry-title"><em>from</em> <?php the_title(); ?></h2>
	 		<div class="entry-utility">
	 		<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
			</div>

			</div><!-- End post div -->
			
<?php /* How to display News and Upcoming Events posts */ ?>

	<?php elseif ( in_category('upcoming-events') ) : ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="clearfloat"></div>
			<div class="date">
				<div class="month"><?php get_custom_field_value('month'); ?></div>
				<div class="day"><?php get_custom_field_value('day'); ?></div>
				<div class="year"><?php get_custom_field_value('year'); ?></div>
			</div>
			<div class="postcontent">
				<div class="subtitle"><span>Event:</span> <?php get_custom_field_value('subtitle'); ?></div>
				<h2 class="entry-title"><?php the_title(); ?></h2>
				<div class="entry-content"><?php the_content(); ?></div>
		 		<div class="entry-utility">
	 		<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
	 			</div>
			</div>
			<div class="clearfloat"></div>
			</div><!-- End post div -->

				
<?php /* How to display all other posts. */ ?>

	<?php else : ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="postdate"><?php the_time('F jS, Y'); ?></div> 
	<!-- For Review Post Headers -->
	<?php if (in_category('Reviews') || in_category('featured-reviews')) {
		if (post_custom('newspaper')) { ?>
	<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php get_custom_field_value('newspaper'); ?></a></h2>		
		<?php } else { ?>
	<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<?php } } else { ?>
	<!-- End Review Post Header -->
    <div class="newspaper"><?php get_custom_field_value('newspaper'); ?></div>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<?php } ?>
<div class="subtitle"><?php get_custom_field_value('subtitle'); ?></div>
					<div class="authorcustom"><?php get_custom_field_value('authorcustom'); ?></div>
			<div class="entry-meta">
			<!-- <?php twentyten_posted_on(); ?> -->
			</div><!-- .entry-meta -->
	<?php if ( is_archive() && ! in_category ('Media') && ! in_category('djs-writings') || is_search() || is_front_page() && ! in_category ('Media') && ! in_category('djs-writings') ) : // Only display excerpts for archives and search. ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
	<?php else : ?>
			<div class="entry-content">
		<?php the_content('Read More'); ?>
			</div><!-- .entry-content -->
	<?php endif; ?>
			<?php edit_post_link( __( 'Edit', 'twentyten' ), '<div class="entry-utility"></span> <span class="edit-link">', '</div></span>' ); ?>		</div><!-- #post-## -->

		<!-- <?php comments_template( '', true ); ?> -->

	<?php endif; // This was the if statement that broke the loop into three parts based on categories. ?>

<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-below" class="navigation">
		<div class="nav-previous"><?php previous_posts_link('< Previous Entries'); ?></div>
		<div class="nav-next"><?php next_posts_link('More Entries >'); ?></div>
	</div><!-- #nav-below -->
<?php endif; ?>
