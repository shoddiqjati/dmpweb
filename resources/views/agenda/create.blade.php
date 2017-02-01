@extends('admin.admin_template')

@section('content')

{!! Form::open([
	'route' => 'agenda_create'
]) !!}

<h1>Tambah Agenda</h1>

<!-- <div class="form-group">
	{!! Form::label('barcode', 'Barcode:', ['class' => 'control-label']) !!}
	{!! Form::text('barcode', null, ['class' => 'form-control']) !!}
</div> -->
	<script>
  $( function() {
    $( "#datepicker" ).datepicker();
	} );
  </script>
<div class="form-group">
	{!! Form::label('tanggal_acara', 'Tanggal:', ['class' => 'control-label']) !!}
	{!! Form::text('tanggal_acara', null, ['id' => "datepicker"]) !!}
</div>

<div class="form-group">
	{!! Form::label('kode', 'Kode Ruang:', ['class' => 'control-label']) !!}
	{!! Form::select('kode', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('category', 'Nama Ruang:', ['class' => 'control-label']) !!}
	{!! Form::select('id_category', $categories, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('can_be_borrowed', 'Lantai', ['class' => 'control-label']) !!}
	{!! Form::select('can_be_borrowed', '1') !!} ya
</div>

<div class="form-group">
	{!! Form::label('quantity', 'Nama Kegiatan', ['class' => 'control-label']) !!}
	{!! Form::text('quantity', 1, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}


@stop

@extends('admin.footapp')
