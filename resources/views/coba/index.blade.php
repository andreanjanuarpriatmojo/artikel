@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">

		<h3>Coba</h3>

			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('coba.store')}}" method="post">
							{{csrf_field()}}
						<div class="form-group{{ $errors->has('nama') ? ' has-error' :'' }}">
							<input type="text" name="nama" class="form-control" placeholder="Nama">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Simpan">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection