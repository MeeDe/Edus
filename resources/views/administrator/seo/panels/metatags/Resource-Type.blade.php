<div class="form-group{{ $errors->has('Resource-Type') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Resource-Type</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="Resource-Type" value="{{ old('Resource-Type') }}">

        @if ($errors->has('Resource-Type'))
            <span class="help-block">
                <strong>{{ $errors->first('Resource-Type') }}</strong>
            </span>
        @endif
    </div>
</div>
