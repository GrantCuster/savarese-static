<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

</div><!-- #wrapper -->
<div id="footertopshadow"></div>
<div id="footer" role="contentinfo">
	<div id="colophon">
		<div id="footlabels">
			<div id="site-info">
				<a href="<?php echo home_url( '/' ) ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
			<div id="footeremail">Email: <a href="mailto:SAVARESE@Grinnell.EDU">Savarese {at} Grinnell.edu</a></div>
			<div id="bookshelflabel">The Bookshelf:</div>
		</div>
		<div id="footerthumbnails">
			<div class="clearfloat"></div>
			<div id="footsavarese"><a href="<?php echo home_url( '/' ) ?>" rel="home"></a>
			<div class="tooltip">
				<div class="tooltip-body">Ralph James Savarese
					<div class="tooltip-subtitle">Essayist, Poet, Scholar, and Activist</div>
					<div class="tooltip-author">View Ralph's Homepage</div>
				</div>
				<div class="tooltipbottomleft"></div>
			</div>
		</div>
		<ul id="footprojectlist">
		<?php if ( ! is_page('Reasonable People') && ! is_tree('47') && ! ( is_single() && in_category('reasonable-people') ) && ! ( is_category() && post_is_in_descendant_category( 8 ) ) && ! (is_single() && post_is_in_descendant_category( 8 ) ) ) { ?>
			<li id="footrp"><a href="http://ralphsavarese.com/reasonable-people/">Reasonable People</a>
				<div class="tooltip">
					<div class="tooltip-body">Reasonable People
						<div class="tooltip-subtitle">A Memoir of Autism and Adoption</div>
						<div class="tooltip-author">by Ralph James Savarese</div>
					</div>
				<div class="tooltipbottom"></div>
				</div>
			</li>
			<?php } if ( ! is_page('the-lyric-body') && ! is_tree('54') && ! is_category('reviews') && ! (is_single() && post_is_in_descendant_category( 5 ))) { ?>
			<li id="footlb"><a href="http://ralphsavarese.com/the-lyric-body/">The Lyric Body</a>
				<div class="tooltip">
					<div class="tooltip-body">The Lyric Body
						<div class="tooltip-subtitle">Special Double Issue of the Seneca Review</div>
						<div class="tooltip-author">Edited by Stephen Kuusisto and Ralph James Savarese</div>
					</div>
					<div class="tooltipbottom"></div>
				</div>
			</li>
			<?php } if ( ! is_page('papa-phd') && ! is_tree('56') && ! is_category('media-papa-phd') && ! (is_single() && post_is_in_descendant_category( 22 )) ) { ?>
			<li id="footpphd"><a href="http://ralphsavarese.com/papa-phd/">Papa PhD</a>
				<div class="tooltip">
					<div class="tooltip-body">Papa, PhD
						<div class="tooltip-subtitle">Essays on Fatherhood by Men in the Academy</div>
						<div class="tooltip-author">Edited by Mary Ruth Marotte, Paige Martin Reynolds, and Ralph James Savarese</div>
					</div>
					<div class="tooltipbottom"></div>
				</div>					
			</li>
			<?php } if ( ! is_page('autism-and-the-concept-of-neurodiversity') && ! is_tree('58') && ! is_category('media-autism-and-the-concept-of-neurodiversity') && ! (is_single() && post_is_in_descendant_category( 20 ) ) ) { ?>
			<li id="footdsq"><a href="http://ralphsavarese.com/autism-and-the-concept-of-neurodiversity">Disability Studies Quarterly</a>
				<div class="tooltip">
					<div class="tooltip-body">Autism and the Concept of Neurodiversity
						<div class="tooltip-subtitle">Disabilities Studies Quarterly</div>
						<div class="tooltip-author">Edited by Emily Thornton Savarese and Ralph James Savarese</div>
					</div>
					<div class="tooltipbottom"></div>
				</div>
			</li>
			<?php } ?>
		</ul>
		<div class="clearfloat"></div>
		</div>
	</div><!-- #colophon -->
</div><!-- #footer -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<script>
$("#projectlist li a img").tooltip( { position: "bottom center", relative: "true", offset: [13, 1], effect: "fade" } );
</script>
<script>
$("#footprojectlist li a").tooltip( { position: "top center", relative: "true", offset: [-5, -70], effect: "fade" } );
</script>
<script>
$("#footsavarese a").tooltip( { position: "top center", relative: "true", offset: [-5, 70], effect: "fade" } );
</script>
</body>
</html>
