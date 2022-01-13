	 <!--start contact block-->
	 <section class="sec-pad reebga" id="contact">
		<div class="container">
		   <div class="row zup">
			  <div class="col-right-a">
				 <div class="sec-heading">
					<span class="sub-heading mb15">Contact</span>
					<h2> <span class="ree-text rt40">Entrons en </span>contact</h2>
				 </div>
				 <div class="home-contact-blocks mt60">
					<div class="contact-infos">
					   <div class="c-infot"> <span>Téléphone</span> <a href="tel:+221778726229"><i class="fas fa-phone-alt"></i> +221 77 872 62 29</a> </div>
					   <div class="c-infot"> <span>WhatsApp</span> <a href="tel:+221778726229"><i class="fas fa-phone-alt"></i> +221 77 872 62 29</a> </div>
					</div>
					<div class="contact-infos mt35">
					   <div class="c-infot"> <span>Email</span> <a href="mailto:contact@gatojunior.co"><i class="fas fa-envelope"></i>contact@gatojunior.co</a> </div>
					   <div class="c-infot"> <span>Connect on Skype</span> <a href="https://join.skype.com/invite/HAVeRmF4V9EF"><i class="fab fa-skype"></i> gatojunior.co</a> </div>
					</div>
					<div class="our-map mt40">
					   <p class="mb5">Ma localisation</p>
					   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.7110806597834!2d-17.485139184720158!3d14.728919777866865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec113d0c8ec15fb%3A0x6fc7ef47fa4b96d1!2sOuakam%20Terminus%20TATA%20N%3A44%20et%2042!5e0!3m2!1sfr!2ssn!4v1630104265537!5m2!1sfr!2ssn" allowfullscreen="" loading="lazy"></iframe>
					   
					</div>
				 </div>
			  </div>
			  <div class="col-right-b">
				 <div class="form-contact-hom">
					<div class="form-blocks">
					   <form action="{{route('contact')}}" method="post" name="feedback-form">
						   @csrf
						  <h3>Entrons en contact et <br>partagez votre idée.</h3>
						  <div class="fieldsets row mt40">
							 <div class="col-md-6">
								<input type="text" placeholder="Votre Nom" name="nom" class="input-ree" required>
							 </div>
							 <div class="col-md-6">
								<input type="email" placeholder="Votre adresse Email" name="email" class="input-ree" required>
							 </div>
						  </div>
						  <div class="fieldsets row">
							 <div class="col-md-6">
								<input type="telephone" placeholder="Numéro Téléphone" name="phone" class="input-ree" required>
							 </div>
							 <div class="col-md-6">
								<input type="text" placeholder="Pays" name="pays" class="input-ree" required>
							 </div>
						  </div>
						  <div class="fieldsets row">
							 <div class="col-md-6">
								<input type="text" placeholder="Subject"  class="input-ree">
							 </div>
							 <div class="col-md-6">
								<select class="input-ree" name="sujet">
									<option value="web">Site Web</option>
								    <option value="Mobile">Application Mobile</option>
									<option value="referencement">Référencement SEO / SEA</option>
									<option value="code">Révision de code</option>
									<option value="Autre">Autres</option>
								</select>
							 </div>
						  </div>
						  <div class="fieldsets">
							 <textarea placeholder="Message" name="message" class="input-ree"></textarea>
						  </div>
						  <div class="custom-control custom-checkbox">
							 <input type="checkbox" class="custom-control-input"  checked="checked" required>
							 <label class="custom-control-label label-f-form" for="customCheck">J'accepte les <a href="#">Termes &amp; Conditions</a> de gatojunior.co.</label>
						  </div>
						  <div class="fieldsets mt20">
							 <button type="submit" name="submit" class="ree-btn  ree-btn-grdt1 no-shadows">Envoyez votre demande <i class="fas fa-arrow-right fa-btn"></i></button>
						  </div>
					   </form>
					</div>
				 </div>
			  </div>
		   </div>
		</div>
	 </section>
	 <!--end contact block-->
