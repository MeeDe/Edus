@extends('layouts.app')

@section('content')
    @include('layouts.administrator.submenu')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('dictionary.groups') }}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('administrator.groups.edit', ['id'=>$group->id]) }}">
                        {!! csrf_field() !!}

                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">{{ trans('dictionary.stock') }}</div>
                                <div class="panel-body">
                                    @include('administrator.groups.edit.stock', ['group'=>$group])
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">{{ trans('dictionary.users') }}</div>
                                <div class="panel-body">
                                    @include('administrator.groups.edit.users', ['users'=>$group->accounts()])
                                </div>
                            </div>
                            <div class="panel">
                                <button type="submit" name="edit" class="btn btn-primary">
                                    <i class="fa fa-btn glyphicon glyphicon-edit"></i>{{ trans('dictionary.edit') }}
                                </button>
                                <button type="submit" name="delete" class="btn btn-primary">
                                    <i class="fa fa-btn glyphicon glyphicon-remove"></i>{{ trans('dictionary.delete') }}
                                </button>
                                <button type="submit" name="block" class="btn btn-primary">
                                    <i class="fa fa-btn glyphicon glyphicon-stop"></i>{{ trans('dictionary.block') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
