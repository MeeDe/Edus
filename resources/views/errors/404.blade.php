<!DOCTYPE html>
<html>
<head>
    <title>404</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <meta http-equiv="refresh" content="3;url={{ url('/') }}">
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: black;
            display: table;
            font-weight: 100;
            font-style: oblique;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 72px;
            margin-bottom: 40px;
        }
    </style>
</head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">{{ trans('dictionary.404') }}</div>
            </div>
        </div>
    </body>
</html>
