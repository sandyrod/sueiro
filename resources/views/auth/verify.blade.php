@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 20px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Valide su cuenta de Email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un enlace de verificacion fue enviado a su email.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor verifique su email.') }}
                    {{ __('Si no ha recibido el email puede reenviarlo aqui') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
