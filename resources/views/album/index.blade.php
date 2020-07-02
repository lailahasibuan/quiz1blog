@extends('admin.dashboard')
@section('content')

<div class="container">
	<h3>Data Album</h3>

	<table class="table">
    <thead class="thead-dark">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">PHOTO ID</th>
			<th scope="col">NAMA</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->album_pho_id }}</td>
			<td>{{ $row->album_name }}</td>
			<td>{{ $row->album_text }}</td>
			<td>
				<a href="{{ url('album/' . $row->id . '/edit')}}" class="btn btn-info">EDIT</a>
				
				<form action="{{ url('album/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-secondary">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
		</tbody>
  </table>
	<a href="{{ url('album/create') }}" class="btn btn-success">Tambah Data</a>
</div>

@endsection