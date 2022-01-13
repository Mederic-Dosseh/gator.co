@extends('backend.index')
@section('content')
                                 <h4 class="mb-0">Validation</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Ajouter un service</h4>
                                        <p class="card-title-desc">Parsley is a javascript form validation
                                            library. It helps you provide your users with feedback on their form
                                            submission before sending it to your server.</p>

                                        <form class="custom-validation" action="{{route('store.travaux')}}" enctype="multipart/form-data" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Nom</label>
                                                <input type="text" class="form-control" required name="name" />
                                            </div>


                                            <div class="mb-3">
                                                <label class="form-label">Lien</label>
                                                <input type="url" class="form-control" required name="lien" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Technologie </label>
                                                <div>
                                                    <textarea required class="form-control" rows="2" name="technologie" ></textarea>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Description </label>
                                                <div>
                                                    <textarea required class="form-control" rows="5" name="description" ></textarea>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Ajouter image du service</label>
                                                <input type="file" class="form-control" required name="image_travaux" />
                                            </div>

                                            
                                            <div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                       Ajouter
                                                    </button>

                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div> <!-- end col -->

                        </div> <!-- end row -->
@endsection
