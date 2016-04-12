<div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">author</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="author" value="{{ old('author') }}">

        @if ($errors->has('author'))
            <span class="help-block">
                <strong>{{ $errors->first('author') }}</strong>
            </span>
        @endif
    </div>
</div>
