<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Poo PHP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background: -webkit-gradient(linear, left top, left bottom, from(silver), to(#383d41));
                background: -moz-linear-gradient(top, #1d2124, white);
                filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#1d2124', EndColorStr='white');
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 900;
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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

                <div class="top-right links">

                        <!-- COLOCAR ALGUMA COISA NO CABEÇALHO -->

                </div>


            <div class="content">
                <div class="title m-b-md">
                    BEM-VINDO(A)
                </div>

                <div class="links">
                    <a href='clientes'>Listar clientes </a>
                </div>
            </div>
        </div>
    </body>
</html>
