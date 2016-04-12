<div class="form-group{{ $errors->has('refresh') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">refresh</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="refresh" value="{{ old('refresh') }}">

        @if ($errors->has('refresh'))
            <span class="help-block">
                <strong>{{ $errors->first('refresh') }}</strong>
            </span>
        @endif
    </div>
</div>
