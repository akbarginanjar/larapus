@extends('layouts.app')

@section('script')
<script>
    alert("Selamat, Login Berhasil!")
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Dashboard') }}</div>

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
