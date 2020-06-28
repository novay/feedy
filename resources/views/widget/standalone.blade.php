<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ $data->title }}</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,600,700" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/libs/fontawesome-pro/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" media="all" href="{{ asset('assets/dashboard/css/editor.css') }}">
</head>
<body class="feedbackBody">
    <div class="lw-widget feedbackPage lw-widget_fullscreen" data-lw-onload>
        <div class="lw-container lw-container_md">
            <div class="lw-item feedbackContain" style="--theme-color:{{ $data->widget_color }}">
                <div class="lw-wrap lw-p-lg">
                    <div id="widgetHeader">
                        <div class="lw-logo lw-logo_icon lw-logo_center lw-mb-md iconBlock">
                            <div class="lw-preview"><i class="far fa-envelope faIcon"></i></div>
                        </div>
                        <div class="lw-title lw-title_lg widgetTitle">{{ $data->title }}</div>
                        <div class="lw-content lw-mb-sm widgetSubtitle">{{ $data->subtitle }}</div>
                    </div>
                    <div id="response">
                        <form id="feedbackForm">
                            @csrf
                            <input type="text" name="feedbackId" value="{{ $data->uuid }}" hidden>
                            @if($data->enable_rating)
                                <div class="lw-title lw-title_sm lw-mb-sm rateTitle">{{ __('general.rate_exp') }}</div>
                                <div class="lw-tags lw-mb-sm emojiContainer">
                                    <div class="lw-tags-item lw-active" id="rateFive" title="Amazing">
                                        <img src="{{ env('FD_EMOJI_AMAZING') }}" width="30">
                                    </div>
                                    <div class="lw-tags-item" id="rateFour" title="Great">
                                        <img src="{{ env('FD_EMOJI_GREAT') }}" width="30">
                                    </div>
                                    <div class="lw-tags-item" id="rateThree" title="OK">
                                        <img src="{{ env('FD_EMOJI_OK') }}" width="30">
                                    </div>
                                    <div class="lw-tags-item" id="rateTwo" title="Bad">
                                        <img src="{{ env('FD_EMOJI_BAD') }}" width="30">
                                    </div>
                                    <div class="lw-tags-item" id="rateOne" title="Terrible">
                                        <img src="{{ env('FD_EMOJI_TERRIBLE') }}" width="30">
                                    </div>
                                </div>
                                <input type="text" name="rate" id="rateValue" value="5" hidden>
                            @endif
                            <div class="lw-mb-md">
                                <div class="lw-field lw-mb">
                                    <div class="lw-icon"><i class="fas fa-envelope"></i></div>
                                    <input class="lw-input" type="email" name="email" value="" placeholder="{{ __('general.email') }}{{ $data->enable_email ? '*' : '' }}" {{ $data->enable_email ? 'required' : '' }}>
                                </div>
                                <div class="lw-field">
                                    <textarea class="lw-textarea" name="message" placeholder="{{ __('general.tell_us') }}" required></textarea>
                                </div>
                            </div>
                            <button type="submit" id="feedbackSubmit" class="lw-btn lw-btn_wide">{{ __('general.send_feedback') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/dashboard/js/vendors/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/feedy.js') }}"></script>
    <script>var postUrl = "{{ route('widget.submit', $data->uuid) }}";</script>
</body>
</html>