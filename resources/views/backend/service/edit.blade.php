@extends('backend.index')
@section('content')
<h4 class="mb-0">Modifier Service</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Modifier un service</h4>
                <p class="card-title-desc">Parsley is a javascript form validation
                    library. It helps you provide your users with feedback on their form
                    submission before sending it to your server.</p>

                <form class="custom-validation" action="{{route('update.service')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <input type="hidden" name="old_icon" value="{{ $service->icon_service }}">
                    <input type="hidden" name="old_image" value="{{ $service->image_service }}">
                    <input type="hidden" name="id" value="{{$service->id}}">
                    <div class="mb-3">
                        <label class="form-label">Nom du service</label>
                        <input type="text" class="form-control" required value="{{$service->name_service}}" name="name_service" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description du service </label>
                        <div>
                            <textarea required class="form-control" rows="5" value="{{$service->description_service}}" name="description_service" >{{$service->description_service}}</textarea>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ajouter image du service</label>
                        <input type="file" class="form-control"  name="image_service" value="{{ $service->image_service}}" />
                    </div>

                    <div class="mb-3">

                        <img src="{{ asset($service->image_service) }}" alt="" style="height:200; width:400px;"/>

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ajouter une icon</label>
                        <input type="file" class="form-control"  name="icon_service"  value="{{ $service->icon_service}}" />
                    </div>

                    <div class="mb-3">

                        <img src="{{ asset($service->icon_service) }}" alt="" style="height:200; width:400px;"/>

                    </div>

                    <div>
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                               Mettre à jour
                            </button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->

</div> <!-- end row -->
@endsection
