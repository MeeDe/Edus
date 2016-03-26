<div class="container">
    <nav class="navbar">
        <ul class="nav nav-tabs">
            <li @if(Request::segment(2)=="users") class="active" @endif>
                <a href="{{ route('administrator.users.index') }}">{{ trans('dictionary.users') }}</a>
            </li>
            <li @if(Request::segment(2)=="groups") class="active" @endif>
                <a href="{{ route('administrator.groups.index') }}">{{ trans('dictionary.groups') }}</a>
            </li>
            <li @if(Request::segment(2)=="roles") class="active" @endif>
                <a href="{{ route('administrator.roles.index') }}">{{ trans('dictionary.roles') }}</a>
            </li>
            <li @if(Request::segment(2)=="privileges") class="active" @endif>
                <a href="{{ route('administrator.privileges.index') }}">{{ trans('dictionary.privileges') }}</a>
            </li>
            <li @if(Request::segment(2)=="system") class="active" @endif>
                <a href="{{ route('administrator.system.index') }}">{{ trans('dictionary.system') }}</a>
            </li>
            <!--<li><a href="{{ route('administrator.logs.index') }}">{{ trans('dictionary.logs') }}</a></li>-->
        </ul>
    </nav>
</div>