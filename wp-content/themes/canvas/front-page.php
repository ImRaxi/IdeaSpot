<?php get_header(); ?>


<?php $sliderContent = get_field('slidercontent'); 

?>

<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element slider-parallax full-screen force-full-screen">

			<div class="slider-parallax-inner">

				<div class="full-screen force-full-screen dark section nopadding nomargin noborder ohidden">

					<div class="container center">
						<div class="vertical-middle ignore-header">
							<div class="emphasis-title">
								<h1>
									<span class="text-rotater nocolor" data-separator="|" data-rotate="fadeIn" data-speed="6000">
										<span class="t-rotate t700 font-body opm-large-word"><?php echo $sliderContent['title1']; ?>|<?php echo $sliderContent['title2']; ?>|<?php echo $sliderContent['title3']; ?></span>
									</span>
								</h1>
							</div>
							<a href="#" class="button button-border button-light button-rounded" data-scrollto="#content" data-easing="easeInOutExpo" data-speed="1250" data-offset="70"><?php echo $sliderContent['seemorebtn']; ?></a>
						</div>
					</div>

					<div class="video-wrap">
						<video poster="<?php bloginfo('template_directory'); ?>\images\videos/1.jpg" preload="auto" loop autoplay muted>
							<source src='<?php bloginfo('template_directory'); ?>\images\videos/1.webm' type='video/webm' />
							<source src='<?php bloginfo('template_directory'); ?>\images\videos/1.mp4' type='video/mp4' />
						</video>
						<div class="video-overlay" style="background-color: rgba(0,0,0,0.2);"></div>
					</div>

					<a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="65" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

				</div>

			</div>

		</section><!-- #slider end -->

<!-- Content
		============================================= -->
        <?php $aboutus = get_field('aboutus'); ?>
		<section id="content">

			<div class="content-wrap nopadding">

				<div id="section-about" class="center page-section">

					<div class="container clearfix">

						<h2 class="divcenter bottommargin font-body" style="max-width: 700px; font-size: 40px;"><?php echo $aboutus['title']; ?></h2>

						<p class="lead divcenter bottommargin" style="max-width: 800px;"><?php echo $aboutus['description'] ?></p>

						<div class="clear"></div>

						<div class="row topmargin-lg divcenter" style="max-width: 1000px;">

                        <?php while (have_rows('team')) : the_row(); 

                        $image = get_sub_field('image');
                        $position = get_sub_field('position');
                        $name = get_sub_field('name');

                        ?>

                        <div class="col-md-4 bottommargin">

                        <div class="team">
                            <div class="team-image">
                                <img src="<?php echo $image['url']; ?>" alt="Scott Boolman">
                                <div class="team-overlay">
                                    <div class="team-social-icons">
                                        <a href="#" class="social-icon si-borderless si-small si-facebook" title="Facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-small si-twitter" title="Twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-small si-github" title="Github">
                                            <i class="icon-github"></i>
                                            <i class="icon-github"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-desc team-desc-bg">
                                <div class="team-title"><h4><?php echo $name; ?></h4><span><?php echo $position ?></span></div>
                            </div>
                        </div>

                        </div>
                        
                        <?php endwhile ?>


						</div>

					</div>
                    <p class="bottommargin" style="font-size: 16px;"><a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="70" class="more-link">
                    <?php echo $aboutus['more']; ?><i class="icon-angle-right"></i></a></p>

				</div>

				<div id="section-works" class="page-section notoppadding">

					<div class="section nomargin">
						<div class="container clearfix">
							<div class="divcenter center" style="max-width: 900px;">
								<h2 class="nobottommargin t300 ls1">We create &amp; craft projects that ooze creativity in every aspect. We try to create a benchmark in everything we do. Take a moment to browse through some of our recent completed work.</h2>
							</div>
						</div>
					</div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-full portfolio-masonry mixed-masonry clearfix">

						<article class="portfolio-item pf-media pf-icons wide">
							<div class="portfolio-image">
								<a href="#">
									<img src="<?php bloginfo('template_directory'); ?>\images\portfolio/mixed/1.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Open Imagination</a></h3>
										<span><a href="#">Media</a>, <a href="#">Icons</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<a href="#">
									<img src="<?php bloginfo('template_directory'); ?>\images\portfolio/mixed/2.jpg" alt="Locked Steel Gate">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Locked Steel Gate</a></h3>
										<span><a href="#">Illustrations</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-graphics pf-uielements">
							<div class="portfolio-image">
								<a href="#">
									<img src="<?php bloginfo('template_directory'); ?>\images\portfolio/mixed/3.jpg" alt="Mac Sunglasses">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Mac Sunglasses</a></h3>
										<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-icons wide">
							<div class="portfolio-image">
								<a href="#">
									<img src="<?php bloginfo('template_directory'); ?>\images\portfolio/mixed/4.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Open Imagination</a></h3>
										<span><a href="#">Media</a>, <a href="#">Icons</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-uielements pf-media wide">
							<div class="portfolio-image">
								<a href="#">
									<img src="<?php bloginfo('template_directory'); ?>\images\portfolio/mixed/5.jpg" alt="Console Activity">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Console Activity</a></h3>
										<span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-icons">
							<div class="portfolio-image">
								<a href="#">
									<img src="<?php bloginfo('template_directory'); ?>\images\portfolio/mixed/6.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Open Imagination</a></h3>
										<span><a href="#">Media</a>, <a href="#">Icons</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-uielements pf-icons">
							<div class="portfolio-image">
								<a href="#">
									<img src="<?php bloginfo('template_directory'); ?>\images\portfolio/mixed/7.jpg" alt="Backpack Contents">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Backpack Contents</a></h3>
										<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
									</div>
								</div>
							</div>
						</article>

					</div><!-- #portfolio end -->

					<div class="topmargin center"><a href="#" class="button button-border button-circle t600">View More Projects</a></div>

				</div>

				<div id="section-services" class="page-section notoppadding">

					<div class="section nomargin">
						<div class="container clearfix">
							<div class="divcenter center" style="max-width: 900px;">
								<h2 class="nobottommargin t300 ls1">We enjoy working on the Services &amp; Products we provide as much as you need them. This help us in delivering your Goals easily. Browse through the wide range of services we provide.</h2>
							</div>
						</div>
					</div>

					<div class="row align-items-stretch">

						<div class="col-lg-8">
							<div>
								<div class="row align-items-stretch grid-border clearfix">
									<div class="col-lg-4 col-md-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-mobile"></i></a>
											</div>
											<h3>Responsive Framework</h3>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-presentation"></i></a>
											</div>
											<h3>Beautifully Presented</h3>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-puzzle"></i></a>
											</div>
											<h3>Extensively Extendable</h3>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-gears"></i></a>
											</div>
											<h3>Powerfully Customizable</h3>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-genius"></i></a>
											</div>
											<h3>Geniusly Transformable</h3>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-hotairballoon"></i></a>
											</div>
											<h3>Industrial Support</h3>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="section dark nomargin">
						<div class="divcenter center" style="max-width: 900px;">
							<h2 class="nobottommargin t300 ls1">Like Our Services? Get an <a href="#" data-scrollto="#template-contactform" data-offset="140" data-easing="easeInOutExpo" data-speed="1250" class="button button-border button-circle button-light button-large notopmargin nobottommargin" style="position: relative; top: -3px;">Instant Quote</a></h2>
						</div>
					</div>


						<div class="container clearfix">

							<div class="col_two_fifth nobottommargin">&nbsp;</div>

							<div class="col_three_fifth nobottommargin col_last">

								<div class="fslider testimonial testimonial-full nobgcolor noborder noshadow nopadding" data-arrows="false">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide">
												<div class="testi-content">
													<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque vero numquam?</p>
													<div class="testi-meta">
														Steve Jobs
														<span>Apple Inc.</span>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testi-content">
													<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
													<div class="testi-meta">
														Collis Ta'eed
														<span>Envato Inc.</span>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testi-content">
													<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
													<div class="testi-meta">
														John Doe
														<span>XYZ Inc.</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>

					</div>

				</div>

				<div id="section-blog" class="page-section">

					<h2 class="center uppercase t300 ls3 font-body">Recently From the Blog</h2>

					<div class="section nobottommargin">
						<div class="container clearfix">

							<div class="row topmargin clearfix">

								<div class="ipost col-md-6 bottommargin clearfix">
									<div class="row">
										<div class="col-lg-6">
											<div class="entry-image nobottommargin">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>\images\blog/1.jpg" alt="Paris"></a>
											</div>
										</div>
										<div class="col-lg-6" style="margin-top: 20px;">
											<span class="before-heading" style="font-style: normal;">Press &amp; Media</span>
											<div class="entry-title">
												<h3 class="t400" style="font-size: 22px;"><a href="#">Global Meetup Program is Launching!</a></h3>
											</div>
											<div class="entry-content">
												<a href="#" class="more-link">Read more <i class="icon-angle-right"></i></a>
											</div>
										</div>
									</div>
								</div>

								<div class="ipost col-md-6 bottommargin clearfix">
									<div class="row">
										<div class="col-lg-6">
											<div class="entry-image nobottommargin">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>\images\blog/2.jpg" alt="Paris"></a>
											</div>
										</div>
										<div class="col-lg-6" style="margin-top: 20px;">
											<span class="before-heading" style="font-style: normal;">Inside Scoops</span>
											<div class="entry-title">
												<h3 class="t400" style="font-size: 22px;"><a href="#">The New YouTube Economy unfolds itself</a></h3>
											</div>
											<div class="entry-content">
												<a href="#" class="more-link">Read more <i class="icon-angle-right"></i></a>
											</div>
										</div>
									</div>
								</div>

								<div class="ipost col-md-6 bottommargin clearfix">
									<div class="row">
										<div class="col-lg-6">
											<div class="entry-image nobottommargin">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>\images\blog/3.jpg" alt="Paris"></a>
											</div>
										</div>
										<div class="col-lg-6" style="margin-top: 20px;">
											<span class="before-heading" style="font-style: normal;">Video Blog</span>
											<div class="entry-title">
												<h3 class="t400" style="font-size: 22px;"><a href="#">Kicking Off Design Party in Style</a></h3>
											</div>
											<div class="entry-content">
												<a href="#" class="more-link">Read more <i class="icon-angle-right"></i></a>
											</div>
										</div>
									</div>
								</div>

								<div class="ipost col-md-6 bottommargin clearfix">
									<div class="row">
										<div class="col-lg-6">
											<div class="entry-image nobottommargin">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>\images\blog/4.jpg" alt="Paris"></a>
											</div>
										</div>
										<div class="col-lg-6" style="margin-top: 20px;">
											<span class="before-heading" style="font-style: normal;">Inspiration</span>
											<div class="entry-title">
												<h3 class="t400" style="font-size: 22px;"><a href="#">Top Ten Signs You're a Designer</a></h3>
											</div>
											<div class="entry-content">
												<a href="#" class="more-link">Read more <i class="icon-angle-right"></i></a>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>
					</div>

					<div class="container topmargin-lg clearfix">

						<div id="oc-clients" class="owl-carousel topmargin image-carousel carousel-widget" data-margin="80" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">

							<div class="oc-item"><a href="#"><img src="../<?php bloginfo('template_directory'); ?>\images\clients/1.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="../<?php bloginfo('template_directory'); ?>\images\clients/2.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="../<?php bloginfo('template_directory'); ?>\images\clients/3.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="../<?php bloginfo('template_directory'); ?>\images\clients/4.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="../<?php bloginfo('template_directory'); ?>\images\clients/5.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="../<?php bloginfo('template_directory'); ?>\images\clients/6.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="../<?php bloginfo('template_directory'); ?>\images\clients/7.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="../<?php bloginfo('template_directory'); ?>\images\clients/8.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="../<?php bloginfo('template_directory'); ?>\images\clients/9.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="../<?php bloginfo('template_directory'); ?>\images\clients/10.png" alt="Clients"></a></div>

						</div>

					</div>

				</div>

				<div id="section-contact" class="page-section notoppadding">

					<div class="row noleftmargin norightmargin bottommargin-lg align-items-stretch">
						<div id="headquarters-map" class="col-lg-8 col-md-6 gmap d-none d-md-block"></div>
						<div class="col-lg-4 col-md-6" style="background-color: #F5F5F5;">
							<div class="col-padding">
								<h3 class="font-body t400 ls1">Our Headquarters</h3>

								<div style="font-size: 16px; line-height: 1.7;">
									<address style="line-height: 1.7;">
										<strong>North America:</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>

									<div class="clear topmargin-sm"></div>

									<address style="line-height: 1.7;">
										<strong>Europe:</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>

									<div class="clear topmargin"></div>

									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
								</div>
							</div>
						</div>
					</div>



					<div class="container clearfix">

						<div class="divcenter topmargin" style="max-width: 850px;">

							<div class="form-widget">

								<div class="form-result"></div>

								<form class="nobottommargin" id="template-contactform" name="template-contactform" action="../include/form.php" method="post">

									<div class="form-process"></div>

									<div class="col_half">
										<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Name" />
									</div>
									<div class="col_half col_last">
										<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Email Address" />
									</div>

									<div class="clear"></div>

									<div class="col_one_third">
										<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control" placeholder="Phone" />
									</div>

									<div class="col_two_third col_last">
										<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control border-form-control" placeholder="Subject" />
									</div>

									<div class="clear"></div>

									<div class="col_full">
										<textarea class="required sm-form-control border-form-control" id="template-contactform-message" name="template-contactform-message" rows="7" cols="30" placeholder="Your Message"></textarea>
									</div>

									<div class="col_full center">
										<button class="button button-border button-circle t500 noleftmargin topmargin-sm" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
										<br>
										<small style="display: block; font-size: 13px; margin-top: 15px;">We'll do our best to get back to you within 6-8 working hours.</small>
									</div>

									<div class="clear"></div>

									<div class="col_full hidden">
										<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
									</div>

									<input type="hidden" name="prefix" value="template-contactform-">

								</form>

							</div>

						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->

        <?php get_footer(); ?>