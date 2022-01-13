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
                
                <h4 class="card-title mb-4">PAIEMENTS ENTRANTS</h4>


                                
                                <div class="table-responsive">

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                                 <th>REFERENCES  PAIEMENT</th>
                                                <th>IDENTIFIANT TRANSACTION</th>
                                                <th>Nom Client</th>
                                                <th>Email</th>
                                                <th>Numéro Téléphone</th>
                                                <th>Montant</th>
                                                <th>Moyen paiement</th>
                                                <th>Note</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                            @foreach ( $paiements as $p )
                                        <tr>
                                            
                                            <td>{{$p->transaction_id}}</td>
                                            <td>{{$p->transaction_numero}}</td>
                                            <td>{{$p->nom_client}}</td>
                                            <td>{{$p->email}}</td>
                                            <td>{{$p->tel_paiement}}</td>
                                            <td>{{$p->montant}}</td>
                                            <td>{{$p->pay_method}}</td>
                                            <td>{{$p->note}}</td>
                                            <td>{{Carbon\carbon::parse($p->created_at)->diffForHumans() }}</td>
                                            <td>{{$p->status}}</td>
                                            
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