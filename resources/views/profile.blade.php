@extends('layouts.app')
@section('title', __('general.profile'))

@section('content')
	<div class="page-main">
        @include('layouts.partials.header')
		<div class="my-3 my-md-5">
			<div class="container">
				<div class="page-header">
					<h1 class="page-title">
						{{ __('general.your_profile') }}
					</h1>
				</div>
				<div class="row">
					@if(session()->has('success'))
                        <div class="col-md-12">
                            <div id="alertSlide" class="alert alert-success"><i class="far fa-check mr-3"></i> {{ session()->get('success') }}</div>
                        </div>
                    @endif
					<div class="col-lg-4">
						<div class="card card-profile">
							<div class="card-body text-center">
								<img class="avatar avatar-lg text-white" src="{{ Avatar::create(auth()->user()->name) }}">
								<h3 class="mb-3 mt-4">{{ auth()->user()->name }}</h3>
								<p class="mb-4">{{ auth()->user()->email }}</p>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h5><i class="fe fe-github mr-2"></i> Another "ONE DAY" projects!</h5>
								<p>If you are curious and want to make something like <b>{{ env('APP_NAME') }}</b>, you can simpy clone this project through my Github page. Thanks!</p>
								<h5>Usage Dependencies:</h5>
								<ul>
									<li><a href="https://github.com/laravel/laravel" target="_blank">Laravel</a> by Taylor Otwell</li>
									<li><a href="https://github.com/laravolt/avatar" target="_blank">Avatar</a> by Laravolt</li>
									<li><a href="https://github.com/fruitcake/laravel-cors" target="_blank">Cors</a> by Fruitcake (barryvdh)</li>
								</ul>
								<hr/>
								<a href="https://github.com/novay/feedy" target="_blank" class="btn btn-warning btn-sm btn-block pt-2 pb-2"><i class="fe fe-github"></i> Github Project</a>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">{{ __('general.account_settings') }}</h4>
							</div>
							<div class="card-body">
								<form method="post">
									@csrf
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<label>{{ __('general.name') }}</label>
												<input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}" required>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<label>{{ __('general.email') }}</label>
												<input type="email" class="form-control mb-2" name="email" value="{{ auth()->user()->email }}" required>
												<small>{{ __('general.email_desc') }}</small>
											</div>
										</div>
									</div>
									<button type="submit" class="btn bg-camp w-100" name="save" value="username">{{ __('general.save_changes') }}</button>
								</form>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">{{ __('general.change_password') }}</h3>
							</div>
							<div class="card-body">
								<form method="post">
									@csrf
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<label>{{ __('general.new_password') }}</label>
												<input type="password" class="form-control mb-2 @error('password') is-invalid @enderror" name="password" required>
												@error('password')
			                                        <span class="invalid-feedback" role="alert">
			                                            <strong>{{ $message }}</strong>
			                                        </span>
			                                    @enderror
			                                    <small>{{ __('general.new_password_desc') }}</small>
											</div>
										</div>
									</div>
									<button type="submit" class="btn bg-camp w-25" name="save" value="password">{{ __('general.change_password') }}</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
