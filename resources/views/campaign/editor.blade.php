@extends('campaign.theme')
@section('title', __('general.editor'))

@section('inner-content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title"><span class="icon mr-3"><i class="fe fe-edit-2"></i></span>{{ __('general.feedback_editor') }}</h3>
		</div>
		<div class="card-body">
			{!! __('general.editor_line_1', ['name' => env('APP_NAME')]) !!}
			<a href="{{ route('editor.index', $data->uuid) }}" class="btn bg-camp mt-3" onclick="$('#editCampaign').submit(); $(this).addClass('disabled').addClass('btn-loading');">{{ __('general.launch_editor') }} <i class="fe fe-arrow-right ml-2"></i></a>
		</div>
	</div>
@stop