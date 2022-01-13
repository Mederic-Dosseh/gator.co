@extends('backend.index')
@section('content')
<h4 class="mb-0">Page home slide</h4>



</div>
</div>
</div>
<!-- end page title -->

<div class="row">
<div class="col-lg-12">
<div id="addproduct-accordion" class="custom-accordion">
<div class="card">
    <a href="#addproduct-billinginfo-collapse" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
        <div class="p-4">

            <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-3">
                    <div class="avatar-xs">
                        <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                            01
                        </div>
                    </div>
                </div>
                <div class="flex-grow-1 overflow-hidden">
                    <h5 class="font-size-16 mb-1">Information sur vous</h5>
                    <p class="text-muted text-truncate mb-0">Fill all information below</p>
                </div>
                <div class="flex-shrink-0">
                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                </div>

            </div>

        </div>
    </a>

    <div id="addproduct-billinginfo-collapse" class="collapse show" data-bs-parent="#addproduct-accordion">
        <div class="p-4 border-top">
            <form action="{{route('update.slide')}}" method="post">
                @csrf


                <div class="row">
                    <div class="col-lg-6">

                        <div class="mb-3">
                            @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                             @enderror
                            <label class="form-label" for="productname">Votre nom complet</label>
                            <input id="productname"  type="text" class="form-control" name="name" value="{{$slide->name}}" >
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="mb-3">
                            @error('short_des')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                             @enderror
                            <label class="form-label">Métier</label>
                            <div>
                                <input required class="form-control" name="short_des" value="{{$slide->short_des}}" rows="3">
                            </div>
                        </div>

                    </div>

                </div>
                <div class="mb-3">
                    @error('long_des')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                    <label class="form-label" for="productdesc">Description</label>
                    <textarea class="form-control" value="{{$slide->long_des }}" rows="5" name="long_des">{{$slide->long_des }}</textarea>
                </div>


               <div class="row">

                <div class="col-lg-4">
                    <div class="mb-6">
                        @error('year_experience')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                         @enderror
                        <label class="form-label">Année d'experience</label>
                        <div>
                            <input type="text" class="form-control" required name="year_experience" value="{{ $slide->year_experience }}"/>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        @error('quantity_project')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                         @enderror
                        <label class="form-label">Nombre de projet réaliser</label>
                        <div>
                            <input  type="text" class="form-control" required value="{{ $slide->quantity_project }}" name="quantity_project"/>
                        </div>
                    </div>
                </div>



               </div>

               <div class="row">
                   <div class="col-lg-6">

                    <div class="mb-3">
                        @error('client_reviews')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                         @enderror
                        <label class="form-label">Quantite des avis</label>
                        <div>
                            <input  type="text" class="form-control" required name="client_reviews" value="{{ $slide->client_reviews }}" />
                        </div>
                    </div>

                   </div>
                   <div class="col-lg-6">

                    <div class="mb-3">
                        <label class="form-label">Button text</label>
                        <div>
                            <input  type="text" class="form-control" required value="{{ $slide->button_text }}" name="button_text" />
                        </div>
                    </div>

                   </div>





               </div>

                <div class="mb-3">
                    @error('client_reviews_text')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                     @enderror
                    <label class="form-label">client reviews text</label>
                    <div>
                        <textarea required class="form-control" rows="3" value="{{ $slide->client_reviews_text}}" name="client_reviews_text">{{ $slide->client_reviews_text}}</textarea>
                    </div>
                </div>




                <div class="mb-3">
                    @error('experience')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                     @enderror
                    <label class="form-label">Expérience</label>
                    <div>
                        <textarea required class="form-control" rows="3" value="{{ $slide->experience }}" name="experience">{{ $slide->experience }}</textarea>
                    </div>
                </div>

                <div class="mb-0">
                    @error('project_text')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                     @enderror
                    <label class="form-label">Text descriptive projet</label>
                    <div>
                        <textarea required class="form-control" rows="3" value="{{ $slide->project_text }}" name="project_text">{{ $slide->project_text }}</textarea>
                    </div>
                </div>

                <div class="row mb-4 mt-3">
                    <div class="col text-end">
                    <button type="reset" class="btn btn-danger"> <i class="uil uil-times me-1"></i> Cancel </button>
                    <button type="submit" class="btn btn-success"> <i class="uil uil-file-alt me-1"></i> Save </button>
                    </div> <!-- end col -->
                    </div> <!-- end row-->

            </form>
        </div>
    </div>
</div>

<div class="card">
    <a href="#addproduct-img-collapse" class="text-dark collapsed" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-haspopup="true" aria-controls="addproduct-img-collapse">
        <div class="p-4">

            <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-3">
                    <div class="avatar-xs">
                        <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                            02
                        </div>
                    </div>
                </div>
                <div class="flex-grow-1 overflow-hidden">
                    <h5 class="font-size-16 mb-1">Image du slider </h5>

                </div>
                <div class="flex-shrink-0">
                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                </div>

            </div>

        </div>
    </a>

    <div id="addproduct-img-collapse" class="collapse" data-bs-parent="#addproduct-accordion">
        <div class="p-4 border-top">
            <form action="{{route('update.slide.image')}}" method="post" class="dropzone" enctype="multipart/form-data">
                @csrf
                <div class="fallback">
                    <input name="file" type="file" value="{{ $slide->image_slide }}">
                </div>
                <div class="dz-message needsclick">
                    <div class="mb-3">
                        <i class="display-4 text-muted uil uil-cloud-upload"></i>
                    </div>

                    <h4>Drop files here or click to upload.</h4>

                </div>

                <div class="row mb-4 mt-3">
                    <div class="col text-end">
                    <button type="reset" class="btn btn-danger"> <i class="uil uil-times me-1"></i> Cancel </button>
                    <button type="submit" class="btn btn-success"> <i class="uil uil-file-alt me-1"></i> Save </button>
                    </div> <!-- end col -->
                    </div> <!-- end row-->
            </form>
        </div>
    </div>
</div>




</div>
</div>
</div>
</div>
<!-- end row -->


@endsection

