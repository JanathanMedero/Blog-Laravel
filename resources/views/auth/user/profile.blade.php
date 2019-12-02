@extends('layouts.auth')

@section('title')
Perfil de {{ $user->name }}
@endsection

@section('extra-css')
	<link rel="stylesheet" href="{{ asset('css/image-style.css') }}">
@endsection

@section('content')
<div class="container-fluid mt--7">
	<div class="row">
		@include('partials.alerts')
		<div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
			<div class="card card-profile shadow">
				<div class="row justify-content-center">
					<div class="col-lg-3 order-lg-2">
						<div class="card-profile-image">
							<a href="#">
								<img src="{{ asset($user->avatar) }}" class="rounded-circle">
							</a>
						</div>
					</div>
				</div>
				<div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
				</div>
				<div class="card-body pt-0 pt-md-4">
					<div class="row">
						<div class="col d-flex justify-content-center mt-md-6">
							<button type="button" class="btn btn-icon btn-3 btn-primary" data-toggle="modal" data-target="#changeImage">
							<span class="btn-inner--icon"><i class="fas fa-user"style="top: 0px;"></i></span>
							<span class="btn-inner--text">Cambiar imágen de perfil</span>
							</button>
							<!-- Modal -->
							<div class="modal fade" id="changeImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Cambiar imágen de perfil</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<form action="{{ route('profile.image.update', $user->slug) }}" enctype="multipart/form-data" method="POST">
											@csrf
											@method('PUT')
											<div class="modal-body">
												<div class="form-group">
													<label for="Image">Seleccione una imágen</label>
													<input type="file" class="form-control-file" id="Image" name="avatar" required>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div id="preview"></div>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
												<button type="submit" class="btn btn-primary">Guardar Cambios</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-profile-stats d-flex justify-content-center mt-md-1">
								<div>
									<span class="heading">{{ $user->posts->count() }}</span>
									<span class="description">Posts</span>
								</div>
								<div>
									<span class="heading">89</span>
									<span class="description">Comentarios</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-8 order-xl-1">
			<div class="card bg-secondary shadow">
				<div class="card-header bg-white border-0">
					<div class="row align-items-center">
						<div class="col-8">
							<h3 class="mb-0">Mi perfil</h3>
						</div>
						<div class="col-4 d-flex justify-content-end">
							<button class="btn btn-icon btn-3 btn-danger btn-sm" type="button">
							    <span class="btn-inner--text">Cambiar contraseña</span>
								<span class="btn-inner--icon"><i class="fas fa-key" style="top: 0px;"></i></span>
							</button>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form action="{{ route('user.update', $user->slug) }}" method="POST">
						@csrf
						@method('PUT')
						<h6 class="heading-small text-muted mb-4">Información</h6>
						<div class="pl-lg-4">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="input-username">Nombre de usuario</label>
										<input type="text" id="input-username" name="name" class="form-control form-control-alternative" value="{{ $user->name }}">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="input-email">Correo electrónico</label>
										<input type="email" id="input-email" class="form-control form-control-alternative" value="{{ $user->email }}" name="email">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<button type="submit" class="btn btn-primary btn-block">Guardar cambios</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('extra-js')
	<script>
		document.getElementById("Image").onchange = function(e) {
		let reader = new FileReader();
  
		  reader.onload = function(){
		    let preview = document.getElementById('preview'),
		    		image = document.createElement('img');

		    image.src = reader.result;
		    
		    preview.innerHTML = '';
		    preview.append(image);
		  };
		 
		  reader.readAsDataURL(e.target.files[0]);
		}
	</script>
@endsection