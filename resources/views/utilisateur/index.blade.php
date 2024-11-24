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
                                    <h6 class="card-title mb-1">Liste Des Utilisateurs</h6><br>
                                </div>
                                <div class="table-responsive">
                                    <table id="exportexample" class="table table-bordered key-buttons text-nowrap w-100">
                                        <thead>
                                            <tr>
                            <th>NOM & PRENOM</th>
                            <th>EMAIL</th>
                            @can('access_admin')    
                                       <th>OPERATIONS</th>
                            @endcan 
                           
                                   </tr>
                                 </thead>
                                 <tbody>
                                   @foreach($data as $data)
                                   <tr>
                                   <td>{{$data->name}} {{$data->prenom}} </td> 
                                   <td>{{$data->email}}</td>
                                   <td class="action-css">
                                  @can('access_admin')
           
                                   <a href="{{url('/user/update/'.$data->id)}}"><i class="ti-pencil-alt text-success" data-toggle="tooltip" data-placement="top" title="Modifier"></i></a>
                                   <a href="{{url('/user/delete/'.$data->id)}}" onclick="return confirm('Êtes-vous sûr de bien vouloir supprimer cet utilisateur?');"><i class="ti-trash text-danger" data-toggle="tooltip" data-placement="top" title="Supprimer"></i></a>
                                   @endcan 
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