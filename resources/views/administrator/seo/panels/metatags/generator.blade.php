<div class="form-group{{ $errors->has('generator') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">generator</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="generator" value="Prothean framework v1.0">

        @if ($errors->has('generator'))
            <span class="help-block">
                <strong>{{ $errors->first('generator') }}</strong>
            </span>
        @endif
    </div>
</div>
