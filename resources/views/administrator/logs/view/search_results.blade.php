<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>{{ trans('dictionary.number') }}</th>
        <th>Kto</th>
        <th>Tabela</th>
        <th>{{ trans('dictionary.operations') }}</th>
        <th>Data</th>
        <th>Szczegóły</th>
    </tr>
    </thead>
    <tbody>
        @foreach(Session::get('sbu', []) as $k => $log)
            <tr>
                <td class="text-center">{{ ++$k }}</td>
                <td>{{ $log->account->email }}</td>
                <td>{{ trans('logs.model.'.$log->owner_type) }}</td>
                <td>{{ trans('logs.operation.'.$log->type) }}</td>
                <td>{{ $log->created_at }}</td>
                <td class="text-center"><a data-toggle="modal" data-target="#logsModal" name="logDetails" data-index="{{ $k }}" class="btn btn-info" role="button"><span class="glyphicon glyphicon-search"></span></a></td>
            </tr>
        @endforeach
    </tbody>
</table>