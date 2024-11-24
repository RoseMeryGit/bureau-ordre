@extends('layouts.master')
@section('content')

<div class="main-content side-content pt-5 ">
			<div class="side-app">
                <div class="main-container container-fluid">
                  <!-- Row msg success -->
                  <!-- Success message -->
                  @if (Session::has('success'))
                  <div class="text-wrap">
                      <div class="example">
                          <div class="alert alert-solid-success" role="alert">
                              <button aria-label="Close" class="btn-close float-end" data-bs-dismiss="alert"
                                  type="button">
                                  <span aria-hidden="true">&times;</span></button>
                              <strong>{{ Session::get('success') }}</strong>
                          </div>
                      </div>
                  </div>
                  @endif
                  <!-- Row -->
                <div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Nouveau Courrier</h6>
									<br>
								</div>
								<div class="row">
                                <form action="{{route('clients.store')}}" method="POST"  enctype="multipart/form-data">
                                @csrf
                                        <div class="row">
                                            <div class="form-group">
                                                <div>
                                                    <label >Nom Complet</label>
                                                    <input class="form-control" name="nom_complet" id="nom_complet" type="text">
                                                </div>
                                            </div>
										</div>
                                        <div class="row">

                                            <div class="form-group col-sm-6">
                                            
                                                <label >Téléphone</label>
                                                <input class="form-control" name="phone" id="phone" type="number">
                                            
                                            </div>
                                            <div class="form-group col-sm-6">
                                            
                                                <label >Email</label>
                                                <input class="form-control" name="email" id="email" type="email">
                                            
                                            </div>
                                        </div>
                                        
                                        <button class="btn ripple btn-primary btn-block" >Enregistrer</button>
											
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


@endsection