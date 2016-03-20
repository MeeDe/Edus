<div class="panel panel-default">
    <div class="panel-heading">
        {{ trans('text.administrator.roles.create.header') }}
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post" action="{{ route('administrator.roles.store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="@if ($errors->has('role_name'))has-error has-feedback @endif form-group">
                <label class="col-sm-3 control-label">{{ trans('dictionary.name') }}</label>
                <div class="col-sm-9">
                    <input type="text" name="role_name" class="form-control">
                </div>
            </div>

            <div class="@if ($errors->has('role_desc'))has-error has-feedback @endif form-group">
                <label class="col-sm-3 control-label">{{ trans('dictionary.desc') }}</label>
                <div class="col-sm-9">
                    <input type="text" name="role_desc" class="form-control">
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