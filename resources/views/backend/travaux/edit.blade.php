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
                <h4 class="card-title"> Modifier un Travail</h4>
                <p class="card-title-desc">Parsley is a javascript form validation
                    library. It helps you provide your users with feedback on their form
                    submission before sending it to your server.</p>

                <form class="custom-validation" action="{{route('update.travaux')}}" method="post" enctype="multipart/form-data" >
                    @csrf  
                    <input type="hidden" name="old_image" value="{{ $t->image_travaux }}">
                    <input type="hidden" name="id" value="{{$t->id}}">
                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" required value="{{$t->nom}}" name="name" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Lien</label>
                        <input type="text" class="form-control" required value="{{$t->lien}}" name="lien" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Technologies</label>
                        <input type="text" class="form-control" required value="{{$t->technologie}}" name="technologie" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description du service </label>
                        <div>
                            <textarea required class="form-control" rows="5" value="{{$t->description}}" name="description" >{{$t->description}}</textarea>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ajouter image du service</label>
                        <input type="file" class="form-control"  name="image_travaux"/>
                    </div>

                    <div class="mb-3">

                        <img src="{{ asset($t->image_travaux) }}" alt="" style="height:200; width:400px;"/>

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
