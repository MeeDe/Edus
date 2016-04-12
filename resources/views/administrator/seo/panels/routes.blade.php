<table class="table table-striped" id="routes_table">
    <thead>
        <th style="width: 5%">{{ trans('dictionary.checkbox') }}</th>
        <th style="width: 25%; text-align: left;">{{ trans('dictionary.name') }}</th>
        <th style="width: 50%; text-align: left;">Description</th>
        <th style="width: 15%; text-align: left;">Keywords</th>
        <th style="width: 5%; text-align: left;">Details</th>
    </thead>
    <tbody>
        @foreach($routes as $k=>$route)
            <tr>
                <td style="text-align: center; width: 5%"><input type="checkbox" name="route[{{ $k }}]" value="{{ $route->getName() }}"></td>
                <td style="width: 25%">{{ $route->getName() }}</td>
                <td style="width: 50%">{{ \App\Models\MetaRoutes::where('route_name', $route->getName())->where('tag_name', 'description')->first()['tag_value'] }}</td>
                <td style="width: 15%">
                    <?php $m = \App\Models\MetaRoutes::where('route_name', $route->getName())->where('tag_name', 'keywords')->first(); ?>
                    @if(substr_count($m['tag_value'], ',') == 0)
                        @if($m['tag_value']=="")
                            0
                        @else
                            1
                        @endif
                    @else
                        {{ substr_count($m['tag_value'], ',')+1  }}
                    @endif
                </td>
                <td style="width: 5%"></td>
            </tr>
        @endforeach
    </tbody>
</table>