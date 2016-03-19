@extends('layouts.app')

@section('content')
    @include('layouts.administrator.submenu')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{trans('text.administrator.users.edit.header')}}</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('administrator.users.edit', ['id'=>$account->id]) }}">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">{{ trans('dictionary.name') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ $account->name }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">{{ trans('dictionary.email') }}</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ $account->email }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">{{ trans('dictionary.password') }}</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">{{ trans('dictionary.password_confirmation') }}</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">{{ trans('dictionary.group') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="groups">
                                        @foreach($groups as $group)
                                            <option value="{{ $group->id }}" @if($group->id==$account->group_id) selected @endif>{{ $group->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('personal_number') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">{{ trans('dictionary.personal_number') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="personal_number" value="{{ $account->personal_number }}">

                                    @if ($errors->has('personal_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('personal_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i>{{ trans('dictionary.edit') }}
                                    </button>
                                </div>
                            </div>;
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
