@extends('layouts.master')
@section('content')
<!-- Row -->
<div class="main-content side-content pt-5">
        <div class="side-app">
            <div class="main-container container-fluid">
            @if(session('success'))
                <div class="alert alert-solid-success" role="alert">
                    <button aria-label="Close" class="btn-close float-end" data-bs-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Bien joué !</strong> {{ session('success') }}
                </div>
            @endif

            <!-- Afficher le message d'erreur -->
            @if(session('error'))
                <div class="alert alert-solid-danger mg-b-0" role="alert">
                    <button aria-label="Close" class="btn-close float-end" data-bs-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Oh snap!</strong> {{ session('error') }}
                </div>
                @endif
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div class="card-header border-bottom-0 p-0">
                                    <h6 class="card-title mb-1">Liste Des Courriers Archivés</h6><br>
                                </div>
                                <div class="table-responsive">
                                    <table id="exportexample" class="table table-bordered key-buttons text-nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Type De Courrier</th>
                                                <th>N° Référence</th>
                                                <th>Date Courrier</th>
                                                <th>Client</th>
                                                <th>Type Courrier</th>
                                                <th>Service Traitant</th>
                                                <th>Opérations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($entrants as $entrant)
                                            <tr>
                                                <td>Entrant</td>
                                                <td>{{$entrant->reference}}</td>
                                                <td>{{$entrant->date_courrier}}</td>
                                                <td>{{$entrant->Client->nom_complet}}</td>
                                                <td>{{$entrant->Type_courrier->type}}</td>
                                                <td>{{$entrant->Service_traitant->service}}</td>
                                                <td>
                                                    <a href="" class="text-primary a-action" data-bs-toggle="tooltip" title="Consultation"><i class="ti-eye"></i></a>
                                                    <a href="{{route('archives.liste.entrant.desarchiver', $entrant->id)}}" class="text-warning a-action" data-bs-toggle="tooltip" title="Désarchiver"><i class="ti-back-left"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @foreach($sortants as $sortant)
                                            <tr>
                                                <td>Sourtant</td>
                                                <td>{{$sortant->reference}}</td>
                                                <td>{{$sortant->date_courrier}}</td>
                                                <td>{{$sortant->Client->nom_complet}}</td>
                                                <td>{{$sortant->Type_courrier->type}}</td>
                                                <td>{{$sortant->Service_traitant->service}}</td>
                                                <td>
                                                    <a href="" class="text-primary a-action" data-bs-toggle="tooltip" title="Consultation"><i class="ti-eye"></i></a>
                                                    <a href="{{route('archives.liste.sortant.desarchiver', $sortant->id)}}" class="text-warning a-action" data-bs-toggle="tooltip" title="Désarchiver"><i class="ti-back-left"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
    <!-- End Row -->
@endsection
@section('js')
<!-- DATA TABLE JS-->
    <script src="{{ asset('template/HTML/dashlead/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('template/HTML/dashlead/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
	<script src="{{ asset('template/HTML/dashlead/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{ asset('template/HTML/dashlead/assets/js/table-data.js')}}"></script>
	<script src="{{ asset('template/HTML/dashlead/assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
	<script src="{{ asset('template/HTML/dashlead/assets/plugins/datatable/js/jszip.min.js')}}"></script>
	<script src="{{ asset('template/HTML/dashlead/assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
	<script src="{{ asset('template/HTML/dashlead/assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
	<script src="{{ asset('template/HTML/dashlead/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
	<script src="{{ asset('template/HTML/dashlead/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
	<script src="{{ asset('template/HTML/dashlead/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
	<script src="{{ asset('template/HTML/dashlead/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
	<script src="{{ asset('template/HTML/dashlead/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

@endsection