@extends('layouts.admin')

@section('script')
<script>
    alert("Selamat, Login Berhasil!")
</script>
@endsection

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
            <h1 class="m-0">Halaman Home</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Selamat Login Berhasil!') }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
