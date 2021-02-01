@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
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

<!-- cursor -->
<style type="text/css">
    body{cursor: url("http://2.bp.blogspot.com/-NH2UONdsijY/UTl0CNeBM-I/AAAAAAAACj0/n2RgI7lUAG4/s1600/kursor+besi+jonarendra.blog.png"), auto;}
    </style>

<!-- Favicon -->
<link rel="shortcut icon" href="/img/LOGO.png" type="image/png">

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
