@if(session('success'))
<div class="col-md-12">
	<div class="alert alert-default alert-dismissible fade show" role="alert">
		<span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
		<span class="alert-inner--text"><strong>Completado!</strong> {{ session('success') }}</span>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
</div>
@endif

@if ($errors->any())
<div class="col-md-12">
	<div class="alert alert-info alert-dismissible fade show" role="alert">
		<span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
		<span class="alert-inner--text"><strong>Error!</strong> {{ session('danger') }}</span>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
</div>
@endif