	<!--start services-->
	<section class="r-bg-i sec-pad" id="service">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="sec-heading text-center pera-block">
						<h2>Voyez ce que nous <span class="ree-text rt40">pouvons</span> faire  <span class="ree-text rt40"> Ensemmble</span></h2>
						<p>Mes expériences professionnelles me permettent d'être aujourd'hui Autonome, Polyvalent et de disposer des compétences techniques pour vous proposez ses services</p>
					</div>
				</div>
			</div>
			<div class="row mt30">
                @foreach ($services as $service )
				<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
					<div class="ree-card r-bg-c mt60">
						<div class="ree-card-img shadows"><img src="{{asset($service->icon_service)}}" alt="services"> </div>
						<div class="ree-card-content mt40">
							<h3 class="mb15"><a href="service-details.html">{{$service->name_service}}</a></h3>
							<p>{{$service->description_service}}</p>
						</div>
						
					</div>
				</div>
                @endforeach
			</div>	
		</div>
	</section>
	<!--services end-->
