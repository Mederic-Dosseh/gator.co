@extends('backend.index')
@section('content')





<h4 class="mb-0">Utilisateurs</h4>

<div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Utilisateurs</a></li>
        <li class="breadcrumb-item active">Listes</li>
    </ol>
</div>

</div>
</div>
</div>
<!-- end page title -->

<div class="row">
<div class="col-lg-12">
<div>
<div>
    <a href="{{route('add.user')}}" type="button" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus me-1"></i> Ajouter Utilisateurs</a>
</div>

<div class="table-responsive mb-4">
    <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
        <thead>
            <tr class="bg-transparent">
                <th style="width: 20px;">
                    <div class="form-check text-center">
                        <input type="checkbox" class="form-check-input" id="customercheck">
                        <label class="form-check-label" for="customercheck"></label>
                    </div>
                </th>
                <th style="width: 120px;">N°</th>
                <th>Nom Complet</th>
                <th>Email</th>
                <th>Date création</th>
                <th>Status</th>
                <th style="width: 120px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp

            <tr>
                @foreach ($users as $user )


                <td>
                    <div class="form-check text-center">
                        <input type="checkbox" class="form-check-input" id="customercheck1">
                        <label class="form-check-label" for="customercheck1"></label>
                    </div>
                </td>

                <td><a href="javascript: void(0);" class="text-dark fw-bold">{{$i++}}</a> </td>
                <td>
                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle me-2">
                    <span>{{$user->name}}</span>
                </td>
                <td>{{$user->email}}</td>

                <td>
                    {{Carbon\carbon::parse($user->created_at)->diffForHumans() }}
                </td>
                <td>
                    <div class="badge bg-pill bg-soft-success font-size-12">Active</div>
                </td>
                <td>
                    <a href="{{url('utilisateurs/edit/'.$user->id)}}" class="px-3 text-warning"><i  class="uil uil-pen font-size-18"></i></a>
                    <a href="{{url('utilisateurs/delete/'.$user->id)}}" class="px-3 text-danger" onclick="return confirm('Vous allez supprimer {{$user->name}} ')"><i class="uil uil-trash-alt font-size-18"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
</div>
<!-- end row -->



@endsection
