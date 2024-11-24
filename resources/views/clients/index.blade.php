@extends('layouts.master')
@section('content')
<!-- Row -->
<div class="main-content side-content pt-5">
        <div class="side-app">
            <div class="main-container container-fluid">
                <!-- Row msg danger -->
                  <!-- danger message -->
                  @if (Session::has('delete'))
                  <div class="text-wrap">
                      <div class="example">
                          <div class="alert alert-solid-danger" role="alert">
                              <button aria-label="Close" class="btn-close float-end" data-bs-dismiss="alert"
                                  type="button">
                                  <span aria-hidden="true">&times;</span></button>
                              <strong>{{ Session::get('delete') }}</strong>
                          </div>
                      </div>
                  </div>
                  @endif
                  @if (Session::has('warning'))
                  <div class="text-wrap">
                      <div class="example">
                          <div class="alert alert-solid-warning" role="alert">
                              <button aria-label="Close" class="btn-close float-end" data-bs-dismiss="alert"
                                  type="button">
                                  <span aria-hidden="true">&times;</span></button>
                              <strong>{{ Session::get('warning') }}</strong>
                          </div>
                      </div>
                  </div>
                  @endif
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div class="card-header border-bottom-0 p-0">
                                    <h6 class="card-title mb-1">Liste Des Clients</h6><br>
                                </div>
                                <div class="table-responsive">
                                    <table id="exportexample" class="table table-bordered key-buttons text-nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nom Complet</th>
                                                <th>Téléphone</th>
                                                <th>Email</th>
                                                <th>Opérations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($clients as $client)
                                            <tr>
                                                <td>{{$client->id}}</td>
                                                <td>{{$client->nom_complet}}</td>
                                                <td>{{$client->phone}}</td>
                                                <td>{{$client->email}}</td>
                                                <td>
                                                    <a href="/clients/modifier/{{$client->id}}" class="text-success a-action"data-bs-toggle="tooltip" title="Modification"><i class="ti-pencil-alt"></i></a></a>
                                                    @can('access_admin')
                                                    <a href="/clients/supprimer/{{$client->id}}" class="text-danger a-action"data-bs-toggle="tooltip" title="Suppression"><i class="ti-trash"></i></a></a>
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