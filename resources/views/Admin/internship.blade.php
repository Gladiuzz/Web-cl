@extends('layout.admin')

@section('content')

	<div class="content-box-header">
		<div class="panel-title">Data Internship</div>

	</div>

	<div class="content-box-large box-with-header">
	<div class="form-group">
		<button class="btn btn-primary" onclick="">Tambah</button>
	</div>

		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th width="5%">ID</th>
                <th width="5%">Gambar</th>
				<th>Nama</th>
                <th>Review</th>
                <th>Bahasa</th>
                <th>Aksi</th>
			</tr>
		</thead>
		<tbody>

            @foreach ($internship as $internships)

            <tr>
				<td>{{$loop->iteration}}</td>
                <td><img src="{{asset('resize/'.$internships->gambar)}}" alt="gambar clients"  style="width:75px; height:75px;"/></td>
				<td>{{$internships->nama}}</td>
                <td>{{$internships->desc}}</td>
                <td>{!!$internships->bahasa!!}</td>
				<td><a href="">EDIT</a> | <a href="" class="hapus">HAPUS</a></td>
			</tr>

            @endforeach



		</tbody>
	</table>
	</div>

</div>



@endsection
