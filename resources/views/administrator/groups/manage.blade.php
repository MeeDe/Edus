<div class="panel panel-default">
    <div class="panel-heading">{{  trans('dictionary.manage') }}</div>
    <div class="panel-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>{{ trans('dictionary.number') }}</th>
                    <th>{{ trans('dictionary.name') }}</th>
                    <th>{{ trans('dictionary.desc') }}</th>
                    <th>{{ trans('dictionary.edit') }}</th>
                    <th>{{ trans('dictionary.delete') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($groups as $k => $group)
                    <tr>
                        <td style="text-align: center; width:6%">{{++$k}}</td>
                        <td style="width: 30%">{{$group->name}}</td>
                        <td style="width: 50%">{{$group->desc}}</td>
                        <td style="text-align: center; width: 7%"><a href="{{ route('administrator.groups.show', ['id'=>$group->id]) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                        <td style="text-align: center; width: 7%"><a href="{{ route('administrator.groups.delete', ['id'=>$group->id]) }}"><span class="glyphicon glyphicon-remove"></span></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>