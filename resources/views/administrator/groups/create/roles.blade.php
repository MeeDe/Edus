<div class="panel panel-default">
    <div class="panel-heading">{{ trans('dictionary.roles') }}</div>
    <div class="panel-body">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th style="text-align: center;">{{ trans('dictionary.number') }}</th>
                <th>{{ trans('dictionary.checkbox') }}</th>
                <th>{{ trans('dictionary.name') }}</th>
                <th>{{ trans('dictionary.desc') }}</th>
            </tr>
            </thead>
            <tbody>
                @foreach($roles as $k => $role)
                    <tr>
                        <td style="text-align: center; width: 5%">{{++$k}}</td>
                        <td style="text-align: center; width: 5%"><input type="checkbox" name="role[{{ $k }}]" value="{{ $role->id }}"></td>
                        <td style="width: 40%">{{$role->name}}</td>
                        <td style="width: 50%">{{$role->descr}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>