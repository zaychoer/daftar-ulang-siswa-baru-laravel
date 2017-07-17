@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li><a href="{{ url('/siswa') }}">Dashboard</a></li>
          <li class="active">Edit Profil</li>
        </ul>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Edit Profil</h2>
          </div>

          <div class="panel-body">
          {!! Form::model($murid, ['url' => route('siswa.update', $murid->id), 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

              <!--DATA SISWA-->

                <h3>Data Siswa</h3>
                <hr>

                <div class="form-group">
                  {!! Form::label('kode_map', 'Kode Map', ['class'=>'col-md-2 control-label']) !!}
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    {!! Form::text('kode_map', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                  </div>
                </div>

                <div class="form-group">
                  {!! Form::label('no_un_smp', 'No. Peserta UN', ['class'=>'col-md-2 control-label']) !!}
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    {!! Form::text('no_un_smp', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                  </div>
                </div>

                <div class="form-group">
                  {!! Form::label('nama_siswa', 'Nama Lengkap', ['class'=>'col-md-2 control-label']) !!}
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    {!! Form::text('nama_siswa', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                  </div>
                </div>

                <div class="form-group">
                  {!! Form::label('jenis_kelamin', 'Jenis Kelamin', ['class'=>'col-md-2 control-label']) !!}
                  <div class="radio col-md-8 col-sm-8 col-xs-12">
                    <label>{!! Form::radio('jenis_kelamin', 'Laki-laki') !!} Laki-laki</label><br>
                    <label>{!! Form::radio('jenis_kelamin', 'Perempuan') !!} Perempuan</label>
                  </div>
                </div>

                <div class="form-group">
                  {!! Form::label('tempat_lahir', 'Tempat Lahir', ['class'=>'col-md-2 control-label']) !!}
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    {!! Form::text('tempat_lahir', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                  </div>
                </div>

                <div class="form-group">
                  {!! Form::label('tgl_lahir', 'Tanggal Lahir', ['class'=>'col-md-2 control-label']) !!}
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    {!! Form::date('tgl_lahir', !empty($murid) ? $murid->tgl_lahir->format('Y-m-d'): null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                  </div>
                </div>

                <div class="form-group">
                  {!! Form::label('nama_ayah', 'Nama Ayah', ['class'=>'col-md-2 control-label']) !!}
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    {!! Form::text('nama_ayah', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                  </div>
                </div>

                <div class="form-group">
                  {!! Form::label('nama_ibu', 'Nama Ibu', ['class'=>'col-md-2 control-label']) !!}
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    {!! Form::text('nama_ibu', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                  </div>
                </div>

                <div class="form-group">
                  {!! Form::label('no_hp', 'No. HP', ['class'=>'col-md-2 control-label']) !!}
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    {!! Form::text('no_hp', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                  </div>
                </div>                

                <div class="form-group">
                  {!! Form::label('sekolah_asal', 'Sekolah Asal SMP/MTs', ['class'=>'col-md-2 control-label']) !!}
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    {!! Form::text('sekolah_asal', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                  </div>
                </div>
                <div class="form-group">
                  {!! Form::submit('Update Data', ['class'=>'btn btn-primary form-control col-md-7 col-xs-12']) !!}
                </div>

              </div>
              
          {!! Form::close() !!}


      </div>
    </div>
  </div>
@endsection

