@section('site_title', __('Installation') . ' - ' . config('info.software.name'))

<form action="{{ route('install.account') }}" method="post">
    @csrf

    <div class="card border-0 shadow-sm overflow-hidden">
        <div class="card-header">
            <div class="font-weight-medium py-1">{{ __('Admin credentials') }}</div>
        </div>

        <div class="card-body">
            
            @include('vendor.install.message')

            <div class="form-group">
                <label for="i_name">{{ __('Name') }}</label>
                <input id="i_name" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" autofocus>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i_email">{{ __('Email address') }}</label>
                <input id="i_email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i_password">{{ __('Password') }}</label>
                <input id="i_password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}">
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i_password_confirmation">{{ __('Confirm password') }}</label>
                <input id="i_password_confirmation" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" value="{{ old('password_confirmation') }}">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-block btn-primary d-inline-flex align-items-center mt-3 py-2">
        <span class="d-inline-flex align-items-center mx-auto">
            {{ __('Next') }} 
            <i class="fa fa-chevron-right icon-button fill-current ml-2"></i>
        </span>
    </button>
</form>