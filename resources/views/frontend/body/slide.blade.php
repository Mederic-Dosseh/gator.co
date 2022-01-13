	<!--start Hero Section  -->
	<section class="home-hero-pp" id="home">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 vcenter">
					<div class="hero-content-pp pera-block">
						<span class="sub-heading2 mb15 r-bg-x">Salut, je suis</span>
						<h1 class="mb20">{{$slide->name}}</h1>
						<h5>{{$slide->short_des}}</h5>
						<p class="h-light" data-aos="fade-in" data-aos-delay="500">{{$slide->long_des}}</p>
						<a href="get-quote.html" class="ree-btn  ree-btn-grdt1 mt40 mw-80" data-aos="fade-in" data-aos-delay="800">{{$slide->button_text}}<i class="fas fa-arrow-right fa-btn"></i></a>
					</div>
				</div>
				<div class="col-lg-4 vcenter">
					<div class="sol-image m-mt30">
						<img src="{{asset($slide->image_slide)}}" alt="web" class="img-fluid" data-aos="fade-in" data-aos-delay="400">
					</div>
				</div>
				<div class="col-lg-4 vcenter">
					<div class="hero-right-cnt">

						<div class="media">
							<div class="ree-icon-set ree-stat-icn">
								<img src="{{asset('frontend/images/icons/briefcase.svg')}}" alt="web" class="w-100">
							</div>
							<div class="ree-details-set user-info">
								<h4>{{$slide->year_experience}}+</h4>
								<p>{{$slide->experience}}</p>
							</div>
						</div>

						<div class="media mt40">
							<div class="ree-icon-set ree-stat-icn">
								<img src="{{asset('frontend/images/icons/websites.svg')}}" alt="web" class="w-100">
							</div>
							<div class="ree-details-set user-info">
								<h4>{{$slide->quantity_project}}+</h4>
								<p>{{$slide->project_text}}</p>
							</div>
						</div>

						<div class="media mt40">
							<div class="ree-icon-set ree-stat-icn">
								<img src="{{asset('frontend/images/icons/happyclients.svg')}}" alt="web" class="w-100">
							</div>
							<div class="ree-details-set user-info">
								<h4>{{$slide->client_reviews}}%</h4>
								<p>{{$slide->client_reviews_text}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--hero Section End-->
