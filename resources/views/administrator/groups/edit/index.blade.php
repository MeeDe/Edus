@extends('layouts.app')

@section('content')
    @include('layouts.administrator.submenu')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('text.administrator.groups.edit.header') }}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="{{ route('administrator.groups.edit', ['id'=>$group->id]) }}">
                        {!! csrf_field() !!}

                        <div class="panel-group">
                            @include('administrator.groups.edit.panel.stock')
                            @include('administrator.groups.edit.panel.users', ['users'=>$group->accounts()])
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
