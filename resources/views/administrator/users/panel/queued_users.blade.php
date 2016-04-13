<div class="panel panel-default">
    <div class="panel-heading">{{  trans('text.administrator.users.panel.inactive_users.header') }}</div>
    <div class="panel-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>{{ trans('dictionary.number') }}</th>
                    <th>{{ trans('dictionary.checkbox') }}</th>
                    <th>{{ trans('dictionary.name') }}</th>
                    <th>{{ trans('dictionary.email') }}</th>
                    <th>{{ trans('dictionary.personal_number') }}</th>
                    <th>{{ trans('dictionary.active') }}</th>
                    <th>{{ trans('dictionary.edit') }}</th>
                    <th>{{ trans('dictionary.delete') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users->where('active', false)->get() as $k => $user)
                    <tr>
                        <td style="text-align: center; width: 5%">{{ ++$k }}</td>
                        <td style="text-align: center; width: 5%"><input type="checkbox" name="user[{{ $k }}]" value="{{ $user->id }}"></td>
                        <td style="width: 40%">{{ $user->name }}</td>
                        <td style="width: 20%">{{ $user->email }}</td>
                        <td style="width: 15%">{{ $user->personal_number }}</td>
                        <td style="text-align: center; width: 5%"><a href="{{ route('administrator.users.activate', ['id'=>$user->id]) }}"><span class="glyphicon glyphicon-remove-circle"></span></a></td>
                        <td style="text-align: center; width: 5%"><a href="{{ route('administrator.users.edit', ['id'=>$user->id]) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                        <td style="text-align: center; width: 5%"><a href="{{ route('administrator.users.delete', ['id'=>$user->id]) }}"><span class="glyphicon glyphicon-remove"></span></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>