<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body style="margin: 0">
        <div style="width: 100%; height:3cm; background-color:gray; display:flex;  align-content: center; align-items: center; justify-content: center;flex-direction: column;">
            <span>Скажем: это условный сайт с рассписаниями</span>
            <div>
            </div>
         </div>
        @include('includes.destination' )
        @include('includes.graycube')
        @yield('contains')
    </body>
</html>