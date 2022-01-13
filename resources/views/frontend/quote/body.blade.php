<!-- Quote body--->
<div class="contact-form-sec sec-pad r-bg-d">
    <div class="container">

            <div class="row flx-end">
                <div class="col-lg-6">
                    <div class="sec-heading m-center">
                        <span class="sub-heading mb15">DEMANDES</span>
                        <h2 class="mb15"><span class="ree-text rt40">Approuvé</span> par les milliers</h2>
                        <p>Nous serions heureux d'avoir de vos nouvelles, veuillez remplir le formulaire ci-dessous ou envoyez-nous vos besoins par courrier</p>
                    </div>
                    <div class="trust-logo-block mt60">
                        <ul class="ree-card">
                            <li><img src="{{asset('frontend/images/brand-logo/nunu.png')}}" alt="logo"></li>
                            <li><img src="{{asset('frontend/images/brand-logo/amak.png')}}" alt="logo"></li>
                            <li><img src="{{asset('frontend/images/brand-logo/baltyshop.jpeg')}}" alt="logo"></li>
                            <li><img src="{{asset('frontend/images/brand-logo/groupekassir.png')}}" alt="logo"></li>
                            <li><img src="{{asset('frontend/images/brand-logo/souley.jpeg')}}" alt="logo"></li>
                            <li><img src="{{asset('frontend/images/brand-logo/partner-logo-6.svg')}}" alt="logo"></li>

                        </ul>
                    </div>

                    <div class="ree-card mt30 trust-review owl-carousel">
                        <div class="items">
                            <div class="review-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type.</p>
                            </div>
                            <div class="ree-row-set mt30">
                                <div class="media vcenter">
                                    <div class="ree-icon-set img-round80"><img src="{{asset('frontend/images/users/user4.jpg')}}" alt="img" class="img-fluid"></div>
                                    <div class="ree-details-set user-info">
                                        <h5>Lora Myka</h5>
                                        <p>ABC Business, <small>Jaipur, Rajasthan</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="items">
                            <div class="review-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type.</p>
                            </div>
                            <div class="ree-row-set mt30">
                                <div class="media vcenter">
                                    <div class="ree-icon-set img-round80"><img src="{{asset('frontend/images/users/user4.jpg')}}" alt="img" class="img-fluid"></div>
                                    <div class="ree-details-set user-info">
                                        <h5>Lora Myka</h5>
                                        <p>ABC Business, <small>Jaipur, Rajasthan</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-contact-hom m-mt60">
                        <div class="form-block bg-w">
                            <div class="form-head"><h4>Please fill in the form below or mail us your requirements :)
                            </h4></div>
                            <div class="form-body">
                                <form action="{{route('contact')}}" method="post" name="feedback-form">
                                    @csrf
                                    <div class="fieldsets row">
                                        <div class="col-md-6"><input type="text" placeholder="Votre nom" name="nom" required></div>
                                        <div class="col-md-6"><input type="email" placeholder="Email Address" name="email" required></div>
                                    </div>
                                    <div class="fieldsets row">
                                        <div class="col-md-6"><input type="text" placeholder="Numéro téléphone" name="phone" required></div>
                                        <div class="col-md-6"><input type="text" placeholder="Pays" name="pays" required></div>
                                    </div>
                                    <div class="fieldsets row">

                                        <div class="col-md-6"><input type="text" placeholder="Subject"></div>
                                        <div class="col-md-6"><select name="sujet">
                                            <option value="false">interested in</option>
                                            <option value="Web Design">Web Design</option>
                                            <option value="Graphic Design">Graphic Design</option>
                                            <option value="App Development">App Development</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Business Development" >Business Development</option>
                                            <option value="Other" >Autres...</option>
                                        </select></div>
                                    </div>
                                    <div class="fieldsets"><textarea placeholder="Message" name="message"></textarea></div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck"  checked="checked">
                                        <label class="custom-control-label label-f-form" for="customCheck">I agree to the <a href="#">Terms &amp; Conditions</a> of gatojunior.co .</label>
                                    </div>
                                    <div class="fieldsets mt20"> <button type="submit" name="submit" class="ree-btn  ree-btn-grdt1 w-100">envoyez votre demande <i class="fas fa-arrow-right fa-btn"></i></button> </div>
                                    <p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>

                                    <div class="form-btm-set text-center mt15">
                                    <h5>We Deliver</h5>

                                    <div class="icon-setss mt20">

                                        <div class="icon-rows">
                                            <div class="icon-imgg"><img src="{{asset('frontend/images/icons/money.svg')}}" alt="#"></div>
                                            <div class="icon-txt"><p>Best Price</p> </div>
                                        </div>
                                        <div class="icon-rows">
                                            <div class="icon-imgg"><img src="{{asset('frontend/images/icons/quality.svg')}}" alt="#"></div>
                                            <div class="icon-txt"><p>Quality Service</p> </div>
                                        </div>
                                        <div class="icon-rows">
                                            <div class="icon-imgg"><img src="{{asset('frontend/images/icons/call-agent.svg')}}" alt="#"></div>
                                            <div class="icon-txt"><p>Good Support</p> </div>
                                        </div>
                                        <div class="icon-rows">
                                            <div class="icon-imgg"><img src="{{asset('frontend/images/icons/satisfaction.svg')}}" alt="#"></div>
                                            <div class="icon-txt"><p>Satisfaction</p> </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!--contact info end-->

