<div class="form-group{{ $errors->has('no-email-collection') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">no-email-collection</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="no-email-collection" value="{{ old('no-email-collection') }}">

        @if ($errors->has('no-email-collection'))
            <span class="help-block">
                <strong>{{ $errors->first('no-email-collection') }}</strong>
            </span>
        @endif
    </div>
</div>
