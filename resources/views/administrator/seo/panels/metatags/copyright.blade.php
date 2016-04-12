<div class="form-group{{ $errors->has('copyright') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">copyright</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="copyright" value="{{ old('copyright') }}">

        @if ($errors->has('copyright'))
            <span class="help-block">
                <strong>{{ $errors->first('copyright') }}</strong>
            </span>
        @endif
    </div>
</div>
