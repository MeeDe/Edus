<div class="panel panel-default">
    <div class="panel-heading">{{ trans('dictionary.users') }}</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-7">{{ trans('dictionary.registered_users') }}</div>
            <div class="col-md-5">{{ array_sum($user_amount)}}</div>
        </div>
        @foreach($user_amount as $name => $amount)
            <div class="row">
                <div class="col-md-7">{{ $name . ':' }}</div>
                <div class="col-md-5">{{ $amount }}</div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-md-7">{{ trans('dictionary.inactive_users') }}</div>
            <div class="col-md-5">{{ $inactive_amount }}</div>
        </div>
    </div>
</div>