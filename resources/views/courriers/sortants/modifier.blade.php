@extends('layouts.master')
@section('content')
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
    <div class="main-content side-content pt-5">
        <div class="side-app">
            <div class="main-container container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div>
                                    <h6 class="card-title mb-1">Nouveau Courrier</h6><br>
                                </div>
                                <div class="row">
                                    <form action="{{route('courriers.sortants.update')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="row">
                                            <div class="form-group col-4">
                                                <label>N° Référence <span class="text-danger">*</span></label>
                                                <input class="form-control"  type="number" name="reference" value="{{$courrier_sortant->reference}}">
                                                <input class="form-control"  type="hidden" name="courrier_id" value="{{$courrier_sortant->id}}">
                                                @error('reference')
                                                <div class="error text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Date Courrier <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" value="{{ date('Y-m-d H:i:s') }}" name="date_courrier" readonly >
                                                @error('date_courrier')
                                                <div class="error text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Date d'envoi de courrier <span class="text-danger">*</span></label>
                                                <input class="form-control" id="dateMask" placeholder="MM/DD/YYYY"
                                                    type="text" name="date_envoi" value="{{$courrier_sortant->date_envoi}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-4">

                                                <p class="mg-b-10">Client <span class="text-danger">*</span></p>
                                                <select class="form-control select2-show-search" name="client">
                                                    @foreach($client as $data_client)
                                                    <option value="{{$data_client->id}}"
                                                    {{ $data_client->id == $courrier_sortant->client_id ? 'selected' : '' }}>
                                                        {{$data_client->nom_complet}}
                                                    </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="form-group col-4">

                                                <p class="mg-b-10">Type Courrier <span class="text-danger">*</span></p>
                                                <select class="form-control select2-show-search" name="type_courrier">
                                                   @foreach($type_courrier as $data_type_courrier)
                                                    <option value="{{$data_type_courrier->id}}"
                                                    {{ $data_type_courrier->id == $courrier_sortant->type_courrier_id ? 'selected' : '' }}>
                                                        {{$data_type_courrier->type}}
                                                    </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="form-group col-4">

                                                <p class="mg-b-10">Service Traitant <span class="text-danger">*</span></p>
                                                <select class="form-control select2-show-search" name="service_traitant">
                                                    @foreach($service as $data_service)
                                                    <option value="{{$data_service->id}}"
                                                    {{ $data_service->id == $courrier_sortant->service_traitant_id ? 'selected' : '' }}>
                                                        {{$data_service->service}}
                                                    </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                               <label>Objet <span class="text-danger">*</span></label>

                                                <textarea class="form-control" name="objet" rows="4" placeholder="Objet">{{$courrier_sortant->objet}}</textarea>
                                                @error('objet')
                                                <div class="error text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label>Agents</label>
                                                <select class="form-control select2" multiple="multiple" name="agent[]">
                                                   @foreach($user as $data_users)
                                                    <option value="{{$data_users->id}}"
                                                    {{ in_array($data_users->id, $selectedAgents) ? 'selected' : '' }}>
                                                        {{$data_users->name}}
                                                    </option>
                                                    @endforeach
                                               </select>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>Actions Attribuer</label>
                                                <select class="form-control select2" multiple="multiple" name="action[]">
                                                    <option value="delete" {{ in_array("Suppression", $selectedActions) ? 'selected' : '' }}>
                                                        Suppression
                                                    </option>
                                                    <option value="modification" 
                                                    {{ in_array("Modification", $selectedActions) ? 'selected' : '' }}>
                                                    Modification</option>
                                                    </option>
                                                    <option value="consultation" {{ in_array("Consultation", (array) $selectedActions) ? 'selected' : '' }}>
                                                        Consultation
                                                    </option>
                                                    <option value="archivage" {{ in_array("Archivage", $selectedActions) ? 'selected' : '' }}>
                                                        Archivage
                                                    </option>
                                               </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Importer Un Document <span class="text-danger">*</span></label>
                                            <input type="file" class="dropify" data-height="200" name="file" >
                                            @error('file')
                                                <div class="error text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <button class="btn ripple btn-primary btn-block" >Enregistrer</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </div>
    </div>
@endsection
@section('js')
    <!--Datepicker-->
    <script src="{{ asset('template/HTML/dashlead/assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>

    <!--Maskedinput-->
    <script src="{{ asset('template/HTML/dashlead/assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <!--Datetimepicker js-->
    <script
        src="{{ asset('template/HTML/dashlead/assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js') }}">
    </script>

    <!--simplpedatepicker js-->
    <script
        src="{{ asset('template/HTML/dashlead/assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js') }}">
    </script>
    <script src="{{ asset('template/HTML/dashlead/assets/plugins/pickerjs/picker.min.js') }}"></script>
    <!--formelements js-->
    <script src="{{ asset('template/HTML/dashlead/assets/js/form-elements.js') }}"></script>

    <!-- Select2 js-->
    <script src="{{ asset('template/HTML/dashlead/assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Fileuploads js-->
    <script src="{{ asset('template/HTML/dashlead/assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('template/HTML/dashlead/assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!--Fancy uploader js-->
    <script src="{{ asset('template/HTML/dashlead/assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('template/HTML/dashlead/assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('template/HTML/dashlead/assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('template/HTML/dashlead/assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ asset('template/HTML/dashlead/assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>

    <!-- Form-elements js-->
    <script src="{{ asset('template/HTML/dashlead/assets/js/advanced-form-elements.js') }}"></script>
    <script src="{{ asset('template/HTML/dashlead/assets/js/select2.js') }}"></script>
@endsection