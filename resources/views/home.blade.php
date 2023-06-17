@extends('layouts.main')
@section('content')

<div class="main-container">
    <div class="row justify-content-center">
                <div class="card-header">{{ __('Отлично!') }}</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Вы вошли в аккаунт!') }}
    </div>
</div>
@endsection
