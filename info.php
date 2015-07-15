<?php
    
    //phpinfo();
    
?>


<html>
    <head>

        <!-- Site meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content=" Sistema de Gestión Administrativa">
        <title>Bienvenida -  Sistema de Gestión Administrativa</title>

        <!-- Favicon -->
        <!-- For IE 9 and below. ICO should be 32x32 pixels in size -->
        <!--[if IE]><link rel="shortcut icon" href="favicon.ico"><![endif]-->
        <!-- Touch Icons - iOS and Android 2.1+ 180x180 pixels in size. -->
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
        <!-- Firefox, Chrome, Safari, IE 11+ and Opera. 196x196 pixels in size. -->
        <link rel="icon" href="favicon.png">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                    <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                    <![endif]-->
        <!-- CSS -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
        <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker.css" rel="stylesheet" type="text/css">
        <link href="http://localhost/app/Templates/default/css/scouts.css" rel="stylesheet" type="text/css">
        <link href="http://localhost/app/Templates/default/css/style.css" rel="stylesheet" type="text/css">
        <link href="http://localhost/app/Templates/default/css/style.paper.css" rel="stylesheet" type="text/css">

        <!-- JS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.js" type="text/javascript"></script>
        <style type="text/css"></style>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.js" type="text/javascript"></script>
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js" type="text/javascript"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.js" type="text/javascript"></script>
        <script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootlint/0.12.0/bootlint.js" type="text/javascript"></script>
        <script src="http://localhost/app/Templates/default/js/scripts.js" type="text/javascript"></script>



    </head>
    <body>

        <select id="selectpicker-Region" name="region" class="selectpicker form-control">
        </select>

        <div id="dump"></div>

        <script>

            $.getJSON("get/regiones").done(function (data) {
                var items = [];
                $.each(data, function (key, val) {
                    $("<option>").attr("value", val.id).text(val.nombre).appendTo("#selectpicker-Region");
                });
            });

        </script>

    </body>
</html>