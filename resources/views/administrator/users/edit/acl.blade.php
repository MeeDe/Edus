<div class="panel panel-default">
    <div class="panel-heading">{{  trans('text.administrator.users.panel.inactive_users.header') }}</div>
    <div class="panel-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Rola</th>
                    <th>Uprawnienie</th>
                    <th style="text-align: center">Dostęp</th>
                </tr>
            </thead>
            <tbody>
            <?php $p_key = 0; ?>
            @foreach($roles as $k=>$role)
                @foreach($role->privileges()->get() as $p=>$privilege)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>{{ $privilege->route }}</td>
                        <td style="text-align: center"><input type="checkbox" name="privilege[{{ $p_key++ }}]" @if($privilege->operations=='Y') checked @endif></td>
                    </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
</div>