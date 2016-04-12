<div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">contact</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="contact" value="{{ old('contact') }}">

        @if ($errors->has('contact'))
            <span class="help-block">
                <strong>{{ $errors->first('contact') }}</strong>
            </span>
        @endif
    </div>
</div>
