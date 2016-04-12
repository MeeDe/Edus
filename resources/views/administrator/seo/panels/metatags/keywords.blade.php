<div class="form-group{{ $errors->has('keywords') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Keywords</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="keywords" placeholder="a, b, c, d" value="{{ old('keywords') }}">

        @if ($errors->has('keywords'))
            <span class="help-block">
                <strong>{{ $errors->first('keywords') }}</strong>
            </span>
        @endif
    </div>
</div>
