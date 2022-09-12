<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ config('view.rackspace_default_images') }}/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ config('view.rackspace_default_images') }}/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ config('view.rackspace_default_images') }}/favicon-16x16.png">

        <title>Lottery™ - @yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .code {
                border-right: 2px solid;
                font-size: 26px;
                padding: 0 15px 0 15px;
                text-align: center;
            }

            .message {
                font-size: 18px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
{{--            <div class="code">--}}
{{--                @yield('code')--}}
{{--            </div>--}}

{{--            <div class="message" style="padding: 10px;">--}}
{{--                @yield('message')--}}
{{--            </div>--}}

            <div class="message" style="padding: 10px;">
                <h1>Sorry, something went wrong.</h1>
                <p>We're working on it and we'll get it fixed as soon as we can.</p>
                <p><a href="{{ url()->previous() }}">Go Back</a></p>
            </div>
        </div>
    </body>
</html>
