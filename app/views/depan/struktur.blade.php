@extends('_tema.utama')

@section('konten')
<div class="row">
  <div class="col-lg-12">
    <div class="page-header" style="margin: 0px 0 20px;">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-10 col-lg-offset-1">
  	<div class="panel panel-default">
	  <div class="panel-body">
	  	<center>
	  		<img src="{{ asset('aset/kpu') }}/{{ $instansi->struktur_organisasi }}" class="img-responsive"	/>
	  	</center>
	  	<hr/>
	    {{ $instansi->tugas }}
	  </div>
	</div>
  </div>
</div>
@stop