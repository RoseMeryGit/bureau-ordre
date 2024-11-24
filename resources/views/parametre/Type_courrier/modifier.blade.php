@extends('layouts.master')
@section('content')
    <div class="main-content side-content pt-5 ">
	    <div class="side-app">
            <div class="main-container container-fluid">
                <!-- Afficher le message de succès -->
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
                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">Mettre à jour le Type du corrier</h6>
                                        <br>
                                    </div>
                                    <div class="row">
                                    <form action="{{route('parametre.Type_courrier.modifier', $type_courrier->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label >Nom du Type du courrier</label>
                                                    <input class="form-control" name="type" id="type_courrier" type="text" value="{{$type_courrier->type}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <button class="btn ripple btn-primary w-100 padding" type="submit">Enregistrer</button>
                                                </div>
                                            </div>
                                        </div>   
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->
            </div>
        </div>
    </div>
<style>
    .padding{
        margin-top: 28px;
    }
</style>

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