<!DOCTYPE html>
<html ng-app>
    <head>
        <title>Laravel + Angular JS</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
        <script type="text/javascript" src="app/app.js"></script>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
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
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5 + AngularJS</div>
            </div>
            <div>
              <label>Name:</label>
              <input type="text" ng-model="yourName" placeholder="Enter a name here">
              <hr>
              <h1>Hello {{yourName}}!</h1>
            </div>
        </div>
    </body>
</html>
