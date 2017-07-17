@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li><a href="{{ url('/siswa') }}">Dashboard</a></li>
          <li class="active">Profil</li>
        </ul>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Profil</h2>
          </div>
          <div class="panel-body">
 
                <h3>Data Siswa</h3>
                <table class="table table-hover">
                <tbody>
                  <tr>
                    <td class="text-muted">Kode Map</td>
                    <td>{{ $murid->kode_map }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted">No. Perserta UN</td>
                    <td>{{ $murid->no_un_smp }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted">Nama Lengkap</td>
                    <td>{{ $murid->nama_siswa }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted">Jenis Kelamin</td>
                    <td>{{ $murid->jenis_kelamin }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted">Tempat Lahir</td>
                    <td>{{ $murid->tempat_lahir }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted">Tanggal Lahir</td>
                    <td>{{ $murid->tgl_lahir->format('d F Y') }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted">Nama Ayah</td>
                    <td>{{ $murid->nama_ayah }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted">Nama Ibu</td>
                    <td>{{ $murid->nama_ibu }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted">No. HP</td>
                    <td>{{ $murid->no_hp }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted">Nama Sekolah SMP/MTs</td>
                    <td>{{ $murid->sekolah_asal }}</td>
                  </tr>
                  
                </tbody>
                </table>

            <a class="btn btn-primary" href="{{ route('siswa.edit', $murid->id) }}">Edit Data</a>
            <a class="btn btn-success" href="{{ url('pdf', $murid->id) }}">Print</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection