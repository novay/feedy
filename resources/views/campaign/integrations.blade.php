@extends('campaign.theme')
@section('title', __('general.integrations'))

@section('inner-content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title text-dark"><i class="fe fe-code mr-2"></i> {{ __('general.widget_embed') }}</h3>
			<div class="card-options">
			</div>
		</div>
		<div class="card-body">
			{!! __('general.integration_line_1') !!}
			<label class="form-label">{{ __('general.copy_your_code') }}</label>
			<div class="textarea-container">
				<textarea id="embed" class="form-control textareaInput" rows="3">&lt;!-- Start {{ env('APP_NAME') }} Widget --&gt;
&lt;script type="text/javascript" src="{{ route('widget.script', $data->uuid) }}"&gt;&lt;/script&gt;
&lt;!-- End {{ env('APP_NAME') }} --&gt;</textarea>
			</div>
			<div class="mt-4 d-flex justify-content-center">
				<button type="submit" class="btn bg-camp copy-to-clipboard w-50" id="copy-to-clipboard" data-clipboard-action="copy" data-clipboard-target="#embed">
					<i class="fe fe-copy copy-to-clipboard mr-2"></i> {{ __('general.copy_code') }}
				</button>
			</div>
			<a href="mailto:?subject={{ rawurlencode(__('general.email_subject', ['name' => env('APP_NAME')])) }}&amp;body={{ rawurlencode(__('general.email_body', ['name' => env('APP_NAME'), 'route' => route('widget.script', $data->uuid)])) }}" target="_blank" class="text-muted d-block text-center mt-3">
				{{ __('general.send_to_developer') }}
			</a>
		</div>
	</div>


	<div class="card">
		<div class="card-header">
			<h3 class="card-title text-dark"><i class="fe fe-file-text mr-2"></i> {{ __('general.standalone_page') }}</h3>
		</div>
		<div class="card-body">
			{!! __('general.integration_line_2', ['name' => env('APP_NAME')]) !!}
			<div class="textarea-container mb-5">
				<textarea id="pageLink" class="form-control textareaInput mb-3" rows="1">{{ route('widget.view', $data->uuid) }}</textarea>
				<button type="submit" class="btn bg-camp mr-1 copy-page-clipboard" id="copy-page-clipboard" data-clipboard-action="copy" data-clipboard-target="#pageLink">
					<i class="fe fe-copy mr-2"></i> {{ __('general.copy_url') }}
				</button>
				<a href="{{ route('widget.view', $data->uuid) }}" target="_blank" class="btn btn-gray">
					<i class="fe fe-external-link mr-2"></i> {{ __('general.preview') }}
				</a>
			</div>
		</div>
	</div>
@stop