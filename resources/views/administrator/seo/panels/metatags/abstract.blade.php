<div class="form-group{{ $errors->has('abstract') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">abstract</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="abstract" value="{{ old('abstract') }}">

        @if ($errors->has('abstract'))
            <span class="help-block">
                <strong>{{ $errors->first('abstract') }}</strong>
            </span>
        @endif
    </div>
</div>
