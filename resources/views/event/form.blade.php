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
							<h2><span>Festival & event</span></h2>
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
										<li class="active"><a href="#schedules-tab1" role="tab" data-toggle="tab">ISIKAN<span>FORM</span></a></li>
									</ul>
								</div>
								<!-- Tab Nav -->

								<!-- Tab Content -->
								<div class="tab-content">

									<!-- Days 1 -->
									<div role="tabpanel" class="tab-pane active" id="schedules-tab1">

										<!-- Schedules Widget -->
											<div class="detail">
												<form action="{{ !empty($timeline->id_event) ? route('timeline.update', @$timeline->id_event):route('timeline.store')}}" method="POST" enctype="multipart/form-data">
												 @if(!empty($timeline->id_event))
											      <input type="hidden" name="_method" value="PUT">
											      @endif

											      {!! csrf_field() !!}
												  <div class="form-group">
												  	<div class="col-md-12 card card-fill">
												  	<input type="hidden" name="id_login" value="{{Auth::user()->id_login}}">
                                                        <div class="card-user text-center">
                                                            <div class="content text-center">
                                                                <div class="author">
																	<center>
																		<img id="image-preview" alt="image preview" class="text-center foto" />
																	</center>
																</div>
                                                                <p class="description text-center"></p>
                                                                <hr>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
												  </div>
												  <div class="form-group">
												  	<label for="username">Poster Festival/Event</label>
                                                        <div class="form-group">
                                                            <input class="form-control" type="file" name="foto" id="image-source" onchange="previewImage();"/>
                                                        </div>
												  </div>
												  <div class="form-group">
												    <label for="username">Nama Festival/Event</label>
												    <input type="text" class="form-control" name="nama_event" id="email" placeholder="Nama Festival/Event" value="{{old('nama_event',@$timeline->nama_event)}}">
												  </div>
												  <div class="form-group">
												    <label for="tempat_lahir">Lokasi</label>
												    <textarea class="form-control" placeholder="Lokasi" name="lokasi">{{old('lokasi',@$timeline->lokasi)}}</textarea>
												  </div>
												  <div class="form-group">
												    <label for="tgl_lahir">Tanggal Pelaksanaan</label>
												    <input type="date" name="tgl" class="form-control" id="pwd" placeholder="Tanggal Pelaksanaan" value="{{old('tgl',@$timeline->tgl)}}">
												  </div>
												  <div class="form-group">
												    <label for="tgl_lahir">Email</label>
												    <input type="email" class="form-control" id="pwd" placeholder="Example@mail.id" value="{{old('email',@$timeline->email)}}" name="email">
												  </div>
												  <div class="form-group">
												    <label for="tgl_lahir">No Telp</label>
												    <input type="number" class="form-control" id="pwd" name="no_telp" placeholder="08" value="{{old('no_telp',@$timeline->no_telp)}}">
												  </div>
												  <div class="form-group">
												    <label for="tgl_lahir">Kontak Lain</label>
												    <textarea class="form-control" placeholder="WA, BBM, LINE" name="kontak">{{old('kontak',@$timeline->kontak)}}</textarea>
												  </div>
												  <div class="form-group">
												    <label for="tgl_lahir">Sponsorship</label>
												    <textarea class="form-control" placeholder="Sponsorship" name="sponsor">{{old('sponsor',@$timeline->sponsor)}}</textarea>
												  </div>
												  <div class="form-group">
												    <label for="tgl_lahir">Media Patner</label>
												    <textarea class="form-control" placeholder="Media Patner" name="media_patner">{{old('media_patner',@$timeline->media_patner)}}</textarea>
												  </div>

												  <button type="submit" class="text-center btn btn-default">Simpan</button>
												</form>
											</div>
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
			<!-- Our Upcoming Schedules -->

			</div>
		</main>
		<script>

         
    function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
 
    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
         
</script>   
		<!-- Mian Content -->
@endsection