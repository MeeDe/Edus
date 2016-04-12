<div class="form-group{{ $errors->has('web_author') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">web_author</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="web_author" value="{{ old('web_author') }}">

        @if ($errors->has('web_author'))
            <span class="help-block">
                <strong>{{ $errors->first('web_author') }}</strong>
            </span>
        @endif
    </div>
</div>
