@extends('layouts.app')

@section('content')
    @include('layouts.administrator.submenu')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Role
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>{{ trans('dictionary.number') }}</th>
                            <th>{{ trans('dictionary.name') }}</th>
                            <th>{{ trans('dictionary.desc') }}</th>
                            <th>{{ trans('dictionary.route') }}</th>
                            <th>{{ trans('dictionary.operations') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($role->privileges()->get() as $_key => $privilege)
                                <tr>
                                    <td style="text-align: center">{{ ++$_key }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->descr }}</td>
                                    <td>{{ $privilege->route }}</td>
                                    <td>{{ $privilege->operations }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
