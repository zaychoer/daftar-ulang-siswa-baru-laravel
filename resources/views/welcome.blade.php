@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <dir class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="text-center">
                            <p>Selamat Datang di Sistem Daftar Ulang Peserta Didik Baru</p>
                            <p>Tahun Pelajaran 2017-2018</p>
                            <p>SMA Negeri 3 Tangerang</p>
                        </h3>
                        <p class="text-center">
                            <img src="{{ asset('images/logo_ sman3tgr.png') }}" width="15%">
                        </p>
                        <p class="text-center">
                            <p class="text-center">Aplikasi Daftar Ulang Peserta Didik Baru</p>
                            <p class="text-center">SMA Negeri 3 Tangerang</p>
                            @if (Auth::guest())
                               <p class="text-center"> Untuk dapat menggunakan aplikasi ini silahkan <a href="{{ url('/login') }}">login</a> terlebih dahulu!</p>
                            @endif
                        </p>
                    </div>
                </div>
            </dir>
        </div>
    </div>
</div>
@endsection
