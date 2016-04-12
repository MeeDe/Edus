<div class="panel panel-default">
    <div class="panel-heading">{{ trans('text.administrator.system.panel.website.header') }}</div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="">
            {!! csrf_field() !!}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">{{ trans('dictionary.name') }}</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="name" value="">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('seo') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">{{ trans('dictionary.seo') }}</label>

                <div class="col-md-8">
                    <input type="text" class="form-control" name="seo" value="">

                    @if ($errors->has('seo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('seo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('offline') ? ' has-error' : '' }}">
                <label for="isOffline" class="col-md-4 control-label">{{ trans('dictionary.offline') }}</label>

                <div class="col-md-8">
                    <input type="checkbox" class="checkbox" id="isOffline" name="offline">

                    @if ($errors->has('offline'))
                        <span class="help-block">
                            <strong>{{ $errors->first('offline') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('offline_msg') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">{{ trans('dictionary.offline_msg') }}</label>

                <div class="col-md-8">
                    <input type="text" class="form-control" name="offline_msg" value="{{ trans('text.administrator.system.panel.website.offline_msg') }}" readonly>

                    @if ($errors->has('offline_msg'))
                        <span class="help-block">
                            <strong>{{ $errors->first('offline_msg') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>