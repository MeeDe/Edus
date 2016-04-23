@extends('layouts.app')
@section('css')
    <link href="{{ url('/js/jquery-ui-1.11.4.full/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ url('/js/jquery-ui-1.11.4.full/jquery-ui.structure.min.css') }}" rel="stylesheet">
    <link href="{{ url('/js/jquery-ui-1.11.4.full/jquery-ui.theme.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @include('layouts.administrator.submenu')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('text.administrator.logs.headers.header') }}
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel-group">
                                @include('administrator.logs.view.search_by_user')
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel-group">
                                @include('administrator.logs.view.search_by_table')
                            </div>
                        </div>
                    </div>
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                {{ trans('text.administrator.logs.headers.table') }}
                            </div>
                            <div class="panel-body">
                                @include('administrator.logs.view.search_results')
                            </div>
                        </div>
                        <div class="panel-body">
                            @include('administrator.logs.view.modal')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jquery')
    <script src="{{ url('/js/jquery-ui-1.11.4.full/jquery-ui.min.js') }}"></script>
    <script src="{{ url('/js/jquery.mask.js') }}"></script>
    @include('administrator.logs.view.jquery')
@endsection