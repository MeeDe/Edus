<div class="panel panel-default">
    <div class="panel-heading">
        {{ trans('text.administrator.logs.headers.search_by_user') }}
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post" action="{{ route('administrator.logs.sbu') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="@if ($errors->has('user_name'))has-error has-feedback @endif form-group">
                <label class="col-sm-3 control-label">{{ trans('dictionary.name') }}</label>
                <div class="col-sm-9">
                    <input type="text" name="user_name" class="form-control" value="Prothean">
                </div>
            </div>

            <div class="@if ($errors->has('date_from'))has-error has-feedback @endif form-group">
                <label class="col-sm-3 control-label">{{ trans('dictionary.from') }}</label>
                <div class="col-sm-4">
                    <input type="text" id="date_from_sbu" name="date_from" class="form-control" value="{{ old('date_from') }}">
                </div>
            </div>
            <div class="@if ($errors->has('date_to'))has-error has-feedback @endif form-group">
                <label class="col-sm-3 control-label">{{ trans('dictionary.to') }}</label>
                <div class="col-sm-4">
                    <input type="text" id="date_to_sbu" name="date_to" class="form-control" value="{{ old('date_to') }}">
                </div>
            </div>

            <div class="@if ($errors->has('action'))has-error has-feedback @endif form-group">
                <label class="col-sm-3 control-label">{{ trans('dictionary.action') }}</label>
                <div class="col-sm-4">
                    <select class="form-control" name="action">
                        <option value="all" selected>{{ trans('dictionary.all') }}</option>
                        <option value="created">{{ trans('dictionary.create') }}</option>
                        <option value="updated">{{ trans('dictionary.update') }}</option>
                        <option value="deleted">{{ trans('dictionary.delete') }}</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn glyphicon glyphicon-forward"></i>{{ trans('dictionary.search') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>