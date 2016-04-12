<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Description</label>

    <div class="col-md-6">
        <textarea class="form-control" rows="3" name="description" id="description"></textarea>

        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>
</div>
