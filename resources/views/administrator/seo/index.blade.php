@extends('layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="/js/DataTables/datatables.css"/>
@stop
@section('content')
    @include('layouts.administrator.submenu')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('dictionary.seo') }}</div>
                <div class="panel-body">
                    <form action="{{ route('administrator.seo.store') }}" class="form-horizontal">
                        <div class="panel panel-default">
                            <div class="panel-heading">Routes to apply</div>
                            <div class="panel-body">
                                @include('administrator.seo.panels.routes', ['routes' => $routes])
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Basic</div>
                            <div class="panel-body">
                                @include('administrator.seo.panels.metatags.description')
                                @include('administrator.seo.panels.metatags.keywords')
                                @include('administrator.seo.panels.metatags.language')
                                @include('administrator.seo.panels.metatags.generator')
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Contact</div>
                            <div class="panel-body">
                                @include('administrator.seo.panels.metatags.author')
                                @include('administrator.seo.panels.metatags.contact')
                                @include('administrator.seo.panels.metatags.copyright')
                            </div>
                        </div>
                        <!--
                        <div class="panel panel-default">
                            <div class="panel-heading">Other settings</div>
                            <div class="panel-body">
                                @include('administrator.seo.panels.metatags.abstract')
                                @include('administrator.seo.panels.metatags.distribution')
                                @include('administrator.seo.panels.metatags.news_keywords')
                                @include('administrator.seo.panels.metatags.no-email-collection')
                            </div>
                        </div>
                        -->
                        <div class="panel panel-default">
                            <div class="panel-heading">DMOZ ODP</div>
                            <div class="panel-body">
                                @include('administrator.seo.panels.dmoz')
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn glyphicon glyphicon-forward"></i>{{ trans('dictionary.save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jquery')
    <script type="text/javascript" src="/js/DataTables/datatables.js"></script>
    <script>
        $('#routes_table').DataTable({
            "aaSorting": [],
            "columnDefs": [
                { "orderable": false, "targets": [0, 2, 4] }
            ]
        });
    </script>
@stop