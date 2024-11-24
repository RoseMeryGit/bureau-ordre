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
                                                    <h6 class="card-title mb-1">Nouveau Service Traiter</h6>
                                                    <br>
                                                </div>                              
                                                <form action="{{route('parametre.Service_traiter.store')}}" method="POST" enctype="multipart/form-data">
                                                    @csrf			
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label>Nom du Service Traiter</label>
                                                            <input class="form-control" name="service" id="service_traiter" type="text">
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
				<!-- End Row -->
            </div>
<!-- Tableau de type des services traitant  -->
            <div class="main-container container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div class="card-header border-bottom-0 p-0">
                                    <h6 class="card-title mb-1">Liste Des Service Traitant</tr></h6><br>
                                </div>
                                <div class="table-responsive">
                                    <table id="exportexample" class="table table-bordered key-buttons text-nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Nom du service traitant</th>
                                                <th>Opération</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										@foreach($type_service as $service)
                                            <tr>
                                                <td>{{$service->service}}</td>
                                                <td>
                                                    <a href="{{route('parametre.Service_traiter.modifier', $service->id)}}" class="text-success a-action" data-bs-toggle="tooltip" title="Modification"><i class="ti-pencil-alt"></i></a>
                                                    @can('access_admin')
                                                    <a href="{{route('parametre.Service_traiter.supprimer', $service->id)}}" class="text-danger a-action"data-bs-toggle="tooltip" title="Suppression"><i class="ti-trash"></i></a></a>
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
<style>
    .padding{
        margin-top: 28px;
    }
</style>

@endsection