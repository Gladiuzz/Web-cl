@extends('layout.admin')

@section('content')

<div class="content-box-header">
	<div class="panel-title">Data Newsletter</div>
</div>
<div class="content-box-large box-with-header">
	<div class="form-group">
		<!-- <button></button> -->
	</div>
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Email</th>
					<th>No. Telepon</th>
					<th>Tanggal ditambahkan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>

                @foreach ($newsletter as $newsletters)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$newsletters->name}}</td>
                    <td>{{$newsletters->email}}</td>
                    <td>{{$newsletters->phone}}</td>
                    <td>{{$newsletters->tgl_submit}}</td>
                    <td>
                        <a href="" class="delete">HAPUS</a>
                    </td>
                </tr>
                @endforeach
			</tbody>
        </table>

        <center>
            {{$newsletter->links()}}
        </center>
</div>


@endsection

