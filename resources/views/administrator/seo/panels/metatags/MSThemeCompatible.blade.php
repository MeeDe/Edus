<div class="form-group{{ $errors->has('MSThemeCompatible') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">MSThemeCompatible</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="MSThemeCompatible" value="{{ old('MSThemeCompatible') }}">

        @if ($errors->has('MSThemeCompatible'))
            <span class="help-block">
                <strong>{{ $errors->first('MSThemeCompatible') }}</strong>
            </span>
        @endif
    </div>
</div>
