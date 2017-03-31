
			<!-- Header -->
		<header id="header" class="header">

			<!-- Nav Holder -->
			<div class="nav-holder style-1 after-clear">
				
				<div class="container">
					<div class="logo-bar after-clear">

						<!-- Logo -->
						<div class="logo">
							<a href="#"><img src="{{asset('assets')}}/images/logo-1.png" alt=""></a>
						</div>
						<!-- Logo -->

						

					</div>
				</div>

				<!-- Nav & search -->
				<div class="nav-nd-search after-clear">
					<div class="container-fluid row">
						<div class="p-relative after-clear col-md-8 col-md-offset-1">

							<!-- Nav List -->
							<nav class="dropdowns">
								<a class="toggleMenu" href="#"><i class="icon-navicon"></i></a>
								<ul class="nav-list after-clear">
									<li><a href="{{ url('/') }}">Home</a></li>
									<li><a href="{{ route('timeline.index') }}">Timeline</a></li>
									@If(Auth::user() != null)
									<li><a href="{{ route('event.create') }}">Buat Festival & Event</a></li>
									<li><a href="{{ route('panel.index')}}/{{Auth::user()->id_login }}">Panel</a></li>
									@endif
								</ul>
							</nav>

						</div>
						<div class="col-md-3">
							@If(Auth::user() != null)
							<nav class="dropdowns">
								<ul class="nav-list after-clear">
									<li class="dropdown-icon">
										<a href="#">Hello, {{Auth::user()->nama_usr}}</a>
										<ul>
											<li>
												<form action="{{ url('logout') }}" method="POST" role="form">
													{{ csrf_field() }}
												
													<button type="submit" class="btn btn-primary">Logout</button>
												</form>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
							@else
							<ul class="nav-list after-clear">
								<li><a href="" data-toggle="modal" data-target="#login"><i class="icon-sign-in"></i>&nbsp;&nbsp; Login</a></li>
							</ul>
							@endif
						</div>
					</div>
				</div>	
				<!-- Nav & search -->

			</div>
			<!-- Nav Holder -->