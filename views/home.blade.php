@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div style="text-align: center">
            <a href="groupfive" class="btn btn-success">Staff</a>
            <a href="cpu" class="btn btn-success">CPU</a>
            <a href="gpu" class="btn btn-success">GPU</a>
            <a href="ram" class="btn btn-success">RAM</a>
            <a href="storage" class="btn btn-success">Storage</a>
            <a href="peripheral" class="btn btn-success">Peripherals</a>
        </div>
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
