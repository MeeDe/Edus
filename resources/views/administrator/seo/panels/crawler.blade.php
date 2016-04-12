<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>{{ trans('dictionary.number') }}</th>
        <th>{{ trans('dictionary.route') }}</th>
        <th>title</th>
        <th>keywords</th>
        <th>description</th>
        <th>robots</th>             <!-- reply-to -->
        <th>revisit-after</th>
        <th>abstract</th>
        <th>author</th>
        <th>contact</th>
        <th>copyright</th>
        <th>distribution</th>
        <th>expires</th>
        <th>generator</th>
        <th>formatter</th>
        <th>googlebot</th>
        <th>language</th>
        <th>news_keywords</th>
        <th>no-email-collection</th>
        <th>rating</th>
        <th>reply-to</th>
        <th>web_author</th>
        <th>Cache-control</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($role->privileges()->get() as $_key => $privilege)
        <tr>
            <td style="text-align: center">{{ ++$_key }}</td>
            <td>{{ $role->name }}</td>
            <td>{{ $role->descr }}</td>
            <td>{{ $privilege->route }}</td>
            <td>{{ $privilege->operations }}</td>
        </tr>
    @endforeach
    </tbody>
</table>