<div class="landing">
	<div class="landing-home">
		<div id="hero-cover" class="landing-main content">
			<?php get_template_part( 'templates/header-home' ); ?>

			<span id="nav-home-trigger"></span>
			<?php echo do_shortcode( '[PearSubForm]' ); ?>
		</div>
	</div>
	<div id="menu-toggle-indicator"></div>
	<div id="nav-about-trigger"></div>
	<div class="landing-about mt96">
		<h1 class="text-uppercase text-center text-bold">About pear</h1>
		<div class="row about-subsection-container mt96 pl24 pr24">
			<div class="col-xs-12 col-sm-3 about-subsection ">
				<h2 class="text-uppercase text-center">Pear</h2>
				<hr/>
				Pear is a social networking application that lets you meet potential partners. We collect information
				from users and use it to <b>pear</b> them in an optimal way.
			</div>
			<div class="col-xs-12 col-sm-3 about-subsection pr24">
				<h2 class="text-uppercase text-center">Comparisons</h2>
				<hr/>
				We don’t make you swipe left or right. We find out who you like, who you like less and who you like the
				most. We do so by asking you to compare not one but two potential partners each time, and select one
				among them.
			</div>
			<div class="col-xs-12 col-sm-3 about-subsection pr24">
				<h2 class="text-uppercase text-center">Nobel Matches</h2>
				<hr/>
				Matches are found using a Nobel prize winning algorithm, developed by mathematicians David Gale and
				Lloyd Shapley --- published in a work that they titled, we kid you not, "The Stability of Marriage".
			</div>
			<div class="col-xs-12 col-sm-3 about-subsection pr24">
				<h2 class="text-uppercase text-center">For you</h2>
				<hr/>
				If you are tired of apps that match you with people who aren't really interested in you, that don't
				message you back, then <b>pear</b> is for you. We create matches that matter.
			</div>
		</div>

		<div class="mobile pt120 pb120">
			<div id=iphone-trigger></div>
			<div id="iphone" class="iphone-image">
				<div class="title-container">
					<div class="title-1 title text-regular text-uppercase text-color-green text-size-smd">Create an account
					</div>
					<div class="title-2 title text-regular text-uppercase text-color-green text-size-smd opacity">Edit your profile
					</div>
					<div class="title-3 title text-regular text-uppercase text-color-green text-size-smd opacity">Start comparing
					</div>
					<div class="title-4 title text-regular text-uppercase text-color-green text-size-smd opacity">Meet your matches
					</div>
					<div class="title-5 title text-regular text-uppercase text-color-green text-size-smd opacity">Chat and pear up
					</div>
				</div>
				<?php $path = get_template_directory_uri(); ?>
				<img src="<?= $path ?>/dist/images/iphone-device.png"/>
				<img class="shot-1 shot" src="<?= $path ?>/dist/images/shot-1.svg"/>
				<img class="shot-2 shot opacity" src="<?= $path ?>/dist/images/shot-2.svg"/>
				<img class="shot-3 shot opacity" src="<?= $path ?>/dist/images/shot-3.svg"/>
				<img class="shot-4 shot opacity" src="<?= $path ?>/dist/images/shot-4.svg"/>
				<img class="shot-5 shot opacity" src="<?= $path ?>/dist/images/shot-5.svg"/>
				<img class="shot-6 shot opacity" src="<?= $path ?>/dist/images/shot-6.svg"/>
			</div>
		</div>

		<div class="row mt96 mb96 pl24 pr24 about-subsection-container">
			<div class="col-xs-12 col-sm-4 about-subsection">
				<h2 class="text-uppercase text-center">Know yourself</h2>
				<hr/>
				Besides helping you making new friends, we want to improve your knowledge about what you like and what others think about you.
			</div>
			<div class="col-xs-12 col-sm-4 about-subsection pr24">
				<a href="<?php echo get_template_directory_uri() ?>/dist/files/Pear Attractiveness Report.pdf" target="_blank">
					<h2 class="text-uppercase text-center">The Pear report</h2>
					<hr/>
					Periodically, we will provide you with an individual report that will inform you of your own tastes and of how you score with people of the other sex.
				</a>
			</div>
			<div class="col-xs-12 col-sm-4 about-subsection pr24">
				<h2 class="text-uppercase text-center">Support us</h2>
				<hr/>
				Pear is free but please note, our individual reports will be made available to those with a premium membership. We value you using our product but we would also love your support.
			</div>
		</div>

		<!-- <div class="row about-subsection-container mt96 mb96 pl24 pr24">
            <div class="col-xs-12 col-sm-3 about-subsection ">
                <h2 class="text-uppercase text-center">Online dating today</h2>
                <hr />
                Online dating has been growing steadily in popularity. Roughly, about 1 in 5 relationships now start online in the UK and US.
            </div>
            <div class="col-xs-12 col-sm-3 about-subsection pr24">
                <h2 class="text-uppercase text-center">Congestion problem</h2>
                <hr />
                Online dating suffers from a congestion problem. Women tend to receive a large number of messages/swipes from male users and often, they are unable to distinguish real interest from spam.
            </div>
            <div class="col-xs-12 col-sm-3 about-subsection pr24">
                <h2 class="text-uppercase text-center">How we solve it</h2>
                <hr />
                pear solves the problem by only offering high-quality matches. If we match you with someone, you know there’s no one else that you rank higher, who also ranks you above their own matches.
            </div>
            <div class="col-xs-12 col-sm-3 about-subsection pr24">
                <h2 class="text-uppercase text-center">Will it work?</h2>
                <hr />
                The algorithm we use isn’t just a beautiful mathematical idea. Research suggests it fares extremely well in predicting real life dating and marriage patterns.
            </div>
        </div> -->
	</div>

	<div id="nav-blog-trigger"></div>
	<div class="landing-blog blog-cover">
		<h1 class="text-uppercase mt0 text-center text-regular">Blog</h1>
		<h1 class="text-center">Matches that matter.</h1>
	</div>

	<div class="blog container">
		<div class="posts-container pb40">
			<?php if ( have_posts() ): ?>
				<div class="row">
					<div class="col-xs-12">
						<h4 class="text-uppercase mt40 mb40">Latest posts</h4>
					</div>
					<div class="slick-carousel-container">
						<div class="slick-carousel">
							<?php while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format() ); ?>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<div class="mt48 text-color-grey text-center">
				Follow us around
			</div>
			<div class="social-media-section mt32 mb32">
				<a target="_blank" href="https://www.instagram.com/pearmeapp/" class="icon instagram-icon"></a>
				<a target="_blank" href="https://www.facebook.com/pear-715151941955999/" class="icon facebook-icon"></a>
				<a target="_blank" href="https://twitter.com/pearmeapp" class="icon twitter-icon"></a>
			</div>
		</div>

		<!-- <div class="integrations">
          <div class="row">
            <div class="col-xs-12 col-sm-4 padding-right">
              <h4 class="text-uppercase">Twitter</h4>
              <a class="twitter-timeline" height="437"
                href="https://twitter.com/TwitterDev">
              Tweets by @TwitterDev
              </a>
            </div>

            <div class="col-xs-12 col-sm-4 padding-center">
              <h4 class="text-uppercase">Instagram</h4>
              <iframe src="//lightwidget.com/widgets/1cf089dc79ec5cf783444b7318d87984.html" id="lightwidget_1cf089dc79" name="lightwidget_1cf089dc79"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
            </div>

            <div class="col-xs-12 col-sm-4 padding-left">
              <h4 class="text-uppercase">Facebook</h4>
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=437&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=false&appId=1694822130750294" width="100%" height="437" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
          </div>
        </div> -->

	</div>

	<div class="landing-support support mb24 mt96 pb96">
		<div id="nav-support-trigger"></div>
		<div class="hero-title support-title">
			<h1 class="text-center text-uppercase">Support</h1>
		</div>

		<div class="row support-container">
			<div class="item col-xs-12 col-sm-8 text-center pt72">
				<p class="text-size-md margin0 clickable title">Where can I download Pear?</p>
				<p class="text-color-black text-size-xs text-thin desc">
					Pear is currently available for download only in test-mode. Fill in the form to be invited to test
					the application and be notified of when we launch in your city. We are coming soon! 
				</p>
				<div class="bullet mt24 mb24"></div>
			</div>

			<div class="item col-xs-12 col-sm-8 text-center">
				<p class="text-size-md margin0 clickable title">Why sign in through Facebook?</p>
				<p class="text-color-black text-size-xs text-thin desc">
					We require you to sign up with Facebook as it drastically reduces the number of fake accounts.
				</p>
				<div class="bullet mt24 mb24"></div>
			</div>

			<div class="item col-xs-12 col-sm-8 text-center">
				<p class="text-size-md margin0 clickable title">How do I personalize my profile?</p>
				<p class="text-color-black text-size-xs text-thin desc">
					Once you sign up you’ll be directed to the profile page. You can then upload up to 5 pictures and
					edit your bio. Your name and age will be displayed automatically.
				</p>
				<div class="bullet mt24 mb24"></div>
			</div>

			<div class="item col-xs-12 col-sm-8 text-center">
				<p class="text-size-md margin0 clickable title">Why am I asked to look at two profiles of potential
					partners at once?</p>
				<p class="text-color-black text-size-xs text-thin desc">
					Let’s say you are showed Charlie and Jessie. When you click on the Pear icon in Jessie’s pic, you
					are telling us that you like Jessie more than Charlie. By asking you to perform more comparisons, we
					can figure out who you like more from who you like less. The more you compare, the more we learn
					about you, the more your matches improve. So keep comparing!
				</p>
				<div class="bullet mt24 mb24"></div>
			</div>

			<div class="item col-xs-12 col-sm-8 text-center pb96">
				<p class="text-size-md margin0 clickable title">Why do I have a fixed number of matches?</p>
				<p class="text-color-black text-size-xs text-thin desc">
					We want to create matches that matter. We don’t match you with just about anyone that likes you and
					you like back. We pair you with the selected few you like the most, that also like you back.
				</p>
			</div>
		</div>

		<div class="button green shadow text-uppercase button-join">
			Show all Q&A
		</div>
	</div>

	<!-- <div id="nav-media-trigger"></div>
    <div class="landing-press mb24 pb9">
        <div class="hero-title press-title mb96">
            <h1 class="text-center"> We would LOVE to share our story <br/> and our results.</h1>
        </div>

        <div class="press-content row pb48">
            <div class="col-xs-12 col-sm-7">
                <p>
                    If you are a journalist, blogger or member of the media, please feel free to contact us!
                </p>
                <p class="mt32">
                    We would be more than happy to talk to you.
                </p>
                <p class="mt32">
                    Download our press kit here or contact <a class="text-link text-underline" href="mailto:xxx@xxx.com">xxx@xxx.com</a>
                </p>
            </div>
            <div class="col-xs-12 col-sm-5">
                <div class="pear-logo"></div>
                <div class="button green shadow text-uppercase button-download-kit mt40">
                    PEAR_PRESS_KIT_2016.zip
                </div>
            </div>
        </div>
    </div> -->

	<!-- <div id="nav-launch-trigger"></div>
	<div class="landing-launch text-center pt24 mb96">
		<div class="pear-logo mt84"></div>
		<h1 class="text-uppercase mt32">
			Know when we visit your city <br/>
			to know when we launch in your city
		</h1>
		<p class="mt24">
			Join our community to know when we are in your city. Vip access to</br>
			the app and our launch night.
		</p>
		<p class="mt32">
			Join our community to be among our beta tester or know when Pear will be available in your city.
		</p>

		<div class="landing-join mt84">
			<div class="form-join row">
				<div class="col-xs-12 col-sm-4">
					<input type="text" placeholder="Name" />
				</div>
				<div class="col-xs-12 col-sm-4">
					<input type="text" placeholder="Email" />
				</div>
				<div class="col-xs-12 col-sm-4 select-container input-line">
					<select class="select-age-home">
						<option></option>
					</select>
				</div>
			</div>
		</div>

		<div class="button green shadow text-uppercase button-join mt56">
			Join now
		</div>
		<div class="we-promise mt24">
			We promise to keep our emails to a minimum
		</div>
	</div> -->

</div>
