@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Data Siswa</h2>
                </div>

                <div class="panel-body">
                    @role('admin')
                        <p>
                            <div class="alert alert-info">
                                <p>Jumlah siswa : <b>{{ $jml_dfulang }} siswa</b></p>
                                <ul>
                                    <li>Laki-laki : <b>{{ $jml_laki }} siswa</b></li>
                                    <li>Perempuan : <b>{{ $jml_perempuan }} siswa</b></li>
                                </ul>
                            </div>
                            <a class="btn btn-primary" href="{{ route('siswa.create') }}"><i class="fa fa-plus"></i> Tambah Siswa</a>
                            <a class="btn btn-info" href="{{ route('export.siswa') }}"><i class="fa fa-cloud-download"></i> Export Data Siswa</a>
                        </p>
                    @endrole
                    {!! $html->table(['class'=>'table table-striped']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
  {!! $html->scripts() !!}
@endsection