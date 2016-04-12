<div class="form-group{{ $errors->has('googlebot') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">googlebot</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="googlebot" value="{{ old('googlebot') }}">

        @if ($errors->has('googlebot'))
            <span class="help-block">
                <strong>{{ $errors->first('googlebot') }}</strong>
            </span>
        @endif
    </div>
</div>
