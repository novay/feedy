@extends('layouts.app')
@section('title', 'Reset Password')

@section('content')
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col col-login mx-auto">
                    <div class="text-center mb-6">
                        <a class="header-brand" href="/login">
                            <img src="{{ asset('assets/landing/img/logo.png') }}" class="mr-2 mb-2" alt="{{ env('APP_NAME') }} logo" width="75"><br/>
                            <h1 class="d-inline">{{ env('APP_NAME') }}</h1>
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-body p-6">
                            <div class="card-title text-center">{{ __('Reset Password') }}</div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-footer">
                                    <button type="submit" name="login-submit" id="login-btn" class="btn bg-camp btn-block p-2 mb-3">{{ __('Send Password Reset Link') }}</button>
                                    @if (Route::has('login'))
                                        Already registerd?
                                        <a class="" href="{{ route('login') }}" class="float-md-right">
                                            {{ __('Login') }}
                                        </a><br/>
                                    @endif
                                    @if (Route::has('register'))
                                        Don't have an account? <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
