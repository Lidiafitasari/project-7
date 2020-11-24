@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Tambah Data Produk
						<form action="{{url('produk')}}" method="post">
							@csrf
					</div>
					<div class="card-body">
					<div class="form-group">
						<label class="control-label" for="">Nama</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<div class="row no-gutters">
					<div class="col-md-6">
						<div class="form-group">
						<label class="control-label" for="">harga</label>
						<input type="text" name="harga" class="form-control">
					</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label" for="">berat</label>
							<input type="text" name="berat" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label" for="">deskripsi</label>
							<input type="text" name="deskripsi" class="form-control">
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label" for="">stok</label>
						<input type="text" name="stok" class="form-control">
					</div>
					
					<button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection