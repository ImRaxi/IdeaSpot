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
							<source src='<?php echo $sliderContent['video']; ?>' type='video/mp4' />
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

						<h2 class="divcenter bottommargin font-body" style="max-width: 700px; font-size: 55px;"><?php echo $aboutus['title']; ?></h2>

						<p class="lead divcenter bottommargin info-text" style="max-width: 800px; "><?php echo $aboutus['description'] ?></p>

						<div class="clear"></div>

						<div class="row topmargin-lg divcenter" style="max-width: 1200px;">

                        <?php while (have_rows('team')) : the_row(); 

                        $image = get_sub_field('image');
                        $position = get_sub_field('position');
                        $name = get_sub_field('name');
                        $fb_link = get_sub_field('name');
                        $linkedin_link = get_sub_field('name');
                        $github_link = get_sub_field('name');

                        ?>

                        <div class="col-md-4 bottommargin">
						
                        <div class="team">
							
                            <div class="team-image">
                                <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="Scott Boolman">
                            
							</div>
							<div class = "social">
								<a href="<?php echo get_field('facebook_link'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="<?php echo get_field('linkedin_link'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								<a href="<?php echo get_field('github_link'); ?>"><i class="fa fa-github" aria-hidden="true"></i></a>
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

				<div class = "container-fluid blog-info">
					<div class="row">
						<div class="col-sm-12 blog-text">
							<?php $desc = get_field('opis-1'); ?>
							<span><?php echo $desc; ?></span>
						</div>
					</div>
				</div>

				<div class="row topmargin-lg divcenter tech-div" style="max-width: 1200px;">

					<div class="col-sm-12">

					<h2><?php echo get_field('tech-title'); ?></h2>
					<div class="tech-desc"><?php echo get_field('tech-desc'); ?></div>

						<div class="technologies">

						<?php while (have_rows('technologies')) : the_row(); 

						$name = get_sub_field('nazwa_technologi'); ?>

							<div class="tech-square"><?php echo $name; ?></div>
						

						<?php endwhile ?>

						</div>

					</div>

					<div class="tech-button"><?php echo get_field('blog_button'); ?></div>

				</div>







				<div id="section-services" class="page-section notoppadding">

					<div class="section nomargin">
						<div class="container clearfix">
							<div class="divcenter center" style="max-width: 900px;">
								<h2 class="nobottommargin t300 ls1 tech-text"><?php echo get_field('opis-2'); ?></h2>
							</div>
						</div>
					</div>

					<div class="row align-items-stretch">

						<div class="col-lg-8">
							<div>
								<div class="row align-items-stretch grid-border clearfix">

								</div>
							</div>
						</div>

					</div>

					<div class="row topmargin-lg divcenter uslugi-div" style="max-width: 1200px; margin-top:0px !important;">

					<div class="col-sm-12">

						<div class="uslugi">

							<?php while (have_rows('usluga')) : the_row(); ?>
								<div class="uslugi-square">
									<div class = "uslugi-image"><img src="<?php echo get_sub_field('piktogram')['sizes']['thumbnail']; ?>" alt="icon"/></div>
									<div class = "uslugi-title"><?php echo get_sub_field('uslugi-title'); ?></div>
									<div class = "uslugi-opis"><?php echo get_sub_field('uslugi-desc'); ?></div>
								</div>
							<?php endwhile ?>
						</div>

					</div>

				</div>

					<div class="section dark nomargin">
						<div class="divcenter center" style="max-width: 900px;">
						<div class="fslider testimonial testimonial-full nobgcolor noborder noshadow nopadding dark-theme-testo" data-arrows="false">
									<div class="flexslider">
										<div class="slider-wrap">

											<div class="slide">
												<div class="testi-content">
												<div class="testimonial-avatar"></div>
													<p>Świetna firma, szef zawsze wystawia 3 z SIPBCA</p>
													<div class="testi-meta">
														Koledzy z roku wyżej
														<span>ZUT Inc.</span>
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


										<!-- Portfolio Items
									============================================= -->
									<div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-full portfolio-masonry mixed-masonry clearfix">

				<article class="portfolio-item pf-media pf-icons wide">
					<div class="portfolio-image">
						<a href="#">
							<img src="images/portfolio/mixed/1.jpg" alt="Open Imagination">
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
							<img src="images/portfolio/mixed/2.jpg" alt="Locked Steel Gate">
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
							<img src="images/portfolio/mixed/3.jpg" alt="Mac Sunglasses">
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
							<img src="images/portfolio/mixed/4.jpg" alt="Open Imagination">
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
							<img src="images/portfolio/mixed/5.jpg" alt="Console Activity">
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
							<img src="images/portfolio/mixed/6.jpg" alt="Open Imagination">
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
							<img src="images/portfolio/mixed/7.jpg" alt="Backpack Contents">
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

        <!-- <?php get_footer(); ?> -->