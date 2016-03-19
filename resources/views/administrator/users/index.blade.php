@extends('layouts.app')

@section('content')
    @include('layouts.administrator.submenu')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('dictionary.users') }}</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            @include('administrator.users.panel.registered_users')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @include('administrator.users.panel.active_users')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @include('administrator.users.panel.queued_users')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
