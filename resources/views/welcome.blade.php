@extends('layouts.app')

@section('content')
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
                        @else
                            {{ trans('text.welcome.active') }}
                        @endif
                    @endif
                </div>
                @include('modal')
                <input type="button" class="btn-primary" name="modalBtn" value="modal">
            </div>
        </div>
    </div>
</div>
@endsection
@section('jquery')
    @include('jquery')
@endsection