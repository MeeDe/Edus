@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('system.status.success') }}</div>

                <div class="panel-body">
                    {{ trans('auth.message.request_in_queue') }}
                </div>
            </div>
        </div>
    </div>
@endsection
