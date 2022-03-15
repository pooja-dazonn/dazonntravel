@extends('layout')
@section('title', 'Travel')
@section('all content')
<div class="site wrapper-content">
	<div class="home-content" role="main">
		<div class="section-background" style="background-image:url('images/banner-home3.jpg'); min-height: 100vh;position: relative;">
			<div class="text-banner-home4">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="banner-typed">
								<h2 class="phys-typingEffect" style="color:#ffffff">
									“Our Ingenious Intentions To Make You Travel”
									<span class="phys-typingTextEffect" data-strings0="Travel booking." data-strings1="Tour booking." data-strings2="Travel Agency." data-strings3="Tour Operator." data-type-speed="100"></span><span class="typed-cursor"></span>
								</h2>
								<p class="desc" style="color:#ffffff">“Reward Yourself : Travel to be lively”</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">
			<div class="row banner-tour-booking">
				<div class="col-sm-12">
					<div class="hotel-booking-search travel-booking-search travel-booking-style_2">
						<form name="hb-search-form" action="tours.html" id="tourBookingForm" method="GET">
							<ul class="hb-form-table">
								<!-- <li class="hb-form-field">
											<div class="hb-form-field-input">
												<input type="hidden" name="tour_search" value="1">
												<label>Anything</label>
												<input type="text" name="name_tour" value="" placeholder="Tour Name, Destination">
											</div>
										</li>
										<li class="hb-form-field">
											<div class="hb-form-field-select">
												<label>You like</label>
												<select name="tourtax[tour_phys]">
													<option value="0">Tour Type</option>
													<option value="escorted-tour">Escorted Tour</option>
													<option value="rail-tour">Rail Tour</option>
													<option value="river-cruise">River Cruise</option>
													<option value="tour-cruise">Tour &amp; Cruise</option>
													<option value="wildlife">Wildlife</option>
												</select>
											</div>
										</li> -->
								<li class="hb-form-field">
									<div class="hb-form-field-select">
										<label>Destination</label>
										<select name="tourtax[pa_destination]">
											<option value="0">Where are you going?</option>
											<option value="brazil">Brazil</option>
											<option value="canada">Canada</option>
											<option value="cuba">Cuba</option>
											<option value="usa">USA</option>
											<option value="philippines">Philippines</option>
											<option value="italy">Italy</option>
										</select>
									</div>
								</li>
								<li class="hb-form-field">
									<div class="hb-form-field-select">
										<label>When</label><select name="tourtax[pa_month]">
											<option value="0">month</option>
											<option value="january">January</option>
											<option value="february">February</option>
											<option value="march">March</option>
											<option value="april">April</option>
											<option value="may">May</option>
											<option value="june">June</option>
											<option value="july">July</option>
											<option value="august">August</option>
											<option value="september">September</option>
											<option value="october">October</option>
											<option value="november">November</option>
											<option value="december">December</option>
										</select>
									</div>
								</li>
								<li class="hb-submit">
									<button class="btn btn-danger" type="submit">Search</button>
								</li>
							</ul>
							<input type="hidden" name="lang" value="">
						</form>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<!------End top image & search bar------->



		<!------------------------------ Explore Destination By Theme------------------------------------->

		<div class="top-content">
			<div class="container-fluid">
				<div id="carousel-example" class="carousel slide" data-ride="carousel">
					<h2 class="fw7">
						<span style="font-size: 24pt;">Explore Destinations By Theme</span>
					</h2><br>
					<div class="carousel-inner row w-100 mx-auto" role="listbox">
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
							<img src="images\slider\solo.jpg" class="img-fluid mx-auto d-block" alt="img1">
							<span class="imgtxt" aria-hidden="true">Solo</span><br>
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="images\slider\Adventure-1.png" class="img-fluid mx-auto d-block" alt="img2">
							<span class="imgtxt" aria-hidden="true">Adventure</span><br>
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="images\slider\wildlife.jpg" class="img-fluid mx-auto d-block" alt="img3">
							<span class="imgtxt" aria-hidden="true">Wildlife</span><br>
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="images\slider\Nature-1.png" class="img-fluid mx-auto d-block" alt="img4">
							<span class="imgtxt" aria-hidden="true">Nature</span><br>
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="images\slider\honeymoon.jpg" class="img-fluid mx-auto d-block" alt="img5">
							<span class="imgtxt" aria-hidden="true">Honeymoon</span><br>
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="images\slider\water-activity.png" class="img-fluid mx-auto d-block" alt="img6">
							<span class="imgtxt" aria-hidden="true">Water Activities</span><br>
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="images\slider\family-1.png" class="img-fluid mx-auto d-block" alt="img7">
							<span class="imgtxt" aria-hidden="true">Family</span><br>
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="images\slider\family.jpeg" class="img-fluid mx-auto d-block" alt="img8">
							<span class="imgtxt" aria-hidden="true">Nature</span><br>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<!------------ Explore Destination By Theme End ------------------------->

		<!-- Top dsestination Start -->
		<div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row st bg-holder vc_custom_1631094344125 vc_row-has-fill" style="position: relative; left: -82.5px; box-sizing: border-box; width: 1349px; padding-left: 82.5px; padding-right: 82.5px;">
			<div class="container ">
				<div class="row">
					<div class="wpb_column column_container col-md-12">
						<div class="vc_column-inner wpb_wrapper">
							<div class="content-text padding-0">
								<div class="st-text-center style-9">
									<h2 class="st_default style-9">Top Destinations</h2>
									<div class="st_default style-9-content"></div>
								</div>
							</div>

							<div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
							<div class="list-destination list-destination-style6 row">
								@foreach($list as $row)
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="destination-item has-matchHeight" style="height: 270px;">

										<a href="https://dazonntravels.com/st_location/dubai/">
											<img src="{{ asset('upload/images/' . $row->Packageimage) }}">
											<h4 class="title">{{$row->Packagename}}</h4>
										</a>

									</div>
								</div>
								@endforeach
							</div>

						</div>
					</div>
				</div>
				<!--End .row-->
			</div>
			<!--End .container-->
		</div>
		<!-- End top destination -->

		<!-- Most popular Tour Start -->

		<div class="padding-top-6x padding-bottom-6x section-background" style="background-image:url(images/home/bg-popular.jpg)">
			<div class="container">
				<div class="shortcode_title text-white title-center title-decoration-bottom-center">
					<div class="title_subtitle">Take a Look at Our</div>
					<h3 class="title_primary">MOST POPULAR TOURS</h3>
					<span class="line_after_title" style="color:#ffffff"></span>
				</div>
				<div class="row wrapper-tours-slider">
					<div class="tours-type-slider list_content owl-carousel owl-theme owl-loaded" data-dots="true" data-nav="true" data-responsive="{&quot;0&quot;:{&quot;items&quot;:1}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;768&quot;:{&quot;items&quot;:2}, &quot;992&quot;:{&quot;items&quot;:3}, &quot;1200&quot;:{&quot;items&quot;:4}}">

						<div class="owl-stage-outer">
							<div class="owl-stage" style="transform: translate3d(-1170px, 0px, 0px); transition: all 0.25s ease 0s; width: 4095px;">
								<div class="owl-item cloned" style="width: 292.5px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">$89.00</span>
														</span>
														<img src="images/tour/430x305/tour-3.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Anchorage to Santiago</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 292.5px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">90.00</span>
														</span>
														<img src="images/tour/430x305/tour-4.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Anchorage to Ushuaia</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 292.5px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">$94.00</span>
														</span>
														<img src="images/tour/430x305/tour-5.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Discover Brazil</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 292.5px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">$91.00</span>
														</span>
														<img src="images/tour/430x305/tour-6.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Cuzco to Anchorage</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item active" style="width: 292.5px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price"><del>
																<span class="travel_tour-Price-amount amount">$87.00</span></del>
															<ins><span class="travel_tour-Price-amount amount">$82.00</span></ins>
														</span>
														<span class="onsale">Sale!</span>
														<img src="images/tour/430x305/tour-1.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Kiwiana Panorama</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item active" style="width: 292.5px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">$82.00</span>
														</span>
														<img src="images//tour/430x305/tour-2.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Camping Americas West</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item active" style="width: 292.5px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">$89.00</span>
														</span>
														<img src="images/tour/430x305/tour-3.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Anchorage to Santiago</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item active" style="width: 292.5px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">90.00</span>
														</span>
														<img src="images/tour/430x305/tour-4.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Anchorage to Ushuaia</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item" style="width: 292.5px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">$94.00</span>
														</span>
														<img src="images/tour/430x305/tour-5.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Discover Brazil</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item" style="width: 292.5px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">$91.00</span>
														</span>
														<img src="images/tour/430x305/tour-6.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Cuzco to Anchorage</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 292.5px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price"><del>
																<span class="travel_tour-Price-amount amount">$87.00</span></del>
															<ins><span class="travel_tour-Price-amount amount">$82.00</span></ins>
														</span>
														<span class="onsale">Sale!</span>
														<img src="images/tour/430x305/tour-1.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Kiwiana Panorama</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 292.5px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">$82.00</span>
														</span>
														<img src="images//tour/430x305/tour-2.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Camping Americas West</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 292.5px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">$89.00</span>
														</span>
														<img src="images/tour/430x305/tour-3.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Anchorage to Santiago</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 292.5px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">90.00</span>
														</span>
														<img src="images/tour/430x305/tour-4.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Anchorage to Ushuaia</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="owl-controls">
							<div class="owl-nav">
								<div class="owl-prev" style=""><i class="lnr lnr-chevron-left"></i>
								</div>
								<div class="owl-next" style=""><i class="lnr lnr-chevron-right"></i>
								</div>
							</div>
							<div class="owl-dots" style="display: block;">
								<div class="owl-dot active"><span></span>
								</div>
								<div class="owl-dot"><span></span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Most popular Tour End -->

		<!-- <div class="padding-top-6x padding-bottom-6x bg__shadow section-background" style="background-image:url(images/home/bg-pallarax.jpg)">
					<div class="container">
						<div class="shortcode_title text-white title-center title-decoration-bottom-center">
							<div class="title_subtitle">Some statistics about Travel WP</div>
							<h3 class="title_primary">CENTER ACHIEVEMENTS</h3>
							<span class="line_after_title" style="color:#ffffff"></span>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<div class="stats_counter text-center text-white">
									<div class="wrapper-icon">
										<i class="flaticon-airplane"></i>
									</div>
									<div class="stats_counter_number">94,532</div>
									<div class="stats_counter_title">Customers</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="stats_counter text-center text-white">
									<div class="wrapper-icon">
										<i class="flaticon-island"></i>
									</div>
									<div class="stats_counter_number">1021</div>
									<div class="stats_counter_title">Destinations</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="stats_counter text-center text-white">
									<div class="wrapper-icon">
										<i class="flaticon-globe"></i>
									</div>
									<div class="stats_counter_number">20,096</div>
									<div class="stats_counter_title">Tours</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="stats_counter text-center text-white">
									<div class="wrapper-icon">
										<i class="flaticon-people"></i>
									</div>
									<div class="stats_counter_number">12</div>
									<div class="stats_counter_title">Tour types</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 text-center padding-top-6x">
								<a href="https://themeforest.net/item/travel-html-tour-travel-html-template-for-travel-agency-and-tour-operator/19504894" class="icon-btn" title="Tour HTML Template - Travel HTML Template" target="_blank">
									<i class="flaticon-cart"></i> Purchase theme
								</a>
							</div>
						</div>
					</div>
				</div> -->
		<div class="section-white padding-top-6x padding-bottom-6x">
			<div class="container">
				<div class="shortcode_title title-center title-decoration-bottom-center">
					<h3 class="title_primary">DEALS AND DISCOUNTS</h3><span class="line_after_title"></span>
				</div>
				<div class="row wrapper-tours-slider">
					<div class="tours-type-slider list_content owl-carousel owl-theme owl-loaded" data-dots="true" data-nav="true" data-responsive="{&quot;0&quot;:{&quot;items&quot;:1}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;768&quot;:{&quot;items&quot;:3}, &quot;992&quot;:{&quot;items&quot;:3}, &quot;1200&quot;:{&quot;items&quot;:3}}">




						<div class="owl-stage-outer">
							<div class="owl-stage" style="transform: translate3d(-1170px, 0px, 0px); transition: all 0s ease 0s; width: 3900px;">
								<div class="owl-item cloned" style="width: 390px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">90.00</span>
														</span>
														<img src="images/tour/430x305/tour-4.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Anchorage to Ushuaia</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 390px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">$94.00</span>
														</span>
														<img src="images/tour/430x305/tour-5.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Discover Brazil</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 390px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price"><del>
																<span class="travel_tour-Price-amount amount">$87.00</span></del>
															<ins><span class="travel_tour-Price-amount amount">$82.00</span></ins>
														</span>
														<span class="onsale">Sale!</span>
														<img src="images/tour/430x305/tour-1.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Kiwiana Panorama</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item active" style="width: 390px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">$89.00</span>
														</span>
														<img src="images/tour/430x305/tour-3.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Anchorage to Santiago</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item active" style="width: 390px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">90.00</span>
														</span>
														<img src="images/tour/430x305/tour-4.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Anchorage to Ushuaia</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item active" style="width: 390px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">$94.00</span>
														</span>
														<img src="images/tour/430x305/tour-5.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Discover Brazil</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item" style="width: 390px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price"><del>
																<span class="travel_tour-Price-amount amount">$87.00</span></del>
															<ins><span class="travel_tour-Price-amount amount">$82.00</span></ins>
														</span>
														<span class="onsale">Sale!</span>
														<img src="images/tour/430x305/tour-1.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Kiwiana Panorama</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 390px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">$89.00</span>
														</span>
														<img src="images/tour/430x305/tour-3.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Anchorage to Santiago</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 390px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">90.00</span>
														</span>
														<img src="images/tour/430x305/tour-4.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Anchorage to Ushuaia</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 390px; margin-right: 0px;">
									<div class="item-tour">
										<div class="item_border">
											<div class="item_content">
												<div class="post_images">
													<a href="single-tour.html" class="travel_tour-LoopProduct-link">
														<span class="price">
															<span class="travel_tour-Price-amount amount">$94.00</span>
														</span>
														<img src="images/tour/430x305/tour-5.jpg" alt="" title="">
													</a>
													<div class="group-icon">
														<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
													</div>
												</div>
												<div class="wrapper_content">
													<div class="post_title">
														<h4>
															<a href="single-tour.html" rel="bookmark">Discover Brazil</a>
														</h4>
													</div>
													<span class="post_date">5 DAYS 4 NIGHTS</span>
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
												</div>
												<a href="single-tour.html" class="read_more_button">VIEW MORE
													<i class="fa fa-long-arrow-right"></i></a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="owl-controls">
							<div class="owl-nav">
								<div class="owl-prev"><i class="lnr lnr-chevron-left"></i></div>
								<div class="owl-next"><span class="lnr lnr-chevron-left"></span></div>
							</div>
							<div class="owl-dots" style="display: block;">
								<div class="owl-dot active"><span></span></div>
								<div class="owl-dot"><span></span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<br>

		<div class="wrapper-footer wrapper-footer-newsletter" style="margin-bottom: 0px;">
			<div class="main-top-footer">
				<div class="container">
					<div class="row">
						<aside class="col-sm-3 widget_text">
							<h3 class="widget-title">CONTACT</h3>
							<div class="textwidget">
								<div class="footer-info">
									<p>Lorem ipsum dolor sit amet, cons ectetueradipiscing elit, sed diam nonu my nibh euis motincidunt ut laoreetd
									</p>
									<ul class="contact-info">
										<li><i class="fa fa-map-marker fa-fw"></i> 1945 Washington, San Francisco</li>
										<li><i class="fa fa-phone fa-fw"></i> +1 234 456 7890</li>
										<li>
											<i class="fa fa-envelope fa-fw"></i><a href="mailto:hello@siteinfo.com"> hello@siteinfo.com</a>
										</li>
									</ul>
								</div>
							</div>
						</aside>
						<aside class="col-sm-3 widget_text">
							<h3 class="widget-title">INFORMATION</h3>
							<div class="textwidget">
								<ul class="menu list-arrow">
									<li><a href="#">Press Centre</a></li>
									<li><a href="#">Travel News</a></li>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>
						</aside>
						<aside class="col-sm-3 widget_text">
							<h3 class="widget-title">Our Menu</h3>
							<div class="textwidget">
								<ul class="menu list-arrow">
									<li><a href="#">About us</a></li>
									<li><a href="#">Career</a></li>
									<li><a href="#">Terms</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</aside>
						<aside class="col-sm-3 custom-instagram widget_text">
							<h3 class="widget-title">Instagram</h3>
							<div class="textwidget">
								<ul>
									<li><img src="images/instagram/1.jpg" alt="instagram"></li>
									<li><img src="images/instagram/2.jpg" alt="instagram"></li>
									<li><img src="images/instagram/3.jpg" alt="instagram"></li>
									<li><img src="images/instagram/4.jpg" alt="instagram"></li>
									<li><img src="images/instagram/5.jpg" alt="instagram"></li>
									<li><img src="images/instagram/6.jpg" alt="instagram"></li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>
			<div class="container wrapper-copyright">
				<div class="row">
					<div class="col-sm-6">
						<div>
							<p>Copyright © 2017 Travel. All Rights Reserved.</p>
						</div>
					</div>
					<div class="col-sm-6">
						<aside id="text-5" class="widget_text">
							<div class="textwidget">
								<ul class="footer_menu">
									<li><a href="#">Terms of Use</a></li>
									<li>|</li>
									<li><a href="#">Privacy Policy</a></li>
									<li>|</li>
									<li><a href="https://twitter.com/physcode"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.facebook.com/physcode/"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://www.instagram.com/physcode/"><i class="fa fa-instagram"></i></a>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/vendors.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.mb-comingsoon.min.js"></script>
	<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
	<script type="text/javascript" src="assets/js/theme.js"></script>

	<!-- Javascript -->
	<script src="assets/js2/jquery-3.3.1.min.js"></script>
	<script src="assets/js2/jquery-migrate-3.0.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="assets/js2/jquery.backstretch.min.js"></script>
	<script src="assets/js2/wow.min.js"></script>
	<script src="assets/js2/scripts.js"></script>

	<div class="drag-target" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>