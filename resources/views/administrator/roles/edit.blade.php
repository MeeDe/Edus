<div class="panel panel-default">
    <div class="panel-heading">
        Edytuj rolę
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post" name="rolesForm">
            <div class="@if ($errors->has('role_name'))has-error has-feedback @endif form-group">
                <label class="col-sm-3 control-label">Nazwa:</label>
                <div class="col-sm-9">
                    <input type="text" name="role_name" class="form-control">
                </div>
            </div>

            <div class="form-group"><div class="col-md-12 form-group">&zwnj;</div></div>

            <div class="@if ($errors->has('role_desc'))has-error has-feedback @endif form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-sign-in"></i>{{ trans('dictionary.skip') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>