@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Edit Data User
						<form action="{{url('user')}}" method="post">
							@csrf
					</div>
					<div class="card-body">
					<div class="form-group">
						<label class="control-label" for="">Nama</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="">Username</label>
						<input type="text" name="username" class="form-control">
					</div><div class="form-group">
						<label class="control-label" for="">Email</label>
						<input type="email" name="email" class="form-control">
					</div><div class="form-group">
						<label class="control-label" for="password">Password</label>
						<input type="password" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="password">No Hp</label>
						<input type="text" name="no_handphone" class="form-control"></div>
					<button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection