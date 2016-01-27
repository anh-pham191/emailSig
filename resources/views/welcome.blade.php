<html>
<head>
    <title>Laravel</title>

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
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
            font-size: 96px;
            margin-bottom: 40px;
        }

        .quote {
            font-size: 24px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Laravel 5</div>
        <div class="quote">{{ Inspiring::quote() }}</div>
    </div>

    <div id="location">

        <p>{!! $location['ip'] !!}</p>

        <p>{!! $location['isoCode'] !!}</p>

        <p>{!! $location['country'] !!}</p>

        <p>{!! $location['city'] !!}</p>

        <p>{!! $location['postal_code'] !!}</p>

        <p>{!! $location['lat'] !!}</p>

        <p>{!! $location['lon'] !!}</p>

        <p>{!! $location['timezone'] !!}</p>

        <p>{!! $location['continent'] !!}</p>


    </div>

</div>
</body>
</html>
