@extends('layouts.app')

@section('content')
    @include('layouts.administrator.submenu')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ul class="list-inline">
                        <li>{{ trans('dictionary.groups') }}</li>

                        @if($account->checkOperation('administrator.groups', 'C'))
                            <li class="pull-right">
                                <a href="{{ route('administrator.groups.create') }}" class="btn btn-primary" role="button">
                                    <i class="fa fa-btn glyphicon glyphicon-forward"></i>
                                    {{ trans('dictionary.create') }}
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="panel-group">
                        <div class="panel-body">
                            @include('administrator.groups.manage')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
