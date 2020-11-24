@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Detail Data User
					</div>
					<div class="card-body">
						<h4>{{$user->nama}}</h4><hr>
						<p>
							 {{"@".$user->username}}
							Email : {{$user->email}}
						</p>
						<p>
							No Handphone : {{$user->detail->no_handphone}}
						</p>
					
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection