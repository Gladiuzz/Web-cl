@extends('layout.admin')

@section('content')

<div class="content-box-header">
	<div class="panel-title">Tambah Artikel</div>
</div>

<div class="content-box-large box-with-header">
	<form class="form-horizontal" role="form" id="form-tambah-news" action="" method="post" enctype='multipart/form-data'>
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Gambar</label>
        <div class="col-sm-10">
			<input type="file" class="gambar btn btn-default" id="gambar" name="gambar">
			<p class="help-block">
				gambar tidak lebih dari 1mb
			</p>
		</div>
	  </div>
	  <div class="form-group">
	    <label for="caption" class="col-sm-2 control-label">Caption</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="caption" name="caption" placeholder="Masukan Caption Untuk Gambar">
	    </div>
	  </div>

	  <div class="page-heading">
			<h3>Bahasa Indonesia</h3>
	  </div>

	  <!-- for Indonesia Language -->
	  <input type="hidden" name="bahasa_id" value="id">
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Subject</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="subject" name="subject" placeholder="subject">
	    </div>
	  </div>
      <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Berita</label>
	    <div class="col-sm-10">
        <textarea id="rch_editor" class="" name="berita"></textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Berita Short</label>
	    <div class="col-sm-10">
        <textarea id="ckeditor_standard" class="" name="berita_short"></textarea>
	    </div>
	  </div>
      <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Permalink</label>
	    <div class="col-sm-10">
	      <input style="width:50%;display:inline-block;" type="text" class="form-control" id="link" name="link">
	    </div>
	  </div>
      <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Meta Title</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="title" name="title">
	    </div>
	  </div>
      <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Meta Keyword</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="keyword" name="keyword">
	    </div>
	  </div>
      <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Meta Desc</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="desc" name="desc">
	    </div>
	  </div>

	  <hr style="border: 1px solid gray;">

	  <div class="page-heading">
		<h3>Bahasa Inggris</h3>
	  </div>

	  <!-- For Engglish langguage -->
	  <input type="hidden" name="bahasa_en" value="en">
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Subject</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="subject_en" name="subject_en" placeholder="subject">
	    </div>
	  </div>
      <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Berita</label>
	    <div class="col-sm-10">
        <textarea id="ckeditor_standard" class="" name="berita_en"></textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Berita Short</label>
	    <div class="col-sm-10">
        <textarea id="ckeditor_standard" class="" name="berita_short_en"></textarea>
	    </div>
	  </div>
      <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Permalink</label>
	    <div class="col-sm-10">
	      <input style="width:50%;display:inline-block;" type="text" class="form-control" id="link_en" name="link_en"><br><i><span style="color: red;">*</span> Mohon Untuk dibedakan denngan Yang di atas.</i>
	    </div>
	  </div>
      <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Meta Title</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="title_en" name="title_en">
	    </div>
	  </div>
      <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Meta Keyword</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="keyword_en" name="keyword_en">
	    </div>
	  </div>
      <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Meta Desc</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="desc_en" name="desc_en">
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-primary" id="submit"></button>
	    </div>
	  </div>
	</form>
 	</div>
</div>


@endsection

