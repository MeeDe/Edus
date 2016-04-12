<div class="form-group{{ $errors->has('imagetoolbar') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">imagetoolbar</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="imagetoolbar" value="{{ old('imagetoolbar') }}">

        @if ($errors->has('imagetoolbar'))
            <span class="help-block">
                <strong>{{ $errors->first('imagetoolbar') }}</strong>
            </span>
        @endif
    </div>
</div>
