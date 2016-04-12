<div class="form-group{{ $errors->has('Content-Type') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Content-Type</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="Content-Type" value="{{ old('Content-Type') }}">

        @if ($errors->has('Content-Type'))
            <span class="help-block">
                <strong>{{ $errors->first('Content-Type') }}</strong>
            </span>
        @endif
    </div>
</div>
