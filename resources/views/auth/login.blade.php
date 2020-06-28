@extends('layouts.app')
@section('title', 'Log in')

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
                            <div class="card-title text-center">Log in to {{ env('APP_NAME') }}</div>
                            <form method="POST" action="{{ route('login') }}">
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
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        {{ __('Password') }}
                                    </label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="form-footer">
                                    <button type="submit" name="login-submit" id="login-btn" class="btn bg-camp btn-block p-2 mb-3">{{ __('Login') }}</button>
                                    @if (Route::has('password.request'))
                                        Forgot your password?
                                        <a class="" href="{{ route('password.request') }}" class="float-md-right">
                                            {{ __('Recovery') }}
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
@stop