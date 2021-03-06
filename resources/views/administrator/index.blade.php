@extends('layouts.app')

@section('content')
    @include('layouts.administrator.submenu')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('text.administrator.header') }}</div>
                    <div class="panel-body">
                        {{ trans('text.administrator.index') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
