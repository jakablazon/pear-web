<div class="burger-menu-overlay">
	<div></div>
	<div id="nav-home" class="nav-item clickable">
		Home
	</div>
	<div id="nav-about" class="nav-item clickable">
		About
	</div>
	<div id="nav-blog" class="nav-item clickable">
		Blog
	</div>
	<div id="nav-support" class="nav-item clickable">
		Q &amp; A
	</div>
	<div></div>
</div>
<div class="burger-menu">
	<div class="burger-line burger-line-top"></div>
	<div class="burger-line burger-line-middle"></div>
	<div class="burger-line burger-line-bottom"></div>
</div>


<?php if ( ! is_home() ) : ?>
	<div id="top-nav" class="top-nav white static">
		<span class="pear-logo"></span>
		<div class="nav-container">
			<div id="nav-home" class="nav-item clickable">
				<a href="/">Home</a>
			</div>
			<div id="nav-about" class="nav-item clickable">
				<a href="/#nav-about-trigger">About</a>
			</div>
			<div id="nav-blog" class="nav-item clickable">
				<a href="/#nav-blog-trigger">Blog</a>
			</div>
			<div id="nav-support" class="nav-item clickable">
				<a href="/#nav-support-trigger">Q &amp; A</a>
			</div>
		</div>
	</div>
<?php endif; ?>
