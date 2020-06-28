@extends('campaign.theme')
@section('title', __('general.data_manager'))

@section('inner-content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title text-dark"><i class="fe fe-database mr-2"></i> {{ __('general.data_manager') }}</h3>
		</div>
		<div class="card-body">
			<div class="alert bg-danger text-white">{{ __('general.import_disabled') }}</div>
			<p>{!! __('general.data_line_1', ['name' => env('APP_NAME')]) !!}</p>
			{!! __('general.data_line_2', ['count' => $data->responses()->count()]) !!}
			<div class="mt-5 mb-3">
				<button type="button" data-toggle="modal" data-target="#importModal" class="btn btn-gray w-25 mx-1">
					<i class="fe fe-upload mr-2"></i> {{ __('general.import') }}
				</button>
				<form method="post" class="mb-5 d-inline" action="{{ route('campaign.export', $data->uuid) }}">
					@csrf
					<button type="submit" class="btn bg-camp w-25 mx-1">
						<i class="fe fe-download mr-2"></i> {{ __('general.download') }}
					</button>
				</form>
			</div>
		</div>
	</div>
@stop