@extends('layouts.app')
@section('title', 'Register')

@section('content')
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col col-login mx-auto">
                    <div class="text-center mb-6">
                        <a class="header-brand" href="/">
                            <img src="{{ asset('assets/landing/img/logo.png') }}" class="mr-2 mb-2" alt="{{ env('APP_NAME') }} logo" width="75"><br/>
                            <h1 class="d-inline">{{ env('APP_NAME') }}</h1>
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-body p-6">
                            <div class="card-title text-center">{{ __('Register') }}</div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password" class="form-label">
                                        {{ __('Password') }}
                                    </label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password-confirm" class="form-label">
                                        {{ __('Confirm Password') }}
                                    </label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                </div>
                                <div class="form-footer">
                                    <button type="submit" name="login-submit" id="login-btn" class="btn bg-camp btn-block p-2 mb-3">{{ __('Register') }}</button>
                                    {{-- @if (Route::has('password.request'))
                                        Forgot your password?
                                        <a class="" href="{{ route('password.request') }}" class="float-md-right">
                                            {{ __('Recovery') }}
                                        </a><br/>
                                    @endif --}}
                                    @if (Route::has('login'))
                                        Already registered? <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
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
