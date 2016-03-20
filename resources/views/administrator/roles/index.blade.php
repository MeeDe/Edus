@extends('layouts.app')

@section('content')
    @include('layouts.administrator.submenu')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('text.administrator.roles.headers.header') }}
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel-group">
                                @include('administrator.roles.create.index')
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel-group">
                                @include('administrator.roles.edit.index')
                            </div>
                        </div>
                    </div>
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                {{ trans('text.administrator.roles.headers.role_review') }}
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>{{ trans('dictionary.number') }}</th>
                                        <th>{{ trans('dictionary.name') }}</th>
                                        <th>{{ trans('dictionary.desc') }}</th>
                                        <th>{{ trans('dictionary.details') }}</th>
                                        <th>{{ trans('dictionary.delete') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($roles->get() as $key => $role)
                                        <tr>
                                            <td style="text-align: center">{{ ++$key }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->descr }}</td>
                                            <td style="text-align: center;">
                                                <a name="modalRoleBtn" data-id="{{ $role->id }}"><span class="glyphicon glyphicon-eye-open"></span></a>
                                            </td>
                                            <td style="text-align: center; width: 7%"><a href="{{ route('administrator.roles.delete', ['id'=>$role->id]) }}"><span class="glyphicon glyphicon-remove"></span></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @include('administrator.roles.view.modal')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jquery')
    @include('administrator.roles.view.jquery')
@endsection