<div class="form-group{{ $errors->has('title') ? 'has-error' : '' }}">
	{!! Form::label('template', 'Gunakan Template Terabaru', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-4">
		<a class="btn btn-success" href="{{ route('template.siswa') }}"><i class="fa fa-cloud-download"></i> Download</a>
	</div>
</div>

<div class="form-group{{ $errors->has('excel') ? 'has-error' : '' }}">
	{!! Form::label('excel', 'Pilih File', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('excel') !!}
		{!! $errors->first('excel', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
			{!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
	</div>	
</div>