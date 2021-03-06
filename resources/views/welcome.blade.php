@extends('layouts.app')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('system.name') }}</div>

                <div class="panel-body">
                    {{ trans('text.welcome.index') }}
                    @if(Auth::User()!==null)
                        <br>
                        @if(!Auth::User()->active)
                            {{ trans('text.welcome.inactive') }}
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection