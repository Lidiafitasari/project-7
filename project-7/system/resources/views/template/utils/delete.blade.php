<form action="{{$url}}" method="post" class="from-inline" onsubmit="return confirm('Yakin akan menghapus Data ini?')">
	@csrf
	@method("delete")
	<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
</form>