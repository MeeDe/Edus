<div class="form-group{{ $errors->has('Set-Cookie') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Set-Cookie</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="Set-Cookie" value="{{ old('Set-Cookie') }}">

        @if ($errors->has('Set-Cookie'))
            <span class="help-block">
                <strong>{{ $errors->first('Set-Cookie') }}</strong>
            </span>
        @endif
    </div>
</div>
