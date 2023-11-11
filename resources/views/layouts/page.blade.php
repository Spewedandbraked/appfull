<html>
    <head>
        <title>App Name - @yield('sh')</title>
    </head>
    <body style="margin: 0">
        @yield('header')
        @include('bricks.destination' )
        @include('bricks.graycube')
        <div style="display: flex;   justify-content: space-evenly;
        align-content: center;
        align-items: center;width: 45%;
  margin: 0 auto;
  min-width: 210px; flex-wrap: wrap;">
            @include('bricks.buttonnav', ['name' => 'Редактировать группы'])
            @include('bricks.buttonnav', ['name' => 'Добавить студентов'])
            @include('bricks.buttonnav', ['name' => 'Редактировать рассписание'])
            @include('bricks.buttonnav', ['name' => 'Смотреть рассписание'])
        </div>
    </body>
</html>