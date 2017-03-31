@extends('template.main')
@section('content')
	<!-- Main Slider -->
			<div id="main-slider" class="main-slider">

				<!-- Item -->
				<div class="item">
					<img src="{{asset('assets')}}/images/slider-banner/bg-1.jpg" alt="">
					<div class="banner-overlay">
						<div class="container">
							<div class="position-center-x">
								<div class="caption style-1 h-white after-clear">
									<h1>HUT<i> Ke - 207<sup>th</sup></i> Bandung <span>Konser   COLDPLAY</span></h1>
									<h2>Datang dan saksikan...</h2>
									<span class="dot-line"></span>
									<div class="location-list">
										<ul>
											<li><i class="icon-calendar"></i>25 Sept, 2017</li>
											<li><i class="icon-clock-o"></i>20:00 - 24:00</li>
											<li><i class="icon-map-marker"></i>Lapangan Gasibu, Bandung, Indonesia.</li>
										</ul>
									</div>
									<ul class="btn-list">
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Item -->

				<!-- Item -->
				<div class="item">
					<img src="assets/images/slider-banner/bg-1.jpg" alt="">
					<div class="banner-overlay">
						<div class="container">
							<div class="position-center-center">
								<div class="caption center h-white after-clear">
									<h1>HUT<i> Ke - 207<sup>th</sup></i> Bandung <span>Konser   COLDPLAY</span></h1>
									<h2>Datang dan saksikan...</h2>
									<span class="dot-line"></span>
									<div class="location-list">
										<ul>
											<li><i class="icon-calendar"></i>25 Sept, 2017</li>
											<li><i class="icon-clock-o"></i>20:00 - 24:00</li>
											<li><i class="icon-map-marker"></i>Lapangan Gasibu, Bandung, Indonesia.</li>
										</ul>
									</div>
									<ul class="btn-list">
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Item -->

				<!-- Item -->
				<div class="item">
					<img src="assets/images/slider-banner/bg-1.jpg" alt="">
					<div class="banner-overlay">
						<div class="container">
							<div class="position-center-x">
								<div class="caption style-1 h-white after-clear">
									<h1>HUT<i> Ke - 207<sup>th</sup></i> Bandung <span>Konser   COLDPLAY</span></h1>
									<h2>Datang dan saksikan...</h2>
									<span class="dot-line"></span>
									<div class="location-list">
										<ul>
											<li><i class="icon-calendar"></i>25 Sept, 2017</li>
											<li><i class="icon-clock-o"></i>20:00 - 24:00</li>
											<li><i class="icon-map-marker"></i>Lapangan Gasibu, Bandung, Indonesia.</li>
										</ul>
									</div>
									<ul class="btn-list">
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Item -->

			</div>
			<!-- Main Slider -->
			
		</header>
		<!-- Header -->
<!-- Mian Content -->
		<main id="main-content" class="main-coontent">
			
			<!-- Welcome Section -->
			<section class="tc-padding">
				<div class="container">

					<!-- First Row -->
					<div class="event-img-list">
						<div class="row">
							<div class="col-sm-12">
								<div class="welcome-text">
									<div class="welcome-title">
										<span class="icon-small-icon">
						                	<img src="{{asset('assets')}}/images/logo-6.png" class="text-center">
						                </span>
										<h2>Selamat Datang Di <span>Ini Bandung</span></h2>
									</div>
									<article>
										<p><q>Publikasikan Event Anda Disini</q></p>
										<p>Ini Bandung merupakan sebuah website untuk mengadakan event yang sedang berlangsung maupun yang akan datang di daerah Bandung.</p>
										<p class="none-991"> Anda bisa membuat dan memposting Festival & Event anda disini, Meriahkan Setiap Festival & Event Yang Di Adakan Di Bandung.  </p>
										
									</article>
								</div>
							</div>
						</div>
					</div>
					<!-- First Row -->
					<!-- Second Row -->
				</div>
			</section>


			<!-- Our Upcoming Schedules -->
			<section class="tc-padding">
				<div class="container">

					<!-- Main Heading -->
					<div class="main-heading-holder">
						<div class="main-heading">
							<h2><span>Festival & Events</span></h2>
							<span class="icon-small-icon">
			                </span>
						</div>
					</div>
					<!-- Main Heading -->

					<!-- Schedules Tabs -->
					<div class="row">

						<!-- Tabs -->
						<div class="col-xs-12 mb-50">
							<div class="tabs-holder mt-50">

								<!-- Tab Nav -->
								<div class="schedules-tab-nav" role="tablist">
									<ul>
										<li class="active"><a href="#jadwal1" role="tab" data-toggle="tab">BEST<span>5</span></a></li>
									</ul>
								</div>
								<!-- Tab Nav -->

								<!-- Tab Content -->
								<div class="tab-content">

									<!-- Days 1 -->
									<div role="tabpanel" class="tab-pane active" id="jadwal1">

										<!-- Schedules Widget -->
										@inject('timeline','App\Timeline')
										@php
										$result  =   $timeline::take(5)->get();
											$i = 1;
											foreach(@$result as $row) {
										@endphp
										<div class="schedules-widget">
											<div class="speaker-imgs">
												<ul>
													<li><a href="#"><img src="{{asset('uploads')}}/{{ $row->foto }}" style="width: 120px; height: 120px;"alt=""><span class="toltip">{{ $row->nama_event }}</span></a></li>
												</ul>
											</div>
											<div class="detail">
												<ul class="time-location">
													<li><i class="icon-clock"></i>{{ $row->tgl }}</li>
													<li><i class="icon-map-marker"></i>{{ $row->lokasi }}</li>
												</ul>
												<h3><a href="program-detail.html">{{ $row->nama_event }}</a></h3>
												<p>Sponsor : {{ $row->sponsor }}<br>Media Patner : {{ $row->media_patner }}<br>Email : {{ $row->email}}<br>Kontak : {{ $row->kontak}}</p>
											</div>
										</div>
										<?php 
									}
										?>
										<!-- Schedules Widget -->

										<!-- Schedules Widget -->

									</div>
									<!-- Days 1 -->

								</div>
								<!-- Tab Content -->

							</div>
						</div>
						<!-- Tabs -->

					</div>
					<!-- Schedules Tabs -->

				</div>
			</section>
			
			<!-- Our Best Sponsers -->
			<section class="tc-padding gray-bg">
				<div class="container">
					
					<!-- Main Heading -->
					<div class="main-heading-holder">
						<div class="main-heading">
							<h2><span>Sponsor & media patner</span></h2>
							<span class="icon-small-icon">
			                	
			                </span>
						</div>
					</div>
					<!-- Main Heading -->

					<!-- Sponsers List -->
					<div class="sponsers-list">
						
						<!-- List 1 -->
						<div class="sponsers-slider-holder">
							<div class="sponsers-title"><h3>Best<br> Sponsor</h3></div>
							<ul class="sponsers-slider">
								<li><a href="#"><img src="{{asset('assets')}}/images/sponsers/img-02.jpg" alt=""></a></li>
								<li><a href="#"><img src="{{asset('assets')}}/images/sponsers/img-02.jpg" alt=""></a></li>
								<li><a href="#"><img src="{{asset('assets')}}/images/sponsers/img-03.jpg" alt=""></a></li>
								<li><a href="#"><img src="{{asset('assets')}}/images/sponsers/img-02.jpg" alt=""></a></li>
								<li><a href="#"><img src="{{asset('assets')}}/images/sponsers/img-02.jpg" alt=""></a></li>
							</ul>
						</div>
						<!-- List 1 -->

						<!-- List 1 -->
						<div class="sponsers-slider-holder">
							<div class="sponsers-title"><h3>Best<br> Media Patner</h3></div>
							<ul class="sponsers-slider">
								<li><a href="#"><img src="{{asset('assets')}}/images/sponsers/img-01.jpg" alt=""></a></li>
								<li><a href="#"><img src="{{asset('assets')}}/images/sponsers/img-01.jpg" alt=""></a></li>
								<li><a href="#"><img src="{{asset('assets')}}/images/sponsers/img-01.jpg" alt=""></a></li>
								<li><a href="#"><img src="{{asset('assets')}}/images/sponsers/img-01.jpg" alt=""></a></li>
								<li><a href="#"><img src="{{asset('assets')}}/images/sponsers/img-01.jpg" alt=""></a></li>
							</ul>
						</div>
						<!-- List 1 -->

					</div>
					<!-- Sponsers List -->

				</div>
			</section>
			<!-- Our Best Sponsers -->

			
		</main>
		<!-- Mian Content -->
@endsection