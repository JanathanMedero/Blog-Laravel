@extends('layouts.auth')

@section('title')
{{ $post->title }}
@endsection

@section('content')
<div class="container-fluid mt--7">
	<div class="row">
		@include('partials.alerts')
		<div class="col-md-12 mb-4">
			<div class="card bg-secondary shadow">
				<div class="card-header bg-white border-0">
					<div class="row align-items-center">
						<div class="col-8">
							<h3 class="mb-0">{{ $post->title }}</h3>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form action="{{ route('post.update', $post->slug) }}" method="POST">
						@method('PUT')
						@csrf
						<input type="hidden" name="user[id]" value="{{ Auth::user()->id }}">
						<h6 class="heading-small text-muted mb-4">Ediacion del post</h6>
						<div class="pl-lg-4">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="post-title">Titulo del post</label>
										<input type="text" id="post-title" class="form-control form-control-alternative" placeholder="Ingrese el titulo del post" name="title" value="{{ $post->title }}">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="category">Categoría</label>
										<select class="form-control form-control-alternative" id="category" name="category">
										  <option disabled selected>Seleccione una opción</option>
										  @foreach($categories as $category)
										  <option {{ $post->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
										  @endforeach
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label" for="editor">Contenido del post</label>
										<textarea class="form-control" id="editor" placeholder="Ingrese el contenido del post" name="body">{{ $post->body }}</textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block">Actualizar Post</button>
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

@section('extra-js')
	<script src="{{ asset('js/ckeditor.js') }}"></script>	
@endsection