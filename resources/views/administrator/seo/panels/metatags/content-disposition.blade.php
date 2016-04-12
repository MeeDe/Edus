<div class="form-group{{ $errors->has('content-disposition') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">content-disposition</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="content-disposition" value="{{ old('content-disposition') }}">

        @if ($errors->has('content-disposition'))
            <span class="help-block">
                <strong>{{ $errors->first('content-disposition') }}</strong>
            </span>
        @endif
    </div>
</div>
