<div class="container">
    <nav class="navbar">
        <ul class="nav nav-tabs">
            <li><a href="{{ route('administrator.users') }}">{{ trans('dictionary.users') }}</a></li>
            <li><a href="#">{{ trans('dictionary.subjects') }}</a></li>
            <li><a href="{{ route('administrator.groups') }}">{{ trans('dictionary.groups') }}</a></li>
            <li><a href="{{ route('administrator.roles') }}">{{ trans('dictionary.roles') }}</a></li>
            <li><a href="#">{{ trans('dictionary.mailer') }}</a></li>
            <li><a href="#">{{ trans('dictionary.files') }}</a></li>
            <li><a href="{{ route('administrator.logs') }}">{{ trans('dictionary.logs') }}</a></li>
            <li><a href="{{ route('administrator.settings') }}">{{ trans('dictionary.system') }}</a></li>
        </ul>
    </nav>
</div>