@extends('campaign.theme')
@section('title', __('general.responses'))

@section('inner-content')
	@if(session()->has('success'))
		<div id="alertSlide" class="alert alert-success"><i class="far fa-check mr-3"></i> {{ session()->get('success') }}</div>
	@endif
	<div class="card">
		<div class="card-header">
			<h3 class="card-title"><span class="icon mr-3"><i class="fe fe-users"></i></span>{{ __('general.responses') }}</h3>
			<div class="card-options">
				<a href="{{ route('campaign.data', $data->uuid) }}" class="btn btn-secondary btn-sm" onclick="$(this).addClass('disabled').addClass('btn-loading');"><i class="fe fe-database mr-2"></i> {{ __('general.data_manager') }}</a>
			</div>
		</div>
		@if(!$data->responses()->count())
			<div class="card-body">
				<p>{{ __('general.response_empty') }}</p>
				<br>
				<strong>{!! __('general_response_setup', ['route' => route('campaign.integrations', $data->uuid)]) !!}</strong>
			</div>
		@else
			<div class="table-responsive">
				<table class="table table-hover table-outline table-vcenter card-table table-striped">
					<thead>
						<tr>
							<th>{{ __('general.email') }}</th>
							<th>{{ __('general.rating') }}</th>
							<th>{{ __('general.message') }}</th>
							<th>{{ __('general.ip_address') }}</th>
							<th>{{ __('general.created') }}</th>
							<th>{{ __('general.actions') }}</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data->responses as $temp)
						<tr>
							<td>
								<strong>{{ $temp->email ?? __('general.not_provided') }}</strong>
							</td>
							<td>
								@if($temp->rate == 1)
									<img src="{{ env('FD_EMOJI_AMAZING') }}" width="30">
								@endif
								@if($temp->rate == 2)
									<img src="{{ env('FD_EMOJI_GREAT') }}" width="30">
								@endif
								@if($temp->rate == 3)
									<img src="{{ env('FD_EMOJI_OK') }}" width="30">
								@endif
								@if($temp->rate == 4)
									<img src="{{ env('FD_EMOJI_BAD') }}" width="30">
								@endif
								@if($temp->rate == 5)
									<img src="{{ env('FD_EMOJI_TERRIBLE') }}" width="30">
								@endif
							</td>
							<td class="messageTable">{{ $temp->message }}</td>
							<td>
								@if($data->private)
									{{ __('general.unknown') }}
								@else
									<a href="https://whatismyipaddress.com/ip/{{ $temp->ip }}" target="_blank">{{ $temp->ip }}</a>
								@endif
							</td>
							<td>{{ date('M d, Y h:i a', strtotime($temp->created_at)) }}</td>
							<td class="text-center">
								<a href="javascript:void(0)" data-toggle="modal" data-target="#deleteResponse{{ $temp->id }}" class="btn btn-danger btn-sm pt-2 pb-2 pl-4 pr-4"><i class="fe fe-trash mr-2"></i> {{ __('general.delete') }}</a>
								<!-- Delete response modal -->
								<div class="modal fade" id="deleteResponse{{ $temp->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header text-center">
												<h4 class="modal-title" id="myModalLabel">{!! __('general.are_you_sure') !!}</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												{!! __('general.delete_response_desc') !!}
											</div>
											<div class="modal-footer">
												<form method="post" action="{{ route('campaign.responses.delete', [$data->uuid, $temp->id]) }}">
													@csrf
													<input type="hidden" name="_method" value="DELETE">
													<button type="submit" name="deleteSubmit" value="1" class="btn btn-danger mr-2" onclick="$(this).addClass('disabled').addClass('btn-loading');"><i class="fe fe-trash mr-2"></i> {{ __('general.delete') }}</button>
													<button type="button" class="btn btn-white" data-dismiss="modal"><i class="fe fe-x"></i> {{ __('general.cancel') }}</button>
												</form>
											</div>
										</div>
									</div>
								</div>
								<!-- End Delete response modal -->
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		@endif
	</div>
@stop