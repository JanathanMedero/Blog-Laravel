@extends('layouts.auth')

@section('title')
Perfil de {{ $user->name }}
@endsection

@section('content')

<div class="container-fluid mt--7">
	<div class="row">
		<div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
			<div class="card card-profile shadow">
				<div class="row justify-content-center">
					<div class="col-lg-3 order-lg-2">
						<div class="card-profile-image">
							<a href="#">
								<img src="{{ asset('images/'.$user->avatar) }}" class="rounded-circle">
							</a>
						</div>
					</div>
				</div>
				<div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
				</div>
				<div class="card-body pt-0 pt-md-4">
					<div class="row">
						<div class="col">
							<div class="card-profile-stats d-flex justify-content-center mt-md-5">
								<div>
									<span class="heading">22</span>
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
					</div>
				</div>
				<div class="card-body">
					<form>
						<h6 class="heading-small text-muted mb-4">Información</h6>
						<div class="pl-lg-4">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="input-username">Nombre de usuario</label>
										<input type="text" id="input-username" class="form-control form-control-alternative" value="{{ $user->name }}">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="input-email">Correo electrónico</label>
										<input type="email" id="input-email" class="form-control form-control-alternative" value="{{ $user->email }}">
									</div>
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