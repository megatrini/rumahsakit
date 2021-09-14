<title>Dashboards | Klinik Siaga COVID-19</title>
@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<h3 class="page-title">Hallo {{auth()->user()}}
								<p> Selamat Datang :) </P>
							</h3>
							<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">
									<h3 class="panel-title">Klinik Siaga COVID-19 </h3>
									<p class="panel-subtitle">Pelayanan Cepat dan Tanggap 24 Jam</p>
								</div>
								<div class="panel-body">
									<h4> Informasi COVID-19 </h4>
									<p>
										<h5> Penyakit virus corona (COVID-19) adalah penyakit menular yang disebabkan oleh virus corona yang baru-baru ini ditemukan.
											Sebagian besar orang yang tertular COVID-19 akan mengalami gejala ringan hingga sedang dan akan pulih tanpa penanganan khusus. </h5>
									</p>
								</div>
							</div>

							<!-- END PANEL HEADLINE -->
						</div>
						<div class="col-md-4">
							<!-- PANEL NO PADDING -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"></h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body ">
									<a href="index.html"><img src="{{asset('admin/corona.jpg')}}" alt="Klorofil Logo" class="img-responsive logo"></a>

								</div>
							</div>
						</div>
						<!-- END PANEL NO PADDING -->
					</div>
				</div>

				<!-- PANEL SCROLLING -->

			</div>
		</div>
		@stop