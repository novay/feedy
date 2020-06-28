<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-12 col-lg-auto mt-4 mt-lg-0 pull-right">
                <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item">
                        <a href="javascript:;">{{ __('general.documentation') }}</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:;">{{ __('general.support') }}</a>
                    </li>
                    <span>{!! __('general.copyright', ['year' => '2019', 'title' => config('app.name', 'Laravel')]) !!}</span>
                </ul>
            </div>
        </div>
    </div>
</footer>