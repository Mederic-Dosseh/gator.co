@extends('backend.index')
@section('content')

                    <h4 class="mb-0">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Gato</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end mt-2">
                            <div id="total-revenue-chart"></div>
                        </div>
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">2</span></h4>
                            <p class="text-muted mb-0">Nombre Utilisateurs</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end mt-2">
                            <div id="orders-chart"> </div>
                        </div>
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{count($travaux)}}</span></h4>
                            <p class="text-muted mb-0">Nombre de projects</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end mt-2">
                            <div id="customers-chart"> </div>
                        </div>
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">0</span></h4>
                            <p class="text-muted mb-0">Nombre clients</p>
                        </div>

                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">

                <div class="card">
                    <div class="card-body">
                        <div class="float-end mt-2">
                            <div id="growth-chart"></div>
                        </div>
                        <div>
                            <h4 class="mb-1 mt-1">+ <span data-plugin="counterup">10</span></h4>
                            <p class="text-muted mb-0">Nombre Visiteurs</p>
                        </div>
                        </p>
                    </div>
                </div>
            </div> <!-- end col-->
        </div> <!-- end row-->

        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        
                        <h4 class="card-title mb-4">Demande de Contact</h4>


                                        
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>ID</th>
                                                        <th>Nom Complet</th>
                                                        <th>Numéro</th>
                                                        <th>Type Service</th>
                                                        <th>Message</th>
                                                        <th>Date</th>
                                                        
                
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ( $contact as $c )
                                                        
                                                    
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td>

                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">{{$c->id}}</a> </td>
                                                        <td>{{$c->nom}}</td>
                                                        <td>{{$c->phone}}</td>
                                                        <td>{{$c->sujet}}</td>
                                                        <td>{{$c->message}}</td>
                                                        <td>{{Carbon\carbon::parse($c->created_at)->diffForHumans() }}</td>
                                                    </tr>
                                                    @endforeach
                
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                
                        

                        
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-4">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-sm-8">
                                <p class="text-white font-size-18">Enregistrer un nouveau <b>Paiement</b><i class="mdi mdi-arrow-right"></i></p>
                                <div class="mt-4">
                                    <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">Enregistrer!</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mt-4 mt-sm-0">
                                    <img src="{{asset('assets/images/setup-analytics-amico.svg')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <div class="float-end">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Monthly</a>
                                    <a class="dropdown-item" href="#">Yearly</a>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                </div>
                            </div>
                        </div>

                        <h4 class="card-title mb-4">Top Selling Products</h4>


                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> Desktops </p>
                            </div>

                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-primary" role="progressbar"
                                        style="width: 52%" aria-valuenow="52" aria-valuemin="0"
                                        aria-valuemax="52">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-info me-2"></i> iPhones </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-info" role="progressbar"
                                        style="width: 45%" aria-valuenow="45" aria-valuemin="0"
                                        aria-valuemax="45">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-success me-2"></i> Android </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-success" role="progressbar"
                                        style="width: 48%" aria-valuenow="48" aria-valuemin="0"
                                        aria-valuemax="48">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-warning me-2"></i> Tablets </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-warning" role="progressbar"
                                        style="width: 78%" aria-valuenow="78" aria-valuemin="0"
                                        aria-valuemax="78">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-purple me-2"></i> Cables </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-purple" role="progressbar"
                                        style="width: 63%" aria-valuenow="63" aria-valuemin="0"
                                        aria-valuemax="63">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end Col -->
        </div> <!-- end row-->



        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Paiement entrants</h4>
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Devis ID</th>
                                        <th>Nom Complet</th>
                                        <th>Numéro</th>
                                        <th>Type Service</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2540</a> </td>
                                        <td>Neal Matthews</td>
                                        <td>
                                            07 Oct, 2019
                                        </td>
                                        <td>
                                            $400
                                        </td>
                                        <td>
                                            <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                        </td>
                                        <td>
                                            <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>

                                   
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->




@endsection
