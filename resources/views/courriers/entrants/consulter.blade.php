@extends('layouts.master')
@section('content')
    <!-- Row -->
    <div class="main-content side-content pt-5">
        <div class="side-app">
            <div class="main-container container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div>
                                    <h6 class="card-title mb-1">N° Référence: {{$entrants->reference}}</h6><br>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="row">
                                            <label>Date Courrier: <strong class="strong">{{$entrants->date_courrier}}</strong></label>
                                        </div>
                                        <div class="row">
                                            <label>Date d'arriver de courrier: <strong class="strong">{{$entrants->date_arriver}}</strong></label>
                                        </div>
                                        <div class="row">
                                            <label>Client: <strong class="strong">{{$entrants->Client->nom_complet}}</strong></label>
                                        </div>
                                        <div class="row">
                                            <label>Type Courrier: <strong class="strong">{{$entrants->Type_courrier->type}}</strong></label>
                                        </div>
                                        <div class="row">
                                            <label>Service Traitant: <strong class="strong">{{$entrants->Service_traitant->service}}</strong></label>
                                        </div>
                                        <div class="row">
                                            <label>Objet: <p>{{$entrants->objet}}</p></label>
                                        </div>
                                    </div>
                               </div>
                           </div>
                       </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                @if($filename_type=="pdf")
                                  <embed src="{{asset('Courriers/Entrants/'.$entrants->file)}}" width="100%" height="100%" />
                                @else
                                  <img src="{{asset('Courriers/Entrants/'.$entrants->file)}}" alt="image">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
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