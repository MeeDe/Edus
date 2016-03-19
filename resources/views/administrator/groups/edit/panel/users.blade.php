<div class="panel panel-default">
    <div class="panel-heading">{{ trans('text.administrator.groups.edit.panel.users.header') }}</div>
    <div class="panel-body">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th style="text-align: center;">{{ trans('dictionary.number') }}</th>
                <th>{{ trans('dictionary.checkbox') }}</th>
                <th>{{ trans('dictionary.name') }}</th>
                <th>{{ trans('dictionary.email') }}</th>
                <th style="text-align: center;">{{ trans('dictionary.edit') }}</th>
                <th style="text-align: center;">{{ trans('dictionary.delete') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users->get() as $k => $user)
                <tr>
                    <td style="text-align: center; width: 5%">{{ ++$k }}</td>
                    <td style="text-align: center; width: 5%"><input type="checkbox" name="user[{{ $k }}]" value="{{ $user->email }}" checked></td>
                    <td style="width: 35%">{{ $user->name }}</td>
                    <td style="width: 41%">{{ $user->email }}</td>
                    <td style="text-align: center; width: 7%"><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td style="text-align: center; width: 7%"><a href="#"><span class="glyphicon glyphicon-remove"></span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>