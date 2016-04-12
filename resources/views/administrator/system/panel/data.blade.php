<div class="panel panel-default">
    <div class="panel-heading">{{ trans('text.administrator.system.panel.data.header') }}</div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="">
            {!! csrf_field() !!}
            <div class="form-group{{ $errors->has('table') ? ' has-error' : '' }}">
                <div class="col-md-6">
                    <label for="tabs">{{ trans('dictionary.table') }}:</label>
                    <select class="form-control" name="table" id="tabs">
                        @foreach($tables as $k=>$table)
                            <option name="table[{{ $k }}]" value="{{ $table->table_name }}">{{ $table->table_name }}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('offline'))
                        <span class="help-block">
                            <strong>{{ $errors->first('offline') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('text.administrator.system.panel.data.export.header') }}</div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="glyphicon glyphicon-export"></i>{{ trans('text.administrator.system.panel.data.export.csv') }}
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="glyphicon glyphicon-export"></i>{{ trans('text.administrator.system.panel.data.export.pdf') }}
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="glyphicon glyphicon-export"></i>{{ trans('text.administrator.system.panel.data.export.xml') }}
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="glyphicon glyphicon-export"></i>{{ trans('text.administrator.system.panel.data.export.sql') }}
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="glyphicon glyphicon-export"></i>{{ trans('text.administrator.system.panel.data.export.json') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>