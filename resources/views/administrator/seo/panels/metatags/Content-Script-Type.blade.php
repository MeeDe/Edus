<div class="form-group{{ $errors->has('Content-Script-Type') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Content-Script-Type</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="Content-Script-Type" value="{{ old('Content-Script-Type') }}">

        @if ($errors->has('Content-Script-Type'))
            <span class="help-block">
                <strong>{{ $errors->first('Content-Script-Type') }}</strong>
            </span>
        @endif
    </div>
</div>
