@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    Hai <b>{{ Auth::user()->name }}</b>, Selamat Anda Berhasil Login!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
