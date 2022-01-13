<!--start work-->
<section class="r-bg-a sec-pad" id="work">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-8 vcenter">
                <div class="heading-hz-btn">
                    <h2>Mes<span class="ree-text rt40">Réalisations</span></h2>
                </div>
            </div>
            <div class="col-lg-6 col-sm-4 vcenter">
               <!-- <div class="link-sol-header">
                    <a href="portfolio" class="ree-card-link">Voir tout <i class="fas fa-arrow-right fa-btn"></i></a>
                </div> -->
            </div>
        </div>
        <div class="row mt60">
            <div class="col-lg-12">
                <div class="full-work-block  owl-carousel">

                    @foreach ( $travaux as $t )
                    
                    <div class="fwb-main-x fwb-a">
                        <div class="work-thumbnails">
                        <a href="{{$t->lien}}"  target="_blank"><img src="{{asset($t->image_travaux)}}" alt="portfolio reevan" class="img-fluid"> </a>
                        </div>
                        <div class="work-details">
                            <p class="mb10">{{$t->nom}} : {{$t->technologie}}</p>
                            <h4><a href="#"> {{$t->description}}</a> </h4>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!--end work-->
