@extends('layout.admin')

@section('content')
<div class="content-box-header">
    <div class="panel-title">Data Artikel</div>

</div>

<div class="content-box-large box-with-header">
<div class="form-group">
  <button class="btn btn-primary" >Tambah</button>
</div>

  <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
    <thead>
        <tr>
            <th>ID</th>
            <th>Gambar</th>
            <th width="20%">Kategori</th>
            <th width="30%">Nama</th>
            <th>Link</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Portfolios as $Portfolio)
        <tr >
            <td>{{$loop->iteration}}</td>
            <td><img src="{{asset('upload/'. $Portfolio->gambar)}}" alt="gambar berita" width="150px" height="100px" /></td>
            <td>kategori</td>
            <td>{{$Portfolio->nama}}</td>
            <td><a href="{{$Portfolio->link}}">{{$Portfolio->link}}</a></td>
            <td><a href="">EDIT</a> | <a href="" class="hapus">HAPUS</a></td>
        </tr>
        @endforeach



    </tbody>
</table>

{{$Portfolios->links()}}



</div>
</div>

@endsection
