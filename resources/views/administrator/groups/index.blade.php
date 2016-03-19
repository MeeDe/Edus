@extends('layouts.app')

@section('content')
    @include('layouts.administrator.submenu')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('text.administrator.groups.header') }}</div>
                <div class="panel-body">
                    <div class="panel-group">
                            @include('administrator.groups.panel.manage')
                            <a href="{{ route('administrator.groups.create') }}" class="btn btn-primary" role="button">
                                <i class="fa fa-btn glyphicon glyphicon-forward"></i>
                                {{ trans('dictionary.create') }}
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
