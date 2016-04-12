<div class="form-group{{ $errors->has('distribution') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">distribution</label>

    <div class="col-md-6">
        <select class="form-control" name="distribution" id="distribution">
            <option selected disabled>--</option>
            <option value="Global">Global</option>
            <option value="Local">Local</option>
            <option value="IU">IU - Internal Use</option>
        </select>

        @if ($errors->has('distribution'))
            <span class="help-block">
                <strong>{{ $errors->first('distribution') }}</strong>
            </span>
        @endif
    </div>
</div>
