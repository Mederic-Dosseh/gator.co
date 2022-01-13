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
    <div class="col-xl-12">
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
                                            @foreach ( $demandes as $c )
                                                
                                            
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

</div> <!-- end row-->

 
        @endsection