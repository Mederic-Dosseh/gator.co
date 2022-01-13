@extends('backend.index')
@section('content')

<div class="main-content">

    <div class="page-content">
        

            <div class="row">
                <div class="col-xl-8">
                    <div class="custom-accordion">
                        <div class="card">
                            <a href="#checkout-billinginfo-collapse" class="text-dark" data-bs-toggle="collapse">
                                <div class="p-4">
                                    
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="uil uil-receipt text-primary h2"></i>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-16 mb-1">Entrez vos informations</h5>
                                            <p class="text-muted text-truncate mb-0">Sed ut perspiciatis unde omnis iste</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                        </div>
                                    </div>
                                    
                                </div>
                            </a>

                            <div id="checkout-billinginfo-collapse" class="collapse show">
                                <div class="p-4 border-top">
                                    <form method="post" action="{{route('payaction')}}">
                                        @csrf
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-3 mb-4">
                                                            <label class="form-label">Montant à payez ( CFA )</label>
                                                            <input class="form-control" type="number" name="montant" min=500 required>                      
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-3 mb-4">
                                                        <label class="form-label" >Nom complet</label>
                                                        <input type="text" name="nom" class="form-control"  placeholder="Entrer votre nom"  required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-3 mb-4">
                                                        <label class="form-label" for="billing-email-address">E-mail</label>
                                                        <input type="email"  name="email" class="form-control" id="billing-email-address" placeholder="Entrer votre email" required>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label" for="billing-address">Note de commande</label>
                                                <textarea class="form-control" id="billing-address" rows="3" name="note" placeholder="Entrez note de commande" ></textarea>
                                            </div>

                                            
                                        </div>
                                    
                                </div>
                            </div>
                        </div>

                       

                        <div class="card">
                            <a href="#checkout-paymentinfo-collapse" class="collapsed text-dark" data-bs-toggle="collapse">
                                <div class="p-4">
                                    
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="uil uil-bill text-primary h2"></i>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-16 mb-1">Moyens de Paiements</h5>
                                            <p class="text-muted text-truncate mb-0">Duis arcu tortor, suscipit eget</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                        </div>
                                    </div>
                                    
                                </div>
                            </a>

                            <div id="checkout-paymentinfo-collapse" class="collapse">
                                <div class="p-4 border-top">
                                    <div>
                                        <h5 class="font-size-14 mb-3">Payment method :</h5>

                                        <div class="row">

                                            <div class="col-lg-3 col-sm-6">
                                                <div data-bs-toggle="collapse">
                                                    <label class="card-radio-label">
                                                        <input type="radio" name="paymethode" value="paytech" id="pay-methodoption1" class="card-radio-input">

                                                        <span class="card-radio text-center text-truncate">
                                                            <i class="uil uil-postcard d-block h2 mb-3"></i>
                                                            Carte Bancaire / Wave
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <label class="card-radio-label">
                                                        <input type="radio" name="paymethode" value="paytech" id="pay-methodoption2" class="card-radio-input">

                                                        <span class="card-radio text-center text-truncate">
                                                            <i class="uil uil-money-bill d-block h2 mb-3"></i>
                                                            <span>Orange Money / Free Money</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <label class="card-radio-label">
                                                        <input type="radio" name="paymethode" value="paygate" id="pay-methodoption3" class="card-radio-input">

                                                        <span class="card-radio text-center text-truncate">
                                                            <i class="uil uil-money-bill d-block h2 mb-3"></i>
                                                            Tmoney / Flooz
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <label class="card-radio-label">
                                                        <input type="radio" name="paymethode" value="paypal" id="pay-methodoption4" class="card-radio-input">

                                                        <span class="card-radio text-center text-truncate">
                                                            <i class="uil uil-paypal d-block h2 mb-3"></i>
                                                            PayPal
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                            
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row my-4">
                        <div class="col">
                            <a href="/" class="btn btn-link text-muted">
                                <i class="uil uil-arrow-left me-1"></i> Annuler </a>
                        </div> <!-- end col -->
                        <div class="col">
                            <div class="text-end mt-2 mt-sm-0">
                                <button class="btn btn-success">
                                    <i class="uil uil-shopping-cart-alt me-1"></i> Payez Maintenant</button>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </form>
                </div>
                <div class="col-xl-4">
                    <div class="card checkout-order-summary">
                        <div class="card-body">
                            <div class="p-3 bg-light mb-4">
                                <h5 class="font-size-16 mb-0">Informations sur les Paiements <span class="float-end ms-2"></span></h5>
                            </div>
                            <div class="table-responsive">
                               <p>
                                Le FC Barcelone continue son agonie. Après la lourde défaite face au Bayern Munich en ligue des Champions, puis le récent match nul concédé au Camp Nou face à une faible équipe de Grenade, c'est encore un match nul et vierge que vient de réaliser le Barça sur la pelouse de Cadix, pourtant largement à la portée des hommes de Koeman.
                               </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    

@endsection