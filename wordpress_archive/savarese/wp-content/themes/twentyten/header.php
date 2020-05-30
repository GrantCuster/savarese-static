<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="description" content="Ralph James Savarese is the author of Reasonable People: A Memoir of Autism and Adoption, which Newsweek called a &quot;real life love story and a passionate manifesto for the rights of people with neurological disabilities.&quot;">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_front_page() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<!--[if IE]>
<style type="text/css"> 
#wrapper { zoom: 1; }
#sidebar { overflow: hidden }
#container { overflow: hidden }
</style>
<![endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15797457-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<style type="text/css">
<?php if ( is_front_page() ) { ?>
ul.dropdown li#home a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/savaresebuttonselect.png);
	background-position: 50% 0;
	color: #090D10;
	text-shadow: 0 1px 0 #becbd5;
}
ul.dropdown li#home a:hover {
	color: #c0d6e8;
	text-shadow: 0 -1px 1px #000;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/savaresebuttonselect.png);
	background-position: 50% -32px;
}
<?php } if ( is_page('about-the-author') ) { ?>
ul.dropdown li#about-the-author a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/savaresebuttonselect.png);
	background-position: 50% 0;
	color: #090D10;
	text-shadow: 0 1px 0 #becbd5;
}
ul.dropdown li#about-the-author a:hover {
	color: #c0d6e8;
	text-shadow: 0 -1px 1px #000;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/savaresebuttonselect.png);
	background-position: 50% -32px;
}
<?php } if ( is_category('writings') ) { ?>
ul.dropdown li#writings a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/savaresebuttonselect.png);
	background-position: 50% 0;
	color: #090D10;
	text-shadow: 0 1px 0 #becbd5;
	cursor: default;
}
ul.dropdown li#writings a:hover {
	background-position: 50% -32px;
}
#homenavcont ul.dropdown li#writings a:hover {
	color: #c0d6e8;
	text-shadow: 0 -1px 1px #000;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/savaresebuttonselect.png);
	background-position: 50% -32px;
	cursor: default;
}
<?php } if ( is_category('opinion-pieces') || is_single() && in_category('opinion-pieces') ) { ?>
ul.dropdown li#writings a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/savaresebuttonselect.png);
	background-position: 50% 0;
	color: #090D10;
	text-shadow: 0 1px 0 #becbd5;
}
ul.dropdown li#writings a:hover {
	background-position: 50% -32px;
	color: #c0d6e8;
	text-shadow: 0 -1px 1px #000;
}
ul.dropdown li ul.sub_menu li#opinion-pieces a:hover {
	color: #c0d6e8;
	text-shadow: 0 -1px 1px #000;
}
<?php } if ( is_category('creative-nonfiction') || is_single() && in_category('creative-nonfiction') ) { ?>
ul.dropdown li#writings a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/savaresebuttonselect.png);
	background-position: 50% 0;
	color: #090D10;
	text-shadow: 0 1px 0 #becbd5;
}
ul.dropdown li#writings a:hover {
	background-position: 50% -32px;
	color: #c0d6e8;
	text-shadow: 0 -1px 1px #000;
}
ul.dropdown li ul.sub_menu li#creative-nonfiction a:hover {
	color: #c0d6e8;
	text-shadow: 0 -1px 1px #000;
}
<?php } if ( is_category('poetry') || is_single() && in_category('poetry') ) { ?>
ul.dropdown li#writings a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/savaresebuttonselect.png);
	background-position: 50% 0;
	color: #090D10;
	text-shadow: 0 1px 0 #becbd5;
}
ul.dropdown li#writings a:hover {
	background-position: 50% -32px;
	color: #c0d6e8;
	text-shadow: 0 -1px 1px #000;
}
ul.dropdown li ul.sub_menu li#poetry a:hover {
	color: #c0d6e8;
	text-shadow: 0 -1px 1px #000;
}
<?php } if ( is_category('scholarship') || is_single() && in_category('scholarship') ) { ?>
ul.dropdown li#writings a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/savaresebuttonselect.png);
	background-position: 50% 0;
	color: #090D10;
	text-shadow: 0 1px 0 #becbd5;
}
ul.dropdown li#writings a:hover {
	background-position: 50% -32px;
	color: #c0d6e8;
	text-shadow: 0 -1px 1px #000;
}
ul.dropdown li ul.sub_menu li#scholarship a:hover {
	color: #c0d6e8;
	text-shadow: 0 -1px 1px #000;
}
<?php } if ( is_category('interviews') || is_single() && in_category('interviews') ) { ?>
ul.dropdown li#writings a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/savaresebuttonselect.png);
	background-position: 50% 0;
	color: #090D10;
	text-shadow: 0 1px 0 #becbd5;
}
ul.dropdown li#writings a:hover {
	background-position: 50% -32px;
	color: #c0d6e8;
	text-shadow: 0 -1px 1px #000;
}
ul.dropdown li ul.sub_menu li#interviews a:hover {
	color: #c0d6e8;
	text-shadow: 0 -1px 1px #000;
}
<?php } if ( is_category('news-and-upcoming-events') || is_single() && in_category('news-and-upcoming-events') ) { ?>
ul.dropdown li#news-and-upcoming-events a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/savaresebuttonselect.png);
	background-position: 50% 0;
	color: #090D10;
	text-shadow: 0 1px 0 #becbd5;
}
ul.dropdown li#news-and-upcoming-events a:hover {
	color: #c0d6e8;
	text-shadow: 0 -1px 1px #000;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/savaresebuttonselect.png);
	background-position: 50% -32px;
}
<?php } if ( is_page('reasonable-people') ) { ?>
ul.dropdown li#rp-introduction a {
	background: #a8c2e0;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpbuttonselect.png);
	background-position: 50% 0;
	background-repeat: no-repeat;
	color: #30435a;
	text-shadow: 0 1px 0 #dae5f2;
}
ul.dropdown li#rp-introduction a:hover {
	color: #708EB2;
	text-shadow: 0 -1px 0 #1b1b1b;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpbuttonselect.png);
	background-position: 50% -32px;
	background-repeat: no-repeat;
}	
<?php } if ( is_category('media-reasonable-people') || is_single() && in_category('media-reasonable-people') ) { ?>
ul.dropdown li#rp-media a {
	background: #a8c2e0;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpbuttonselect.png);
	background-position: 50% 0;
	background-repeat: no-repeat;
	color: #30435a;
	text-shadow: 0 1px 0 #dae5f2;
}
ul.dropdown li#rp-media a:hover	{
	color: #708EB2;
	text-shadow: 0 -1px 0 #1b1b1b;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpbuttonselect.png);
	background-position: 50% -32px;
	background-repeat: no-repeat;

}
<?php } if ( is_category('reviews-reasonable-people') || is_single() && in_category('reviews-reasonable-people') ) { ?>
ul.dropdown li#rp-reviews a {
	background: #a8c2e0;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpbuttonselect.png);
	background-position: 50% 0;
	background-repeat: no-repeat;
	color: #30435a;
	text-shadow: 0 1px 0 #dae5f2;
}
ul.dropdown li#rp-reviews a:hover {
	text-shadow: 0 -1px 0 #1b1b1b;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpbuttonselect.png);
	background-position: 50% -32px;
	color: #708EB2;
	background-repeat: no-repeat;
}
ul.dropdown li ul.sub_menu li#rp-reviewssub a:hover {
	text-shadow: 0 -1px 0 #1b1b1b;
	color: #708EB2;
	background-repeat: no-repeat;
}
<?php } if ( is_category('praise') || is_single() && in_category('praise') ) { ?>
ul.dropdown li#rp-reviews a {
	background: #a8c2e0;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpbuttonselect.png);
	background-position: 50% 0;
	background-repeat: no-repeat;
	color: #30435a;
	text-shadow: 0 1px 0 #dae5f2;
}
ul.dropdown li#rp-reviews a:hover {
	text-shadow: 0 -1px 0 #1b1b1b;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpbuttonselect.png);
	background-position: 50% -32px;
	color: #708EB2;
	background-repeat: no-repeat;
}
ul.dropdown li ul.sub_menu li#rp-praise a:hover {
	color: #708EB2;
	text-shadow: 0 -1px 0 #1b1b1b;
}
<?php } if ( is_category('readers-write-us') || is_single() && in_category('readers-write-us') ) { ?>
ul.dropdown li#rp-reviews a {
	background: #a8c2e0;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpbuttonselect.png);
	background-position: 50% 0;
	background-repeat: no-repeat;
	color: #30435a;
	text-shadow: 0 1px 0 #dae5f2;
}
ul.dropdown li#rp-reviews a:hover {
	text-shadow: 0 -1px 0 #1b1b1b;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpbuttonselect.png);
	background-position: 50% -32px;
	color: #708EB2;
	background-repeat: no-repeat;
}
ul.dropdown li ul.sub_menu li#rp-readers-write-us a:hover {
	text-shadow: 0 -1px 0 #1b1b1b;
	color: #708EB2;
}
<?php } if ( is_page('excerpt') ) { ?>
ul.dropdown li#rp-excerpt a {
	background: #a8c2e0;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpbuttonselect.png);
	background-position: 50% 0;
	background-repeat: no-repeat;
	color: #30435a;
	text-shadow: 0 1px 0 #dae5f2;
}
ul.dropdown li#rp-excerpt a:hover {
	text-shadow: 0 -1px 0 #1b1b1b;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpbuttonselect.png);
	background-position: 50% -32px;
	color: #708EB2;
	background-repeat: no-repeat;
}
<?php } if ( is_category('djs-writings') || is_single() && in_category('djs-writings') ) { ?>
ul.dropdown li#rp-djs-writings a {
	background: #a8c2e0;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpbuttonselect.png);
	background-position: 50% 0;
	background-repeat: no-repeat;
	color: #30435a;
	text-shadow: 0 1px 0 #dae5f2;
}
ul.dropdown li#rp-djs-writings a:hover {
	color: #708EB2;
	text-shadow: 0 -1px 0 #1b1b1b;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpbuttonselect.png);
	background-position: 50% -32px;
	background-repeat: no-repeat;
}
<?php } if ( is_page('about-fc') ) { ?>
ul.dropdown li#rp-about-fc a {
	background: #a8c2e0;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpbuttonselect.png);
	background-position: 50% 0;
	background-repeat: no-repeat;
	color: #30435a;
	text-shadow: 0 1px 0 #dae5f2;
}
ul.dropdown li#rp-about-fc a:hover {
	color: #708EB2;
	text-shadow: 0 -1px 0 #1b1b1b;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpbuttonselect.png);
	background-position: 50% -32px;
	background-repeat: no-repeat;
}
<?php } if ( is_page('the-lyric-body') ) { ?>
ul.dropdown li#lyric-introduction a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/srbuttonselect.png);
	background-position: 50% 0;
	color: #5a0b0b;
	text-shadow: 0 1px 0 #f8aeae;
}
ul.dropdown li#lyric-introduction a:hover {
	color: #b21818;
	text-shadow: 0 -1px 0 #1b1b1b;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/srbuttonselect.png);
	background-position: 50% -32px;
}
<?php } if ( is_tree('54') && is_page('table-of-contents') ) { ?>
ul.dropdown li#lyric-contents a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/srbuttonselect.png);
	background-position: 50% 0;
	color: #5a0b0b;
	text-shadow: 0 1px 0 #f8aeae;
}
ul.dropdown li#lyric-contents a:hover {
	color: #b21818;
	text-shadow: 0 -1px 0 #1b1b1b;
ul.dropdown li#lyric-introduction a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/srbuttonselect.png);
	background-position: 50% -32px;
}
<?php } if ( is_category('reviews') || is_single && in_category('reviews') ) { ?>
ul.dropdown li#lyric-reviews a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/srbuttonselect.png);
	background-position: 50% 0;
	color: #5a0b0b;
	text-shadow: 0 1px 0 #f8aeae;
}
ul.dropdown li#lyric-reviews a:hover {
	color: #b21818;
	text-shadow: 0 -1px 0 #1b1b1b;
	background: #5a0b0b;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/srbuttonselect.png);
	background-position: 50% -32px;
}
<?php } if ( is_page('papa-phd') ) { ?>
ul.dropdown li#pphd-introduction a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/pphdbuttonselect.png);
	background-position: 50% 0;
	color: #3f2c1e;
	text-shadow: 0 1px 0 #f8dbc5;
}
ul.dropdown li#pphd-introduction a:hover {
	color: #cfaf97;
	text-shadow: 0 -1px 0 #1b1b1b;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/pphdbuttonselect.png);
	background-position: 50% -32px;
}
<?php } if ( is_tree('56') && is_page('table-of-contents') ) { ?>
ul.dropdown li#pphd-table-of-contents a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/pphdbuttonselect.png);
	background-position: 50% 0;
	color: #3f2c1e;
	text-shadow: 0 1px 0 #f8dbc5;
}
ul.dropdown li#pphd-table-of-contents a:hover {
	color: #cfaf97;
	text-shadow: 0 -1px 0 #1b1b1b;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/pphdbuttonselect.png);
	background-position: 50% -32px;
}
<?php } if ( is_category('media-papa-phd') || is_single && in_category('media-papa-phd') ) { ?>
ul.dropdown li#pphd-media a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/pphdbuttonselect.png);
	background-position: 50% 0;
	color: #3f2c1e;
	text-shadow: 0 1px 0 #f8dbc5;
}
ul.dropdown li#pphd-media a:hover {
	color: #cfaf97;
	text-shadow: 0 -1px 0 #1b1b1b;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/pphdbuttonselect.png);
	background-position: 50% -32px;
}
<?php } if ( is_page('autism-and-the-concept-of-neurodiversity') ) { ?>
ul.dropdown li#dsq-introduction a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/dsqbuttonselect.png);
	background-position: 50% 0;
	color: #32334b;
	text-shadow: 0 1px 0 #e8e8f5;
}
ul.dropdown li#dsq-introduction a:hover {
	color: #c3c6ec;
	text-shadow: 0 -1px 0 #1b1b1b;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/dsqbuttonselect.png);
	background-position: 50% -32px;
}
<?php } if ( is_tree('58') && is_page('table-of-contents') ) { ?>
ul.dropdown li#dsq-contents a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/dsqbuttonselect.png);
	background-position: 50% 0;
	color: #32334b;
	text-shadow: 0 1px 0 #e8e8f5;
}
ul.dropdown li#dsq-contents a:hover {
	color: #c3c6ec;
	text-shadow: 0 -1px 0 #1b1b1b;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/dsqbuttonselect.png);
	background-position: 50% -32px;
}
<?php } if ( is_category('media-autism-and-the-concept-of-neurodiversity') || is_single && in_category('media-autism-and-the-concept-of-neurodiversity') ) { ?>
ul.dropdown li#dsq-media a {
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/dsqbuttonselect.png);
	background-position: 50% 0;
	color: #32334b;
	text-shadow: 0 1px 0 #e8e8f5;
}
ul.dropdown li#dsq-media a:hover {
	color: #c3c6ec;
	text-shadow: 0 -1px 0 #1b1b1b;
	background-image: url(http://grantcuster.com/savarese/wp-content/themes/twentyten/images/dsqbuttonselect.png);
	background-position: 50% -32px;
}
<?php } ?>
</style>
<script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAQj1oCZ5wX_3I02oX0A3RHBQw1xORthNQVFHomI2D2ytEv0OF5RTtFNPlDs_OqCig7HeP9MQ0Zyq71Q"></script>
<script src="http://cdn.jquerytools.org/1.2.4/jquery.tools.min.js"></script>
<?php if ( is_page('about-the-author') || is_category ( array('writings', 'opinion-pieces', 'creative-nonfiction', 'poetry', 'news-and-upcoming-events', 'scholarship')) || is_single() && in_category ( array('writings', 'opinion-pieces', 'creative-nonfiction', 'poetry', 'news-and-upcoming-events', 'scholarship')) ) { ?>
<script type="text/javascript">
$(document).ready(function()
{
  //hide the all of the element with class msg_body
  $("ul#projectlist").hide();
  //toggle the componenet with class msg_body
  $(".projectlabel").click(function()
  {
    $(this).toggleClass("active").next("#projectlist").slideToggle("slow");
  });
});
</script>
<?php } if ( is_front_page() ) { ?>
<script type="text/javascript">
$(document).ready(function()
{
  //hide the all of the element with class msg_body
  $("ul#projectlist").show();
  //toggle the componenet with class msg_body
  $(".projectlabel").click(function()
  {
    $(this).toggleClass("active").next("#projectlist").slideToggle("slow");
  });
});
</script>
<?php } ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15797457-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

$(function(){

    $("ul.dropdown li").hover(function(){
    
        $(this).addClass("hover");
        $('ul:first',this).css('visibility', 'visible');
    
    }, function(){
    
        $(this).removeClass("hover");
        $('ul:first',this).css('visibility', 'hidden');
    
    });
    
    $("ul.dropdown li ul li:has(ul)").find("a:first").append(" &raquo; ");

});

$(document).ready(function(){

$("ul#projectlist li").hover(function() {
	$(this).find('img').addClass("hover").stop() /* Add class of "hover", then stop animation queue buildup*/
		.animate({
			top: '-9px',
			left: '-5',
			width: '150px', /* Set new width */
			height: '228px', /* Set new height */
			padding: '0'
		}, 200); /* this value of "200" is the speed of how fast/slow this hover animates */

	} , function() {
	$(this).find('img').removeClass("hover").stop()  /* Remove the "hover" class , then stop animation queue buildup*/
		.animate({
			marginTop: '0', /* Set alignment back to default */
			marginLeft: '0',
			top: '0',
			left: '0',
			width: '140px', /* Set width back to default */
			height: '210px', /* Set height back to default */
			padding: '0'
		}, 400);
});
});
</script>
</head>
<body 
<?php 
if ( is_page('reasonable-people') || is_tree('47') || is_category( array('media-reasonable-people','reviews-reasonable-people','praise','readers-write-us','djs-writings')) || is_single() && post_is_in_descendant_category( 8 ) ) { ?>id="rp"<?php } 
if ( is_page('the-lyric-body') || is_tree('54') || is_category('reviews') || is_single() && post_is_in_descendant_category( 5 ) ) { ?>id="lb"<?php } 
if ( is_page('papa-phd') || is_tree('56') || is_category('media-papa-phd') || is_single() && post_is_in_descendant_category( 22 ) ) { ?>id="pphd"<?php }
if ( is_page('autism-and-the-concept-of-neurodiversity') || is_tree('58') || is_category('media-autism-and-the-concept-of-neurodiversity') || is_single() && post_is_in_descendant_category( 20 ) ) { ?>id="dsq"<?php }
body_class(); ?>>
	<div id="wrapper" class="hfeed">
				<!-- Page Photo -->
							<?php if ( is_page('Reasonable People') || is_tree('47') || is_single() && in_category('reasonable-people') || is_category() && post_is_in_descendant_category( 8 ) || is_single() && post_is_in_descendant_category( 8 ) ) { ?>
<div id="rpportrait" class="portrait" alt="Reasonable People"/><a href="http://ralphsavarese.com/reasonable-people/"></a></div>
				<?php } elseif ( is_page('the-lyric-body') || is_tree('54') || is_category('reviews') || is_single() && post_is_in_descendant_category( 5 )) { ?><div id="srportrait" class="portrait" /><a href="http://ralphsavarese.com/the-lyric-body/"></a></div>
				<?php } elseif (  is_page('papa-phd') || is_tree('56') || is_category('media-papa-phd') || is_single() && post_is_in_descendant_category( 22 ) ) { ?><div id="pphdportrait" class="portrait" /><a href="http://ralphsavarese.com/papa-phd/"></a></div>
				<?php } elseif ( is_page('autism-and-the-concept-of-neurodiversity') || is_tree('58') || is_category('media-autism-and-the-concept-of-neurodiversity') || is_single() && post_is_in_descendant_category( 20 ) ) { ?><div id="dsqportrait" class="portrait" /><a href="http://ralphsavarese.com/autism-and-the-concept-of-neurodiversity/"></a></div>
				<?php } else { ?><div id="ralphportrait" class="portrait" /><a href="/"></a></div><?php } ?>

<div id="container"> 
			<div id="customheader">
				<!-- The Bookshelf -->
				<?php if ( is_front_page() || is_page('about-the-author') || is_category ( array('writings', 'opinion-pieces', 'creative-nonfiction', 'poetry', 'news-and-upcoming-events', 'scholarship', 'interviews')) || is_single() && in_category ( array('writings', 'opinion-pieces', 'creative-nonfiction', 'poetry', 'news-and-upcoming-events', 'scholarship', 'interviews')) ) { ?>
			<div id="bookshelf">
				<div id="projectlabel" class="projectlabel"> The Bookshelf <span class="collapsed">(Click to Expand)</span><span class="extended">(Select a Project to Learn More)</span></div>
				<ul id="projectlist">
					<li id="rpshelf"><a href="http://ralphsavarese.com/reasonable-people/"><img src="http://grantcuster.com/savarese/wp-content/themes/twentyten/images/rpportrait.jpg"></a>
						<div class="tooltip">
							<div class="tooltop"></div>
							<div class="tooltip-body">Reasonable People
								<div class="tooltip-subtitle">A Memoir of Autism and Adoption</div>
								<div class="tooltip-author">by Ralph James Savarese</div>
							</div>
						</div>
					</li>
					<li id="lbshelf"><a href="http://ralphsavarese.com/the-lyric-body/"><img src="http://grantcuster.com/savarese/wp-content/themes/twentyten/images/srportrait.jpg"></a>
						<div class="tooltip">
							<div class="tooltop"></div>
							<div class="tooltip-body">The Lyric Body
								<div class="tooltip-subtitle">Special Double Issue of the Seneca Review</div>
								<div class="tooltip-author">Edited by Stephen Kuusisto and Ralph James Savarese</div>
							</div>
						</div>
					</li>
					<li id="pphdshelf"><a href="http://ralphsavarese.com/papa-phd/"><img src="http://grantcuster.com/savarese/wp-content/themes/twentyten/images/pphdportrait.jpg"></a>
						<div class="tooltip">
							<div class="tooltop"></div>
							<div class="tooltip-body">Papa, PhD
								<div class="tooltip-subtitle">Essays on Fatherhood by Men in the Academy</div>
								<div class="tooltip-author">Edited by Mary Ruth Marotte, Paige Martin Reynolds, and Ralph James Savarese</div>
							</div>
						</div>
					</li>
					<li id="dsqshelf"><a href="http://ralphsavarese.com/autism-and-the-concept-of-neurodiversity/"><img src="http://grantcuster.com/savarese/wp-content/themes/twentyten/images/dsqportrait.jpg"></a>
						<div class="tooltip">
							<div class="tooltop"></div>
							<div class="tooltip-body">Autism and the Concept of Neurodiversity
								<div class="tooltip-subtitle">Disabilities Studies Quarterly</div>
								<div class="tooltip-author">Edited by Emily Thornton Savarese and Ralph James Savarese</div>
							</div>
						</div>
				</li>
			</ul>
		</div>
			<?php } ?>
			
			<!-- Nav Menu -->
							<?php if ( is_page('Reasonable People') || is_tree('47') || is_single() && in_category('reasonable-people') || is_category() && post_is_in_descendant_category( 8 ) || is_single() && post_is_in_descendant_category( 8 ) ) { ?>
			<div id="rpnavcont" class="navcont">
			<ul id="rpnav" class="dropdown">
 				<li id="rp-introduction"><a href="/reasonable-people/">Introduction</a></li>
 				<li id="rp-media"><a href="/category/reasonable-people/media-reasonable-people/">Media</a></li>
				<li id="rp-reviews"><a href="/category/reasonable-people/reviews-reasonable-people/">Reviews</a>					
				<ul class="sub_menu">
				<li id="rp-reviewssub"><a href="/category/reasonable-people/reviews-reasonable-people/">Reviews</a>
						<li id="rp-praise"><a href="/category/reasonable-people/praise/">Advance Praise</a></li>
						<li id="rp-readers-write-us"><a href="/category/reasonable-people/readers-write-us/">Readers Write Us</a></li>
					</ul>
				</li>
				<li id="rp-excerpt"><a href="/reasonable-people/excerpt/">Excerpt</a>
				<li id="rp-djs-writings"><a href="/category/djs-writings/">DJ's Writings</a></li>
				<li id="rp-about-fc"><a href="/reasonable-people/about-fc/">About FC</a></li>
			</ul>
			</div>
			<?php } elseif ( is_page('the-lyric-body') || is_tree('54') || is_category('reviews') || is_single() && post_is_in_descendant_category( 5 )) { ?>
			<div id="lbnavcont" class="navcont">
			<ul id="lbnav" class="dropdown">
				<li id="lyric-introduction"><a href="/the-lyric-body/">Introduction</a></li>
				<li id="lyric-contents"><a href="/the-lyric-body/table-of-contents/">Table of Contents</a></li>
				<li id="lyric-reviews"><a href="/category/the-lyric-body/reviews/">Reviews</a></li>
			</ul>
			</div>
			<?php } elseif ( is_page('papa-phd') || is_tree('56') || is_category('media-papa-phd') || is_single() && post_is_in_descendant_category( 22 ) ) { ?>
			<div id="pphdnavcont" class="navcont">
			<ul id="pphdnav" class="dropdown">
				<li id="pphd-introduction"><a href="/papa-phd/">Introduction</a></li>
				<li id="pphd-table-of-contents"><a href="/papa-phd/table-of-contents/">Table of Contents</a></li>
				<li id="pphd-media"><a href="/category/media-papa-phd/">Media</a></li>
			</ul>
			</div>
			<?php } elseif ( is_page('autism-and-the-concept-of-neurodiversity') || is_tree('58') || is_category('media-autism-and-the-concept-of-neurodiversity') || is_single() && post_is_in_descendant_category( 20 ) ) { ?>
			<div id="dsqnavcont" class="navcont">
			<ul id="dsqnav" class="dropdown">
				<li id="dsq-introduction"><a href="/autism-and-the-concept-of-neurodiversity/">Introduction</a></li>
				<li id="dsq-contents"><a href="/autism-and-the-concept-of-neurodiversity/table-of-contents/">Table of Contents</a></li>
				<li id="dsq-media"><a href="/category/media-autism-and-the-concept-of-neurodiversity/">Media</a></li>
			</ul>
			</div>			
			<?php } else { ?>
			<div id="homenavcont" class="navcont">
			<ul id="homenav" class="dropdown">
				<li id="home"><a href="/">Home</a></li>
				<li id="about-the-author"><a href="/about-the-author/">About</a></li>
				<li id="writings"><a href="#">Sample Writings</a>
					<ul class="sub_menu">
						<li id="opinion-pieces"><a href="/category/opinion-pieces/">Opinion Pieces</a></li>
						<li id="creative-nonfiction"><a href="/category/creative-nonfiction/">Creative Nonfiction</a></li>
						<li id="poetry"><a href="/category/poetry/">Poetry</a></li>
						<li id="scholarship"><a href="/category/scholarship/">Scholarship</a></li>
						<li id="interviews"><a href="/category/interviews/">Interviews</a></li>
					</ul>
				</li>
				<li id="news-and-upcoming-events"><a href="/category/news-and-upcoming-events/">News and Upcoming Events</a></li>
			</ul>
			</div>
			<?php } ?>


			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
			
			</div><!-- #customheader -->
