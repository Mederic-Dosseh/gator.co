@extends('backend.index')
@section('content')
<h4 class="mb-0">Mettre à jour {{$user->name}}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Utilisateurs</a></li>
                    <li class="breadcrumb-item active">Ajouter</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('update.user') }}">
            @csrf
                   
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Nom complet</label>
                    <div class="col-md-10">
                        <input class="form-control" name="id"  id="name" value="{{$user->id}}" hidden>
                        <input class="form-control" name="name"  id="name" value="{{$user->name}}" type="text">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input class="form-control" name="email" value="{{$user->email}}" id="email" type="email">
                    </div>
                </div>
                                
                <div class="mt-12">
                    <button type="submit" class="btn btn-primary w-md">Ajouter</button>
                </div>
                </form>   
            </div>
        </div>
    </div>

@endsection

