@extends('layouts.master')
@section('content')
<div class="main-content side-content pt-5">
        <div class="side-app">
            <div class="main-container container-fluid">
                <!-- Afficher le message d'erreur -->
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
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div>
                                    <h6 class="card-title mb-1">Nouveau Utilisateur</h6><br>
                                </div>
                                <div class="row">
                  <form  action="{{route('update.utilisateur')}}" method="POST"  enctype="multipart/form-data">
                    @csrf 
                        <div class="row ">
                          <div class="col">
                              <select name="user" id="user" class="form-control select2-show-search">
                                <option value="0">Utilisateur</option>
                                <option value="1">Admin</option>
                              </select>
                             <input type="hidden" id="id" name="id" class="form-control" value="{{$var}}">
                          </div>
                        </div>
                        <div class="row ">
                            <div class="form-group col-4">
                                <label>Nom</label>
                                <input type="text" id="nom" name="nom" class="form-control" aria-describedby="emailHelp" value="{{$data->name}}">
                                @error('nom')
                                      <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                          <div class="form-group col-4">
                              <label>Email</label>
                              <input type="email" id="email" name="email" class="form-control" value="{{$data->email}}">
                              @error('email')
                                      <p class="text-danger">{{ $message }}</p>
                                @enderror
                          </div>
                          <div class="form-group col-4">
                              <label>Mot de passe</label>
                              <input type="password" id="pwd" name="pwd" class="form-control" placeholder="********">
                              @error('pwd')
                                      <p class="text-danger">{{ $message }}</p>
                                @enderror
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg-bt" >Enregistrer</button>
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