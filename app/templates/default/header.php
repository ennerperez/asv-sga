<?php
    
    use Helpers\Assets;
    use Helpers\Url;
    use Helpers\Hooks;
    use Helpers\Session;

    //initialise hooks
    $hooks = Hooks::get();

    if(Session::get('loggin') == false) { 
        if ( $_SERVER['QUERY_STRING'] != '') {Url::redirect('');}
     }   
     else{
         if (Session::get('userdata')->confidencial == 1 && (int)Session::get('userdata')->dni < 0 &&
             $_SERVER['QUERY_STRING'] != 'admin/registro'){
            Url::redirect('admin/registro');
         }
     }
         
?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
    <head>

        <!-- Site meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $hooks->run('meta'); ?>
        
		<meta name="description" content="<?php echo SITETITLE; ?>" />
        <title><?php echo $data['title'].' - '.SITETITLE; ?></title>

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
        <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>-->
        <link href='http://fonts.googleapis.com/css?family=Ubuntu|Open+Sans' rel='stylesheet' type='text/css'>
        <style>
            *{
                font-family: 'Ubuntu', 'Open Sans', sans-serif;
            }
        </style>
        <?php
            
            switch (ENVIRONMENT) {
                case 'development':
                    Assets::css(array(
                        '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css',
                        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.css',
                        '//maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.css',
                        '//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css',
                        '//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker.css',
                        Url::templatePath() . 'css/scouts.css',
                        Url::templatePath() . 'css/style.css',
                        Url::templatePath() . 'css/style.paper.css'
                    ));
                    break;
                default:
                    Assets::css(array(
                        //'//fonts.googleapis.com/css?family=Open+Sans',
                        '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
                        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
                        '//maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css',
                        '//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css',
                        '//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker.min.css',
                        Url::templatePath() . 'css/scouts.css',
                        Url::templatePath() . 'css/style.css',
                        Url::templatePath() . 'css/style.paper.css'
                    ));
					break;
            }
                        
            $hooks->run('css');
        ?>

		<!-- JS -->
		<?php
            switch (ENVIRONMENT) {
                case 'development':

                    switch (APPSTATE) {
                        case 'offline':
                            Assets::js(array(
                                Url::templatePath() . 'js/jquery.js',
                                Url::templatePath() . 'js/moment.js',
                                Url::templatePath() . 'js/jquery.dataTables.js',
                                Url::templatePath() . 'js/bootstrap.js',
                                Url::templatePath() . 'js/dataTables.bootstrap.js',
                                //Url::templatePath() . 'js/bootstrap-datepicker.js',
						        //'//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/locales/bootstrap-datepicker.'.LANGUAGE_CODE.'.min.js',
                                Url::templatePath() . 'js/bootlint.js',
                                Url::templatePath() . 'js/scripts.js'
                            ));
                            break;
                        default:
                            Assets::js(array(
                                '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.js',
                                '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.js',
                                '//cdn.datatables.net/1.10.7/js/jquery.dataTables.js',
                                '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.js',
                                '//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js',
                                //'//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.js',
						        //'//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/locales/bootstrap-datepicker.'.LANGUAGE_CODE.'.min.js',
                                '//maxcdn.bootstrapcdn.com/bootlint/0.12.0/bootlint.js',
                                Url::templatePath() . 'js/scripts.js'
                            ));
                            break;
                    }                    
                    break;
                default:
                     Assets::js(array(
                        '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js',
                        '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js',
                        '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js',
                        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js',
                        '//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js',
                        //'//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js',
						//'//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/locales/bootstrap-datepicker.'.LANGUAGE_CODE.'.min.js',
                        Url::templatePath() . 'js/scripts.js'
                    ));
                    break;
            }
    			
			$hooks->run('js');
		?>

    </head>
    <body class="scouts">
        
        <?php $hooks->run('afterBody'); ?>
