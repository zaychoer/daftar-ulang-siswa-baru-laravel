@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href=" {{ url('/home') }} ">Dashboard</a></li>
                <li class="active">Siswa</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Data Siswa</h2>
                </div>
                <div class="panel-body" >
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#form" aria-controls="form" role="tab" data-toggle="tab">
                                <i class="fa fa-pencil-square-o"></i> Isi Form
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">
                                <i class="fa fa-cloud-upload"></i> Upload Excel
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel"  class="tab-pane active" id="form">
                            <h1>Isi Data Siswa</h1>
                            <hr>
                            {!! Form::open(['url' => route('siswa.store'), 'method' => 'POST', 'class' => 'form-horizontal']) !!}
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
                                    <div class="col-md-4 col-md-offset-2">
                                            {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                                    </div>  
                                </div>
                            {!! Form::close() !!}
                        </div>
                        <div role="tabpanel" class="tab-pane" id="upload">
                            {!! Form::open(['url' => route('import.siswa'), 'method' => 'POST', 'files' => 'true', 'class' => 'form-horizontal']) !!}
                                @include('siswa._import')
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
