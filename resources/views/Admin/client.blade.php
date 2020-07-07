@extends('layout.admin')

@section('content')
<div class="content-box-header">
    <div class="panel-title">Data Clients</div>

</div>

<div class="content-box-large box-with-header">
<div class="form-group">
  <button class="btn btn-primary" >Tambah</button>
</div>

  <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
    <thead>
        <tr>
            <th width="5%">ID</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Link</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Clients as $Client)
        <tr >
            <td>{{$loop->iteration}}</td>
            <td><img src="{{asset('resize/'. $Client->gambar)}}" alt="gambar berita"style="width:75px; height:75px;" /></td>
            <td>{{$Client->nama}}</td>
            <td><a href="{{$Client->link}}">{{$Client->link}}</a></td>
            <td><a href="">EDIT</a> | <a href="" class="hapus">HAPUS</a></td>
        </tr>
        @endforeach



    </tbody>
</table>


<center>
    {{$Clients->links()}}
</center>




</div>
</div>

@endsection
