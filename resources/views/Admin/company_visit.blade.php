@extends('layout.admin')

@section('content')

<div class="content-box-header">
        <div class="panel-title">Data Company Visit</div>

  </div>

  <div class="content-box-large box-with-header">
  <div class="form-group">
      <button class="btn btn-primary" onclick="">Tambah</button>
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
            @foreach ($company_visit as $visit)
            <tr>
                <td><img src="{{asset('upload/'. $visit->gambar)}}" alt="gambar berita" width="150px" height="100px" /></td>
                <td>{{$visit->subject}}</td>
                <td>{!! \Illuminate\Support\Str::words($visit->artikel, 10, ' ...')!!}</td>
                <td>{{Carbon\Carbon::parse($visit->tgl_news)->setTimezone('Asia/Jakarta')->format('d M Y H:i:s')}} WIB</td>
                <td>test</td>
                <td><a href="">EDIT</a> | <a href="" class="hapus">HAPUS</a></td>
            </tr>
            @endforeach



        </tbody>
    </table>
  </div>
</div>


@endsection
