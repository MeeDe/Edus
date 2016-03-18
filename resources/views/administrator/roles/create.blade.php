<div class="panel panel-default">
    <div class="panel-heading">
        Utwórz rolę
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post" action="{{ route('administrator.roles.store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="@if ($errors->has('role_name'))has-error has-feedback @endif form-group">
                <label class="col-sm-3 control-label">Nazwa:</label>
                <div class="col-sm-9">
                    <input type="text" name="role_name" class="form-control">
                </div>
            </div>

            <div class="@if ($errors->has('role_desc'))has-error has-feedback @endif form-group">
                <label class="col-sm-3 control-label">Opis:</label>
                <div class="col-sm-9">
                    <input type="text" name="role_desc" class="form-control">
                </div>
            </div>

            <div class="@if ($errors->has('role_route'))has-error has-feedback @endif form-group">
                <label class="col-sm-3 control-label">Trasa:</label>
                <div class="col-sm-9">
                    <input type="text" name="role_route" class="form-control">
                </div>
            </div>

            <div class="@if ($errors->has('role_route'))has-error has-feedback @endif form-group">
                <label class="col-sm-3 control-label">Uprawnienia:</label>
                <div class="col-sm-9">
                    <div class="col-md-3" style="text-align: center;">
                        <label class="checkbox-inline"><input type="checkbox" name="rights[0]" value="C">Create</label>
                    </div>
                    <div class="col-md-3" style="text-align: center;">
                        <label class="checkbox-inline"><input type="checkbox" name="rights[1]" value="R">Read</label>
                    </div>
                    <div class="col-md-3" style="text-align: center;">
                        <label class="checkbox-inline"><input type="checkbox" name="rights[2]" value="U">Update</label>
                    </div>
                    <div class="col-md-3" style="text-align: center;">
                        <label class="checkbox-inline"><input type="checkbox" name="rights[3]" value="D">Delete</label>
                    </div>
                </div>
            </div>

            <div class="@if ($errors->has('role_desc'))has-error has-feedback @endif form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-sign-in"></i>{{ trans('dictionary.save') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>