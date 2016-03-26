<div class="panel panel-default">
    <div class="panel-heading">
        {{ trans('text.administrator.privileges.create.header') }}
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post" action="{{ route('administrator.privileges.store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="@if ($errors->has('priv_name'))has-error has-feedback @endif form-group">
                <label class="col-sm-3 control-label">{{ trans('dictionary.name') }}</label>
                <div class="col-sm-9">
                    <input type="text" name="priv_name" class="form-control">
                </div>
            </div>

            <div class="form-group{{ $errors->has('priv_role') ? ' has-error' : '' }}">
                <label class="col-md-3 control-label">{{ trans('dictionary.role') }}</label>

                <div class="col-md-9">
                    <select class="form-control" name="priv_role">
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" @if($role->id == old('priv_role')) selected @endif>{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="@if ($errors->has('priv_operations'))has-error has-feedback @endif form-group">
                <label class="col-sm-3 control-label">{{ trans('dictionary.privileges') }}</label>
                <div class="col-sm-9">
                    <div class="col-md-6" style="text-align: center;">
                        <label class="checkbox-inline"><input type="checkbox" name="rights[0]" value="Y">{{ trans('dictionary.yes') }}</label>
                    </div>
                    <div class="col-md-6" style="text-align: center;">
                        <label class="checkbox-inline"><input type="checkbox" name="rights[1]" value="N">{{ trans('dictionary.no') }}</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn glyphicon glyphicon-forward"></i>{{ trans('dictionary.save') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>