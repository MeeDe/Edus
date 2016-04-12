<div class="form-group{{ $errors->has('news_keywords') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">news_keywords</label>

    <div class="col-md-6">
        <input type="text" class="form-control" placeholder="a, b, c, d" name="news_keywords" value="{{ old('news_keywords') }}">

        @if ($errors->has('news_keywords'))
            <span class="help-block">
                <strong>{{ $errors->first('news_keywords') }}</strong>
            </span>
        @endif
    </div>
</div>
