@extends('template.main')
@section('content')
<style>
				.card {
				    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2);
				    transition: 0.3s;
				    background-color: #ffffff;
				    width: 35%;
				}

				.card:hover {
				    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
				}

				.container {
				    padding: 2px 16px;
				}

				#overlay {
				    position: fixed;
				    display: none;
				    width: 100%;
				    height: 100%;
				    top: 0;
				    left: 0;
				    right: 0;
				    bottom: 0;
				    background-color: rgba(0,0,0,0.5);
				    z-index: 10;
				    cursor: pointer;
				}
			</style>
		<main id="main-content" class="main-coontent">
			<div class="container">

				<!-- Our Upcoming Schedules -->
			<section class="tc-padding">
				<div class="container">

					<!-- Main Heading -->
					<div class="main-heading-holder">
						<div class="main-heading">
							<h2><span>Timeline</span></h2>
						</div>
					</div>
					@include('template.feedback')
					<!-- Main Heading -->

					<!-- Schedules Tabs -->
					
					
				<div class="row">
					<div class="col-xs-12">
							<div class="tabs-holder mt-50">

						<?php
                        $i = 1;
                        foreach($result as $row){ ?>

                        <div class="col-md-4">
							<div class="container" style="width: 80%; margin-top: 5%;">
								<div class="card" style="margin-bottom: 5%; width: 100%; border: 1px solid #646464 ; padding: 5px;">
								  	<img class="img-responsive text-center" style="width: 250px; height: 250px;" src="{{asset('uploads')}}/{{ $row->foto }}" alt="Avatar">
								  	<hr style="width: 80%; border: 1px solid #646464;">
								  	<div class="row" style="padding-left: 17px;">
								    	<h4 style="padding-top: 10px;"><b>{{ $row->nama_event }}</b></h4> 
								    	<p>Tanggal : {{ $row->tgl }}</p> 
								    	<p>Lokasi : {{ $row->lokasi }}</p> 
								    	<p>Sponsor : {{ $row->sponsor }}</p> 
								    	<p>Media : {{ $row->media_patner }}</p>
								  	</div>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					</div>

					
					<!-- Schedules Tabs -->

				</div>
			</section>
			<!-- Our Upcoming Schedules -->

			</div>
		</main>
		<!-- Mian Content -->
@endsection