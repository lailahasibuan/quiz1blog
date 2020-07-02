@extends('admin.dashboard')
@section('content')


<div class="container">
	<h3>Edit Data Kategori</h3>
	<form action="{{ url('/category/' . $row->cat_id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="cat_name" value="{{ $row->cat_name}}"></td>
		</tr>

		<tr>
			<td>KETERANGAN</td>
			<td><input type="text" name="cat_text" value="{{ $row->cat_text}}"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" class="btn btn-info" value="UPDATE"></td> 
		</tr>
	</table>
	</form>
</div>
@endsection