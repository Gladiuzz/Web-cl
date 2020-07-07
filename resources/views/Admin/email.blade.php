@extends('layout.admin')

@section('content')

<div class="content-box-header">
	<div class="panel-title">Email Broadcast</div>

</div>

<div class="content-box-large box-with-header">
<div class="form-group">
	<button class="btn btn-primary" onclick="window.location.href=''">Tambah</button>
</div>
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th width="5%">No.</th>
				<th>Subject</th>
				<th width="5%">Content</th>
				<th>Tujuan</th>
				<th>Status</th>
				<th>Dibuat</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
            @foreach ($Email as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->subject}}</td>
                <td>{{$item->content}}</td>
                <td>{{$item->tujuan}}</td>
                <td>{{$item->status}}</td>
                <td>{{$item->dibuat}}</td>
                <td><a href="" class="hapus">STOP</a></td>
            </tr>
            @endforeach


		</tbody>
	</table>

</div>

</div>

@endsection
