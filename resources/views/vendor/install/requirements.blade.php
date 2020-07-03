@section('site_title', __('Installation') . ' - ' . config('info.software.name'))

<div class="card border-0 shadow-sm overflow-hidden">
    <div class="card-header">
        <div class="font-weight-medium py-1">{{ __('Requirements') }}</div>
    </div>

    <div class="card-body">
        @foreach($results['extensions'] as $type => $extension)
            <div class="list-group list-group-flush {{ $loop->index == 0 ? 'mb-n3 mt-n3' : 'mt-3 mb-n3 pt-3' }}">
                <div class="list-group-item px-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <span class="font-weight-medium">{{ mb_strtoupper($type) }}</span>
                            @if($type == 'php')
                                {{ config('install.php_version') }}+
                            @endif
                        </div>

                        <div class="col-auto d-flex align-items-center">
                            @if($type == 'php')
                                @if(version_compare(PHP_VERSION, config('installer.php_version')) >= 0)
                                    <i class="fa fa-check text-success icon-text fill-current"></i>
                                @else
                                    <i class="fa fa-times text-danger icon-text fill-current pt-1"></i>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>

                @foreach($extension as $name => $enabled)
                    <div class="list-group-item px-0 text-muted">
                        <div class="row align-items-center">
                            <div class="col">
                                {{ $name }}
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                @if($enabled)
                                    <i class="fa fa-check text-success icon-text fill-current"></i>
                                @else
                                    <i class="fa fa-times text-danger icon-text fill-current pt-1"></i>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>

@if(isset($results['errors']) == false)
    <a href="{{ route('install.permissions') }}" class="btn btn-block btn-primary d-inline-flex align-items-center mt-3 py-2">
        <span class="d-inline-flex align-items-center mx-auto">
            {{ __('Next') }} 
            <i class="fa fa-chevron-right icon-button fill-current ml-2"></i>
        </span>
    </a>
@endif