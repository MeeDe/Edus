<div class="form-group{{ $errors->has('robots') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Robots</label>

    <div class="col-md-6">
        <label class="checkbox-inline"><input type="checkbox" name="robots[0]" value="index">index</label>
        <label class="checkbox-inline"><input type="checkbox" name="robots[1]" value="noindex">noindex</label>
        <label class="checkbox-inline"><input type="checkbox" name="robots[2]" value="follow">follow</label>
        <label class="checkbox-inline"><input type="checkbox" name="robots[3]" value="nofollow">nofollow</label>
        <label class="checkbox-inline"><input type="checkbox" name="robots[4]" value="nofollow">all</label>

        @if ($errors->has('robots'))
            <span class="help-block">
                <strong>{{ $errors->first('robots') }}</strong>
            </span>
        @endif
    </div>
</div>
