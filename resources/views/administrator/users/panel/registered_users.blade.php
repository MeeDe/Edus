<div class="panel panel-default">
    <div class="panel-heading">{{ trans('text.administrator.users.panel.registered_users.header') }}</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-7">{{ trans('dictionary.registered_users') }}</div>
            <div class="col-md-5">{{ $registered_users }}</div>
        </div>
        <div class="row">
            <div class="col-md-7">{{ trans('dictionary.inactive_users') }}</div>
            <div class="col-md-5">{{ $inactive_amount }}</div>
        </div>
        <div class="row">
            <BR>
            <div class="col-md-7">{{ trans('dictionary.users_in_groups') }}</div>
        </div>
        @foreach($users_data as $data)
            <div class="row">
                <div class="col-md-7">{{ key($data) }}</div>
                <div class="col-md-5">{{ $data[key($data)]  }}</div>
            </div>
        @endforeach
    </div>
</div>