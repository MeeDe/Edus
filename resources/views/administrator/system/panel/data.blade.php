<div class="panel panel-default">
    <div class="panel-heading">{{ trans('text.administrator.system.panel.data.header') }}</div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="">
            {!! csrf_field() !!}
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="glyphicon glyphicon-export"></i>{{ trans('text.administrator.system.panel.data.export.csv') }}
                    </button>
                </div>
            </div>
        </form>
        <form class="form-horizontal" role="form" method="POST" action="">
            {!! csrf_field() !!}
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="glyphicon glyphicon-export"></i>{{ trans('text.administrator.system.panel.data.export.pdf') }}
                    </button>
                </div>
            </div>
        </form>
        <form class="form-horizontal" role="form" method="POST" action="">
            {!! csrf_field() !!}
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="glyphicon glyphicon-export"></i>{{ trans('text.administrator.system.panel.data.export.xml') }}
                    </button>
                </div>
            </div>
        </form>
        <form class="form-horizontal" role="form" method="POST" action="">
            {!! csrf_field() !!}
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="glyphicon glyphicon-export"></i>{{ trans('text.administrator.system.panel.data.export.sql') }}
                    </button>
                </div>
            </div>
        </form>
        <form class="form-horizontal" role="form" method="POST" action="">
            {!! csrf_field() !!}
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="glyphicon glyphicon-export"></i>{{ trans('text.administrator.system.panel.data.export.json') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>