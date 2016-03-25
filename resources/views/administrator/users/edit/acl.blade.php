<div class="panel panel-default">
    <div class="panel-heading">{{  trans('text.administrator.users.panel.inactive_users.header') }}</div>
    <div class="panel-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Uprawnienie</th>
                    <th style="text-align: center">Dostęp</th>
                </tr>
            </thead>
            <tbody>
            <?php $p_key = 0; ?>
                @foreach($privileges as $k=>$privilege)
                    <tr>
                        <td>{{ $privilege['route'] }}</td>
                        <td style="text-align: center">
                            <input type="checkbox" name="privilege[{{ $p_key++ }}]" value="{{ $privilege['route'] }}" @if($privilege['privilege']=='Y') checked @endif>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>