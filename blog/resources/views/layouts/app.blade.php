<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <style>
            body{
                margin: 0px;
                padding: 20px;
            }
            tr{
                list-style: none;
                margin: 0px;
                padding: 0px;
            }
            tr td{
                padding: 10px;
                border: solid #ffcccc;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
