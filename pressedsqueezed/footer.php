<!doctype>
<html>
<body>

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package pressedsqueezed
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<h1>Contact Us</h1>
		<p>Pressed and Squeezed</p>
		<p>2525 Orange Way, Orchard, CA 91104</p>
		<p>Phone: (800) 424-3232</p>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

/* =menu

.menu-main-navigation-container {
	position: relative;
	text-align: center;
	padding-bottom: 1em;
	border-bottom: 1px solid #ccc;
	margin-bottom: 2em;
}

.menu-main-navigation-container ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

.menu-main-navigation-container ul li {
	margin: 0;
	display: inline;
/*	float: left;*/
	padding-left: 1em;
	padding-right: 2em;
}

.site_title {
	font-family: josefin-slab, serif;
	font-weight: 400;
	text-size: 3em;
	text-align: center;
}

.site-title a {
	text-decoration: none;
	color: #404040;
}

.site_titla a:hover {
	border-bottom: 1px dotted #222;
}

/* =Content

.site {
	width: 90%;
	margin-left: auto;
	margin-right: auto;
}

sticky {
	display: block;
}

.hentry {
	margin: 0 0 1.5em;
}

.entry-title {
	border: 0;
	clip rect(0 0 0 0);
	height: 1px;
	margin: -1px;
	overflow: hidden;
	padding: 0;
	position: absolute;
	width: 1px;
}

.byline,
.updated:not(.published) {
	display: none;
}

.single .byline,
.group-blog .byline {
	display: inline;
}

.page-content,
.entry-content,
.entry-summary {
	margin: 0;
}

.page-links {
	clear: both;
	margin: 0 0 1.5em;
}

.entry_content p {
	width: 60%;
	margin: 1em auto 1 em auto;
}

/**Utility Classes**/

.invisable {
	border: 0;
	clip rect(0 0 0 0);
	height: 1px;
	margin: -1px;
	overflow: hidden;
	padding: 0;
	position: absolute;
	width: 1px;
}

.clearfix: before,
.clearfix: after {
	content: ""; /* 1 */
	display: table; /* 2 */
}

.clearfix: after {
	clear: both;
}
