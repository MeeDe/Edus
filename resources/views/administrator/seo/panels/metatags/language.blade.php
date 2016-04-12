<div class="form-group{{ $errors->has('language') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">language</label>

    <div class="col-md-6">
        <!-- http://www-01.sil.org/iso639-3/codes.asp?order=639_1&letter=%25 -->
        <input type="text" class="form-control" name="language" value="{{ old('language') }}">

        @if ($errors->has('language'))
            <span class="help-block">
                <strong>{{ $errors->first('language') }}</strong>
            </span>
        @endif
    </div>
</div>
