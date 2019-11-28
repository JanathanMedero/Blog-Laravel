@extends('layouts.auth')

@section('title')
Mis Posts
@endsection

@section('content')
<div class="container-fluid mt--7">
	<div class="row">
		@include('partials.alerts')
		<div class="col-md-12 mb-4">
			<div class="table-responsive">
				<div>
					<table class="table align-items-center table-dark">
						<thead class="thead-dark">
							<tr>
								<th scope="col">
									Nombre del post
								</th>
								<th scope="col">
									Categoría
								</th>
								<th scope="col">
									Acciones
								</th>
							</tr>
						</thead>
						<tbody class="list">
							@if($posts->isEmpty())
							<tr>
								<td class="budget">Sin Posts</td>
							</tr>
							@endif
							@foreach($posts as $post)
							<tr>
								<td class="budget">{{ $post->title }}</td>
								<td class="budget">{{ $post->category->name }}</td>
								<td class="budget">
									<div class="row">
										<div class="col-md-12">
											<a href="{{ route('post.edit', $post->slug) }}" class="btn btn-primary"><i class="fas fa-cogs"></i> Editar</a>
											<button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
										</div>
									</div>
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
@endsection