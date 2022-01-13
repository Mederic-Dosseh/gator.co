@extends('backend.index')
@section('content')
                                    <h4 class="mb-0">Travaux</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-12 col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <h5>Les services disponibles</h5>

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-inline float-md-end">
                                                        <div class="search-box ms-2">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control bg-light border-light rounded" placeholder="Search...">
                                                                <i class="mdi mdi-magnify search-icon"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>




                                            <div class="row">
                                                @foreach ($travaux as $service )


                                                <div class="col-xl-4 col-sm-6">
                                                    <div class="product-box">
                                                        <div class="product-img pt-4 px-4">
                                                            <div class="product-ribbon badge ">
                                                                <form action="{{route('edit.travaux')}}" method="post" >
                                                                    @csrf
                                                                <input type="hidden" name="id" value="{{$service->id}}" readonly>
                                                                <button type="submit" class="btn bg-warning" name="button" value="btn_update">
                                                                  Modifier
                                                                </button>
                                                                <button type="submit" name="button" value="btn_delete" class="btn bg-danger">
                                                                    Supprimer
                                                                </button>
                                                             </form>


                                                            </div>
                                                            <div class="product-wishlist">
                                                                <a href="#">
                                                                    <i class="mdi mdi-heart-outline"></i>
                                                                </a>
                                                            </div>
                                                            <img src="{{asset($service->image_travaux)}}" alt="" class="img-fluid mx-auto d-block">
                                                        </div>

                                                        <div class="text-center product-content p-4">

                                                            <h5 class="mb-1"><a href="#" class="text-dark">{{$service->name}}</a></h5>
                                                            <p class="text-muted font-size-13">{{Carbon\carbon::parse($service->created_at)->diffForHumans() }}</p>

                                                        </div>
                                                    </div>
                                                </div>

                                                @endforeach


                                            </div>
                                            <!-- end row -->


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

@endsection

