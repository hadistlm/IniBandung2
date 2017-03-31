@extends('template.main')
@section('content')
<main id="main-content" class="main-coontent">
			<div class="container">

				<!-- Our Upcoming Schedules -->
			<section class="tc-padding">
				<div class="container">

					<!-- Main Heading -->
					<div class="main-heading-holder">
						<div class="main-heading">
							<h2><span>panel Akun</span></h2>
						</div>
					</div>
					<!-- Main Heading -->

					<!-- Schedules Tabs -->
					<div class="row">

						<!-- Tabs -->
						<div class="col-xs-12">
							<div class="tabs-holder mt-50">

								<!-- Tab Nav -->
								<div class="schedules-tab-nav" role="tablist">
									<ul>
										<li class="active"><a href="#schedules-tab1" role="tab" data-toggle="tab">Kelola<span>Akun</span></a></li>
										<li><a href="#schedules-tab2" role="tab" data-toggle="tab">Kelola<span>Event</span></a></li>
									</ul>
								</div>
								<!-- Tab Nav -->

								<!-- Tab Content -->
								<div class="tab-content">

									<!-- Days 1 -->
									<div role="tabpanel" class="tab-pane active" id="schedules-tab1">

										<!-- Schedules Widget -->
										<div class="schedules-widget">
											<div class="speaker-imgs">
												<ul>
													<li><a href="#"><img src="{{asset('assets')}}/images/profile.png" alt="" style="width: 50%;" ><span class="toltip">Saya</span></a></li>
												</ul>
											</div>
											<div class="detail">
												<form>
  												 <div class="form-group">
												    <label for="username">Nama</label>
												    <input type="text" class="form-control" id="email" placeholder="Username" value="{{Auth::user()->nama_usr}}">
												  </div>
												  <div class="form-group">
												    <label for="username">Username</label>
												    <input type="text" class="form-control" id="email" placeholder="Username" value="{{Auth::user()->username}}">
												  </div>
												  <div class="form-group">
												    <label for="tempat_lahir">Tempat Lahir</label>
												    <input type="text" class="form-control" id="pwd" placeholder="Tempat Lahir" value="{{Auth::user()->tempat_lahir}}">
												  </div>
												  <div class="form-group">
												    <label for="tgl_lahir">Tanggal Lahir</label>
												    <input type="date" class="form-control" id="pwd" placeholder="Tanggal Lahir" value="{{Auth::user()->tgl_lahir}}">
												  </div>
												  <div class="form-group">
												    <label for="tgl_lahir">Email</label>
												    <input type="email" class="form-control" id="pwd" placeholder="Example@mail.id" value="{{Auth::user()->email}}">
												  </div>
												  <div class="form-group">
												    <label for="tgl_lahir">No Telp</label>
												    <input type="number" class="form-control" id="pwd" placeholder="08" value="{{Auth::user()->no_telp}}">
												  </div>

												  <button type="submit" class="btn btn-default" disabled>Simpan</button>
												</form>
											</div>
										</div>
										<!-- Schedules Widget -->
									</div>
									<!-- Days 1 -->

									<!-- Days 2 -->
									<div role="tabpanel" class="tab-pane fade" id="schedules-tab2">

										<!-- Schedules Widget -->
										<div class="schedules-widget">
											 <table id="example1" class="table table-striped table-hover">
					                            <thead>
					                                <tr>
					                                    <th>No</th>
					                                    <th>Poster</th>
					                                    <th>Nama Event</th>
					                                    <th>Tanggal</th>
					                                    <th>Lokasi</th>
					                                    <th>Sponsor</th>
					                                    <th>Media Patner</th>
					                                    <th>Aksi</th>
					                                   
					                                </tr>
					                            </thead>
					                            
					                            <tbody>
					                                <?php
					                                    $i = 1;
					                                    foreach($result as $row){ ?>
					                                <tr>
					                                    <td>{{ $i++ }}</td>
					                                    <td><img class="img-responsive text-center" style="width: 100px; height: 100px;" src="{{asset('uploads')}}/{{ $row->foto }}" alt="Avatar"></td>
					                                    <td>{{ $row->nama_event }}</td>
					                                    <td>{{ $row->tgl }}</td>
					                                    <td>{{ $row->lokasi }}</td>
														<td>{{ $row->sponsor }}</td>
														<td>{{ $row->media_patner }}</td>
					                                    <td>
					                                        <a href="{{ route('timeline.edit', @$row->id_event) }}">
					                                            <i class="btn btn-sm btn-primary">Edit</i>
					                                        </a>
					                                        
					                                        <form action="{{ route('timeline.destroy', @$row->id_event) }}" method="POST">
					                                         {{ method_field('DELETE') }}
				                                             {{ csrf_field() }}
					                                             <button type="submit" class="btn btn-primary">
					                                                Hapus
					                                            </button>
					                                        </form>
					                                    </td>
					                                </tr>
					                                <?php } ?>
					                            </tbody>
					                        </table>
										</div>
										<!-- Schedules Widget -->
									</div>
									<!-- Days 2 -->
								</div>
								<!-- Tab Content -->
							</div>
						</div>
						<!-- Tabs -->
					</div>
					<!-- Schedules Tabs -->

				</div>
			</section>
			<!-- Our Upcoming Schedules -->

			</div>
		</main>
		<!-- Mian Content -->
@endsection