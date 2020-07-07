@extends('layout.admin')

@section('content')

<div class="content-box-header">
    <div class="panel-title">Data Testimoni</div>
</div>

<div class="content-box-large box-with-header">
    <div class="form-group">
        <button class="btn btn-primary">Tambah</button>
    </div>

    <table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered">
      <thead>
          <tr>
              <th width="5%">ID</th>
              <th>Gambar</th>
              <th>Nama</th>
              <th>Jabatan</th>
              <th>tgl Testimoni</th>
              <th>Testimoni</th>
              <th>Aksi</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($Testimoni as $testi)
          <tr>
              <td>{{$testi->id_testimoni}}</td>
              <td><img src="{{asset('upload/'. $testi->gambar)}}" alt="gambar testimoni" width="75px" height="75px" /></td>
              <td>{{$testi->nama}}</td>
              <td>{{$testi->jabatan}}</td>
              <td>{{Carbon\Carbon::parse($testi->tgl_testimoni)->setTimezone('Asia/Jakarta')->format('d M Y H:i:s')}} WIB</td>
              <td>{!! \Illuminate\Support\Str::words($testi->testimoni, 7, ' ...')!!}</td>
              <td><a href="">EDIT</a> | <a class="hapus" href="">HAPUS</a></td>
          </tr>
          @endforeach

      </tbody>
  </table>
</div>

</div>


@endsection


