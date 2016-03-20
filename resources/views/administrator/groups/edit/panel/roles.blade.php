<div class="panel panel-default">
    <div class="panel-heading">{{ trans('text.administrator.groups.edit.panel.roles.header') }}</div>
    <div class="panel-body">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>{{ trans('dictionary.checkbox') }}</th>
                <th>{{ trans('dictionary.name') }}</th>
                <th style="text-align: center;">{{ trans('dictionary.edit') }}</th>
                <th style="text-align: center;">{{ trans('dictionary.delete') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $k => $role)
                <tr>
                    <td style="text-align: center; width: 5%"><input type="checkbox" name="role[{{ $k }}]" value="{{ $role->id }}" @if(in_array($role->id, $checked)) checked @endif></td>
                    <td style="width: 76%">{{ $role->name }}</td>
                    <td style="text-align: center; width: 7%"><a href="{{ route('administrator.roles.view', ['id'=>$role->id]) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td style="text-align: center; width: 7%"><a href="{{ route('administrator.roles.delete', ['id'=>$role->id]) }}"><span class="glyphicon glyphicon-remove"></span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>