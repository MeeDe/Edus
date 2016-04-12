<div class="form-group{{ $errors->has('Cache-control') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Cache-control</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="Cache-control" value="{{ old('Cache-control') }}">

        @if ($errors->has('Cache-control'))
            <span class="help-block">
                <strong>{{ $errors->first('Cache-control') }}</strong>
            </span>
        @endif
    </div>
</div>
