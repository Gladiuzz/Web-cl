@extends('layout.admin')

@section('content')
<div class="content-box-header">
    <div class="panel-title">Data Artikel</div>

</div>

<div class="content-box-large box-with-header">
<div class="form-group">
  <a href="{{route('edit.news')}}" class="btn btn-primary">Tambah</a>
</div>

  <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
    <thead>
        <tr>
            <th>Gambar</th>
            <th width="20%">Subject</th>
            <th width="30%">Artikel</th>
            <th>tgl News</th>
            <th>Dipost Oleh</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($News as $new)
        <tr >
            <td><img src="{{asset('upload/'. $new->gambar)}}" alt="gambar berita" width="150px" height="100px" /></td>
            <td>{{$new->subject}}</td>
            <td>{!! \Illuminate\Support\Str::words($new->artikel, 15, ' ...')!!}</td>
            <td>{{Carbon\Carbon::parse($new->tgl_news)->setTimezone('Asia/Jakarta')->format('d M Y H:i:s')}}WIB</td>
            <td>test</td>
            <td><a href="">EDIT</a> | <a href="" class="hapus">HAPUS</a></td>
        </tr>
        @endforeach



    </tbody>
</table>

{{$News->links()}}



</div>
</div>

@endsection
