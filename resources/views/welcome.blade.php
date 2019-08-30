<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>first-rave: Payments Demo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            margin-top: 5%;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            width: 60%;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .examples ul {
            list-style: none;
            text-align: left;
        }

        .examples li {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 1em 0.5em;
            font-size: 1.1em;
        }

        .examples li a {
            text-decoration: none;
            font-size: 1.4em;
            color: #2d2d2d;
            font-weight: bolder;
        }

        .examples li a:hover {
            text-decoration: underline;
        }

        .examples li:hover {
            box-shadow: 1px 2px #ccc;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                first-rave
            </div>

            <div class="description">
                <p>
                    This demo features sample implementations following different approaches and is open to contributions as well.</p>
                <p>
                    Send in a PR if you have any additions, updates or fixes.
                </p>
            </div>

            <div class="examples">
                <ul>
                    <li>
                        <a href="/inline-integration" class="example-title">Inline integration</a>
                        <p class="example-description">This one integrates on one line my brother</p>
                    </li>
                </ul>
            </div>
            <footer>
                <p>♠</p>
            </footer>
        </div>
    </div>
</body>

</html>