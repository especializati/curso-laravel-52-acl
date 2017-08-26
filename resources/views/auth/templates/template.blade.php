<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{{$titulo or 'Auth Curso ACL'}}</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!--Fonts-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!--CSS-->
        <link rel="stylesheet" href="{{url("assets/painel/css/acl-painel.css")}}">

        <!--Favicon-->
        <link rel="icon" type="image/png" href="{{url("assets/painel/imgs/favicon-acl.png")}}">
    </head>
    <body>
        <div class="login">
            <div class="login-header">
                <img src="{{url("assets/painel/imgs/acl-branca.png")}}" alt="acl" class="logo-login">
            </div>

            @yield('content-form')

        </div>
    </body>
</html>