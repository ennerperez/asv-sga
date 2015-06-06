<?php

use Helpers\Assets;
use Helpers\Url;
use Helpers\Hooks;

//initialise hooks
$hooks = Hooks::get();
?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
	<?php
	//hook for plugging in meta tags
	$hooks->run('meta');
	?>
	<title><?php echo $data['title'].' - '.SITETITLE; //SITETITLE defined in app/Core/Config.php ?></title>
	
	<!-- Favicon -->
	<!-- For IE 9 and below. ICO should be 32x32 pixels in size -->
	<!--[if IE]><link rel="shortcut icon" href="favicon.ico"><![endif]-->

	<!-- Touch Icons - iOS and Android 2.1+ 180x180 pixels in size. --> 
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">

	<!-- Firefox, Chrome, Safari, IE 11+ and Opera. 196x196 pixels in size. -->
	<link rel="icon" href="favicon.png">

	<!-- CSS -->
	<?php
	Assets::css(array(
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
		'//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
		Url::templatePath() . 'css/style.css',
	));
	
	//hook for plugging in css
	$hooks->run('css');
	?>

</head>
<body>
	
	<!-- Feedback area -->
    <div class="feedback">
		<a href="http://www.scoutsvenezuela.org.ve/soporte/?v=submit_ticket" target="_blank" class="btn btn-primary btn-lg"><i class="fa fa-bug"></i></a>
	</div>
	
<?php
//hook for running code after body tag
$hooks->run('afterBody');
?>

<div class="container-fluid cd-containe">
