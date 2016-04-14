<div class="panel panel-default">
    <div class="panel-heading">{{ trans('text.administrator.groups.edit.panel.stock.header') }}</div>
    <div class="panel-body">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-md-8">
                <label class="col-md-2 control-label">{{ trans('dictionary.name') }}</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="name" value="{{ $group->name }}">

                    @if ($errors->has('name'))
                        <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <label class="col-md-4 control-label">{{trans('dictionary.created')}}</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="created" value="{{ $group->created_at }}" readonly>
                </div>
            </div>
        </div>
        <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
            <div class="col-md-8">
                <label class="col-md-2 control-label">{{trans('dictionary.desc')}}</label>

                <div class="col-md-10">
                    <input type="text" class="form-control" name="desc" value="{{ $group->desc }}">

                    @if ($errors->has('desc'))
                        <span class="help-block"><strong>{{ $errors->first('desc') }}</strong></span>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <label class="col-md-4 control-label">{{trans('dictionary.updated')}}</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="updated" value="{{ $group->updated_at }}" readonly>
                </div>
            </div>
        </div>
    </div>
</div>