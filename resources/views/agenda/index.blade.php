@extends('admin.admin_template')

@section('content')

	<section class="content-header">
		<h1>AGENDA</h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Beranda</a></li>
			<li class="active">Agenda</li>
		</ol>
	</section>

<div class="box">
	<div class"box-header" style="margin-top:10px;">
		{!! Form::model($agenda, ['route' => 'agenda_index', 'method' => 'PATCH']) !!}
		<div class="col-sm-9"><input type='text' id='filter' name='filter' value='{{ $filter }}' placeholder='cari...' class='form-control'></div>
		<div class="col-sm-1"><button type="submit" class="btn btn-info">Cari</button></div>
		<div class="col-sm-2"><a class="btn btn-success" href="{{ url('/') }}/agenda_create">Tambah Agenda</a></div>
	</div>
	<div class="box-body">
@if ($agenda)
		<table class="table table-bordered table-hover dataTable">
				<thead>
						<tr>
						<th>Tanggal</th>
						<th>Kode Ruang</th>
						<th>Ruang</th>
						<th>Lantai</th>
						<th>Nama Kegiatan</th>
						<th>Tampilkan</th>
						<th>Aksi</th>
						</tr>
				</thead>

				<tbody>
	            @foreach ($agenda as $agenda_list)
	                <tr>
				          <td>{{ $agenda_list->tanggal }}</td>
				          <td>{{ $agenda_list->kode_ruang }}</td>
				          <td>{{ $agenda_list->nama_ruang }}</td>
				          <td>{{ $agenda_list->lantai_ruang }}</td>
				          <td>
										<input type="checkbox" name="display" value="show"><br>
									</td>
                  <td>
										<a class="btn btn-warning" href="{{ url('/') }}/agenda_edit">Edit</a>
										<a class="btn btn-danger" href="{{ url('/') }}/agenda_edit">Hapus</a>
                  </td>
	                </tr>
	            @endforeach

	        </tbody>


		</table>
@endif
		</div>
</div>

	</div>
</div>


@stop

@extends('admin.footapp')
