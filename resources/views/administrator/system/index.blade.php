@extends('layouts.app')

@section('content')
    @include('layouts.administrator.submenu')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('dictionary.system') }}</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            @include('administrator.system.panel.website')
                        </div>
                        <div class="col-md-6">
                            @include('administrator.system.panel.data')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
